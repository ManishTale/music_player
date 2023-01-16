<!DOCTYPE html>
<html lang="en">

<head>
    <title>Media Player</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/js/plugins/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/js/plugins/nice_select/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/js/plugins/player/volume.css') }}>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/js/plugins/scroll/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css') }}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/images/favicon.png') }}">
</head>

<body>
	
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper ms_mainindex_wrapper">
        <!---Side Menu Start--->
        
        
        @include('frontend.body.sidebar')
        <!---Main Content Start--->
        <div class="ms_content_wrapper padder_top8">
        
        
            <!---Header--->
            @include('frontend.body.header')
            <!---index page--->
            
            
            
            <div class="ms_index_wrapper common_pages_space">
                @section('body')
                @show()
            </div>
        </div><!---Main Content end--->



        <!----Audio Player Section---->
        @include('frontend.body.footer')
        
    </div>
    		
    <!--Main js file Style-->
    <script src="{{asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('frontend/assets/js/plugins/swiper/js/swiper.min.js') }}"></script>
    <script src="{{asset('frontend/assets/js/plugins/player/jplayer.playlist.min.js') }}"></script>
    <script src="{{asset('frontend/assets/js/plugins/player/jquery.jplayer.min.js') }}"></script>
    <script src="{{asset('frontend/assets/js/plugins/player/audio-player.js') }}"></script>
    <script src="{{asset('frontend/assets/js/plugins/player/volume.js') }}"></script>
    <script src="{{asset('frontend/assets/js/plugins/nice_select/jquery.nice-select.min.js') }}"></script>
	<script src="{{asset('frontend/assets/js/plugins/scroll/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{asset('frontend/assets/js/custom.js') }}"></script>
    
</body>

</html>