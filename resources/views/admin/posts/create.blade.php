@extends('layouts.admin')

@section('content')

<h1>Create post  </h1>

<hr>

<div class="form-group">
{!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store' , 'files'=>true])!!}

<div class="form-group">	
	{!! Form::label('title','Title:')!!}
	{!! Form::text('title', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">

	{!! Form::label('category_id', 'Category :')!!}
	{!! Form::select('category_id', array(''=>'Choose Category') + $categories, null,  ['class'=>'form-control'])!!}

</div>


<div class="form-group">		
	{!! Form::label('photo_id','Photo Upload :') !!}
	{!! Form::file('photo_id', ['class'=>'form-control']) !!}
</div>	

<div class="form-group">	
	{!! Form::label('body', 'Description: ') !!}
	{!! Form::textarea('body', null, ['class'=> 'form-control' ]) !!}
</div>


<div class="form-group">

	{!! Form::submit('Create post', ['class'=>'btn btn-primary'])!!}
</div>

{!! Form::close()!!}

</div>

<div class="form-group">

	@include('includes.form_error')

</div>

@endsection