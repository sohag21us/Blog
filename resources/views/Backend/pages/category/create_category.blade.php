@extends('Backend.Layouts.master')
@section('content')
  <br>
  <div class="col-xl-6 offset-md-3">
    <div class="p-3 mb-2 bg-info text-dark">Create Category</div>
              <!-- Vertical Form -->

                <form action="{{ route('category-store') }}" method="POST" class="row g-3" >
                      @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Enter Category Nmae</label>
                  <input type="text" class="form-control" placeholder="Appsumo" name="name">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->
            </div>

@endsection
