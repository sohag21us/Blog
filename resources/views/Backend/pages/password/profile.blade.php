@extends('Backend.Layouts.master')
@section('content')
<br>

<h3 class="card-title">Create Post</h3>
<div class="col-md-8 mt-1 offset-xl-2">
                 <div class="card">

                                 <form action="{{ route('update-profile') }}" method="POST">
                                               @csrf
                                                 <div class="form-group">
                                                   <label for="exampleInputEmail1">Name</label>
                                                   <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->name }}">
                                                   @error('name')
                                                       <span class="text-danger">{{ $message }}</span>
                                                   @enderror
                                                 </div>
                                                 <div class="form-group">
                                                   <label for="exampleInputEmail1">Email</label>
                                                   <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
                                                   @error('email')
                                                       <span class="text-danger">{{ $message }}</span>
                                                   @enderror
                                                 </div>

                                               <div class="form-group">
                                                   <button type="submit" class="btn btn-danger">Update</button>
                                               </div>
                                           </form>

@endsection
