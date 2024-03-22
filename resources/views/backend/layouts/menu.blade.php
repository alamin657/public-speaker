 <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                       
                      
                    </div>
                    <ul class="nav navbar-nav float-right">
                        
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                      
                       
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">Super Admin</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="{{asset('backend/app-assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                               
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->

     <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('/')}}">
                        <div class="brand-logo"><img class="logo" src="{{asset('backend/app-assets/images/logo/logo.png')}}" /></div>
                        <h2 class="brand-text mb-0">Speaker</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
                <li class=" nav-item"><a href="{{route('frontend.home')}}"><i class="bx bx-globe"></i><span class="menu-title" data-i18n="Dashboard">Website</span></a>
                    
                </li>
                <li class=" navigation-header"><span>Home Page</span>
                </li>
                 <li class=" nav-item"><a href="{{route('admin-banner.index')}}"><i class="bx bxs-map-alt"></i><span class="menu-title" data-i18n="Chat">Banner</span></a>
                </li>
                  <li class=" nav-item"><a href="{{route('admin-counter.index')}}"><i class="bx bxs-customize"></i><span class="menu-title" data-i18n="Chat">Counter </span></a>
                </li>
                 <li class=" navigation-header"><span>Another Page</span>
                </li>
               <li class=" nav-item"><a href="{{route('admin-about.index')}}"><i class="bx bxs-customize"></i><span class="menu-title" data-i18n="Chat">About </span></a>
                </li>
                <li class=" nav-item"><a href="{{route('admin-skill.index')}}"><i class=" bx bx-chat"></i><span class="menu-title" data-i18n="Chat">Skills</span></a>
                </li>
                <li class=" nav-item"><a href="{{route('admin-education.index')}}"><i class="bx bx-chat"></i><span class="menu-title" data-i18n="Chat">Education</span></a>
                </li>
                 <li class=" nav-item"><a href="{{route('portfoloioCategory.index')}}"><i class="bx bx-customize"></i><span class="menu-title" data-i18n="Calendar">PortfolioCategory</span></a>
                </li>
                 <li class=" nav-item"><a href="{{route('admin-portfolio.index')}}"><i class="bx bx-calendar"></i><span class="menu-title" data-i18n="Calendar">Portfolio</span></a>
                </li>
                <li class=" nav-item"><a href="{{route('admin-award.index')}}"><i class="bx bx-grid-alt"></i><span class="menu-title" data-i18n="Kanban">Awards</span></a>
                </li>
                <li class=" nav-item"><a href="{{route('admin-project.index')}}"><i class="bx bx-grid-alt"></i><span class="menu-title" data-i18n="Kanban">Project</span></a>
                </li>
                {{-- <li class=" nav-item"><a href="{{url('/dashboard-gallery')}}"><i class="bx bx-envelope"></i><span class="menu-title" data-i18n="Email">Gallery</span></a>
                </li> --}}
                <li class=" nav-item"><a href="{{route('admin-gallery.index')}}"><i class="bx bx-photo-album"></i><span class="menu-title" data-i18n="Email">Gallery</span></a>
                </li>
                {{-- <li class=" nav-item"><a href="{{route('admin-gallery.create')}}"><i class="bx bx-chat"></i><span class="menu-title" data-i18n="Chat">FAQ</span></a>
                </li> --}}
                <li class=" nav-item"><a href="{{route('admin-blog.index')}}"><i class="bx bx-check-circle"></i><span class="menu-title" data-i18n="Todo">Blog</span></a>
                     {{-- <ul class="menu-content">
                        <li><a href="content-grid.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Grid">Category</span></a>
                        </li>
                        <li><a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Typography">Post</span></a>
                        </li>
                      
                    </ul> --}}
                </li> 
               
                <li class=" nav-item"><a href="{{route('admin-contact.index')}}"><i class="bx bxl-slack"></i><span class="menu-title" data-i18n="Invoice">Contact</span></a>
                   
                </li>
                <li class=" nav-item"><a href="{{route('setting.index')}}"><i class="bx bxs-cog"></i><span class="menu-title" data-i18n="Invoice">Settings</span></a>
                   
                </li>
            </ul>      
        </div>
    </div>
    <!-- END: Main Menu-->