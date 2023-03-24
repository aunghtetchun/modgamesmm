
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Primary Meta Tags -->
    {{--    <title>Welcome From Mod Games Myanmar</title>--}}
    <meta name="title" content="Welcome From Mod Games Myanmar">
    <meta name="description" content="Welcome from Mod games myanmar. You can download all mod games here.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="Welcome from Mod games myanmar. You can download all mod games here.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('meta_title','Welcome from Mod games myanmar. You can download all mod games here.')">
    <meta property="og:description" content="@yield('meta_description','Welcome from Mod games myanmar. You can download all mod games here.')">
    <meta property="og:image" content="@yield('meta_image', asset(\App\Custom::$info['c-logo']) )">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Welcome from Mod games myanmar. You can download all mod games here.">
    <meta property="twitter:description" content="Welcome from Mod games myanmar. You can download all mod games here.">
    <meta property="twitter:image" content="{{ asset(\App\Custom::$info['c-logo']) }}">
    <meta name="viewport" content="width=device-width, wedding-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset(\App\Custom::$info['c-logo']) }}">
    <link rel="stylesheet" href="{{ asset(\App\Custom::$info['main_css']) }}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/feather-icons-web/feather.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/animate_it/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/summernote/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/game_ui.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/venobox/venobox.css') }}">

    @yield('head')

</head>
<body>
<div class="container-fluid" style="background:  #f7efe9">
    <div class="row">
        {{--        <div class="se-pre-con"></div>--}}
        <div class="col-12 p-0 position-sticky" style=" top: 0; z-index: 16; background: #0d0d0d">
            <div class="container ">
                <div class="row">
                    <div class="col-12 p-0 py-2 ">
                        <nav class="navbar navbar-expand-md navbar-dark ">
                            <label class="logo px-0" onclick="location.href='{{route('game.gameList')}}'"  style="cursor: pointer">
                                <img src="{{ asset(\App\Custom::$info['c-logo']) }}"  style="width: 65px">
                            </label>
                            <span class="h3 pl-2 text-white gsmm" onclick="location.href='{{route('game.gameList')}}'"  style="cursor: pointer">Mod</span>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link "  href="{{ asset('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Category
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item border rounded-0" href="{{ route('game.gameList') }}" >All</a>
                                            @foreach(\App\Category::all() as $cat)
                                                <a class="dropdown-item py-0 py-0 border rounded-0" href="{{ route('game.gameListFilter',$cat->id) }}">{{ $cat->title }}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ route('requestGame.createRequest') }}">Request Game</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ route('suggestGame.createSuggest') }}">Suggest Website</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ route('adGame') }}">Ad Service</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        {{--                        <nav>--}}
                        {{--                            <input type="checkbox" id="check">--}}
                        {{--                            <label for="check" class="checkbtn">--}}
                        {{--                                <i class="feather-menu"></i>--}}
                        {{--                            </label>--}}
                        {{--                            <label class="logo px-0" onclick="location.href='{{route('game.gameList')}}'"  style="cursor: pointer">--}}
                        {{--                                <img src="{{ asset(\App\Custom::$info['c-logo']) }}"  style="width: 70px">--}}
                        {{--                            </label>--}}
                        {{--                            <span class="h3 pl-2 text-white gsmm" onclick="location.href='{{route('game.gameList')}}'"  style="cursor: pointer">Game & Software MM</span>--}}
                        {{--                            <ul class="menulist ">--}}
                        {{--                                <li ><a class="link"  href="{{ asset('/') }}">Home</a></li>--}}
                        {{--                                <li class=" dropdown" style="line-height: 37px">--}}
                        {{--                                    <a class=" dropdown-toggle" href="{{ route('game.gameList') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                        Games--}}
                        {{--                                    </a>--}}
                        {{--                                    <div class="dropdown-menu py-0" aria-labelledby="navbarDropdown">--}}
                        {{--                                        <a class="dropdown-item border rounded-0" href="{{ route('game.gameList') }}" >All</a>--}}
                        {{--                                        @foreach(\App\Category::all() as $cat)--}}
                        {{--                                            <a class="dropdown-item py-0 py-0 border rounded-0" href="{{ route('game.gameListFilter',$cat->id) }}">{{ $cat->title }}</a>--}}
                        {{--                                        @endforeach--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                                <li ><a class="link " href="#">Software</a></li>--}}
                        {{--                                <li ><a class="link " href="{{ route('requestGame.createRequest') }}">Request Game</a></li>--}}
                        {{--                                <li ><a class="link" href="{{ route('suggestGame.createSuggest') }}">Suggest Website</a></li>--}}
                        {{--                                <li ><a class="link" href="{{ route('adGame.createAd') }}">Ad Service</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </nav>--}}
                    </div>
                </div>
            </div>

        </div>
        <div class="fb-quote"></div>
        @yield('download')
        <div class="content_body col-12 p-0">
            @yield("content")


            {{--            <div class="container py-3 my-5 d-flex flex-wrap justify-content-center" style="background: rgba(11,15,18,0.6); ">--}}
            {{--                <div class="col-12 col-md-6">--}}
            {{--                    <h5 class="col-12 p-0 mt-3 mb-4 text-white">OUR FACEBOOK GROUP</h5>--}}
            {{--                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D100502875358429%26id%3D100490335359683&width=500&show_text=true&height=311&appId" width="100%" height="311" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>--}}
            {{--                </div>--}}
            {{--                <div class="col-12 col-md-6">--}}
            {{--                    <h5 class="col-12 p-0 mt-3 mb-4 text-white"> OUR FACEBOOK PAGE</h5>--}}
            {{--                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D100494468692603%26id%3D100490335359683&width=500&show_text=true&height=311&appId" width="100%" height="311" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="footer text-dark text-center pb-3 py-3 font-weight-bolder " style="background-color: rgba(255,255,255,0.8); line-height: 30px">
            <span class="px-3">Copyright ©2021 All rights reserved | This Website is Created  by <a href="https://www.facebook.com/profile.php?id=100069553492400">Aung Htet Chon</a>
            </span>
            </div>
        </div>

    </div>
</div>


<!-- Scripts -->
<script src="{{ asset('dashboard/js/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>

<script src="{{ asset('dashboard/vendor/data_table/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard/js/app.js') }}"></script>
<script src="{{ asset('dashboard/vendor/summernote/summernote.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/venobox/venobox.js') }}"></script>
<script src="{{ asset('dashboard/vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/font-awesome/js/all.min.js') }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script> --}}


<script>
    $(window).load(function() {
// Animate loader off screen
        $(".se-pre-con").fadeOut(500);
    });
    $(document).ready(function(){
        $('.venobox').venobox({                      // default: ''
            frameheight: '600px',                            // default: ''
            bgcolor    : '#5dff5e',                          // default: '#fff'
            titleattr  : 'data-title',                       // default: 'title'
            numeratio  : true,                               // default: false
            infinigall : true,                               // default: false
        });
    });
</script>
@yield('foot')
<!-- Global site tag (gtag.js) - Google Analytics -->

</body>
</html>
