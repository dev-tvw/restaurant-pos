<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'feedback_id', 'question_id', 'rating'
    ];

    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
