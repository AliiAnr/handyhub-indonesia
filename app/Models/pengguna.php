<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\SessionGuard;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Authenticatable
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password'
    // ];

    protected $guarded = ['id'];
}
