<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\TaxRate;
use App\Models\Currency;
use App\Models\category;
use App\Models\subcategory;
use App\Models\productSize;
use App\Models\discount;
use App\Models\status;
use App\Models\ProductGroup;
use App\Models\productDetail;
use App\Models\productImage;
use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $route_active = 'product';
        $user = Auth::user();
        $products = Product::orderby('id', 'desc')->get();
        //dd($products);
     
        $product_ids = response()->json($products->modelKeys());
        $base_currency = Currency::where(['is_base_currency' => 'yes'])->first();

        
        $categories = category::get();
        $subcategories = subcategory::get();
        $sizes = productSize::get();
        $statuses = status::get();
        $discounts = discount::get();
        $users = User::get();
        $taxrates = TaxRate::get();
      
        



        return view('crm.product.index', compact(['route_active', 'taxrates','products', 'statuses','categories', 'subcategories','discounts','sizes','users','base_currency', 'product_ids']));
    }

    /**
     *  GET - /product/import
     *  
     *  @return blade file
     */
    public function import()
    {
        $route_active = 'product';
        return view('crm.product.products_import', compact(['route_active']));
    }

    /**
     *  POST - /product/import
     *  
     *  @param - product fields
     *  
     *  @return - bulk import products
     */
    public function importStore(Request $request)
    {
        $file = $request->file('file')->store('import');
        $import = new ProductsImport;
        $import->import($file);
        if (count($import->errors()) == 0) {
            $notification = array(
                'message' => $import->getRowCount() . ' ' . __('products imported successfully!'),
                'alert-type' => 'success'
            );
            return back()->with($notification);
        } else {
            return back()->withErrors($import->errors());
        }
    }

    public function create()
    {
        $route_active = 'productCreate';
        $productGroups = category::get();
        $categories = category::get();
        $subcategories = subcategory::get();
        $sizes = productSize::get();
        $statuses = status::get();
        $discounts = discount::get();
        $users = User::get();
        $taxrates = TaxRate::get();
        $base_currency = Currency::where(['is_base_currency' => 'yes'])->first();
        
        return view('crm.product.create', compact(['route_active', 'productGroups', 'base_currency', 'taxrates', 'categories', 'subcategories', 'users', 'statuses', 'sizes', 'discounts']));
    }

    public function store(Request $request)
    {




        $validator = $request->validate([
            'name' => 'required'
        ]);
        if ($validator) {
            $user = Auth::user();
            /**
             *             Product::create([
                'name'=>$request->name,
                'product_group_id'=>$request->group_id,
                'sku'=>$request->sku,
                'price'=>$request->price,
                'discount'=>$request->discount,
                'units'=>$request->units,
                'tax_type_1'=>$request->tax_type_1,
                'tax_type_2'=>$request->tax_type_2,
                'tax_type_3'=>$request->tax_type_3,
                'short_description'=>$request->short_description,
                'long_description'=>$request->long_description,
                'created_by_id'=>$user->id
            ]);

             */


            $product = Product::create([
                'name' => $request->name,
                'product_owner' => $request->product_owner,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'tax_type_1' => $request->tax_type_1,
                'long_description' => $request->long_description,
                'created_by_id' => $user->id
            ]);


            $product_detail = productDetail::create([
                'product_id' => $product->id,
                'discount_id' => $request->discount_id,
                'size_id' => $request->size_id,
                'status_id' => $request->status_id,
                'purchased_price' => $request->purchased_price,
                'suggested_price' => $request->suggested_price,
                'selling_price' => $request->selling_price,
                'stock' => $request->stock,
                'available' => $request->available
            ]);




            if ($request->hasFile('image')) {
                foreach ($request->image as $file) {
                
                    $image_name = $request->name . '.' . time() . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('images/products', $image_name, 'public');



                    $defaultImage = productImage::where('default', 1)->where('product_detail_id', $product_detail->id)->count();


                    
                    if ($defaultImage > 0) {

                        $image = productImage::create([
                            'product_detail_id' => $product_detail->id,
                            'image' => $image_name,
                        ]);
                    } else {

                        $image = productImage::create([
                            'product_detail_id' => $product_detail->id,
                            'image' => $image_name,
                            'default' => 1
                        ]);
                    }
                }
            }





            $notification = array(
                'message' => __('Product added successfully!'),
                'alert-type' => 'success'
            );
            return redirect()->route('product.edit', $product->id)->with($notification);


        } else {
            return back()->with($validator)->withInput();
        }
    }

    public function edit(Product $product)
    {


        $route_active = 'productCreate';
        $productGroups = category::get();
        $taxrates = TaxRate::get();
        $base_currency = Currency::where(['is_base_currency' => 'yes'])->first();


        $categories = category::get();
        $subcategories = subcategory::get();
        $sizes = productSize::get();
        $statuses = status::get();
        $discounts = discount::get();
        $users = User::get();

    
        return view('crm.product.edit', compact(['route_active','categories','sizes','statuses','discounts','users','subcategories', 'productGroups', 'base_currency', 'taxrates', 'product']));
    }

    public function update(Request $request, Product $product)
    {
        $validator = $request->validate([
            'name' => 'required'
        ]);
        if ($validator) {
            $product->name = $request->name;
            $product->product_owner = $request->product_owner;
            $product->category_id = $request->category_id;
            $product->subcategory_id = $request->subcategory_id;
            $product->tax_type_1 = $request->tax_type_1;
            $product->long_description = $request->long_description;
            $product->save();
            $notification = array(
                'message' => __('Product updated successfully!'),
                'alert-type' => 'success'
            );

     
            return back()->with($notification);
        } else {
            return back()->with($validator)->withInput();
        }
    }

    public function getProduct(Request $request){

        $products = Product::orderby('id','desc')->with('product_details','category','subcategory','product_details.images')->get();

        

        return response()->json([
            'products'=>$products,
        ]);
    }


    
    public function destroy(Product $product)
    {
        if ($product->delete()) {
            $notification = array(
                'message' => __('Product deleted successfully!'),
                'alert-type' => 'success'
            );
            return back()->with($notification);
        } else {
            $notification = array(
                'message' => __('Please try again!'),
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }
}
