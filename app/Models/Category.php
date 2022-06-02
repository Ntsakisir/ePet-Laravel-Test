<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Support\Arr;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'meta_title','meta_description','meta_keywords'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected $casts= [
        'meta_keywords' => 'array'
    ];
    
}
