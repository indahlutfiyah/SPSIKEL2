<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paa extends Model
{
    use HasFactory;
    protected $table = 'paa';
    protected $fillable = [
        'NIP_PAA',
        'NAMA_PAA',
        'ALAMAT_PAA',
        'TELP_PAA',
        'USERNAME',
        'PASSWORD',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
}
