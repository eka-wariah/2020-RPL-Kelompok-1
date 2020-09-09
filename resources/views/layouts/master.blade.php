<!DOCTYPE html>
<html lang="en">
	<!-- Mirrored from flatable.phoenixcoded.net/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:25:26 GMT -->
	@include('layouts.head')
	<body>
		<div class="theme-loader">
			<div class="ball-scale">
				<div></div>
			</div>
		</div>
		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<nav class="navbar header-navbar pcoded-header" header-theme="theme4">
					<div class="navbar-wrapper">
						<div class="navbar-logo">
							<a class="mobile-menu" id="mobile-collapse" href="#!">
								<i class="ti-menu"></i>
							</a>
							<a class="mobile-search morphsearch-search" href="#">
								<i class="ti-search"></i>
							</a>
							<a href="/dashboard">
								<img class="img-fluid" src="{{ asset('frontend') }}/assets/images/B.png" height="1500px" width="180 px" alt="Theme-Logo" />
							</a>
							<a class="mobile-options">
								<i class="ti-more"></i>
							</a>
						</div>
						<div class="navbar-container container-fluid">
							<div>
								<ul class="nav-left">
									<li>
										<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
									</li>
									<li>
										<a href="#!" onclick="javascript:toggleFullScreen()">
											<i class="ti-fullscreen"></i>
										</a>
									</li>
									
								</ul>
								<ul class="nav-right">
							
									<li class="user-profile header-notification">
										<a href="#!">
											<img src="{{ asset('frontend') }}/assets/images/user.png" alt="User-Profile-Image">
											<span>{{Auth()->user()->name}}</span>
											<i class="ti-angle-down"></i>
										</a>
										<ul class="show-notification profile-notification">
											<li>
										
												<a  href="/students/{{auth()->user()->id}}/detail">
													
													<i class="ti-layout-sidebar-left"></i> Detail
												</a>
											</li>
											<li>
												
												<a  href="{{ route('logout') }}"  onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
													
													<i class="ti-layout-sidebar-left"></i> Logout
												</a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
													@csrf
												</form>
											</li>
										</ul>

									</li>
								</ul>
								<div id="morphsearch" class="morphsearch">
									<form class="morphsearch-form">
										<input class="morphsearch-input" type="search" placeholder="Search..." />
										<button class="morphsearch-submit" type="submit">Search</button>
									</form>
									<div class="morphsearch-content">
										<div class="dummy-column">
											<h2>People</h2>
											<a class="dummy-media-object" href="#!">
												<img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G" alt="Sara Soueidan" />
												<h3>Sara Soueidan</h3>
											</a>
											<a class="dummy-media-object" href="#!">
												<img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G" alt="Shaun Dona" />
												<h3>Shaun Dona</h3>
											</a>
										</div>
										<div class="dummy-column">
											<h2>Popular</h2>
											<a class="dummy-media-object" href="#!">
												<img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
												<h3>Page Preloading Effect</h3>
											</a>
											<a class="dummy-media-object" href="#!">
												<img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
												<h3>Draggable Dual-View Slideshow</h3>
											</a>
										</div>
										<div class="dummy-column">
											<h2>Recent</h2>
											<a class="dummy-media-object" href="#!">
												<img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
												<h3>Tooltip Styles Inspiration</h3>
											</a>
											<a class="dummy-media-object" href="#!">
												<img src="assets/images/avatar-1.png" alt="NotificationStyles" />
												<h3>Notification Styles Inspiration</h3>
											</a>
										</div>
									</div>
									<span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<div id="sidebar" class="users p-chat-user showChat">
					<div class="had-container">
						<div class="card card_main p-fixed users-main">
							<div class="user-box">
								<div class="card-block">
									<div class="right-icon-control">
										<input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
										<div class="form-icon">
											<i class="icofont icofont-search"></i>
										</div>
									</div>
								</div>
								<div class="main-friend-list">
									<div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Josephin Doe</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Lary Doe</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Alice</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/task/task-u2.jpg" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Alia</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Suzen</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
											<div class="live-status bg-danger"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Michael Scofield</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Irina Shayk</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
											<div class="live-status bg-danger"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Sara Tancredi</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Samon</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Daizy Mendize</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
											<div class="live-status bg-danger"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Loren Scofield</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Shayk</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
											<div class="live-status bg-danger"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Sara</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Doe</div>
										</div>
									</div>
									<div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
										<a class="media-left" href="#!">
											<img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
											<div class="live-status bg-success"></div>
										</a>
										<div class="media-body">
											<div class="f-13 chat-header">Lary</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="showChat_inner">
					<div class="media chat-inner-header">
						<a class="back_chatBox">
							<i class="icofont icofont-rounded-left"></i> Josephin Doe
						</a>
					</div>
					<div class="media chat-messages">
						<a class="media-left photo-table" href="#!">
							<img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
						</a>
						<div class="media-body chat-menu-content">
							<div class="">
								<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
								<p class="chat-time">8:20 a.m.</p>
							</div>
						</div>
					</div>
					<div class="media chat-messages">
						<div class="media-body chat-menu-reply">
							<div class="">
								<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
								<p class="chat-time">8:20 a.m.</p>
							</div>
						</div>
						<div class="media-right photo-table">
							<a href="#!">
								<img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
							</a>
						</div>
					</div>
					<div class="chat-reply-box p-b-20">
						<div class="right-icon-control">
							<input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
							<div class="form-icon">
								<i class="icofont icofont-paper-plane"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<nav class="pcoded-navbar" pcoded-header-position="relative">
							@include('layouts.sidebar')
						</nav>
						<div class="pcoded-content">
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-header">
											<div class="page-header-title">
												<h4>@yield('nameContent')</h4>
											</div>
											<div class="page-header-breadcrumb">
												<ul class="breadcrumb-title">
													<li class="breadcrumb-item">
															<i class="icofont icofont-home"></i>
															<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
														</li>
													</a>
												</li>
												
											</ul>
										</div>
									</div>
									<div class="page-body">
										<div class="row">
											@yield('content')
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="styleSelector">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@include ('layouts.script')
</body>
</html>