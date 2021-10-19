<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Userinm extends Model
{
    use HasFactory;
    protected $table = 'user';
    public $timestamps = false;
}
