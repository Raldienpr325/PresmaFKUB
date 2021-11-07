<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ceknim extends Model
{
   protected $table = "ceknims";
   protected $primaryKey = "id";
   protected $fillable = [
    'id','NIM', 'nama',
   ];
}
