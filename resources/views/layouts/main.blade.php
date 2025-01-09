<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <title>Вехи Потерянного Мира</title>
    <link rel="shortcut icon" type="image/icon" href=" {{asset('assets/logo/favicon.png')}} "/>
    <link rel="stylesheet" href=" {{asset('assets/css/font-awesome.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/linearicons.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/animate.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/flaticon.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/slick.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/slick-theme.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/bootsnav.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/style.css')}} ">
    <link rel="stylesheet" href=" {{asset('assets/css/responsive.css')}} ">
</head>

<body>

<section class="top-area">
    <div class="header-area" style="background-color: #fff; padding: 0;">
        <div class="header-top" style="padding: 5px 20px; position: fixed; top: 0; right: 0; width: 100%; z-index: 999; height: 40px; background-color: #f1f1f1;">
            <div class="container" style="display: flex; justify-content: flex-end; align-items: center; height: 100%; width: 100%; padding: 0;">
                <ul style="display: flex; list-style: none; padding: 0; margin: 0;">
                    @if(Auth::check())
                        <li class="header-top-contact" style="margin-left: 20px; font-size: 16px;">{{ Auth::user()->name }}</li>
                        <li class="header-top-contact" style="margin-left: 20px; font-size: 16px;">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration: none; color: #333; outline: none;">Выход</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    @else
                        <li class="header-top-contact" style="margin-left: 20px; font-size: 16px;">
                            <a href="{{ route('login') }}" style="text-decoration: none; color: #333; outline: none;">Вход</a>
                        </li>
                        <li class="header-top-contact" style="margin-left: 20px; font-size: 16px;">
                            <a href="{{ route('register') }}" style="text-decoration: none; color: #333; outline: none;">Рагистрация</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

    </div>
</section>

@yield('content')

<footer id="footer" class="footer">
    <div class="container">

        <div class="hm-footer-copyright">
            <div class="row">
                <div class="col-sm-5">
                    <p>
                        &copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
                    </p>
                </div>
                <div class="col-sm-7">
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title=""
               data-original-title="Back to Top" aria-hidden="true"></i>
        </div>

    </div>

</footer>

<script src=" {{asset('assets/js/jquery.js')}} "></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<script src=" {{asset('assets/js/bootstrap.min.js')}} "></script>

<script src=" {{asset('assets/js/bootsnav.js')}} "></script>

<script src=" {{asset('assets/js/feather.min.js')}} "></script>


<script src=" {{asset('assets/js/jquery.counterup.min.js')}} "></script>
<script src=" {{asset('assets/js/waypoints.min.js')}} "></script>

<script src=" {{asset('assets/js/slick.min.js')}} "></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<script src=" {{asset('assets/js/custom.js')}} "></script>

</body>

</html>
