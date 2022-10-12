@extends('Backend.Layouts.master')
@section('content')

            <div class="card-body">
              <h5 class="card-title">Subscriber Table</h5>

              <!-- Default Table -->
            <a class="btn btn-success"href="{{ route('generate.pdf') }}">Pdf Download</a>
                <br>
                <br>
              <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subscriber Time</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($subscriber as $item)
                         <tr>
                           <td>{{  $loop->index + 1 }}</td>
                           <td>{{ $item->email }}</td>
                           <td>{{ $item->created_at->diffForHumans()}}</td>
                         @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>

@endsection
