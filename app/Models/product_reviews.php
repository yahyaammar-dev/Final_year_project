<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_reviews extends Model
{
    use HasFactory;
    public $table = "product_reviews";
    public $timestamps = false;
}
