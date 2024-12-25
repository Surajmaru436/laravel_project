<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable=["name","description"];
    public function product(){
        return $this->hasMany(Product::class);  // 1 category has many products. 1:n relationship. 1 category -> many products. 1 product belongs to 1 category. 1:n relationship.
    } 
}
