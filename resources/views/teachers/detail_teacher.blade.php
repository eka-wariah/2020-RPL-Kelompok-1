@extends('layouts.master')
@section('nameContent')
Teachers Data
@endsection
@section('content')
<div class="col-md-12 ">
	<div class="card">
		<div class="widget-profile-card-1">
			<div class="middle-user">
				<img class="img-fluid img-thumbnail" src="{{asset('frontend')}}/assets/images/user.png" alt="Profile-user">
			</div>
		</div>
		<div class="card-block text-center">
			<h3>{{$teacher->name}}</h3>
			<h6>Teachers</h6>
			<h5>SMKS MAHAPUTRA CERDAS UTAMA</h5>
			<p>Jl.Katapang Andir KM.4 Kp.Pasantren Ds.Sukamukti Kec.Katapang Kab.Bandung </p></div>
			<div class="card-footer bg-inverse">
				<div class="row text-center">
				</div>
			</div>
		</div>
	</div>
	@endsection