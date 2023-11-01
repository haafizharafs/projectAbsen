<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';
    protected $guarded = [];

    //data dosen dimiliki satu user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
