<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artikel;
use App\Models\Respon;
use App\Models\User;


class Komentar extends Model
{
    //use HasFactory;
    protected $table = 'komentar';

    function artikel(){
   		return $this->belongsTo(Artikel::class, 'id_artikel');
   	}

   	function user(){
   		return $this->belongsTo(User::class, 'id_user');
   	}

   	function respon(){
   		return $this->hasMany(Respon::class, 'id_respon');
   	}   	
}
