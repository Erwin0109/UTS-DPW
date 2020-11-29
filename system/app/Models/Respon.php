<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Komentar;

class Respon extends Model
{
    //use HasFactory;
    protected $table = 'respon';

    function komentar(){
   		return $this->belongsTo(Komentar::class, 'id_komentar');
   	}

}
