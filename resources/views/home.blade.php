@extends('layouts.app')

@section('content')
<div class="container">
  @include('flash::message')
   <div class="row">
        <h3><b>List of Registered Devices</b></h3>
        <div class="col-md-12">
           <table class="table table-striped" id="RegisteredDevices">
               <thead>
                   <th>User Name</th>
                   <th>Position</th>
                   <th>Office</th>
                   <th>Device Type</th>
                   <th>Device Model</th>
                   <th>MAC Address</th>                                    
                   <th><center>Action</center></th>
               </thead>
               <tbody>
                @foreach($devregdata as $value)
                   <tr>
                       <td>{{ $value->endusermodels->fullname }}</td>
                       <td>{{ $value->endusermodels->position }}</td>
                       <td>{{ $value->officemodels->office_name }} </td>
                       <td>{{ $value->devtypemodels->device_type }}</td>
                       <td>{{ $value->device_model }}</td>
                       <td>{{ $value->mac_address }} </td>                       
                       <td>
                           <a href="/devregedit/{{ $value->id }}" class="btn btn-sm btn-outline-primary">Edit</a>
                       </td>
                   </tr>
                @endforeach
               </tbody>
           </table>
        </div>
               
        <br>
        <br>

        <h3><b>List of Registered Users</b></h3>
        <div class="col-md-12">
           <table class="table table-striped" id="RegisteredUsers">
               <thead>
                   <th>User Name</th>
                   <th>Position</th>
                   <th>Office</th>
                   <th><center>Action</center></th>
               </thead>
               <tbody>
                @foreach($endusersdata as $value)
                   <tr>
                       <td>{{ $value->fullname }}</td>
                       <td>{{ $value->position }}</td>
                       <td>{{ $value->officemodels->office_name }} </td>
                       <td>
                           <a href="/edituser/{{ $value->id }}" class="btn btn-sm btn-outline-primary">Edit</a>
                       </td>
                   </tr>
                @endforeach
               </tbody>
           </table>
        </div>
    </div>
</div>
@endsection
@section('script')
     <script>
        $(document).ready( function () {
            $('#RegisteredDevices').DataTable();
        } );
    </script>
     <script>
        $(document).ready( function () {
            $('#RegisteredUsers').DataTable();
        } );
    </script>      
    <script>
        $('div.alert').not('.alert-important').delay(5000).fadeOut(350);
    </script>
@endsection