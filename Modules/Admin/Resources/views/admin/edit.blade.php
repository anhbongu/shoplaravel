@extends('admin::layouts.main')

@section('content')

<div class="right_col" role="main">
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>EDIT</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<br>
				<form id="demo-form2" action="" method="post" class="form-horizontal form-label-left" novalidate="">

					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên admin<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="name" type="text" id="first-name" required="required" class="form-control " value="{{ $admin->name }}">
						</div>
						@if($errors->has('name'))
							<span style="color:red">{{ $errors->first('name') }}</span>
							
						@endif
					</div>


					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="email" type="text" id="first-name" required="required" class="form-control " value="{{ $admin->email }}">
						</div>
						@if($errors->has('email'))
							<span style="color:red">{{ $errors->first('email') }}</span>
							
						@endif
					</div>

					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Phone<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="phone" type="text" id="first-name" required="required" class="form-control " value="{{ $admin->phone }}">
						</div>
			
					</div>					

					
					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button class="btn btn-primary" type="button">Cancel</button>
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
					@csrf
				</form>
			</div>
		</div>
	</div>
					
</div>


@endsection