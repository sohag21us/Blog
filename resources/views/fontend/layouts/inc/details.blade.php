@extends('fontend.layouts.master')
@section('content')
  <div id="about" class="about-area area-padding">
       <div class="container">
         <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">

           </div>
         </div>
         <div class="row">
           <!-- single-well start-->
           <div class="col-md-6 col-sm-6 col-xs-12">
             <div class="well-left">

             </div>
           </div>
           <!-- single-well end-->
           <div class="col-md-6 col-sm-6 col-xs-12">
             <div class="well-middle">
               <div class="single-well">


               </div>
             </div>
           </div>
           <!-- End col-->
         </div>
       </div>
     </div><!-- End About Section -->
     <!-- ======= Blog Page ======= -->
     <div class="blog-page area-padding">
       <div class="container">
         <div class="row">
           <div class="col-lg-4 col-md-4">
             <div class="page-head-blog">
               <div class="single-blog-page">
                 <!-- search option start -->
                 <form method="GET" action="{{ route('search') }}">
                   <div class="search-option">
                     <input type="text" value="{{ isset($query) ? $query : '' }}" name="query" placeholder="Type of search">
                     <button class="button" type="submit">
                       <i class="bi bi-search"></i>
                     </button>
                   </div>
                 </form>
                 <!-- search option end -->
               </div>
               <div class="single-blog-page">
                 <!-- recent start -->
                 <div class="left-blog">
                   <h4>recent post</h4>
                   <div class="recent-post">
                    @foreach ($related as $item)
                     <div class="recent-single-post">
                       <div class="post-img">
                         <a href="#">
                           <img src="{{ asset('Backend/assets/uploads/post') }}/{{ $item->image}}" alt="{{ $item->alt}}" />
                         </a>
                       </div>
                       <div class="pst-content">
                         <p><a href="{{ url('post-details', ['slug' => $item->slug]) }}">{{ $item->post_title }}</a></p>
                       </div>
                     </div>
                 @endforeach
                   </div>
                 </div>
                 <!-- recent end -->
               </div>
               <div class="single-blog-page">
                 <div class="left-blog">
                   <h4>categories</h4>
                   <ul>
                     @foreach ($categories as $item)
                     <li>
                     <a class="nav-link scrollto" href="{{ route('website.category', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                     </li>
                     @endforeach
                   </ul>
                 </div>
               </div>
               <div class="single-blog-page">
                 <div class="left-blog">
                   <h4>GET OFFER</h4>
                   <ul>

                   </ul>
                 </div>
               </div>
               <div class="single-blog-page">
                 <div class="left-tags blog-tags">
                    @foreach ($Adsimages as $img)
                   <div class="popular-tag left-side-tags left-blog">
                    <a href="{{ $img->link }}"><img src="{{ asset('Backend/assets/uploads/ads') }}/{{ $img->image}}"  alt="{{ $img->name }}"></a>
                   </div>
                    @endforeach
                 </div>
               </div>
             </div>
           </div>
           <!-- End left sidebar -->
           <!-- Start single blog -->
           <div class="col-md-8 col-sm-8 col-xs-12">
             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <!-- single-blog start -->


                 <article class="blog-post-wrapper">
                   <div class="post-thumbnail">
                     <img src="{{ asset('fontend/assets/img/blog/6.jpg') }}" alt="" />
                   </div>
                   <div class="post-information">
                     <h2>{{ $PostDetails->post_title }}</h2>
                     <div class="entry-meta">
                       <span class="author-meta"><i class="bi bi-person"></i> <a href="#">{{ $PostDetails->user->name}}</a></span>
                       <span><i class="bi bi-clock"></i> {{ $PostDetails->created_at->format('d F Y') }}</span>
                       <span class="tag-meta">
                         <i class="bi bi-eye"></i>
                         <a href="#">{{ $PostDetails->view_count}}</a>                    
                       </span>
                     </div>
                     <div class="entry-content">
                      <p>{!! $PostDetails->description !!}</p>
                     </div>
                   </div>
                 </article>

                 <div class="clear"></div>
                 <div class="single-post-comments">
                   <div class="comments-area">
                     <div class="comments-list">
                     </div>
                   </div>

                   <div class="comment-respond">
                     <h3 class="comment-reply-title">Leave a Reply </h3>
                     <span class="email-notes">Your email address will not be published. Required fields are marked *</span>

                     <form action="{{ route('store.coment') }}" method="post">
                       @csrf
                       <div class="row">
                         <div class="col-lg-4 col-md-4">
                           <p>Name *</p>
                           <input type="text" / name="name" required>
                         </div>
                         <div class="col-lg-4 col-md-4">
                           <p>Email *</p>
                           <input type="email" / name="email" required>
                         </div>
                         <div class="col-lg-4 col-md-4">
                           <p>Website</p>
                           <input type="text" / name="website" required>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                           <p>Comment</p>
                           <textarea id="message-box" cols="30" rows="10" name="comment" required></textarea>
                           <button type="submit">Post Comment</button>
                         </div>
                       </div>
                     </form>

                   </div>
                 </div>
                 <!-- single-blog end -->
               </div>
             </div>
           </div>
         </div>
       </div>
     </div><!-- End Blog Page -->


@endsection
