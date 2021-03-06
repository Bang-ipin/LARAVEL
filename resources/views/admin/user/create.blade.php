@extends('layouts.admin')

@section('title')
	<title> {{ $title }} </title>
	@endsection
@section('section')
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>{{ $title }} <small></small></h3>
		</div>

	</div>

	<div class="clearfix"></div>
	
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="row">
					<div class="x_content">
						<form action="{{ url('appmaster/user/create') }}" id="formuser" class="form-horizontal form-bordered form-label-stripped" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="item form-group">
								<label class="col-md-2 col-sm-2 col-xs-12 control-label">Nama<span class="required">*</span></label>
								<div class="col-md-10 col-xs-12">
									<input class="form-control" type="hidden" id="id" value=" {{ $id }}" name="id" >
									<input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-md-2 col-sm-2 col-xs-12 control-label">Email<span class="required">*</span></label>
								<div class="col-md-10 col-xs-12">
									<input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" />
									
								</div>
							</div>
							<div class="item form-group">
								<label class="col-md-2 col-sm-2 col-xs-12 control-label">Password <span class="required">*</span></label>
								<div class="col-md-10 col-xs-12">
									<input class="form-control" type="password" id="password" name="password" >
								</div>
							</div>
							<div class="item form-group">
								<label class="col-md-2 col-sm-2 col-xs-12 control-label">Konfirmasi Password <span class="required">*</span></label>
								<div class="col-md-10 col-xs-12">
									<input class="form-control" type="password" id="confirm_password"  name="confirm_password" >
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="item form-group">
								<div class="col-md-4 col-md-offset-8">
									<a href="{{ url('appmaster/user') }}" class="btn btn-primary" name="back"><i class="fa fa-angle-left"></i> Back</a>
									<button class="btn btn-warning" name="reset" id="reset" type="reset" ><i class="fa fa-reply"></i> Reset</button>
									<button class="btn btn-success"  name="submit" id="submituser"><i class="fa fa-check"></i> Save</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


