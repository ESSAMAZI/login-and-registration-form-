<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class _users extends User
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'email',
         'password'
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public $timestamps=false;
}
