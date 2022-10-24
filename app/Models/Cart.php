<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'status'
    ];

    /**
     * Get the cart items for the category.
     */
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
