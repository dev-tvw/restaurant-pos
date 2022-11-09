<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'mobile', 'email', 'city', 'address', 'created_at', 'updated_at'
    ];

    /**
     * Get the Orders for the customer.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Get the carts for the customer.
     */
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
