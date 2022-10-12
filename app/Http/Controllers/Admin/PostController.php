<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function create(){
      $category= Category::all();
      return view('Backend/pages/post/create_post',compact('category'));
    }
    /// store Post............
   public function PostStore(Request $request){
 //dd($request->all());
     $product = Post::create([
           'post_title' => $request->input('post_title'),
           'slug' => strtolower(str_replace(' ','-',$request->post_title)),
           'category_id' => $request->input('category_id'),
           'description' => $request->input('description'),
           'meta_title' => $request->input('meta_title'),
           'meta_description' => $request->input('meta_description'),
           'meta_keyword' => $request->input('meta_keyword'),
           'alt' => $request->input('alt'),
           'user_id' => auth()->user()->id,
           'created_at' => Carbon::now(),
           ]);

           if ($request->hasFile('image')) {
                       $upload_location = 'Backend/assets/uploads/post/';
                       $file = $request->file('image');
                       $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
                       Image::make($file)->resize(600,600)->save($upload_location.$name_gen);
                       $save_url = $name_gen;
                       $product->update([
                           'image' => $save_url,
                       ]);
                   }
   }


   public function PostAll(){
     $post= Post::latest()->get();
     return view('Backend/pages/post/view_post',compact('post'));
   }
   // edit Post...................
    public function edit($post_id){
        $post = Post::findOrFail($post_id);
        $category = Category::latest()->get();
        return view('Backend/pages/post/edit_post',compact('post','category'));
    }
   // Post update..................
  public function PostUpdate(Request $request) {
               $post=  Post::find($request->post_id);
               $post->post_title= $request->post_title;
               $post->slug=strtolower(str_replace(' ','-',$request->post_title));
               $post->category_id= $request->category_id;
               $post->description= $request->description;
               $post->meta_title= $request->meta_title;
               $post->meta_description= $request->meta_description;
               $post->meta_keyword= $request->meta_keyword;
               $post->user_id= auth()->user()->id;
               $post->updated_at=Carbon::now();
               $post->save();

              if($request->hasFile('image')) {
                $post = Post::find($request->post_id);
                  unlink(base_path('Public/Backend/assets/uploads/post/'.$post ->image));
                    $fileName= $request->post_id.'.'.$request->image->getClientOriginalExtension();
                    Image::make($request->image)->resize(600,600)->save(base_path('Public/Backend/assets/uploads/post/'.$fileName));
                    DB::table('posts')->where('id', $request->post_id)->update([
                          'image' => $fileName,
                        ]);

                  } else {

                  }
                  $notification=array(
                      'message'=>'Product Added Success',
                      'alert-type'=>'success'
                  );
                  return Redirect()->back()->with($notification);
 }
 public function Delete($post_id) {
            $post=Post::find($post_id);
            unlink(base_path('Public/Backend/assets/uploads/post/'.$post->image));
                 $post->delete();
             return back();

}
}
