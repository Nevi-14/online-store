<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyTimeline extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function timeline(){
        return $this->belongsTo('App\Models\PropertyDetail', 'id');
        
      }
}
