<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\productImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function show(productImage $productImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function edit(productImage $productImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productImage $productImage)
    {
        $request->validate([
            'default'=>'required'
            ]);
            $old = ProductImage::where('default', 1 )->where('product_id',$productImage->product_id)->update(['default' => 0]);
     
        $updates =   $productImage->update([
            'default' => 1

            ]);

     

            $notification = array(
                'message' => 'La imagen se actualizo con exito.',
                'alert-type' => 'success'
            );
            return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(productImage $productImage)
    {
           
        $new = ProductImage::where('default', 0 )->where('product_detail_id',$productImage->product_id)->get();
    
        if(count($new)>0){
            ProductImage::where('default', 0 )->where('product_detail_id',$productImage->product_id)->first()->update(['default' => 1]);
        }
        $productImage->delete();
        $item =    Storage::delete('public/images/products/'.$productImage->image);
        $notification = array(
            'message' => 'La imagen se borro con exito.',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }



    public function showImage(Request $request)
    {
        if (Storage::disk('public')->exists("images/products/$request->file")) {
            $path = Storage::disk('public')->path("images/products/$request->file");
            $content = file_get_contents($path);
            return response($content)->withHeaders(
                [
                    'Content-Type' => mime_content_type($path)
                ]
            );
        }
        return "no file";
    }
}
