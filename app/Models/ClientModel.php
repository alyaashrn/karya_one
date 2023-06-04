<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $table = "clientfreelancer";
    protected $fillable = [
        'nama',
        'email',
        'password',
        'noHP',
        'industri',
        'ttl',
        'aksesrol',
    ];

    protected $guard = 'cekrol';

    protected $hidden = [
        'password'
    ];

    
}
