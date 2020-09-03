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
									<img class="user-img img-circle" src="{{ asset('frontend') }}/assets/images/user-profile/user-img.jpg" alt="user-img">
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
										<button type="button" class="btn btn-primary m-r-10"><i class="icofont icofont-plus"></i> Follow</button>
										<button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i> Message</button>
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
						<a class="nav-link" data-toggle="tab" href="#binfo" role="tab" aria-expanded="false">Descriptions</a>
						<div class="slide"></div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#contacts" role="tab" aria-expanded="false">Members</a>
						<div class="slide"></div>
					</li>
					<li class="nav-item"></li>
					
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane active" id="personal" role="tabpanel" aria-expanded="true">
					<div class="card">
						<div class="card-header">
							<h5 class="card-header-text">About Me</h5>
							<a href="{{URL::previous()}}"  class="btn btn-sm btn-danger waves-effect waves-light f-right" >Back</a>
							
						</div>
						<div class="card-block">
							<div class="view-info">
								<div class="row">
									<div class="col-lg-12">
										<div class="general-info">
											<div class="row">
												<div class="col-lg-12 col-xl-6">
													<table class="table m-0">
														<tbody>
															<tr>
																<th scope="row">Full Name</th>
																<td>Josephine Villa</td>
															</tr>
															<tr>
																<th scope="row">Gender</th>
																<td>Female</td>
															</tr>
															<tr>
																<th scope="row">Birth Date</th>
																<td>October 25th, 1990</td>
															</tr>
															<tr>
																<th scope="row">Marital Status</th>
																<td>Single</td>
															</tr>
															<tr>
																<th scope="row">Location</th>
																<td>New York, USA</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="col-lg-12 col-xl-6">
													<table class="table">
														<tbody>
															<tr>
																<th scope="row">Email</th>
																<td><a href="#!"><span class="__cf_email__" data-cfemail="b9fddcd4d6f9c9d1dcd7d0c197dad6d4">[email&nbsp;protected]</span></a></td>
															</tr>
															<tr>
																<th scope="row">Mobile Number</th>
																<td>(0123) - 4567891</td>
															</tr>
															<tr>
																<th scope="row">Twitter</th>
																<td>@phoenixcoded</td>
															</tr>
															<tr>
																<th scope="row">Skype</th>
																<td>phoenixcoded.demo</td>
															</tr>
															<tr>
																<th scope="row">Website</th>
																<td><a href="#!">www.demo.com</a></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="edit-info" style="display: none;">
								<div class="row">
									<div class="col-lg-12">
										<div class="general-info">
											<div class="row">
												<div class="col-lg-6">
													<table class="table">
														<tbody>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-user"></i></span>
																		<input type="text" class="form-control" placeholder="Full Name">
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-radio">
																		<div class="group-add-on">
																			<div class="radio radiofill radio-inline">
																				<label>
																					<input type="radio" name="radio" checked=""><i class="helper"></i> Male
																				</label>
																			</div>
																			<div class="radio radiofill radio-inline">
																				<label>
																					<input type="radio" name="radio"><i class="helper"></i> Female
																				</label>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date">
																</td>
															</tr>
															<tr>
																<td>
																	<select id="hello-single" class="form-control">
																		<option value="">---- Marital Status ----</option>
																		<option value="married">Married</option>
																		<option value="unmarried">Unmarried</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
																		<input type="text" class="form-control" placeholder="Address">
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="col-lg-6">
													<table class="table">
														<tbody>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
																		<input type="text" class="form-control" placeholder="Mobile Number">
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
																		<input type="text" class="form-control" placeholder="Twitter Id">
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
																		<input type="email" class="form-control" placeholder="Skype Id">
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
																		<input type="text" class="form-control" placeholder="website">
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="text-center">
												<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
												<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="tab-pane" id="binfo" role="tabpanel" aria-expanded="false">
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-header-text">Description About Me</h5>
									<button id="edit-info-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
									<i class="icofont icofont-edit"></i>
									</button>
								</div>
								<div class="card-block user-desc">
									<div class="view-desc">
										<p>{{$teacher->description}}</p>
									</div>
									<div class="edit-desc" style="display: none;">
										<div class="col-md-12">
											<textarea id="description" style="visibility: hidden;">                                                            &lt;p&gt;{{$teacher->description}}&lt;/p&gt;
											</textarea>
										</div>
										<div class="text-center">
											<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>
											<a href="#!" id="edit-cancel-btn" class="btn btn-default waves-effect m-t-20">Cancel</a>
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
										<h5 class="card-header-text">Contacts</h5></div>
										<div class="card-block contact-details">
											<div class="dt-responsive table-responsive">
												<div id="custom-btn_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="dt-buttons"><a class="dt-button" tabindex="0" aria-controls="custom-btn" href="#"><span>My Custom button</span></a></div><div id="custom-btn_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="custom-btn"></label></div><table id="custom-btn" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="custom-btn_info">
												<thead>
													<tr>
														<th colspan="" rowspan="" headers="" scope="">Name</th>
														<th colspan="" rowspan="" headers="" scope="">Email</th>
														<th colspan="" rowspan="" headers="" scope="">Action</th>
													</tr>
												</thead>
												<tbody>

													<tr>
														<td colspan="" rowspan="" headers=""></td>
														<td colspan="" rowspan="" headers=""></td>
															<td>
																	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
																	<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
																		<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
																		<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
																		<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
																		<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
																		<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
																		<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
																		<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
																	</div>
																</td>
													</tr>

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