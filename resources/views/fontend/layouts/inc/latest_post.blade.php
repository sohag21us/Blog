<!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="page-head-blog">

              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h3><b>Popular Post</b></h3>

                <a href="{{ url('popular/post')}}">  <p class="abc">View All Articals</p></a>
                  <div class="recent-post">

                      @foreach ($popular as $item)
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                        <img src="{{ asset('Backend/assets/uploads/post') }}/{{ $item->image}}" alt="{{ $item->alt}}" />
                        </a>
                      </div>
                      <div class="pst-content">
                        <p class="a"><a href="{{ url('post-details', ['slug' => $item->slug]) }}">{{ $item->post_title }}</a></p>
                        <p>{{ $item->created_at->format('d F Y') }}</p>
                      </div>
                    </div>
                      @endforeach
                
                  </div>
                </div>
                <!-- recent end -->
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
                    <img src="{{ asset('Backend/assets/uploads/post') }}/{{ $item->image}}" alt="{{ $item->alt}}" />
                  </div>
                  <div class="post-information">

                    <a href="{{ url('post-details', ['slug' => $item->slug]) }}"><h2>{{ $item->post_title }}</h2></a>
                    <div class="entry-meta">
                      <span><i class="bi bi-clock"></i> {{ $item->created_at->format('d F Y') }}</span>
                    </div>
                  </div>
                </article>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->
