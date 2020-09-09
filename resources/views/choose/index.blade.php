@extends('layouts.master')
@section('nameContent')
Teachers Data
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
			<form action="" method="post" >
				@csrf
				<table id="dom-table" class="table table-striped table-bordered nowrap">
					<thead>
						<tr>
							<th>Pilih</th>
							<th>Ekstracurriculars</th>
							<th>Teachers Name</th>
							<th><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
						
						
						
						@foreach($choose as $no => $input)
						<tr>
							<td><div class="checkbox-fade fade-in-primary">
								<label>
									<input name="{{$input->ekstracurriculars_id}}}}" type="checkbox"  value="{{$input->	ekstracurriculars_id}}">
									<span class="cr">
										<i class="cr-icon icofont icofont-ui-check txt-primary"></i>
									</span>
									<span></span>
								</label>
							</div></td>
							<td colspan="" rowspan="" headers="">{{$input->ekstracurriculars_name}}</td>
							<td>{{$input->name}}</td>
							<td><center><a href="/choose/{{$input->id}}/detail" class="btn btn-primary"><i class="ion-eye"></i></a></center></td>
						</tr>
						@endforeach
						
						
					</tbody>
				</table>
				<input type="submit" class="btn btn-success" value="submit" name="">
			</form>
		</div>
	</div>
</div>
@endsection