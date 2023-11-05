<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $guarded = [];

    //data mahasiswa dimiliki satu user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}