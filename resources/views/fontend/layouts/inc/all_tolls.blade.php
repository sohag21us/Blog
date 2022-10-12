@extends('fontend.layouts.master')
<title>All Tolls</title>
@section('content')
  <div class="container">
    <div class="row mt-1">
        <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
            <div class="section-headline text-left">

            </div>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
            <div class="section-headline text-left">
                <h2>All Tolls :-)</h2>
            </div>
        </div>
    </div>
  </div>

  <!-- ======= Pricing Section ======= -->
  <div id="pricing" class="pricing-area area-padding">
      <div class="container">
          <div class="row">
              @foreach ($tolls as $item)
              <div class="col-md-3 col-sm-3 col-xs-12">
                  <a href="#">
                      <div class="pri_table_list">
                          <a href="{{$item->link}}"><img src="{{ asset('Backend/assets/uploads/tolls') }}/{{ $item->image}}" alt="{{ $item->title}}" /></a>
                          <ol>
                              <br>
                              <h4 class="price-center">{{  $item->title}}</h4>
                              <span>
                                  <hr>
                              </span>
                              <p>
                                {{  $item->des}}
                              </p>
                          </ol>

                          <a href="{{  $item->link}}"><button class="bg-primary">Get Now</button></a>
                      </div>
                  </a>
              </div>
              @endforeach
          </div>
      </div>
  </div><!-- End Pricing Section -->


@endsection
