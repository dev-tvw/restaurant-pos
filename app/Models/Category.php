<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'category_id', 'created_at', 'updated_at'
    ];

    /**
     * Get the subcategories for the category.
     */
    public function sub_categories()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * Get the parent category that owns the subcategory.
     */
    public function parent_category()
    {
        return $this->belongsTo(Category::class);
    }
}
