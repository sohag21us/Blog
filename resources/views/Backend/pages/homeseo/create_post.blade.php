@extends('Backend.Layouts.master')
@section('content')
<br>

<h5 class="card-title"><b>SEO Tag For Google Ranking</b></h5>

<form action="{{ route('post.store.seo') }}" method="post" class="row g-3" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12">
        <label for="exampleInputEmail1">Home Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter SEO title">
    </div>
    <div class="col-md-12">
        <label for="exampleInputEmail1">Share Title</label>
        <input type="text" class="form-control" name="share_title" placeholder="Enter Share Title">
    </div>


      <div class="form-group">
    <label for="exampleInputEmail1">SEO Meta Description</label>
    <textarea class="form-control" name="description" style="height: 100px"></textarea>
    </div>
    <div class="col-md-6">
        <label for="exampleInputEmail1">Image Upload</label><br>
        <input type="file"  name="home_image" accept="home_image/*"   onchange="readURL(this);">
    </div>
  <div class="col-md-6">
    <label class="form-control-label">Image Preview: <span class="tx-danger">*</span></label>
  <input type="hidden"  accept="home_image/*"   onchange="readURL(this);">
  <img id="home_image" src="#" />
</div>

    <div class="form-group">
        <label for="exampleInputEmail1">Meta Keywords</label>
        <input type="text" class="form-control" name="keywords" placeholder="Enter Keywords" data-role="tagsinput">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#home_image')
                .attr('src', e.target.result)
                .width(150)
                .height(150);
        };
        reader.readAsDataURL(input.files[0]);
    }
 }
</script>
@endsection
