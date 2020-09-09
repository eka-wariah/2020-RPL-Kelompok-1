<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
							<div class="pcoded-inner-navbar main-menu">
								<div class="">
									<div class="main-menu-header">
										<img class="img-40" src="{{ asset('frontend') }}/assets/images/user.png" alt="User-Profile-Image">
										<div class="user-details">
											<span>{{Auth()->user()->name}}</span>
											<span id="more-details">Welcome<i class="ti-angle-down"></i></span>
										</div>
									</div>
									<div class="main-menu-content">
										<ul>
											<li class="more-details">
												<a  href="{{ route('logout') }}"  onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
													
													<i class="ti-layout-sidebar-left"></i> Logout
												</a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
													@csrf
												</form>
											</li>
										</ul>
									</div>
								</div>
								<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">Navigation</div>
								<ul class="pcoded-item pcoded-left-item">
									<li class="pcoded-hasmenu active pcoded-trigger">
										<a href="javascript:void(0)">
											<span class="pcoded-micon"><i class="ti-home"></i></span>
											<span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
											<span class="pcoded-mcaret"></span>
										</a>
										<ul class="pcoded-submenu">
											<li class="active">
												<a href="/dashboard">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Dashboard</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
										
										</ul>
									</li>
								</ul>
								@if (auth()->user()->role_id==1)
								<ul class="pcoded-item pcoded-left-item">
									<li class="pcoded-hasmenu active pcoded-trigger">
										<a href="javascript:void(0)">
											<span class="pcoded-micon"><i class="ti-home"></i></span>
											<span class="pcoded-mtext" data-i18n="nav.dash.main">Admin Features</span>
											<span class="pcoded-mcaret"></span>
										</a>
										<ul class="pcoded-submenu">
											<li class="active">
												<a href="/teachers">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Data Teachers</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="active">
												<a href="/students">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Data Students</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
											<li class="active">
												<a href="/ekstracurriculars">
													<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
													<span class="pcoded-mtext" data-i18n="nav.dash.default">Manage Ekstracurriculars</span>
													<span class="pcoded-mcaret"></span>
												</a>
											</li>
										
										</ul>
									</li>
								</ul>
								@endif

								@if (auth()->user()->role_id==3)
								<ul class="pcoded-item pcoded-left-item">
									<li class=" ">
										<a href="/choose" data-i18n="nav.form-masking.main">
											<span class="pcoded-micon"><i class="ti-write"></i></span>
											<span class="pcoded-mtext">Choose Ekstracurriculars</span>
											<span class="pcoded-mcaret"></span>
										</a>
									</li>
								</ul>

								<ul class="pcoded-item pcoded-left-item">
									<li class=" ">
										<a href="/myekskul" data-i18n="nav.form-masking.main">
											<span class="pcoded-micon"><i class="ti-write"></i></span>
											<span class="pcoded-mtext">My-Ekstracurricular</span>
											<span class="pcoded-mcaret"></span>
										</a>
									</li>
								</ul>
								@endif
						
@if (auth()->user()->role_id==2)
							<ul class="pcoded-item pcoded-left-item">
									<li class=" ">
										<a href="/students" data-i18n="nav.form-masking.main">
											<span class="pcoded-micon"><i class="ti-write"></i></span>
											<span class="pcoded-mtext">Data Students</span>
											<span class="pcoded-mcaret"></span>
										</a>
									</li>
								</ul>
							</div>
@endif