<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voting2 extends Model
{
    protected $table = "voting2s";
    protected $primaryKey = "id";
    protected $fillable = [
       'usersid',
       'user-name',
       'user-NIM',
       'google_id',
       'dpm-name',
       'dpmsid'];
}