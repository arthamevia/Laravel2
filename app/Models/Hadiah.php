<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;
use App\Models\Hadiah;

class Hadiah extends Model
{
    use HasFactory;
    protected $table = "hadiah";

    public function anggota()
    {
        return $this->belongsToMany('App\Anggota');
    }
}
