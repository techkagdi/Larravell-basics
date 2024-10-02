<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipateMaster extends Model
{
    protected $table = 'participate_master';

    protected $fillable = ['event_id', 'user_id'];

    public function event()
    {
        return $this->belongsTo(EventMaster::class, 'event_id');
    }

    public function user()
    {
        return $this->belongsTo(UserMaster::class, 'user_id');
    }
}
