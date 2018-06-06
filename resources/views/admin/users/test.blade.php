@extends('layouts.admin')

@section('content')

<h1> Testing Page For Checking Errors </h1>
<hr>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Id </th>
        <th> Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

    	@if($users)

    		@foreach($users ->all() as $user)
      <tr>
        <td>{{ $user->id}}</td>
        <td>{{ $user-> name}}</td>
        <td>{{ $user -> email}}</td>

        <td>{{ $user->role->name}} </td>

      </tr>
      	   @endforeach
      	@endif
    </tbody>
  </table>

@endsection