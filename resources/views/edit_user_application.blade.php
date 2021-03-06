@extends('layouts.app')
@section('content')
	<div class="container">
		@include('flash::message')
           <table class="table table-striped">
               <thead>
                   <th>User Fullname</th>
                   <th>Position</th>
               </thead>
               <tbody>

                   <tr>                       
                       <td>{{ $endusers->fullname }}</td>
                       <td>{{ $endusers->position }}</td>
                   </tr>
               </tbody>
           </table>
		<h3 align="center"><b>Update Device User</b></h3>
		<form action="/updateuser/{{ $endusers->id }}" method ="POST">
			@csrf
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">								
								{{--Fullname--}}
								<div class="form-group">
									<label for="exampleInputfname">Fullname</label>
									<input type="text" class="form-control" id="exampleInputfname" name="fname" aria-describedby="fnameHelp" placeholder="Fullname" value="{{ $endusers->fullname }}" autocomplete="off" required>
									<small id="lnameHelp" class="form-text text-muted">Please enter the Device User Fullname.</small>
								</div>			
								{{--Position--}}
								<div class="form-group">
									<label for="exampleInputPosition">Position</label>
									<input type="text" class="form-control" id="exampleInputPosition" name="position" aria-describedby="positionHelp" placeholder="Position" value="{{ $endusers->position }}" autocomplete="off" required>
									<small id="positionHelp" class="form-text text-muted">Please enter the user position.</small>
								</div>
							</div>

							<div class="col-md-6">
								{{--Office--}}

								<div class="form-group">
									

									<label for="exampleInputOffice">Office</label>

									<select class="custom-select" name="office_id" placeholder="Select Office" required="">

									<option>Select Office</option>							
									@foreach ($offices as $value)							
										<option value="{{$value->id}}"> {{ $value->office_name}}</option>
									@endforeach

									</select>

									<small id="officeHelp" class="form-text text-muted">Please Select Office.</small>

									
								</div>	
						
									<div class="col-md-12" align="center">
										<p style="color: red"><strong>Review Information before clicking update button</strong></p>
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
