<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <title>Directory Landing Page</title>

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

<header id="header-top" class="header-top">
    <ul>
        <li>
            <div class="header-top-left">
                <ul>
                    <li class="select-opt">
                        <select name="language" id="language">
                            <option value="default">EN</option>
                            <option value="Bangla">BN</option>
                            <option value="Arabic">AB</option>
                        </select>
                    </li>
                    <li class="select-opt">
                        <select name="currency" id="currency">
                            <option value="usd">USD</option>
                            <option value="euro">Euro</option>
                            <option value="bdt">BDT</option>
                        </select>
                    </li>
                    <li class="select-opt">
                        <a href="#"><span class="lnr lnr-magnifier"></span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="head-responsive-right pull-right">
            <div class="header-top-right">
                <ul>
                    <li class="header-top-contact">
                        +1 222 777 6565
                    </li>
                    <li class="header-top-contact">
                        <a href="#">sign in</a>
                    </li>
                    <li class="header-top-contact">
                        <a href="#">register</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>

</header>

<section class="top-area">
    <div class="header-area">

        <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
             data-minus-value-mobile="55" data-speed="1000">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">list<span>race</span></a>

                </div>

                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class=" scroll active"><a href="#home">home</a></li>
                        <li class="scroll"><a href="#works">how it works</a></li>
                        <li class="scroll"><a href="#explore">explore</a></li>
                        <li class="scroll"><a href="#reviews">review</a></li>
                        <li class="scroll"><a href="#blog">blog</a></li>
                        <li class="scroll"><a href="#contact">contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <div class="clearfix"></div>

</section>

@yield('content')

<section id="contact" class="subscription">
    <div class="container">
        <div class="subscribe-title text-center">
            <h2>
                do you want to add your business listing with us?
            </h2>
            <p>
                Listrace offer you to list your business with us and we very much able to promote your Business.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="subscription-input-group">
                    <form action="#">
                        <input type="email" class="subscription-input-form" placeholder="Enter your email here">
                        <button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
                            creat account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<footer id="footer" class="footer">
    <div class="container">
        <div class="footer-menu">
            <div class="row">
                <div class="col-sm-3">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">list<span>race</span></a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <ul class="footer-menu-item">
                        <li class="scroll"><a href="#works">how it works</a></li>
                        <li class="scroll"><a href="#explore">explore</a></li>
                        <li class="scroll"><a href="#reviews">review</a></li>
                        <li class="scroll"><a href="#blog">blog</a></li>
                        <li class="scroll"><a href="#contact">contact</a></li>
                        <li class=" scroll"><a href="#contact">my account</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hm-footer-copyright">
            <div class="row">
                <div class="col-sm-5">
                    <p>
                        &copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
                    </p>
                </div>
                <div class="col-sm-7">
                    <div class="footer-social">
                        <span><i class="fa fa-phone"> +1  (222) 777 8888</i></span>
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
