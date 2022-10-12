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
