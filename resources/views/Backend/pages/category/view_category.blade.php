@extends('Backend.Layouts.master')
@section('content')

            <div class="card-body">
              <h5 class="card-title">Default Table</h5>

              <!-- Default Table -->
              <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($category as $item)
                         <tr>
                           <td>{{  $loop->index + 1 }}</td>
                           <td>{{ $item->name }}</td>

                           <td>
                             <a href="{{ url('admin/category-edit/'.$item->id) }}" class="btn btn-sm btn-info" title="edit data"> <i class="bi bi-pencil-square"></i></a>

                             <a href="{{ url('admin/category-delete/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="delete data"><i class="bi bi-trash"></i></a>
                           </td>
                         </tr>
                         @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>

@endsection
