@extends('Backend.Layouts.master')
@section('content')

            <div class="card-body">
              <h5 class="card-title">Default Table</h5>

              <!-- Default Table -->
              <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ip Adress</th>
                    <th scope="col">Visit Time</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($visitor as $item)
                         <tr>
                           <td>{{  $loop->index + 1 }}</td>
                           <td>{{ $item->ip_address }}</td>
                           <td>{{ $item->visit_time }}</td>
                         @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>

@endsection
