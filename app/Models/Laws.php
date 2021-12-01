<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laws extends Model
{
    use HasFactory;
    protected $table = "laws";
    public $timestamps = false;
}
