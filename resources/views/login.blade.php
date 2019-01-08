<!DOCTYPE html>
<html>
 <head>
  <title>Data Tables </title>
  <script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
	
	<table class="table" id="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Country</th>
            <th class="text-center">Salary ($)</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
   <tbody>
@foreach($data as $item)
<tr class="item{{$item->id}}">
    <td>{{$item->id}}</td>
    <td>{{$item->first_name}}</td>
    <td>{{$item->last_name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->gender}}</td>
    <td>{{$item->country}}</td>
    <td>{{$item->salary}}</td>
    <td><button class="edit-modal btn btn-info"
            data-info="{{$item->id}},{{$item->first_name}},{{$item->last_name}},{{$item->email}},{{$item->gender}},{{$item->country}},{{$item->salary}}">
            <span class="glyphicon glyphicon-edit"></span> Edit
        </button>
        <button class="delete-modal btn btn-danger"
            data-info="{{$item->id}},{{$item->first_name}},{{$item->last_name}},{{$item->email}},{{$item->gender}},{{$item->country}},{{$item->salary}}">
            <span class="glyphicon glyphicon-trash"></span> Delete
        </button></td>
</tr>
@endforeach
</tbody>
</table>


  
  </div>
 </body>
</html>

<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>