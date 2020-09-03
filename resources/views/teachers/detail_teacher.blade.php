@extends('layouts.master')
@section('nameContent')
Teachers Data
@endsection
@section('content')
<div class="col-md-12 ">
	<div class="card">
		<div class="widget-profile-card-1">
			<img class="img-fluid" src="assets/images/slider/slider7.jpg" alt="card-style-1">
			<div class="middle-user">
				<img class="img-fluid img-thumbnail" src="assets/images/user-card/img-round2.jpg" alt="Profile-user">
			</div>
		</div>
		<div class="card-block text-center">
			<h3>{{$teacher->name}}</h3>
			<p>Web Designer</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci a, rem accusantium recusandae beatae.
			</p></div>
			<div class="card-footer bg-inverse">
				<div class="row text-center">
					<div class="col-xs-4 col-sm-4 col-lg-4">
						<h4>400</h4>
						<span>Designs</span>
					</div>
					<div class="col-xs-4 col-sm-4 col-lg-4">
						<h4>90</h4>
						<span>Projects</span>
					</div>
					<div class="col-xs-4 col-sm-4 col-lg-4">
						<h4>70</h4>
						<span>Devlopments</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection