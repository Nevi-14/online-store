<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productDetail extends Model
{
    use HasFactory;

    protected $table = 'product_details';
    protected $guarded = [];

    public function product(){

        return $this->belongsTo(Product::class , 'id');
    
    }
    
    public function product_size(){

        return $this->belongsTo(productSize::class , 'size_id');
    
    }

    public function discount(){
    
        return $this->belongsTo(discount::class,'discount_id');
    
    }

    
    public function images(){
    
        return $this->hasMany(productImage::class,'product_detail_id');
    
    }




}
