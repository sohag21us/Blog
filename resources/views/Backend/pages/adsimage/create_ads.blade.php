@extends('Backend.Layouts.master')
@section('content')
<br>

<h3 class="card-title">Create Post</h3>

<form action="{{ route('imgestore') }}" method="post" class="row g-3" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <label for="exampleInputEmail1">Image Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter image name">
    </div>
    <div class="col-md-6">
        <label for="exampleInputEmail1">Image Link</label>
        <input type="text" class="form-control" name="link" placeholder="Enter image link">
    </div>

    <div class="col-md-6">
        <label for="exampleInputEmail1">Image Upload</label><br>
        <input type="file"  name="image" accept="image/*"   onchange="readURL(this);">
    </div>
  <div class="col-md-6">
    <label class="form-control-label">Image Preview: <span class="tx-danger">*</span></label>
  <input type="hidden"  accept="image/*"   onchange="readURL(this);">
  <img id="image" src="#" />
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#image')
                .attr('src', e.target.result)
                .width(150)
                .height(150);
        };
        reader.readAsDataURL(input.files[0]);
    }
 }
</script>
@endsection
