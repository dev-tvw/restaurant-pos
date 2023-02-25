<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone', 'name', 'feedback', 'rating'
    ];

    protected $table = 'feedbacks';

    public function ratings()
    {
        return $this->hasMany(FeedbackRating::class);
    }
}
