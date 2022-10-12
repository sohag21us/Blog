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
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($post as $item)
                         <tr>
                           <td>{{  $loop->index + 1 }}</td>
                           <td>{{ $item->post_title }}</td>
                          <td>{{ $item->category['name']}}</td>
                           <td>  {!! Str::limit($item->description, 50) !!}</td>
                           <td>{{ $item->created_at->diffForHumans() }}</td>
                           <td><img src="{{ asset('Backend/assets/uploads/post') }}/{{ $item->image}}" height="80" width="80" alt="product image not found"></td>

                           <td>
                             <a href="{{ url('admin/post-edit/'.$item->id) }}" class="btn btn-sm btn-info" title="edit data"> <i class="bi bi-pencil-square"></i></a>

                             <a href="{{ url('admin/post-delete/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="delete data"><i class="bi bi-trash"></i></a>
                           </td>
                         </tr>
                         @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>

@endsection
