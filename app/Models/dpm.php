<?php

namespace App\Models;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dpm extends Model
{
    protected $table = "dpms";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','fotodpm','namadpm','angkatandpm','prodidpm','nourutdpm'];
}