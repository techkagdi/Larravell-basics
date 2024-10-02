<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackWebsite extends Model
{
    protected $table = 'feedback_website';

    protected $fillable = ['feedback', 'u_id'];

    public function user()
    {
        return $this->belongsTo(UserMaster::class, 'u_id');
    }
}
