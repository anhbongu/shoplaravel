@extends('admin::layouts.main')

@section('content')

<div class="right_col" role="main">
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>EDIT</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="dropdown-item" href="#">Settings 1</a>
							</li>
							<li><a class="dropdown-item" href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<br>
				<form id="demo-form2" action="" method="post" class="form-horizontal form-label-left" novalidate="">

					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên user<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="name" type="text" id="first-name" required="required" class="form-control " value="{{ $user->name }}">
						</div>
						@if($errors->has('name'))
							<span style="color:red">{{ $errors->first('name') }}</span>
							
						@endif
					</div>


					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="email" type="text" id="first-name" required="required" class="form-control " value="{{ $user->email }}">
						</div>
						@if($errors->has('email'))
							<span style="color:red">{{ $errors->first('email') }}</span>
							
						@endif
					</div>

					<div class="item form-group">

						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Phone<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input name="phone" type="text" id="first-name" required="required" class="form-control " value="{{ $user->phone }}">
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