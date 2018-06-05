	@if(count($errors) > 0)	 <!-- $errors means lots of error occured while not adding data into it -->

			<div class="alert alert-danger">

				@foreach($errors -> all() as $error)

					<li> {{ $error }}</li>

				@endforeach

			</div>

		@endif