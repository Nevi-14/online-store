<?php

namespace App\Http\Controllers;

use App\Models\productDetail;
use App\Models\productImage;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
       
        $request->validate([
            'product_id' => 'required',
            'discount_id' => 'required',
            'size_id' => 'required',
            'status_id' => 'required',
            'purchased_price' => 'required',
            'suggested_price' => 'required',
            'selling_price' => 'required',
            'stock' => 'required',
            'available' => 'required',
            'change_size'=>''
        ]);
        $duplicate = productDetail::where('product_id',$request->product_id)->where('size_id',$request->size_id)->get();

 if(count($duplicate) > 0){

    $notification = array(
        'message' => __('Size already exists'),
        'alert-type' => 'error'
    );
    return back()->with($notification);


 }else{


    $product_detail = productDetail::create([
        'product_id' => $request->product_id,
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
            $path = $file->storeAs('images/products', $image_name);



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
    return back()->with($notification);
 }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function show(productDetail $productDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(productDetail $productDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productDetail $productDetail)
    {
        $request->validate([
            'product_id' => 'required',
            'discount_id' => '',
            'size_id' => '',
            'status_id' => '',
            'purchased_price' => '',
            'suggested_price' => '',
            'selling_price' => '',
            'stock' => '',
            'available' => '',
            'change_size'=>''
    ]);
   
        



if($request->change_size){
$duplicate = productDetail::where('product_id',$productDetail->product_id)->where('size_id',$request->size_id)->get();
//dd($duplicate);
if( count($duplicate) > 0){
    $notification = array(
        'message' => __('Size already exists'),
        'alert-type' => 'error'
    );
    return back()->with($notification);
}else{

    $productDetail->update([
        'size_id' => $request->size_id
    ]);
         }

         


}

$productDetail->update([
    'product_id' => $request->product_id,
    'discount_id' => $request->discount_id,
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



        $defaultImage = productImage::where('default', 1)->where('product_detail_id',  $productDetail->id)->count();

        if ($defaultImage > 0) {

            $image = productImage::create([
                'product_detail_id' =>  $productDetail->id,
                'image' => $image_name,
            ]);
        } else {

            $image = productImage::create([
                'product_detail_id' =>  $productDetail->id,
                'image' => $image_name,
                'default' => 1
            ]);
        }
    }
}





$notification = array(
    'message' => __('Product updates successfully!'),
    'alert-type' => 'success'
);
return back()->with($notification);



      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(productDetail $productDetail)
    {
        if ($productDetail->delete()) {

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
