@extends('admin.layout.app');

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show Customers <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/customer/add" class="text-white"> Add Customer</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Show Customer</li>
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
					<h3 class="box-title">Add Customer</h3>
				</div>
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
        <th>Customer Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Zip</th>
        <th>State</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ( $customers as $customer )


      <tr class="table-info">
        <th scope="row">{{$customer->customer_id}}</th>
        <td>{{$customer->name}}</td>
        <td>{{$customer->address}}</td>
        <td>{{$customer->city}}</td>
        <td>{{$customer->zip}}</td>
        <td>{{$customer->state}}</td>
        <td>{{$customer->country}}</td>
        <td>{{$customer->telephone}}</td>
        <td>{{$customer->email}}</td>
        <td>
            <a href="{{route('customer.edit',['id'=>$customer->id ])}}"><i class="fas fa-edit"></i> </a>
            <a href="{{route('customer.delete',['id'=> $customer ->id])}}"><i class="fa fa-trash" aria-hidden="true"></i> </a>
        </td>
      </tr>
     @endforeach

    </tbody>
    <!--Table body-->

  </table>
  <div class="m-3">
  {{$customers->links()}}
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

