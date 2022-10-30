<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'status', 'created_by'
    ];

    /**
     * Get the cart items for the category.
     */
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    /**
     * Get the customer of cart.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function createdby()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
