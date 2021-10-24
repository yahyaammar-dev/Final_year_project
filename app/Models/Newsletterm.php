<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletterm extends Model
{
    use HasFactory;
    protected $table = 'newsletter';
    public $timestamps = false;
}
