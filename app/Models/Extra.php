<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'extra_type_id'
    ];

    public function type()
    {
        return $this->belongsTo(ExtraType::class, 'extra_type_id', 'id');
    }

    public function cartItems()
    {
        return $this->belongsToMany(CartItem::class);
    }
}
