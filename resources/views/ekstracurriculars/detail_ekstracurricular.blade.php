@extends('layouts.master')
@section('nameContent')
Ekstracurricular
@endsection
@section('content')
<div class="page-body">
	<div class="row">
		<div class="col-lg-12">
			<div class="cover-profile">
				<div class="profile-bg-img">
					<img class="profile-bg-img img-fluid" src="{{ asset('frontend') }}/assets/images/user-profile/bg-img1.jpg" alt="bg-img">
					<div class="card-block user-info">
						<div class="col-md-12">
							<div class="media-left">
								<a href="#" class="profile-image">
									<img class="user-img img-circle" src="{{ asset('frontend') }}/assets/images/user.png" alt="user-img">
								</a>
							</div>
							<div class="media-body row">
								<div class="col-lg-12">
									<div class="user-title">
										<h2>{{$name->ekstracurriculars_name}}</h2>
										<span class="text-white"> {{$teacher->name}} </span>
									</div>
								</div>
								<div>
									<div class="pull-right cover-btn">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="tab-header">
				<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#personal" role="tab" aria-expanded="true">About Organization</a>
						<div class="slide"></div>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#contacts" role="tab" aria-expanded="false">Members</a>
						<div class="slide"></div>
					</li>					
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="true">
					<div class="card">
						<div class="card-header">
							<h5 class="card-header-text">About Organization</h5>
							<a href="{{URL::previous()}}"  class="btn btn-sm btn-danger f-right"><i class="ion-ios-undo"></i></a>
							
						</div>
						<div class="card-block">
							<div class="view-info">
								<div class="row">
									<div class="col-lg-12">
										<div class="general-info">
											<div class="row">
												<div class="col-lg-12 col-xl-6">
													<table class="table m-0">
													<h5 class="text">{{$teacher->description}}</h5>
													</table>
												</div>
												<div class="col-lg-12 col-xl-6">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>

				<div class="tab-pane" id="contacts" role="tabpanel" aria-expanded="false">
					<div class="row">
						
						<div class="col-lg-12">
							<div class="row">
								<div class="col-sm-12">
									<div class="card">
										<div class="card-header">
										<h5 class="card-header-text">Members</h5>
										<a href="{{URL::previous()}}"  class="btn btn-sm btn-danger f-right"><i class="ion-ios-undo"></i></a>
										</div>
										<div class="card-block contact-details">
											<div class="dt-responsive table-responsive">
												<div id="custom-btn_wrapper" class="dataTables_wrapper dt-bootstrap4">
													<div id="custom-btn_filter" class="dataTables_filter">
														<label>Search:
															<input type="search" class="form-control input-sm" placeholder="" aria-controls="custom-btn">
														</label>
													</div>
													<table id="custom-btn" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="custom-btn_info">
												<thead>
													<tr>
														<th colspan="" rowspan="" headers="" scope="">Name</th>
														<th colspan="" rowspan="" headers="" scope="">Email</th>
														<th colspan="" rowspan="" headers="" scope="">Action</th>
													</tr>
												</thead>
												<tbody>
													@foreach($member as $members)
													<tr>
														<td colspan="" rowspan="" headers="">{{$members->name}}</td>
														<td colspan="" rowspan="" headers="">{{$members->email}}</td>
															<td>
																<a href="/students/{{$members->id}}/detail" class="btn btn-success">Details</a>
															</td>
													</tr>
													@endforeach

												</tbody>
											</table>
											<div class="dataTables_info" id="custom-btn_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
											<div class="dataTables_paginate paging_simple_numbers" id="custom-btn_paginate">
												<ul class="pagination">
													<li class="paginate_button page-item previous disabled" id="custom-btn_previous">
														<a href="#" aria-controls="custom-btn" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
													</li>
													<li class="paginate_button page-item active">
														<a href="#" aria-controls="custom-btn" data-dt-idx="1" tabindex="0" class="page-link">1</a>
													</li>
													<li class="paginate_button page-item ">
														<a href="#" aria-controls="custom-btn" data-dt-idx="2" tabindex="0" class="page-link">2</a>
													</li>
													<li class="paginate_button page-item ">
														<a href="#" aria-controls="custom-btn" data-dt-idx="3" tabindex="0" class="page-link">3</a>
													</li>
													<li class="paginate_button page-item ">
														<a href="#" aria-controls="custom-btn" data-dt-idx="4" tabindex="0" class="page-link">4</a>
													</li>
													<li class="paginate_button page-item ">
														<a href="#" aria-controls="custom-btn" data-dt-idx="5" tabindex="0" class="page-link">5</a>
													</li><li class="paginate_button page-item ">
													<a href="#" aria-controls="custom-btn" data-dt-idx="6" tabindex="0" class="page-link">6</a>
												</li>
												<li class="paginate_button page-item next" id="custom-btn_next">
													<a href="#" aria-controls="custom-btn" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection