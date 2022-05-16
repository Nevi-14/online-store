<?php

namespace App\Http\Controllers;

use App\Models\subcategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function index()
    {
        $route_active = 'subcategory';
        $subcategory = subcategory::get();
        //dd($subcategory);
        $pg_ids = response()->json($subcategory->modelKeys());
        return view('crm.subcategories.index', compact(['route_active','subcategory','pg_ids']));    
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'=>'required | unique:subcategories'
        ]);
        if($validator){
            subcategory::create([
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
            'name'=>'required | unique:subcategories,name,'.$subcategory->id
        ]);
       
        if($validator){
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
