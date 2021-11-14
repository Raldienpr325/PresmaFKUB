<?php

namespace App\Models;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presma extends Model
{
    protected $table = "presmas";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','foto','nama','angkatan','prodi','nourut'];
}