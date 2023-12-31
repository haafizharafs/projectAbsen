<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function semester(){
        return $this->belongsToMany(Semester::Class);
    }
}
