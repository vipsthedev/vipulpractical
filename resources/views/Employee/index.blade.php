<style>
* {
  box-sizing: border-box;
}


#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  @extends('welcome')
@section('content')
  <div class="container">
  <a href="{{action('UserController@logout')}}" class="btn btn-warning">Logout</a>|
    <a href="{{action('Employeecontroller@create')}}" class="btn btn-warning">AddMore...</a><br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<br>
<table id="myTable">
  <tr class="header">
    <th style="width:20%;">FirstName</th>
    <th style="width:20%;">Email</th>
    <th style="width:20%;">Gender</th>
    <th style="width:20%;">Designation</th>
    <th style="width:20%;">Date of Joining</th>
    <th colspan="2">Action</th>

  </tr>
   @foreach($employee as $post)
   <div class="modal fade" id="{{$post['id']}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">DetailsView</h4>
        </div>
        <div class="modal-body">
         ID: => {{$post['id']}}
         <br>
         FirstName: => {{$post['first_name']}}
        <br>
        MiddelName: => {{$post['middle_name']}}
        <br>
        LastName: => {{$post['last_name']}}
        <br>
        Email: => {{$post['email']}}
        <br>
        Gender => {{$post['gender']}}
        <br>
        Designation => {{$post['designation']}}
        <br>
        DateOfJoin => {{$post['dateofjoin']}}
        <br>
        Address => {{$post['address']}}
        <br>
        City => {{$post['city']}}
        <br>
        State => {{$post['state']}}
        <br>
        leaves => {{$post['leaves']}}
        <br>
        technicalkow => {{$post['technicalkow']}}
        <br>
        Hobbies => {{$post['Hobbies']}}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['first_name']}}</td>
        <td>{{$post['gender']}}</td>
        <td>{{$post['designation']}}</td>
         <td>{{$post['dateofjoin']}}</td>

        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#{{$post['id']}}">View</button>
</td>
       <td>
           <a href="{{action('Employeecontroller@destory', $post['id'])}}" class="btn btn-warning">Delete</a>
        </td>
      </tr>
      @endforeach
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
  </div>
@endsection