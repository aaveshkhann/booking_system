@extends('admin.layout.app')


@section('content')

<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add  Vehicle <button class="btn btn-danger btn-sm "> <a href="/admin/evhicle/show" class="text-white">View  Vehicles</a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add  Vehicle</li>

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
					<form role="form" action="{{route('vehicle.update',$vehicles->id)}}" method="post"
						  enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
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
									<label for="exampleInputPassword1">Plate Number</label>
									<input type="text" class="form-control" name="plate_number"
										   id="exampleInputPassword1"
                                           value="{{$vehicles->plate_number}}"
										   placeholder="Enter Plate Number">

                                        </span>
                                        <span class="text-danger">
                                            @error('plate_number')
                                               {{$message}}
                                            @enderror
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1"> Model </label>
									<input type="text" class="form-control" name="model" id="exampleInputPassword1"
                                    value="{{$vehicles->model}}" placeholder="Enter  Model ">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('model')
                                           {{$message}}
                                        @enderror
								</div>

                                <div class="form-group">
									<label for="exampleInputPassword1">Status </label>
									<input type="text" class="form-control" name="Status" id="exampleInputPassword1"
                                    value="{{$vehicles->Status}}"
										   placeholder="Enter Status">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('Status')
                                           {{$message}}
                                        @enderror
								</div>


								<div class="form-group">
									<label for="exampleInputPassword1">Odometer</label>
									<input type="text" class="form-control" name="Odometer"
                                    value="{{$vehicles->Odometer}}"id="exampleInputPassword1"
										   placeholder="Enter Odometer">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('Odometer')
                                           {{$message}}
                                        @enderror
								</div>

                                <div class="form-group">
									<label for="exampleInputPassword1">Fuel Level</label>
									<input type="text" class="form-control" name="fuel_level"
                                    value="{{$vehicles->fuel_level}}" id="exampleInputPassword1"
										   placeholder="Enter Fuel Level">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('fuel_level')
                                           {{$message}}
                                        @enderror
								</div>

                                <div class="form-group">
									<label for="exampleInputPassword1">Condition </label>
									<input type="text" class="form-control" name="Condition"
                                    value="{{$vehicles->Condition}}" id="exampleInputPassword1"
										   placeholder="Enter Condition">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('Condition')
                                           {{$message}}
                                        @enderror
								</div>


                                <div class="form-group">
									<label for="exampleInputPassword1">Last Serviced Date</label>
									<input type="date" class="form-control" name="Last_serviced_date"
                                    value="{{$vehicles->Last_serviced_date}}"id="exampleInputPassword1"
										   placeholder="Enter Last Serviced Date">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('Last_serviced_date')
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
