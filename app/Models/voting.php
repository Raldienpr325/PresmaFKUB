<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class voting extends Model
{
    protected $table = "votings";
    protected $primaryKey = "id";
    protected $fillable = [
       'usersid',
       'user-name',
       'user-NIM',
       'presma-name',
       'presmasid'];
    
    
    
}