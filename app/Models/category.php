<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $guarded =[];
    protected $table ='categories';

    public function category(){

        return $this->hasMany(Product::class, 'id');
  
  }
  
      public function subCategory(){
  
            return $this->hasMany(SubCategories::class,'id');
  
      }

}
