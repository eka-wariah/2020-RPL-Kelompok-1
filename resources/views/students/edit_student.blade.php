@extends('layouts.master')
@section('nameContent')
Students Edit
@endsection
@section('content')
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Basic Inputs Validation</h5>
					<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
					<div class="card-header-right">
						<i class="icofont icofont-rounded-down"></i>
						<i class="icofont icofont-refresh"></i>
						<i class="icofont icofont-close-circled"></i>
					</div>
				</div>
				<div class="card-block">
					<form id="main" method="post" action="" novalidate="">
						@csrf
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$student->name}}" name="name" id="name" placeholder="Text Input Name">
								@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								<span class="messages"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$student->email}}"" name="email" placeholder="Enter valid e-mail address">
								@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								<span class="messages"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2"></label>
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary m-b-0">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
@endsection