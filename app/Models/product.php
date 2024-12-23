<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable = ['name', 'price', 'image', 'category_id'];
    function category(){
        return $this->belongsTo(category::class);
    }
}
