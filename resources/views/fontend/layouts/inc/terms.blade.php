 @extends('fontend.layouts.master')
 <title>Privacy</title>
<meta name="description" content="Web Developer and Organic SEO Expert in Bangladesh.Hello there, I’m Md Sohag Hasan,I graduated from World University of Bangladesh BSc in computer Science and Engineering. ">
<meta name="keywords" content="HTML, CSS, JavaScript,on Page SEO, Off Page SEO">
<meta name="author" content="Sohag Hasan">
@section('content')
<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
            </div>
        </div>
        <div class="row mt-5">
            <!-- single-well start-->

            <!-- single-well end-->
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <a href="#">
                            <h4 class="sec-head">Terms And Conditions</h4>
                        </a>

                        @foreach ($Terrms as $va)
                        <p class="para">
                        {!! $va->name !!}
                        </p>
                        @endforeach

                    </div>
                </div>

            </div>
            <!-- End col-->
        </div>
    </div>
</div><!-- End About Section -->

@endsection
