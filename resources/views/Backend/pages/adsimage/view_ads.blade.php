@extends('Backend.Layouts.master')
@section('content')

            <div class="card-body">
              <h5 class="card-title">Default Table</h5>

              <!-- Default Table -->
              <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Link</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Adsimages as $item)
                         <tr>
                           <td>{{  $loop->index + 1 }}</td>
                           <td>{{ $item->name }}</td>
                           <td>{{ $item->link }}</td>
                           <td>{{ $item->created_at->diffForHumans() }}</td>
                           <td><img src="{{ asset('Backend/assets/uploads/ads') }}/{{ $item->image}}" height="80" width="80" alt="product image not found"></td>

                           <td>
                             <a href="{{ url('admin/ads-delete/'.$item->id) }}" class="btn btn-sm btn-danger"  title="delete data"><i class="bi bi-trash"></i></a>
                           </td>
                         </tr>
                         @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>

@endsection
