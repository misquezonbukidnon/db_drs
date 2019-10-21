@extends('layouts.app')
@section('content')
	<div class="container">
		@include('flash::message')
		<h3 align="center"><b>Device Type</b></h3>
		<form action="{{ url('/create') }}" method ="POST">
			@csrf
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">												
								{{--Device Types--}}
								<div class="form-group">
									<label for="exampleInputdtype">Device Type</label>
									<input type="text" class="form-control" id="exampleInputdtype" name="device_type" aria-describedby="dtypeHelp" placeholder="Input Device Type" required>
								</div>	

								<div align="center">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>			
							</div>

							<div class="col-md-6">
								{{--Office--}}
								<div class="form-group">						
									<label for="exampleInputList">List of Device Types</label>
								</div>	
						           <table class="table table-striped" id="devicetyperec">
						               <thead>
						                   <th>Device Type</th>
						                   <th><center>Action</center></th>
						               </thead>
						               <tbody>
						                @foreach($devtypedata as $value)
						                   <tr>
						                       <td>{{ $value->device_type }}</td>
						                       <td>
						                           <a href="/editdevtype/{{ $value->id }}" class="btn btn-sm btn-outline-primary">Edit</a>
						                       </td>
						                   </tr>
						                @endforeach
						               </tbody>
						           </table>
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
        $(document).ready( function () {
            $('#devicetyperec').DataTable();
        } );
    </script>  
	<script>
		$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
	</script>
@endsection
