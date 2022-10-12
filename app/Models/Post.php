<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
         'post_title', 'slug', 'category_id','description','meta_title','meta_description','meta_keyword','alt','user_id','image',
     ];

     public function category(){
     return $this->belongsTo('App\Models\Category','category_id');
   }

  
   public function category_post(){
     return $this->belongsTo('App\Models\Category','category_id');
     }

      public function user()
   {
       return $this->belongsTo('App\Models\User');
   }
}
