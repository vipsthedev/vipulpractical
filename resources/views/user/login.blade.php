
@extends('welcome')
@section('content')

<div class="container">
  <a href="{{action('UserController@create')}}" class="btn btn-warning">Register</a>|
  <a href="{{action('UserController@login')}}" class="btn btn-warning">Login</a><br><br>

  <form method="post" action="/userlogin">
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
      {{csrf_field()}}
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Email" name="email" >
       </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
      <div class="col-sm-10">
      <input type="password" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Password" name="password" >
       </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary" value="Login">
    </div>
  </form>
</div>
@endsection
