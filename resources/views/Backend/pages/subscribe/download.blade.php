<style media="screen">
table, th, td {
border: 1px solid;
}
table {
  width: 100%;
}

</style>
  <h2>Subcriber Lists</h2>
  <table class="table table-striped" id="myTable">
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
