<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'sap_product_code', 'web_product_code', 'name'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
