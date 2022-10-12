<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Carbon\Carbon;
class CommentController extends Controller
{

    public function StoreComment(Request $request){
// dd($request->all());
      $validated = $request->validate([
              'name' => 'required',
              'email' => 'required',
              'website' => 'required',
              'comment' => 'required',

          ]);
          $comment = new Comment;
                  $comment->name = $request->name;
                  $comment->email = $request->email;
                  $comment->website = $request->website;
                  $comment->comment = $request->comment;
                  $comment->save();

            $notification=array(
          'message'=>'Your comment has been success',
         'alert-type'=>'success'
         );
        return Redirect()->back()->with($notification);
}
}
