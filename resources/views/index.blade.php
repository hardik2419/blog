<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>



  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
   <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Passport Office</th>
       <!--  <th colspan="2">Action</th> -->
      </tr>
    </thead>
    <tbody>
      @if(!empty($passports))
      @foreach($passports as $passport)

      <tr>
        <td>{{$passport['id']}}</td>
        <td>{{$passport['name']}}</td>
        <td>{{ $passport['date'] }}</td>
        <td>{{$passport['email']}}</td>
        <td>{{$passport['number']}}</td>
        <td>{{$passport['office']}}</td>

        <!-- <td><a href="{{action('PassportController@edit', $passport['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PassportController@destroy', $passport['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td> -->
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>

  </div>

<script type="text/javascript">
/*$(document).ready(function() {
    $('.example').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('datatable/getdata') }}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
        ]
    });
});*/
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
  </body>
</html>
