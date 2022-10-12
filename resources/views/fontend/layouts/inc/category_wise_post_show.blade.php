@extends('fontend.layouts.master')
<title>{{ $category->name }}</title>
@section('content')
  @include('fontend.layouts.inc.category_name')
  <!-- ======= Pricing Section ======= -->
  <div id="pricing" class="pricing-area area-padding">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="section-headline text-left">
                      <h2>{{ $category->name }}</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              @foreach ($post as $item)
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="pri_table_list">
                      <img src="{{ asset('Backend/assets/uploads/post') }}/{{ $item->image}}" alt="{{ $item->alt }}">
                        <br>
                        <br>
                      <h3><a href="{{ url('post-details', ['slug' => $item->slug]) }}">{{ Str::limit($item->post_title, 60) }}</a></h3>

                      <ol>
                          {!! Str::limit($item->description, 160) !!}
                          <br>
                          <a href="{{ url('post-details', ['slug' => $item->slug]) }}"> Read More>></a>
                      </ol>
                      <br>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>

@endsection
