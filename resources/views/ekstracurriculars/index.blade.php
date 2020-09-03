@extends('layouts.master')
@section('nameContent')
Ekstracurriculars Data
@endsection
@section('content')
<div class="card">
	<div class="card-header">
		<h5>HTML (DOM) Sourced Data</h5>
		<span>The foundation for DataTables is progressive enhancement, so it's very adept at reading table information directly from the DOM. This example shows how easy it is to add searching, ordering and paging to your HTML table by simply running DataTables on it.</span>
		<div class="card-header-right">
			<i class="icofont icofont-rounded-down"></i>
			<i class="icofont icofont-refresh"></i>
			<i class="icofont icofont-close-circled"></i>
		</div>
	</div>
	<div class="card-block">
		<div class="dt-responsive table-responsive">
			<a href="/ekstracurriculars/create" class="btn btn-success">Create</a>
			<table id="dom-table" class="table table-striped table-bordered nowrap">
				<thead>
					<tr>
						<th>Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $input)
					<tr>
						<td>{{$input->ekstracurriculars_name}}</td>
						<td><a href="/ekstracurriculars/{{$input->ekstracurriculars_id}}/delete" class="btn btn-danger">Delete</a></td>
						<td><a href="/ekstracurriculars/{{$input->ekstracurriculars_id}}/detail" class="btn btn-primary">Detail</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection