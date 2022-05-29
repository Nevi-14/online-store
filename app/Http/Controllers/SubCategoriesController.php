<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function index()
    {
        $categories = category::get();
        $route_active = 'subcategory';
        $subcategory = subcategory::get();
        //dd($subcategory);
        $pg_ids = response()->json($subcategory->modelKeys());
        return view('crm.subcategories.index', compact(['route_active','subcategory','pg_ids','categories']));    
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'category_id'=>'required',
            'name'=>'required | unique:subcategories'
        ]);
        if($validator){
            subcategory::create([
               'category_id'=> $request->category_id,
                'name'=>$request->name,
            ]);
            $notification = array(
                'message' => 'Product subcategory added successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            return back()->with($validator)->withInput();
        }
    }

    public function update(Request $request, subcategory $subcategory)
    {
        $validator = $request->validate([
            'category_id'=>'required',
            'name'=>'required | unique:subcategories,name,'.$subcategory->id
        ]);
       
        if($validator){
            $subcategory->category_id = $request->category_id;
            $subcategory->name = $request->name;
            $subcategory->save();

            $notification = array(
                'message' => 'Product subcategory updated successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            return back()->with($validator)->withInput();
        }
    }

    public function destroy(subcategory $subcategory)
    {
        if($subcategory->delete()){
            $notification = array(
                'message' => 'Product subcategory deleted successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Please refresh the page and try again!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }
}
