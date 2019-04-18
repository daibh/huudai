<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'detail', 'image', 'vendor_id', 'category_id', 'unit_price', 'sale_price', 'status', 'logo',
    ];
}
