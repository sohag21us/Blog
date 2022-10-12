@extends('Backend.Layouts.master')
@section('content')
<br>

<h3 class="card-title">Create Post</h3>

<form action="{{ route('update-post') }}" method="post" class="row g-3" enctype="multipart/form-data">
  @csrf
 <input type="hidden" name="post_id" value="{{ $post->id }}">
    <div class="col-md-12">
        <label for="exampleInputEmail1">Post Title</label>
        <input type="text" class="form-control" name="post_title" value="{{ $post->post_title }}">
    </div>
    <div class="col-md-12">
        <label>Category</label>
        <select class="form-control select2bs4" name="category_id" style="width: 100%;">
            @foreach ($category as $cat)
            <option value="{{ $cat->id }}" {{ $cat->id == $post->category_id ? 'selected' :'' }}>{{ ucwords($cat->name) }}</option>
            @endforeach
        </select>

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Post Descriprion</label>
        <textarea class="tinymce-editor" name="description">{{ $post->description }}</textarea><!-- End TinyMCE Editor -->
    </div>

    <div class="col-md-6">
        <label for="exampleInputEmail1">Image Upload</label><br>
        <input type="file"  name="image" accept="image/*"   onchange="readURL(this);">
    </div>
  <div class="col-md-6">
    <label class="form-control-label">Image Preview: <span class="tx-danger">*</span></label>
  <input type="hidden"  accept="image/*"   onchange="readURL(this);">
  <td><img src="{{ asset('Backend/assets/uploads/post') }}/{{ $post->image}}"  alt="Card image cap" style="height: 150px; width:150px;"></td>

  <img id="image" src="#" />
</div>

  <h5 class="card-title"><b>SEO Tag For Google Ranking</b></h5>
    <div class="col-md-6">
        <label for="exampleInputEmail1">Meta Title</label>
        <textarea class="form-control" name="meta_title" style="height: 100px">{{ $post->meta_title }}</textarea>
    </div>
        <div class="col-md-6">
        <label for="exampleInputEmail1">Meta Description</label>
        <textarea class="form-control" name="meta_description" style="height: 100px">{{ $post->meta_description }}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Meta Keywords</label>
        <input type="text" class="form-control" name="meta_keyword" placeholder="Enter email" data-role="tagsinput"value="{{ $post->meta_keyword }}">
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
