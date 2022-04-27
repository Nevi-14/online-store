<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    public function owner(){

        return $this->belongsTo(User::class,'product_owner');
    
    }
    public function category(){

        return $this->belongsTo(Category::class , 'category_id');
    

    }
    
    
    
      public function subcategory(){
    
        return $this->belongsTo(subcategory::class,'subcategory_id');
    
    }

    public function product_details(){

        return $this->hasMany(productDetail::class,'product_id');

  }



    public function productgroup(){
        return $this->belongsTo('App\Models\ProductGroup', 'product_group_id');
    }
}
