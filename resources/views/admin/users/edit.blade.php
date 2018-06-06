@extends('layouts.admin')


@section('content')

	<h1> Edit User </h1>

<div class="row">

	<div class="col-sm-3"> <!-- OPENING col-sm-3 div -->

		<img src="{{$user->photo ? $user->photo -> file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

	</div>  <!-- CLOSING col-sm-3 div -->

<div class="col-sm-9"> <!-- OPENING col-sm-9 div -->

	{!! Form::model($user, ['method'=>'PATCH' , 'action'=>['AdminUsersController@update', $user->id ], 'files'=>true]) !!}

		<div class="form-group">

			{!! Form::label('name','Name:')!!}
			{!! Form::text('name',null, ['class'=>'form-control'])!!}

		</div>

		<div class="form-group">

			{!! Form::label('email', 'Email:')!!}
			{!! Form::email('email',null, ['class'=> 'form-control'])!!}
		</div>

		<div class="form-group">

			{!! Form::label('photo_id', 'File Upload :')!!}
			{!! Form::file('photo_id', ['class'=>'form-control'])!!}


		</div>
	

		<div class="form-group">

			{!! Form::label('role_id','Role:')!!}
			{!! Form::select('role_id', array(''=>'Choose Options' ) + $roles , null, ['class'=>'form-control'])!!} <!-- Concanate $roles called from AdminUsersController for calling name from database -->

		</div>


		<div class="form-group">

			{!! Form::label('is_active','Status:')!!}
			{!! Form::select('is_active',array(1=>'Active', 0=>'Inactive') , null,['class'=>'form-control'])!!}

		</div>


		<div class="form-group">

			{!! Form::label('password', 'password:')!!}
			{!! Form::text('password',null, ['class'=> 'form-control'])!!}
		</div>

		
		<div class="form-group">

			{!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-6'])!!}

		</div>

	{!! Form::close() !!}


	{!! Form::open(['method'=>'Delete', 'action'=>['AdminUsersController@destroy', $user->id]])!!}

	{!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6'])!!}	


	{!! Form::close() !!}



</div> <!-- Closing col-sm-9 div -->

</div>

<div class="row">

	@include('includes.form_error')	    <!-- Including for Error file For validation -->

</div>




@endsection
