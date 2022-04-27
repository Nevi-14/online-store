<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productSize extends Model
{
    use HasFactory;
    protected $table = 'product_sizes';
    protected $guarded = [];


    public function product_detail(){

        return $this->hasMany(productDetail::class, 'id');
  
  }


}
