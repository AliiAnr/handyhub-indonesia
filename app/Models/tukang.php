<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\SessionGuard;
use Illuminate\Database\Eloquent\Model;

class tukang extends Authenticatable
{
    use HasFactory;
    
    public function getTable()
    {
        return 'tukangs';
    }
    protected $guarded = ['id'];
}
