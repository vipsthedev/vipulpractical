<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

@extends('welcome')
@section('content')

<div class="container">
    
      <a href="{{action('Employeecontroller@index')}}" class="btn btn-warning">Home...</a><br><br>

  @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        @if (\Session::get('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif 
  <form method="post" action="/empsinup">
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">FirstName</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="UserName" 
        name="first_name">
      </div>
    </div>
    <div class="form-group row">
     <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">MiddelName</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="MiddelName" 
        name="middel_name">
      </div>
    </div>
     <div class="form-group row">
     <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">LastName</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="LastName" 
        name="last_name">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Email" name="email" >
       </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Gender</label>
      <div class="col-sm-10">
      <input type="radio" class="" id="lgFormGroupInput" name="gender" value="male">Male
      <input type="radio" class="" id="lgFormGroupInput" name="gender" value="female">Female
       </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
      <div class="col-sm-10">
     <textarea name="address" rows="8" cols="80"></textarea>
       </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Designation</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Designation" name="designation" >
       </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">DateOfJoin</label>
      <div class="col-sm-10">
        <input type="date" class="form-control form-control-lg" id="lgFormGroupInput"  name="doj" >
       </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">City</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="City" 
        name="city" >
       </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">State</label>
      <div class="col-sm-10">
        <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="state">
    <option value="Gujarat">Gujarat</option>
    <option value="Delhi">Delhi</option>
    <option value="Rajasthan">Rajasthan</option>
  </select>
</div>
        
       </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Leaves </label>
      <div class="col-sm-10">
        <input type="number" class="form-control form-control-lg" id="lgFormGroupInput"  name="leaves" >
       </div>
    </div>
  <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Technical Knowledge</label>
      <div class="col-sm-10">
          <div class="checkbox">
          <label><input type="checkbox" value="PHP" name="tkw[]">PHP</label>
          </div>
          <div class="checkbox">
          <label><input type="checkbox" value="MySQL" name="tkw[]">MySQL</label>
          </div>
          <div class="checkbox disabled">
          <label><input type="checkbox" value="MongoDB" name="tkw[]">MongoDB</label>
          </div>
          <div class="checkbox disabled">
          <label><input type="checkbox" value="HTML" name="tkw[]">HTML</label>
          </div>
          <div class="checkbox disabled">
          <label><input type="checkbox" data-toggle="modal" id="bb" data-target="#modal-Codeudor"  value="Other" name="tkw[]">Other</label>
          </div>
        </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Hobbies</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Hobbies" name="Hobbies[]" >
        <div class="input_fields_container_part">
      <div>
        <br>
           <button class="btn btn-sm btn-primary add_more_button">Add More Fields</button>
      </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    var max_fields_limit      = 8; //set limit for maximum input fields
    var x = 1; //initialize counter for text box
    $('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
        e.preventDefault();
        if(x < max_fields_limit){ //check conditions
            x++; //counter increment
            $('.input_fields_container_part').append('<div><input type="text" class="form-control form-control-lg" name="Hobbies[]"/><a href="#" class="remove_field" style="margin-left:10px;">Remove</a></div>'); //add input field
        }
    });  
    $('.input_fields_container_part').on("click",".remove_field", function(e){ //user click on remove text links
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
<div class="modal fade" id="modal-Codeudor" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Technical Knowledge</h4>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Technical Knowledge" name="tkw[]" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
       </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
    
  </form>

</div>
@endsection
