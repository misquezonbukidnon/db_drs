@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        <h3 align=""><b>Select Device User</b></h3>
        <div class="col-md-12">
           <table class="table table-striped" id="UserRecords">
               <thead>
                   <th>User Name</th>
                   <th>Position</th>
                   <th>Office</th>
                   <th><center>Action</center></th>
               </thead>
               <tbody>
                @foreach($datas2 as $value)
                   <tr>
                       <td>{{ $value->fullname }}</td>
                       <td>{{ $value->position }}</td>
                       <td>{{ $value->officemodels->office_name }} </td>
                       <td>
                           <a href="/devregselect/{{ $value->id }}" class="btn btn-sm btn-outline-primary">Select</a>
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
            $('#UserRecords').DataTable();
        } );
    </script>   
    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
@endsection