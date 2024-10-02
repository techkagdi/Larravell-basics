<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMaster extends Model
{
    protected $table = 'admin_master';

    protected $fillable = ['admin_name', 'admin_email'];
}
