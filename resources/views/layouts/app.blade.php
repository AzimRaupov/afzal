<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> EdullAll - LMS, Tutors, Education & Online Course Html Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('file/logo_afzal.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- select2 -->
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <!-- plyr Css -->
    <link rel="stylesheet" href="{{asset('assets/css/plyr.css')}}">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>
<body>

<!--==================== Preloader Start ====================-->

<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block">
    <button type="button" class="close-button"><i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="{{route('home')}}" class="mobile-menu__logo">
            <img src="{{asset('file/logo_afzal.png')}}" style="width: 120px;" alt="Logo">
        </a>
        <div class="mobile-menu__menu">

            <ul class="nav-menu flex-align nav-menu--mobile">
                <li class="nav-menu__item">
                    <a href="{{route('home')}}#about" class="nav-menu__link">О нас</a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{route('course')}}" class="nav-menu__link">Курсы</a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{route('home')}}#teachers" class="nav-menu__link">Учителя</a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{route('home')}}#faq" class="nav-menu__link">Вопросы</a>
                </li>
                <li class="nav-menu__item">
                    <a href="#contact" class="nav-menu__link">Контакты</a>
                </li>
            </ul>

            <div class="d-sm-none d-block mt-24">
                <div class="header-select border border-neutral-30 bg-main-25 rounded-pill position-relative">
    <span class="select-icon position-absolute top-50 translate-middle-y inset-inline-start-0 z-1 ms-lg-4 ms-12 text-xl pointer-event-none d-flex">
        <i class="ph-bold ph-squares-four"></i>
    </span>
                    <select class="js-example-basic-single border-0" name="state">
                        <option value="1" selected disabled>Categories</option>
                        <option value="1">Design</option>
                        <option value="1">Development</option>
                        <option value="1">Architecture</option>
                        <option value="1">Life Style</option>
                        <option value="1">Data Science</option>
                        <option value="1">Marketing</option>
                        <option value="1">Music</option>
                        <option value="1">Typography</option>
                        <option value="1">Finance</option>
                        <option value="1">Motivation</option>
                    </select>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->


<!-- ==================== Header Start Here ==================== -->
<header class="header">
    <div class="container container--xl">
        <nav class="header-inner flex-between gap-8">

            <div class="header-content-wrapper flex-align flex-grow-1">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="" class="link">
                        <img src="{{asset('file/logo_afzal.png')}}" style="width: 120px;" alt="Logo" >
                    </a>
                </div>
                <!-- Logo End  -->

                <!-- Select Start -->

                <!-- Select End -->

                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">

                    <ul class="nav-menu flex-align ">

                        <li class="nav-menu__item">
                            <a href="{{route('home')}}#about" class="nav-menu__link">О нас</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{route('course')}}" class="nav-menu__link">Курсы</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{route('home')}}#teachers" class="nav-menu__link">Учителя</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{route('home')}}#faq" class="nav-menu__link">Вопросы</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="#contact" class="nav-menu__link">Контакты</a>
                        </li>
                    </ul>
                </div>
                <!-- Menu End  -->
            </div>

            <!-- Header Right start -->
            <div class="header-right flex-align">
                <form action="#" class="search-form position-relative d-xl-block d-none">
                    <input type="text" class="common-input rounded-pill bg-main-25 pe-44 border-neutral-30" placeholder="Search...">
                    <button type="submit" class="w-36 h-36 bg-main-600 hover-bg-main-700 rounded-circle flex-center text-md text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
                        <i class="ph-bold ph-magnifying-glass"></i>
                    </button>
                </form>
                <a href="sign-in.html" class="info-action w-52 h-52 bg-main-25 hover-bg-main-600 border border-neutral-30 rounded-circle flex-center text-2xl text-neutral-500 hover-text-white hover-border-main-600">
                    <i class="ph ph-user-circle"></i>
                </a>
                <button type="button" class="toggle-mobileMenu d-lg-none text-neutral-200 flex-center">
                    <i class="ph ph-list"></i>
                </button>
            </div>
            <!-- Header Right End  -->
        </nav>
    </div>
</header>

{{
    $slot
}}

@include('components.my.footer')

<!-- Jquery js -->
<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<!-- Bootstrap Bundle Js -->
<script src="{{asset('assets/js/boostrap.bundle.min.js')}}"></script>
<!-- select2 Js -->
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<!-- Phosphor Icon Js -->
<script src="{{asset('assets/js/phosphor-icon.js')}}"></script>
<!-- Slick js -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- Slick js -->
<script src="{{asset('assets/js/counter.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<!-- Jquery Ui js -->
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<!-- plyr Js -->
<script src="{{asset('assets/js/plyr.js')}}"></script>
<!-- vanilla Tilt -->
<script src="{{asset('assets/js/vanilla-tilt.min.js')}}"></script>
<!-- wow -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>

<script src="{{asset('assets/js/aos.js')}}"></script>

<!-- main js -->
<script src="{{asset('assets/js/main.js')}}"></script>



</body>
</html>
