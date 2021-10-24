<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homefreelancers extends Model
{
    use HasFactory;
    protected $table = "freelancer";
    public $timestamps = false;
}
