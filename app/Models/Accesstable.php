<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accesstable extends Model
{
    protected $fillable = ['Name', 'Link', 'Login', 'password'];

}
