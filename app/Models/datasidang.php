<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasidang extends Model
{
    use HasFactory;

    protected $table = 'datasidang';

    public function tambah(){
        
    }
    public function datasidang(){
        return $this->belongsTo('App\datasidang');
    }
    
}
