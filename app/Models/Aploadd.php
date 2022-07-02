<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aploadd extends Model
{
    use HasFactory;

    protected $fillable=['name','file'];
}
