@extends('layouts.app')
@section('content')
	<div class="container">
		@include('flash::message')
		<h3 align="center"><b>Add Office</b></h3>
		<form action="{{ url('/createoffice') }}" method ="POST">
			@csrf
			@csrf
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">												
								{{--Offices--}}
								<div class="form-group">
									<label for="exampleInputoffice">Office</label>
									<input type="text" class="form-control" id="exampleInputoffice" name="office_name" aria-describedby="officeHelp" placeholder="Input Office Name" required>
								</div>
								<div align="center">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>			
							</div>

							<div class="col-md-6">
								{{--Office--}}
								<div class="form-group">						
									<label for="exampleInputList">List of Offices</label>
								</div>	
						           <table class="table table-striped" id="officerec">
						               <thead>
						                   <th>Office</th>
						                   <th><center>Action</center></th>
						               </thead>
						               <tbody>
						                @foreach($officedata as $value)
						                   <tr>
						                       <td>{{ $value->office_name }}</td>
						                       <td>
						                           <a href="/editoffice/{{ $value->id }}" class="btn btn-sm btn-outline-primary">Edit</a>
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
            $('#officerec').DataTable();
        } );
    </script>  
	<script>
		$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
	</script>
@endsection
