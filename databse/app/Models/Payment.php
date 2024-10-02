<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = ['event_id', 'user_id', 'amount'];

    public function event()
    {
        return $this->belongsTo(EventMaster::class, 'event_id');
    }

    public function user()
    {
        return $this->belongsTo(UserMaster::class, 'user_id');
    }
}
