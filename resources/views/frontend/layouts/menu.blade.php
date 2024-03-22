<header id="header"
			data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 107, 'stickySetTop': '-107px', 'stickyChangeLogo': true}">
			<div class="header-body border-color-primary border-top-0 box-shadow-none">
				<div class="header-container container z-index-2">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row">
								<div class="header-logo">
									<a href="{{url('/')}}">
										@if($setting && $setting->bs_title)
										<h4>{{$setting->bs_title}}</h4>
											@else
											<img alt="Porto" width="125" height="47" src="{{ asset('images/logo/' . $setting->bs_logo) }}">
											@endif
										</a>
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-row h-100">
								<ul class="header-extra-info d-flex h-100 align-items-center">
									<li class="align-items-center d-none d-lg-block h-100 py-4">
										<div class="header-extra-info-text h-100 py-2">
											<div class="feature-box feature-box-style-2 align-items-center">
												<div class="feature-box-icon">
													<img width="34" height="28"
														src="{{asset('frontend/img/demos/law-firm/icons/envelope.svg')}}" alt="" data-icon
														data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
														style="width: 34px; height: 28px;" />
												</div>
												<div class="feature-box-info ps-1">
													<label>SEND US AN EMAIL</label>
													<strong><a
															href="">{{$setting->bs_email}}</a></strong>
												</div>
											</div>
										</div>
									</li>
									<li class="align-items-center d-none d-lg-block h-100 py-4">
										<div class="header-extra-info-text h-100 py-2">
											<div class="feature-box feature-box-style-2 align-items-center">
												<div class="feature-box-icon">
													<img width="30" height="30" src="{{asset('frontend/img/demos/law-firm/icons/phone.svg')}}"
														alt="" data-icon
														data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary p-relative left-3'}"
														style="width: 30px; height: 30px;" />
												</div>
												<div class="feature-box-info ps-1">
													<label>CALL US NOW</label>
													<strong><a href="">{{$setting->bs_phone}}</a></strong>
												</div>
											</div>
										</div>
									</li>
									<li class="align-items-center d-none d-sm-block h-100 py-4">
										<div class="header-extra-info-text h-100 py-2">
											<div class="feature-box feature-box-style-2 align-items-center">
												<div class="feature-box-icon">
													<img width="33" height="31"
														src="{{asset('frontend/img/demos/law-firm/icons/comment.svg')}}" alt="" data-icon
														data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
														style="width: 33px; height: 31px;" />
												</div>
												<div class="feature-box-info ps-1">
													<label class="p-relative top-4">GET STARTED</label>
													<strong class="text-uppercase"><a href="{{route('frontend.contact')}}">Contact Us <img
																width="27" height="27"
																src="{{asset('frontend/img/demos/law-firm/icons/arrow-right.svg')}}" alt=""
																data-icon
																data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2 d-inline'}" /></a></strong>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="header-nav-bar">
					<div class="container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-column">

										<div
											class="header-nav justify-content-start header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1">
											<div
												class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
												<nav class="collapse">
													<ul class="nav nav-pills" id="mainNav">
														<li class="dropdown">
															<a class="dropdown-item active" href="{{ route('frontend.home') }}">
																Home
															</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" href="{{ route('frontend.about') }}">
																About
															</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" href="{{ route('frontend.skills') }}">
																Skills
															</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" href="{{ route('frontend.education') }}">
																Education
															</a>
														</li>
														{{-- <li class="dropdown">
															<a class="dropdown-item" href="{{url('/certificate')}}">
																Certificate
															</a>
														</li> --}}
												

														<li class="dropdown">
															<a class="dropdown-item" href="{{ route('frontend.portfolio') }}">
																Portfolio
															</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" href="{{ route('frontend.award') }}">
																Awards
															</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item" href="{{ route('frontend.project') }}">
																Project
															</a>
														</li>

														<li class="dropdown">
															<a class="dropdown-item" href="{{ route('frontend.gallery') }}">
																Gallery
															</a>
														</li>

														{{-- <li class="dropdown">
															<a class="dropdown-item" href="{{url('/faq')}}">
																FAQ
															</a>
														</li> --}}
														 <li class="dropdown">
															<a class="dropdown-item" href="{{ route('frontend.blog') }} ">
																Blog
															</a>
														</li> 
														<li class="dropdown">
															<a class="dropdown-item" href="{{ route('frontend.contact') }}">
																Contact
															</a>
														</li>
													
													</ul>
												</nav>
											</div>
										</div>
									</div>

									<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
										data-bs-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>