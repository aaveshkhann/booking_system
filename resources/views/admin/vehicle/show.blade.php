@extends('admin.layout.app');

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show  Vehicle <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/vehicle" class="text-white"> Add  Vehicles</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Show  Vehicles</li>
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
					<h4 class="box-title">Show Vehicle</h4>
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
        <th>Plate Number</th>
        <th> Model</th>
        <th>Status</th>
        <th>Odometer</th>
        <th>Fuel Level</th>
        <th>Condition</th>
        <th>Last Serviced Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ( $vehicles as $vehicle )


      <tr class="table-info">
        <th scope="row">{{$vehicle->plate_number}}</th>
        <td>{{$vehicle->model}} </td>
        <td>{{$vehicle->Status}} </td>
        <td>{{$vehicle->Odometer}}</td>
        <td>{{$vehicle->fuel_level}}</td>
        <td>{{$vehicle->Condition}}</td>
        <td>{{$vehicle->Last_serviced_date}}</td>

        <td>
            <a href="{{route('vehicle.edit',['id'=>$vehicle->id])}}"><i class="fas fa-edit"></i> </a>
            <a href="{{route('delete.vehicle',['id'=>$vehicle->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>
     @endforeach

    </tbody>
    <!--Table body-->

  </table>
  <div class="m-3">
  {{$vehicles->links()}}
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
