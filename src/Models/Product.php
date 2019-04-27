<?php

namespace Willywes\Larastore\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'image',
        'slug',
        'description',
        'sku',
        'normal_price',
        'reduced_price',
        'weight',
        'length',
        'height',
        'width',
        'product_category_id',
        'active',
        'editable',
        'removable',
        'created_at',
        'updated_at'
    ];

    public function scopeAvailable(){
        return $this->where('active', true);
    }

    public function product_category(){
        return $this->belongsTo(ProductCategory::class);
    }
}
