<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_author extends Model
{
    use HasFactory;
    public $table = "blog_author";
    public $timestamps = false;
}
