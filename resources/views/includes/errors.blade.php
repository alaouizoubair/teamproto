@if(count($errors) > 0)

<div class="error-container">

	@foreach($errors->all() as $error)

		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Erreur!</strong> {{ $error }}
		</div>

	@endforeach

</div>

@endif

@if(isset($access_errors))

@if(count($access_errors) > 0)



<div class="access-error-container">

	@foreach($access_errors as $access_error)

		<div class="alert alert-warning fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Droit Insuffisant!</strong> {{ $access_error }}
		</div>

	@endforeach

</div>

@endif

@endif