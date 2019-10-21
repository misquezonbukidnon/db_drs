@extends('layouts.app')
@section('content')
	<div class="container">
		@include('flash::message')
		<h3 align="center"><b>Update Device Type</b></h3>
		<form action="/updatedevtype/{{ $devtypedata->id }}" method ="POST">
			@csrf
			<div class="col-md-8 offset-2">
				<div class="card">
					<div class="card-body">												
						{{--Device Type--}}
						<div class="form-group">
							<label for="exampleInputDevType">Device Type</label>
							<input type="text" class="form-control" id="exampleInputDevType" name="device_type" aria-describedby="devicetypeHelp" placeholder="Input Device Type" value="{{ $devtypedata->device_type }}" required>
						</div>
						<div align="center">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>			
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection
@section('script')
	<script>
		$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
	</script>
@endsection
