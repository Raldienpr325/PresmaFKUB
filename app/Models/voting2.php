<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voting2 extends Model
{
    protected $table = "voting2";
    protected $primaryKey = "id";
    protected $fillable = [
       'users_id','dpm_id'];
}