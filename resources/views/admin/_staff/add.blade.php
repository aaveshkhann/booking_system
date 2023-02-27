@extends('admin.layout.app')


@section('content')

<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Add Staff <button class="btn btn-danger btn-sm "> <a href="/admin/staff/show" class="text-white">View Staffs</a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Add Staff</li>

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
					<form role="form" action="{{route('staffs')}}" method="post"
						  enctype="multipart/form-data">
                          @csrf
                          @method('POST')
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
									<label for="exampleInputPassword1">Staff ID</label>
									<input type="text" class="form-control" name="staff_id"
										   id="exampleInputPassword1"
										   placeholder="Enter Staff Id">
                                        <span class="text-danger">
                                            @error('staff_id')
                                               {{$message}}
                                            @enderror
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">First Name</label>
									<input type="text" class="form-control" name="first_name" id="exampleInputPassword1"
										   value="" placeholder="Enter First Name">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('first_name')
                                           {{$message}}
                                        @enderror
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Last Name</label>
									<input type="text" class="form-control" name="last_name" id="exampleInputPassword1"
										   value=""
										   placeholder="Enter Last Name">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('last_name')
                                           {{$message}}
                                        @enderror
								</div>
                                <div class="form-group">
									<div class="form-group">
                                        <label for="exampleInputPassword1">Gender</label>
                                        <select name="Gender"  class="form-control select2">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Custom">Custom</option>
                                        </select>
                                        <span>
                                </span>
                                <span class="text-danger">
                                        @error('Gender')
                                           {{$message}}
                                        @enderror
                                    </div>

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
									<label for="exampleInputPassword1">Email</label>
									<input type="email" class="form-control" name="email" id="exampleInputPassword1"
										   value=""
										   placeholder="Enter Email">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('email')
                                           {{$message}}
                                        @enderror
								</div>
                                <div class="form-group">
									<label for="exampleInputPassword1">Address</label>
									<textarea type="text" placeholder="Enter Address" class="form-control" name="address"
                                     id="exampleInputPassword1"
										   value=""
										  > </textarea>
									<span>
									</span>

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
