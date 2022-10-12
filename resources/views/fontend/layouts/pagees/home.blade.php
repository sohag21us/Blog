@extends('fontend.layouts.master')
@section('content')
   @include('fontend.layouts.inc.slide')

   @include('fontend.layouts.inc.blog')
   @include('fontend.layouts.inc.abob_ads')
   {{-- @include('fontend.layouts.inc.latest_post') --}}
   @include('fontend.layouts.inc.count')
   @include('fontend.layouts.inc.recomened_tols')
   @include('fontend.layouts.inc.price')
   @include('fontend.layouts.inc.ads_image')
@endsection
