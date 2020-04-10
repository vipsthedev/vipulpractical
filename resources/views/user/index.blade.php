@extends('welcome')
@section('content')
  <div class="container">
    <table class="table table-striped">
      <a href="{{action('UserController@create')}}" class="btn btn-warning">AddMore...</a>
    <thead>
      <tr>
        <th>ID</th>
        <th>UserName</th>
        <th>Email</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($user as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['name']}}</td>
        <td>{{$post['email']}}</td>
        <td>{{$post['title']}}</td>

        <td><a href="{{action('UserController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
       <td>
           <a href="{{action('UserController@destory', $post['id'])}}" class="btn btn-warning">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection