<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSeo;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use DB;
use App\Models\Post;
use App\Models\Visitor;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
class HomeSeoController extends Controller
{
    public function CreateSeo(){

      return view('Backend/pages/homeseo/create_post');
    }

    public function PostStoreSEO(Request $request){
  //dd($request->all());
      $product = HomeSeo::create([
            'title' => $request->input('title'),
            'share_title' => $request->input('share_title'),
            'description' => $request->input('description'),
            'keywords' => $request->input('keywords'),
            'created_at' => Carbon::now(),
            ]);

            if ($request->hasFile('home_image')) {
                        $upload_location = 'Backend/assets/uploads/seo/';
                        $file = $request->file('home_image');
                        $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
                        Image::make($file)->resize(600,600)->save($upload_location.$name_gen);
                        $save_url = $name_gen;
                        $product->update([
                            'home_image' => $save_url,
                        ]);
                    }
    }

   //  public function postDetails(Request $request){
   //
   //   $detailsId=$request->id;
   //   $slugTitle=$request->slug;
   //   $categories = Category::latest()->get();
   //   // $PostDetails = Post::where('id','=',$detailsId)->get();
   //   $PostDetails = Post::with('category','user')->where('slug','=',$slugTitle)->get();
   //   $related=Post::where('category_id',$PostDetails->category_id)->where('slug','!=',$slug)->limit(3)->get();
   //
   //   $actual_link= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   //
   //    SEOMeta::setTitle($PostDetails[0]->post_title );
   //    SEOMeta::setDescription($PostDetails[0]->meta_description );
   //    SEOMeta::setKeywords($PostDetails[0]->meta_keyword );
   //    SEOMeta::setCanonical($actual_link);
   //    return view('fontend/layouts/inc/details',[
   //        'PostDetails'=>$PostDetails,
   //        'categories'=>$categories,
   //        'related'=>$related,
   //    ]);
   // }



}
