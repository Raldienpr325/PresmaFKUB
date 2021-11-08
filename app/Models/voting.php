<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voting extends Model
{
    protected $table = "voting";
    protected $primaryKey = "id";
    protected $fillable = [
       'users_id','presmas_id'];
    
}