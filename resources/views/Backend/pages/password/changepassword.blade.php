@extends('Backend.Layouts.master')
@section('content')
<br>

<h3 class="card-title">Create Post</h3>
<div class="col-md-8 mt-1 offset-xl-2">
                 <div class="card">
<form action="{{ route('change-password-store') }}" class="row g-3" method="POST">
                           @csrf
                             <div class="form-group">
                               <label for="exampleInputEmail1">Old Password</label>
                               <input type="password" name="old_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="old password">
                               @error('old_password')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                             </div>

                             <div class="form-group">
                               <label for="exampleInputEmail1">New Password</label>
                               <input type="password" name="new_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="new password">
                               @error('new_password')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                             </div>

                             <div class="form-group">
                               <label for="exampleInputEmail1">Confirm Password</label>
                               <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Re-Type Passowrd">
                               @error('password_confirmation')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                             </div>

                           <div class="form-group">
                               <button type="submit" class="btn btn-danger">Change Password</button>
                           </div>
                       </form>
                     </div>
                  </div>

@endsection
