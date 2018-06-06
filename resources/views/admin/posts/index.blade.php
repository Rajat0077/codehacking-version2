@extends('layouts.admin')


@section('content')


<h1> View All Posts  </h1>
<hr>


<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th> Photo (Id)</th>  
        <th>User (Id)</th>
        <th> Category (Id)</th>
        
        <th>Title</th>
        <th>Body</th>
        <th>Created At</th>
        <th>Updated At</th>

      </tr>
    </thead>
    <tbody>

    	@if($posts)	

    	@foreach($posts as $post )

      <tr>
        <td>{{ $post -> id }}</td>
        <td> <img height="50" src="{{ $post -> photo ? $post->photo-> file : 'http://placehold.it/400x400'}}" alt=""> </td>
        <td>{{ $post -> user-> name}}</td>
        <td>{{ $post -> category ? $post->category -> name : 'UnCategorized' }}</td>    

        <td>{{ $post -> title }}</td>
        <td>{{ $post -> body }}</td>
        <td>{{ $post -> created_at -> diffForHumans() }}</td>
        <td>{{ $post -> updated_at -> diffForHumans() }}</td>
      </tr>
      
       @endforeach

       @endif

    </tbody>
  </table>

@endsection