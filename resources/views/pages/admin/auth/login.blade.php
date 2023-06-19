<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="X-CSRF-TOKEN" content="{{ csrf_token() }}">

    <!-- SEO Meta description -->
    <meta name="description" content="Pesawat | BPJS Kesehatan">
    <meta name="author" content="BPJS Kesehatan">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content> <!-- website name -->
    <meta property="og:site" content> <!-- website link -->
    <meta property="og:title" content="Pesawat | BPJS Kesehatan"> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Pesawat | BPJS Kesehatan"> <!-- description shown in the actual shared post -->
    <meta property="og:image" content> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content> <!-- where do you want your post to link to -->
    <meta property="og:type" content="website">

    <!--title-->
    <title>Login Administrator | Pesawat - BPJS Kesehatan</title>

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('assets/images/icon/logo.ico') }}" sizes="32x32">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700%7COpen+Sans&amp;display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{  asset('assets/login/css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{  asset('assets/login/css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{  asset('assets/login/css/themify-icons.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{  asset('assets/login/css/animate.min.css') }}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{  asset('assets/login/css/jquery.mb.YTPlayer.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{  asset('assets/login/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{  asset('assets/login/css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{  asset('assets/login/css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{  asset('assets/login/css/responsive.css') }}">

    <style>
        .solid-btn {
            background: #284b8c;
            border: 2px solid #00a859;
        }
        .solid-btn:hover{
            color: #284b8c;
        }
        .form-control:focus{
            border-color: #00a859;
        }
        .input-icon span{
            border-left: 2px solid #00a859;
        }
        .scroll-top {
            background: #284b8c;
        }

        .menu ul li a:hover, .menu ul li:hover>a {
            color: #ffffff;
            background: #443a3a;
        }

        .alert {
          background-color: #cd0f20;
          color: white;
          border-radius: 5px;
          box-shadow: 0px 0px 10px #000000;

        }

        .closebtn {
          margin-left: 5px;
          color: white;
          font-weight: bold;
          float: right;
          font-size: 22px;
          line-height: 20px;
          cursor: pointer;
          transition: 0.3s;
        }

        .closebtn:hover {
          color: black;
        }
    </style>

</head>
<body style="background-color: #284b8c;">

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--header section start-->
{{-- <header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #1c1818;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{  asset('assets/login/images/logo_01.svg') }}" width="100" alt="logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="#">Home</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header> --}}
<!--header section end-->

<!--body content wrap start-->
<div class="main">

    <!--hero background image with content slider start-->
    <section class="hero-section hero-bg-2 ptb-100 full-screen">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h2 class="text-white">Pesawat | BPJS Kesehatan</h2>
                        <p class="lead">
                            Proses pemeriksaan dan monitoring kepatuhan badan usaha jadi lebih mudah.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-2">
                                <h5 class="h3">Login Administrator</h5>
                                <p class="text-muted mb-0">Masuk dengan akun Anda untuk melanjutkan.</p>
                            </div>
                            <!--login form-->
                            <form class="login-signup-form" action="{{ route('admin.login') }}" method="POST">
                                @csrf
                                @if(\Session::has('alert'))
                                <div class="alert">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    <p>{{Session::get('alert')}}</p>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label class="pb-1"><b>Username</b></label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user" style="color: #00a859;"></span>
                                        </div>
                                        <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Masukkan username Anda" required>
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label class="pb-1"><b>Password</b></label>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <a href="password-reset.html" class="form-text small text-muted">
                                                Forgot password?
                                            </a>
                                        </div> -->
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock" style="color: #00a859;"></span>
                                        </div>
                                        <input type="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <button class="btn btn-lg btn-block solid-btn border-radius mt-4 mb-3">
                                    Masuk
                                </button>

                            </form>
                        </div>
                        <div class="card-footer border-top px-md-5 text-center" style="background-color: #fffffe;">
                            <a href="https://bpjs-kesehatan.go.id/bpjs/"><img src="{{  asset('assets/images/logo/logo-bpjs.png') }}" alt="logo-bpjs" srcset="{{  asset('assets/images/logo/logo-bpjs.png 15x') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero background image with content slider end-->


</div>
<!--body content wrap end-->


<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->

<!--jQuery-->
<script src="{{  asset('assets/login/js/jquery-3.4.1.min.js') }}"></script>
<!--Popper js-->
<script src="{{  asset('assets/login/js/popper.min.js') }}"></script>
<!--Bootstrap js-->
<script src="{{  asset('assets/login/js/bootstrap.min.js') }}"></script>
<!--Magnific popup js-->
<script src="{{  asset('assets/login/js/jquery.magnific-popup.min.js') }}"></script>
<!--jquery easing js-->
<script src="{{  asset('assets/login/js/jquery.easing.min.js') }}"></script>
<!--jquery ytplayer js-->
<script src="{{  asset('assets/login/js/jquery.mb.YTPlayer.min.js') }}"></script>
<!--Isotope filter js-->
<script src="{{  asset('assets/login/js/mixitup.min.js') }}"></script>
<!--wow js-->
<script src="{{  asset('assets/login/js/wow.min.js') }}"></script>
<!--owl carousel js-->
<script src="{{  asset('assets/login/js/owl.carousel.min.js') }}"></script>
<!--countdown js-->
<script src="{{  asset('assets/login/js/jquery.countdown.min.js') }}"></script>
<!--custom js-->
<script src="{{  asset('assets/login/js/scripts.js') }}"></script>
</body>
</html>
