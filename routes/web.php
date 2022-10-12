<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\FontendController;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\HomeSeoController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\TollsController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\AddImageController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\TermsConditionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/das', function () {
    return view('welcome');
});

Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //fontend
    Route::get('/',[FontendController::class,'index'])->name('fontend.website');
    Route::get('/category/{slug}',[FontendController::class,'category_wise_post'])->name('website.category');
    Route::get('/popular/post/',[FontendController::class,'PopularPost']);
    Route::get('/about', [FontendController::class,'About'])->name('name');

    Route::get('/post-details/{slug}',[FontendController::class,'postDetails']);
    Route::get('search',[FontendController::class,'search'])->name('search');
    Route::get('privacy/policy',[FontendController::class,'Privacy'])->name('priv');
    Route::get('terms',[FontendController::class,'Terrms'])->name('Terrm');
    Route::get('all-tolls',[FontendController::class,'Alltols'])->name('alltolls');

    //admin All routs
   Route::group(['prefix'=>'admin','middleware' =>['admin'],'namespace'=>'Admin'], function(){

   Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    //Category
   Route::get('/create-category', [CategoryController::class,'Create'])->name('create.category');
   Route::post('category/store',[CategoryController::class,'categoryStore'])->name('category-store');
   Route::get('category/all',[CategoryController::class,'categoryAll'])->name('category.all');
   Route::get('/category-edit/{cat_id}',[CategoryController::class,'edit']);
   Route::post('category/update',[CategoryController::class,'catUpdate'])->name('update-category');
   Route::get('/category-delete/{cat_id}',[CategoryController::class,'delete']);
    //post
   Route::get('/create-post', [PostController::class,'Create'])->name('create.post');
   Route::post('post/store',[PostController::class,'PostStore'])->name('post.store');
   Route::get('post/all',[PostController::class,'PostAll'])->name('post.all');
   Route::get('/post-edit/{post_id}',[PostController::class,'Edit']);
   Route::post('post/update',[PostController::class,'PostUpdate'])->name('update-post');
   Route::get('/post-delete/{post_id}',[PostController::class,'Delete']);
    //tolls
   Route::get('/create-tolls', [TollsController::class,'Create'])->name('create.tolls');
   Route::post('/store-tolls', [TollsController::class,'Store'])->name('store.tolls');
   Route::get('/all-tolls', [TollsController::class,'AllTools'])->name('all.tolls');
   Route::get('/edit-tolls/{tolls_id}', [TollsController::class,'EditTools']);
   Route::post('/update-tolls', [TollsController::class,'UpdateTolls'])->name('update-tolls');
   Route::get('/delete-tolls/{tolls_id}', [TollsController::class,'DeleteTolls']);

   // change password
   Route::get('change-password',[AdminController::class,'changePass'])->name('change-password');
   Route::post('change-password-store',[AdminController::class,'changePassStore'])->name('change-password-store');

   //profile
   Route::get('profile',[AdminController::class,'profile'])->name('profile');
   Route::post('update/info',[AdminController::class,'updateInfo'])->name('update-profile');

   //privacy
   Route::get('create/privacy',[PrivacyController::class,'Create'])->name('privacy');
   Route::post('store/privacy',[PrivacyController::class,'Store'])->name('store-privacy');
   //Terms
   Route::get('create/terms',[TermsConditionController::class,'Create'])->name('terms');
   Route::post('store/terms',[TermsConditionController::class,'Store'])->name('store-terms');
   //visitor

   Route::get('/all-visitor',[VisitorController::class,'AllVisitor'])->name('all.visitor');
   //SEO
   Route::get('/create-seo-post', [HomeSeoController::class,'CreateSeo'])->name('create.seo');
   Route::post('post/store/seo',[HomeSeoController::class,'PostStoreSEO'])->name('post.store.seo');

   //Comment
   Route::post('/store-comment', [CommentController::class,'StoreComment'])->name('store.coment');

   //Subscribe
   Route::get('/all-subscriber', [SubscriberController::class,'ListSubscribe'])->name('list.subscribe');
   Route::get('/generate/pdf', [SubscriberController::class,'generate_pdf'])->name('generate.pdf');
   Route::get('/download/pdf', [SubscriberController::class,'download_pdf'])->name('download.pdf');

   //About
   Route::get('/about', [AboutController::class,'Store'])->name('about');
   Route::get('/about/create', [AboutController::class,'Create'])->name('create.about');
   //Side Ads
   Route::get('ads-side',[AddImageController::class,'Create'])->name('create-image');
   Route::get('ads-all',[AddImageController::class,'AdsAll'])->name('ads-all');
   Route::get('ads-delete/{id}',[AddImageController::class,'delete']);
   Route::post('insert-data',[AddImageController::class,'insert'])->name('imgestore');

});
    Route::post('/store-subscribe', [SubscriberController::class,'StoreSubscribe'])->name('store.subscribe');

    // Route::get('/about', [AboutController::class,'index'])->name('name');

    Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'User'], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');

});
