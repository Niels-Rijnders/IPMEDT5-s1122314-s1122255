<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel extends Model
{
   protected $table = 'tabel';
   public $timestamps = false;

   public function kindModel(){
       return $this->belongsTo("\App\Models\KindOftabel","kind","kind");
   }
}
