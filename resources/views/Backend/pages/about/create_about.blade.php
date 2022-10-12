@extends('Backend.Layouts.master')
@section('content')
<br>

<h3 class="card-title">Create About</h3>

<form action="{{ route('about') }}" method="post" class="row g-3">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">About Descriprion</label>
        <textarea class="form-control" name="des" style="height: 500px"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
