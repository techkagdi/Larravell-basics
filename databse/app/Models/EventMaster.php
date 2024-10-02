<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventMaster extends Model
{
    protected $table = 'event_master';

    protected $fillable = ['event_name'];

    public function audiences()
    {
        return $this->hasMany(Audience::class, 'event_id');
    }

    public function participants()
    {
        return $this->hasMany(ParticipateMaster::class, 'event_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'event_id');
    }

}
