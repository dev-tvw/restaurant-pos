<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'mobile', 'email', 'state', 'city', 'zip_code', 'address', 'created_at', 'updated_at'
    ];

    /**
     * Get the Orders for the category.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
