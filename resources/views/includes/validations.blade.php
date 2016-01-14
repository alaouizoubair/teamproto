@if(isset($data_validations))

@if(count($data_validations) > 0)

<div class="data-validation-container">

	@foreach($data_validations as $data_validation)

		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Succée!</strong> {{ $data_validation }}
		</div>
		
	@endforeach

</div>

@endif

@endif