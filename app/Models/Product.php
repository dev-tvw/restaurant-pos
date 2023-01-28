<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'active', 'cost', 'name_ar', 'description', 'description_ar', 'image', 'category_id', 'created_at', 'updated_at'
    ];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cart_items()
    {
        return $this->hasMany(CartItem::class);
    }
}
