<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_id',
        'product_name',
        'description',
        'product_img',

    ];
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category','category_by_products')->withTimestamps();
    }

}
