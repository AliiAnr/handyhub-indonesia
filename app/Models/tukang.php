<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\SessionGuard;
use Illuminate\Database\Eloquent\Model;

class tukang extends Authenticatable
{
    use HasFactory;
    protected $casts = [
        'tgl_lahir' => 'date', // or 'datetime' depending on your column type
    ];
    public function getTable()
    {
        return 'tukangs';
    }
    protected $guarded = ['id'];
}
