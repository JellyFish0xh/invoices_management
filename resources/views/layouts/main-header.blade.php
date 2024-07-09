<!-- main-header opened -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="logo-1" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="dark-logo-1" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-2" alt="logo"></a>
							<a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="dark-logo-2" alt="logo"></a>
						</div>
						<div class="app-sidebar__toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
							<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
						</div>
					</div>
					<div class="main-header-right">
						<ul class="nav">
							<li class="">
								<div class="dropdown  nav-itemd-none d-md-flex">
									<a href="#" class="d-flex  nav-item nav-link pl-0 country-flag1" data-toggle="dropdown" aria-expanded="false">
										<span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img src="{{URL::asset('assets/img/flags/us_flag.jpg')}}" alt="img"></span>
										<div class="my-auto">
											<strong class="mr-2 ml-2 my-auto">English</strong>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
										<a href="#" class="dropdown-item d-flex">
											<span class="avatar  ml-3 align-self-center bg-transparent"><img src="{{URL::asset('assets/img/flags/ar_flag.png')}}" alt="img"></span>
											<div class="d-flex">
												<span class="mt-2">Arabic</span>
											</div>
										</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="nav nav-item  navbar-nav-right ml-auto">

							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href=""><img alt="" src='{{URL::asset('assets/img/faces/'.auth()->user()->name.'.jpg')}}'></a>
								<div class="dropdown-menu">
									<div class="main-header-profile bg-primary p-3">
										<div class="d-flex wd-100p">
											<div class="main-img-user"><img alt="" src='{{URL::asset('assets/img/faces/'.auth()->user()->name.'.jpg')}}' class=""></div>
											<div class="mr-3 my-auto">
												<h6>{{auth()->user()->name}}</h6>
											</div>
										</div>
									</div>
									<a class="dropdown-item" href="{{route('profile.edit')}}"><i class="bx bx-cog"></i> Edit Profile</a>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bx bx-log-out"></i> Sign Out</button>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- /main-header -->
