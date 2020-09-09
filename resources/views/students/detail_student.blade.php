@extends('layouts.master')
@section('nameContent')
Students Data
@endsection
@section('content')

<div class="col-lg-12 col-xl-12">
	<div class="card user-card">
		<div class="card-header-img">
			<img class="img-fluid img-circle" src="{{asset('frontend')}}/assets/images/user.png" alt="card-img">
			<h4>{{$student->name}}</h4>
			<h6>Students</h6>
		</div>
		<center>
		<h5>SMKS MAHAPUTRA CERDAS UTAMA</h5>
		<p>Jl.Katapang Andir KM.4 Kp.Pasantren Ds.Sukamukti Kec.Katapang Kab.Bandung </p>
		<div>
			@if(auth()->user()->role_id==1)
			<a href="/students/{{$student->id}}/edit" class="btn btn-success"><i class="ion-ios-compose"></i></a>
			@elseif(auth()->user()->id == $view)
			<a href="/students/{{$student->id}}/edit" class="btn btn-success"><i class="ion-ios-compose"></i></a>
			@endif
			<a href="/dashboard" class="btn btn-danger"><i class="ion-ios-undo"></i></a>
		</div>
		</center>
		<div class="card-footer bg-inverse">
				<div class="row text-center">
				</div>
			</div>
	</div>
</div>
</center>
@endsection