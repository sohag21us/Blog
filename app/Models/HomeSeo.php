<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSeo extends Model
{
    use HasFactory;
    protected $fillable = [
         'title', 'share_title', 'description','keywords','home_image',
     ];
}
