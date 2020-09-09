@extends('layouts.master')
@section('nameContent')
My-Ekstracurricular
@endsection
@section('content')
<div class="col-md-2">
	
</div>
<div class="col-md-8">
	<div class="card">
		<div class="card-header">
			<h5>My-Ekstracurriculars</h5>
			<span></span>
			<div class="card-header-right">
				<i class="icofont icofont-rounded-down"></i>
				<i class="icofont icofont-refresh"></i>
				<i class="icofont icofont-close-circled"></i>
			</div>
		</div>
		<div class="card-block">
			<div class="dt-responsive table-responsive">
				<table id="dom-table" class="table table-striped table-bordered nowrap">
					<thead>
						<tr>
							<th><center>Name</center></th>
							<th><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
						@foreach($myekskul as $input)
						<tr>
							<td><center>{{$input->ekstracurriculars_name}}</center></td>
							<td><center><a href="/ekstracurriculars/{{$input->ekstracurriculars_id}}/detail" class=""><i class="ion-eye"></i></a>
							<a href="/ekstracurriculars/{{$input->ekstracurriculars_id}}/out" class=""><i class="ion-eye"></i></a></center></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection