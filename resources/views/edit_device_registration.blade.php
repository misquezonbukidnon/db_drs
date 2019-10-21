@extends('layouts.app')
@section('content')
	<div class="container">
		@include('flash::message')
		<h3 align="center"><b>Update Registered Device</b></h3>
		    <table class="table table-striped col-md-10 offset-1">
               <thead>
                   <th>Name</th>
                   <th>Position</th>
                   <th>Office</th>
               </thead>
               <tbody>
                   <tr>                       
                       <td>{{ $drdata->endusermodels->fullname }}</td>
                       <td>{{ $drdata->endusermodels->position }}</td>
                       <td>{{ $drdata->officemodels->office_name }}</td>
                   </tr>
               </tbody>
           </table>
		<form action="/updatedevreg/{{ $drdata->id }}" method ="POST">
			@csrf			
				<div class="col-md-12">
					<div class="card-header">
						<b>Device Information</b>
					</div>
				</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">								
							{{--Device Type--}}
								<div class="form-group">
									<label for="exampleInputdevtype">Device Type</label>

									<select class="custom-select" name="dev_type" placeholder="Select Device Type" required="">

									<option>Select Device Type</option>						
									@foreach ($devtypes as $value)							
										<option value="{{$value->id}}"> {{ $value->device_type}}</option>
									@endforeach

									</select>

									<small id="officeHelp" class="form-text text-muted">Please Select Office.</small>

								</div>
							{{--Device Model--}}
								<div class="form-group">
									<label for="exampleInputDevMod">Device Model</label>
									<input type="text" class="form-control" id="exampleInputDevMod" name="device_model" aria-describedby="positionHelp" placeholder="Input Device Model" value="{{ $drdata->device_model }}"required>
								</div>			
	
							</div>

							<div class="col-md-6">
							{{--Mac Address--}}
								<div class="form-group">
									<label for="exampleInputMac">MAC Address</label>
									<input type="text" class="form-control" id="exampleInputMac" name="mac_address" aria-describedby="positionHelp" placeholder="Input device MAC address" value="{{ $drdata->mac_address }}" required>
								</div>	
						
								<div class="col-md-12" align="center">
									<p style="color: red"><strong>All fields are required</strong></p>		
								<div align="center">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>			
							</div>
						</div>
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
