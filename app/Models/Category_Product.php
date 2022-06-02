<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Category_Product extends Pivot
{
    use HasFactory;

    protected $fillable = ['category_id', 'product_id'];

    
}