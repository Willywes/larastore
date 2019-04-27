<?php

namespace Willywes\Larastore\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'ls_product_categories';

    protected $fillable = [
        'id',
        'image',
        'name',
        'slug',
        'description',
        'parent',
        'active',
        'editable',
        'removable',
        'created_at',
        'updated_at'
    ];

    /*
    / Relations
    */

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function sub_categories()
    {
        return $this->hasMany(ProductCategory::class, 'parent', 'id');
    }

    /*
    / Scopes
    */

    public function scopeParents()
    {
        return $this->where('parent', null)->orWhere('parent', '==', 0);
    }

    public function scopeAvailable()
    {
        return $this->where('active', true);
    }


}
