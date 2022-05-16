<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $route_active = 'category';
        $categories = category::get();
        $pg_ids = response()->json($categories->modelKeys());
        return view('crm.categories.index', compact(['route_active','categories','pg_ids']));    
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'=>'required | unique:categories'
        ]);
        if($validator){
            category::create([
                'name'=>$request->name,
            ]);
            $notification = array(
                'message' => 'Product category added successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            return back()->with($validator)->withInput();
        }
    }

    public function update(Request $request, category $category)
    {
        $validator = $request->validate([
            'name'=>'required | unique:categories,name,'.$category->id
        ]);
       
        if($validator){
            $category->name = $request->name;
            $category->save();

            $notification = array(
                'message' => 'Product category updated successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }else{
            return back()->with($validator)->withInput();
        }
    }

    public function destroy(category $category)
    {
        if($category->delete()){
            $notification = array(
                'message' => 'Product category deleted successfully!',
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
