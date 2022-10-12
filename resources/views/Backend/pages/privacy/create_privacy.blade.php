@extends('Backend.Layouts.master')
@section('content')
<br>

<h3 class="card-title">Create Privacy</h3>

<form action="{{ route('store-privacy') }}" method="post" class="row g-3">
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Privacy Descriprion</label>
        <textarea class="tinymce-editor" name="name"></textarea><!-- End TinyMCE Editor -->
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
