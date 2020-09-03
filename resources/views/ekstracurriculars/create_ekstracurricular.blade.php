@extends('layouts.master')
@section('nameContent')
Ekstracurriculars Data
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
								<input type="text" class="form-control @error('name') is-invalid @enderror" name="ekstracurriculars_name" id="name" placeholder="Text Input Name">
								@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								<span class="messages"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Teacher Name</label>
							<div class="col-sm-10">
								<select class="form-control" name="teacher">
									@foreach($teacher as $teach)
									<option value="{{$teach->id}}">{{$teach->name}}</option>
									@endforeach
								</select>
								<span class="messages"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Description</label>
							<div class="col-sm-10">
								<textarea name="description" class="form-control"></textarea>
								<span class="messages"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2"></label>
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary m-b-0">Submit</button>
								<a href="{{URL::previous()}}" class="btn btn-danger">Back</a>
							</div>
						</div>
					</form>
				</div>
			</div>
@endsection