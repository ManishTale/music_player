<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from koki.dexignzone.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Mar 2022 06:09:23 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Koki :  Restaurant Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:title" content="Koki :  Restaurant Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:description" content="Koki :  Restaurant Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:image" content="social-image.png"/>
	<meta name="format-detection" content="telephone=no">
    <title>Media Player</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('xhtml/images/favicon.png') }}">
    <!-- Datatable -->
    <link href="{{ asset('xhtml/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    	<link href="{{ asset('xhtml/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('xhtml/css/style.css') }}" rel="stylesheet">


</head>
<body>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
                <img class="logo-abbr" src="{{asset('/xhtml/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{asset('/xhtml/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{asset('/xhtml/images/logo-text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:;" role="button" data-bs-toggle="dropdown">
									<div class="header-info">
										 <small>{{ session('admin_session.name') }}</small>
									</div>
                                    <img src="{{asset('/xhtml/images/profile/12.png')}}" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
									<a class="dropdown-item ai-icon" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
													  <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2">{{ __('Logout') }} </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-dashboard-1"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							{{-- <li><a href="https://www.samajutkarsh.com/media_player/dashboard/">Dashboard</a></li> --}}
                            <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                            
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-app"></i>
							<span class="nav-text">Users</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('users')}}">User List</a></li>
       <!--                     <li><a href="">Profile</a></li>-->
							<!--<li><a href="">Details</a></li>-->
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-bar-chart-1"></i>
							<span class="nav-text">Media Player</span>
						</a>
                        <ul aria-expanded="false">
                           	<li><a href="{{url('products')}}">Media Player Show</a></li>
                           		<li><a href="{{url('currentsongs')}}">Currently Latest Song</a></li>
							<!--<li><a href="https://www.samajutkarsh.com/media_player/musiccategories">Music Categories</a></li>-->
							<li><a href="{{url('musicdirectors')}}">Music Director</a></li>
							<li><a href="{{url('oldsongs')}}">Old Song</a></li>
							<li><a href="{{url('recentsongs')}}">Recently Added Song</a></li>
							<li><a href="{{url('demotionsongs')}}">Devotion Songs</a></li>
							<!--<li><a href="">Songs will play in offline mode</a></li>-->
                        </ul>
                    </li>
      <!--              <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">-->
						<!--	<i class="flaticon-bar-chart-1"></i>-->
						<!--	<span class="nav-text">Song List</span>-->
						<!--</a>-->
                        
      <!--                  <ul aria-expanded="false">-->
						<!--	<li><a href="https://www.samajutkarsh.com/media_player/currentsongs">Currently Latest Song</a></li>-->
							<!--<li><a href="https://www.samajutkarsh.com/media_player/musiccategories">Music Categories</a></li>-->
						<!--	<li><a href="https://www.samajutkarsh.com/media_player/musicdirectors">Music Director</a></li>-->
						<!--	<li><a href="https://www.samajutkarsh.com/media_player/oldsongs">Old Song</a></li>-->
						<!--	<li><a href="https://www.samajutkarsh.com/media_player/recentsongs">Recently Added Song</a></li>-->
						<!--	<li><a href="https://www.samajutkarsh.com/media_player/demotionsongs">Devotion Songs</a></li>-->
      <!--                  </ul>-->
      <!--              </li>-->
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-star"></i>
							<span class="nav-text">Advertisement/Logo</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('advertisement')}}">Add Hoarding</a></li>
                            <!--<li><a href="">Time To Play Add</a></li>-->
                            <!--<li><a href="">Add Logo</a></li>-->
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-star"></i>
							<span class="nav-text">Wishes request</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('birthdays')}}">Birthday Wishes</a></li>
                            <li><a href="{{url('aniverserys')}}">Aniversery Wishes</a></li>
                            <li><a href="{{url('greetings')}}">Greetings</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-star"></i>
							<span class="nav-text">Login reset</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('change-password')}}">Reset Password</a></li>
                        </ul>
                    </li>
                </ul>
			</div>
        </div>
        <main >
            @yield('content')
        </main>
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://infocentroid.com/" target="_blank">InfoCentroid</a> 2022</p>
            </div>
        </div>
    </div>
     <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
         
     </script><script src="{{ asset('xhtml/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('xhtml/xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('xhtml/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('xhtml/js/custom.min.js') }}"></script>
	<script src="{{ asset('xhtml/js/deznav-init.js') }}"></script>
	<!-- Apex Chart -->
	<script src="{{ asset('xhtml/vendor/apexchart/apexchart.js') }}"></script>
    


    <!-- Datatable -->
    <script src="{{ asset('xhtml/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('xhtml/js/plugins-init/datatables.init.js') }}"></script>

</body>

</html>
