<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Visitor;
use App\Models\Category;
use App\Models\Tolls;
use App\Models\About;
use App\Models\Adsimages;
use Intervention\Image\Facades\Image;
use App\Models\HomeSeo;
use App\Models\Privacy;
use App\Models\TermsCondition;
use Illuminate\Support\Facades\Session;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
class FontendController extends Controller
{

 function index(){
     $homeseo = HomeSeo::all();
     $tolls= Tolls::latest()->get();
     $popular = Post::orderBy('view_count', 'DESC')->take(3)->get();

     $actual_link= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     $Homelink= "http://$_SERVER[HTTP_HOST]";

     $HomeTitle= $homeseo[0]['title'];
     $HomeShareTitle= $homeseo[0]['share_title'];
     $HomeDescription= $homeseo[0]['description'];
     $HomeKeywords= $homeseo[0]['keywords'];
     $HomeImage= $Homelink.'/'.$homeseo[0]['home_image'];

     SEOMeta::setTitle($HomeTitle);
     SEOMeta::setDescription($HomeDescription);
     SEOMeta::setKeywords($HomeKeywords);
     SEOMeta::setCanonical($actual_link);


     OpenGraph::addImage($HomeImage); // add image url
     OpenGraph::setTitle($HomeShareTitle); // define Share title
     OpenGraph::setDescription($HomeDescription);  // define description
     OpenGraph::setUrl($actual_link); // define url
     OpenGraph::setSiteName($HomeShareTitle); //define site_name


     $UserIP=$_SERVER['REMOTE_ADDR'];
     date_default_timezone_set("Asia/Dhaka");
     $timeDate= date("d-m-Y h:i:sa");
     Visitor::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);
     $post = Post::with('user')->orderBy('created_at', 'DESC')->paginate(6);
     return view('fontend/layouts/pagees/home',[
         'post'=>$post,
         'tolls'=>$tolls,
         'popular'=>$popular,
         'homeseo'=>$homeseo,

     ]);
 }

 public function category_wise_post($slug){
    $category = Category::where('slug', $slug)->first();

     if($category){
        $post = Post::where('category_id', $category->id)->paginate(6);

        return view('fontend/layouts/inc/category_wise_post_show',compact('category','post'));
     }else {
       return redirect()->route('fontend.website');
    }
}

public function PopularPost(){
  $popular = Post::orderBy('view_count', 'DESC')->get();
    return view('fontend/layouts/inc/popular_post_all',compact('popular'));

}

public function search(Request $request)
  {
      $query = $request->input('query');
      $post = Post::where('post_title','LIKE',"%$query%")->paginate(6);
      return view('fontend/layouts/inc/serch',compact('post','query'));
  }
  public function About(){
    $about= About::all();
    return view('fontend/layouts/inc/about',compact('about'));
  }

  public function AdsAll(){
      $Adsimages = Adsimages::all();
      return view('Backend/pages/adsimage/view_ads',compact('Adsimages'));
  }
  public function postDetails($slug){

    $PostDetails = Post::with('category','user')->where('slug', $slug)->first();
    $related=Post::where('category_id',$PostDetails->category_id)->where('slug','!=',$slug)->limit(3)->get();
    $Adsimages = Adsimages::all();
    $actual_link= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $blogKey = 'blog_' . $PostDetails->id;

     if (!Session::has($blogKey)) {
         $PostDetails->increment('view_count');
         Session::put($blogKey,1);
     }

    SEOMeta::setTitle($PostDetails->post_title );
    SEOMeta::setDescription($PostDetails->meta_description );
    SEOMeta::setKeywords($PostDetails->meta_keyword );
    SEOMeta::setCanonical($actual_link );

    OpenGraph::addImage($PostDetails->image); // add image url
    OpenGraph::setTitle($PostDetails->post_title); // define Share title
    OpenGraph::setDescription($PostDetails->meta_description);  // define description
    OpenGraph::setUrl($actual_link); // define url
    OpenGraph::setSiteName($PostDetails->post_title); //define site_name
    return view('fontend/layouts/inc/details',compact('PostDetails','related','Adsimages'));
    }

    public function Privacy(){
    $Privacy  =Privacy::all();
    return view('fontend/layouts/inc/privacy',compact('Privacy'));
    }
    public function Terrms(){
    $Terrms  =TermsCondition::all();
    return view('fontend/layouts/inc/terms',compact('Terrms'));
    }
    public function Alltols(){
    $tolls  =Tolls::all();
    return view('fontend/layouts/inc/all_tolls',compact('tolls'));
    }
}
