@extends('admin.layout.app')


@section('content')

<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Booking Vehicle <button class="btn btn-danger btn-sm "> <a href="/admin/bookingevhicle/show" class="text-white">View Booking Vehicles</a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Booking Vehicle</li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container center_div">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="text text-center">
                                    </div>
    </div>
</div>

				<div class="row-2">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text text-center">
													</div>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="row-3">
					<div class="col-md-1"></div>
					<form role="form" action="{{route('bookingvehicle')}}" method="post"
						  enctype="multipart/form-data">
                          @csrf
                          <div class="container ml-5">
						<div class="col-md-6">
							<div class="box-body">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                    <button class="close" data-dismiss="alert">×</button>
                                </div>
                              @endif
								<div class="form-group">
									<label for="exampleInputPassword1">Vehicale ID</label>
									<input type="text" class="form-control" name="Vehicale_id"
										   id="exampleInputPassword1"
										   placeholder="Enter Staff Id">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1"> Name</label>
									<input type="text" class="form-control" name="name" id="exampleInputPassword1"
										   value="" placeholder="Enter  Name">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('name')
                                           {{$message}}
                                        @enderror
								</div>

                                <div class="form-group">
									<label for="exampleInputPassword1">Driver's License</label>
									<input type="text" class="form-control" name="Driver_License" id="exampleInputPassword1"
										   value=""
										   placeholder="Enter Driver's License">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('Driver_License')
                                           {{$message}}
                                        @enderror
								</div>


								<div class="form-group">
									<label for="exampleInputPassword1">Phone</label>
									<input type="text" class="form-control" name="phone"
										   value="" id="exampleInputPassword1"
										   placeholder="Enter Phone">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('phone')
                                           {{$message}}
                                        @enderror
								</div>

                                <div class="form-group">
									<label for="exampleInputPassword1">Start Date</label>
									<input type="date" class="form-control" name="start_date"
										   value="" id="exampleInputPassword1"
										   placeholder="Enter Phone">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('start_date')
                                           {{$message}}
                                        @enderror
								</div>

                                <div class="form-group">
									<label for="exampleInputPassword1">End date</label>
									<input type="Date" class="form-control" name="end_date"
										   value="" id="exampleInputPassword1"
										   placeholder="Enter End date">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('end_date')
                                           {{$message}}
                                        @enderror
								</div>




							</div>
							<!-- /.box-body -->
                        </div>
							<div class="box-footer">
								<button type="submit" class="btn btn-danger">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<!-- form start -->
				<br><br><br>
			</div>
			<!-- /.box -->

		</div>
		<!--/.col (left) -->
	</div>
</div>
@endsection
