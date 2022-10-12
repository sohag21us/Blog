@extends('Backend.Layouts.master')
@section('content')

            <div class="card-body">
              <h5 class="card-title">Default Table</h5>

              <!-- Default Table -->
              <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($tolls as $item)
                         <tr>
                           <td>{{  $loop->index + 1 }}</td>
                           <td>{{ $item->title }}</td>
                           <td>{{ $item->des }}</td>
                           <td>{{ $item->link }}</td>
                           <td><img src="{{ asset('Backend/assets/uploads/tolls') }}/{{ $item->image}}" height="80" width="80" alt="product image not found"></td>

                           <td>
                             <a href="{{ url('admin/edit-tolls/'.$item->id) }}" class="btn btn-sm btn-info" title="edit data"> <i class="bi bi-pencil-square"></i></a>

                             <a href="{{ url('admin/delete-tolls/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="delete data"><i class="bi bi-trash"></i></a>
                           </td>
                         </tr>
                         @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>

@endsection
