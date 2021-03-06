@extends('layouts.admin')


@section('content')




	<h1> <b>User</b> Section  </h1>


    @if(Session::has('deleted_user'))

    <p class="bg-danger"> {{session('deleted_user')}} </p>  <!-- It willl echo value of deleted_user in session -->

    @endif


<hr>

<table class="table">
    <thead>
      <tr>
        <th>Id </th>
        <th>Photo </th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
      
    @if($users) 	

    	@foreach($users as $user)
      <tr>
        <td>{{ $user -> id }}</td>
        <!-- <td> <img src="/images/{{$user -> photo ? $user-> photo -> file : 'No Profile Pic Exist'}}" alt="image"> </td> -->
        
        <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" > </td>   <!-- Terniary Operations -- See it for Understanding -->

        
        <td> <a href="{{ route('admin.users.edit', $user->id) }}">  {{ $user -> name }}</td>
        
        <td>{{ $user -> email }}</td>

        <td> {{ $user->role ? $user->role->name : 'Not Defined'}} </td>  <!-- Terniary Operations -- See it for Understanding -->


        <td>{{ $user -> is_active == 1 ? 'Active' : 'Inactive' }}</td>  <!-- Terniary Operations -- See it for Understanding -->

        <td>{{ $user -> created_at -> diffForhumans() }} </td>
        <td>{{ $user -> updated_at -> diffForHumans() }} </td>
      </tr>
    
      @endforeach
    @endif
    </tbody>
  </table>


@endsection