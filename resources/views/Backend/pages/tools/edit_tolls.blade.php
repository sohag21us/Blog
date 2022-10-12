@extends('Backend.Layouts.master')
@section('content')
<br>

<h3 class="card-title">Edit Recommend Tolls </h3>

<form action="{{ route('update-tolls') }}" method="post" class="row g-3" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12">
        <label for="exampleInputEmail1">Create Tolls Name</label>
        <input type="text" class="form-control" name="title" value="{{ $tolls->title }}">
        <input type="hidden" name="tolls_id" value="{{ $tolls->id }}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Post Descriprion</label>
        <textarea class="form-control" name="des" style="height: 100px">{{ $tolls->des }}</textarea>
    </div>

    <div class="col-md-6">
        <label for="exampleInputEmail1">Image Upload</label><br>
        <input type="file" name="image" accept="image/*" onchange="readURL(this);">
    </div>
    <div class="col-md-6">
        <label class="form-control-label">Image Preview: <span class="tx-danger">*</span></label>
        <input type="hidden" accept="image/*" onchange="readURL(this);">
        <td><img src="{{ asset('Backend/assets/uploads/tolls') }}/{{ $tolls->image}}"  alt="Card image cap" style="height: 150px; width:150px;"></td>
       <img id="image" src="#" />
    </div>
    <div class="col-md-12">
        <label for="exampleInputEmail1">Affilite Link</label>
        <input type="text" class="form-control" name="link" value="{{ $tolls->link }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
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
