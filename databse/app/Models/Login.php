<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $primaryKey = 'email';
    public $timestamps = false;
    protected $table = 'login';
    protected $fillable = ['email','password','status'];
}
