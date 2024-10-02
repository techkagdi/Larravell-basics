<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMaster extends Model
{
    protected $table = 'user_master';

    protected $fillable = ['user_name', 'user_email'];

    public function feedbacks()
    {
        return $this->hasMany(FeedbackWebsite::class, 'u_id');
    }

    public function participations()
    {
        return $this->hasMany(ParticipateMaster::class, 'user_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'user_id');
    }
}
