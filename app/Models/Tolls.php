<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tolls extends Model
{
    use HasFactory;
    protected $fillable = [
         'title', 'des', 'link','image',
     ];
}
