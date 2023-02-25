<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function extras()
    {
        return $this->hasMany(Extra::class, 'extra_type_id', 'id');
    }
}
