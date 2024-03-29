<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_code',
        'daily_code',
        'cart_id',
        'customer_id',
        'item_count',
        'grand_total',
        'status',
        'discount',
        'qr_code',
        'start_at',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'cooking_time'
    ];

    /**
     * Get the cart of order.
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    /**
     * Get the Customer of order.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function createdby()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function feedback() {
        return $this->hasOne(Feedback::class, 'order_id', 'id');
    }

}

