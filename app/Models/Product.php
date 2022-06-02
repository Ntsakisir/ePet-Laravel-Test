<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Category;
use App\Models\ProductVariant;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
    
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
    

    protected $casts= [
        'category_id' => 'array'
    ];
    
}
