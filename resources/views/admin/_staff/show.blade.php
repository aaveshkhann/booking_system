@extends('admin.layout.app');

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show staff <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/staff" class="text-white"> Add staffs</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Show staffs</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add staff</h3>
				</div>
                {{-- <button onclick="window.print()" >print</button> --}}
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text text-center">
													</div>
					</div>
				</div>
  <!--Table-->
  <div class="box-body" style="overflow-y: scroll;overflow-x:scroll">
    <table id="example1" class="table table-bordered table-striped display responsive nowrap">
    <!--Table head-->
    <thead>
      <tr>
        <th>Staff Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ( $Staffs as $staff )


      <tr class="table-info">
        <th scope="row">{{$staff->staff_id}}</th>
        <td>{{$staff->first_name}} </td>
        <td>{{$staff->last_name}} </td>
        <td>{{$staff->Gender}}</td>
        <td>{{$staff->phone}}</td>
        <td>{{$staff->email}}</td>
        <td>
            <a href="{{route('staffs.edit',['id'=>$staff->id ])}}"><i class="fas fa-edit"></i> </a>
            <a href="{{route('delete.staffs',['id'=>$staff->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>
     @endforeach

    </tbody>
    <!--Table body-->

  </table>
  <div class="m-3">
  {{$Staffs->links()}}
</div>
  <!--Table-->
  </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
      $('#example1').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv',  'print'
          ]
      } );
  } );
  </script>

@endsection
