<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategories';
    protected $guarded = [];


    public function category(){

        return $this->belongsTo(Category::class , 'category_id');
    
    }

    public function subcategories(){

        return $this->hasMany(Product::class,'id');

  }
}
