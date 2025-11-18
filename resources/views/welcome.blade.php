<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Afzal — учебный центр с партнёрством StartCoding | IT-курсы и образование</title>

    <!-- Meta Description (SEO) -->
    <meta name="description" content="Учебное заведение Afzal в сотрудничестве со StartCoding предлагает современные IT-курсы, обучение программированию, дизайну и цифровым навыкам. Достигай успеха вместе с нами!">

    <!-- Keywords (необязательно, но может помочь) -->
    <meta name="keywords" content="Afzal, StartCoding, IT курсы, обучение программированию, веб-разработка, образование, курсы Узбекистан, Afzal Academy, IT образование, frontend, backend">
    <meta name="author" content="Afzal Education Center">

    <!-- Robots -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">


    <meta property="og:type" content="website">
    <meta property="og:title" content="Afzal — учебный центр с партнёрством StartCoding">
    <meta property="og:description" content="Современное обучение в сфере IT и технологий. Развивайся вместе с Afzal и StartCoding.">
    <meta property="og:image" content="{{asset('file/logo_afzal.png')}}">
    <meta property="og:url" content="{{route('home')}}">
    <meta property="og:site_name" content="Afzal Education Center">

    <link rel="shortcut icon" href="{{asset('file/logo_afzal.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- select2 -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- plyr Css -->
    <link rel="stylesheet" href="assets/css/plyr.css">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        html {
            overflow-x: hidden;
        }

    </style>
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
        <a href="index.html" class="mobile-menu__logo">
            <img src="file/logo_afzal.png" style="width: 90px;" alt="Logo">
        </a>
        <div class="mobile-menu__menu">

            <ul class="nav-menu flex-align nav-menu--mobile">

                <li class="nav-menu__item">
                    <a href="#about" class="nav-menu__link">О нас</a>
                </li>
                <li class="nav-menu__item">
                    <a href="#courses" class="nav-menu__link">Курсы</a>
                </li>
                <li class="nav-menu__item">
                    <a href="#teachers" class="nav-menu__link">Учителя</a>
                </li>
                <li class="nav-menu__item">
                    <a href="#faq" class="nav-menu__link">Вопросы</a>
                </li>

                <li class="nav-menu__item">
                    <a href="#reviews" class="nav-menu__link">Отзывы</a>
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
                        <img src="file/logo_afzal.png" style="width: 90px;" alt="Logo" >
                    </a>
                </div>
                <!-- Logo End  -->

                <!-- Select Start -->


                <!-- Select End -->

                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">

                    <ul class="nav-menu flex-align ">

                        <li class="nav-menu__item">
                            <a href="#about" class="nav-menu__link">О нас</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="#courses" class="nav-menu__link">Курсы</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="#teachers" class="nav-menu__link">Учителя</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="#faq" class="nav-menu__link">Вопросы</a>
                        </li>

                        <li class="nav-menu__item">
                            <a href="#reviews" class="nav-menu__link">Отзывы</a>
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
<!-- ==================== Header End Here ==================== -->

<!-- ========================= Banner Section Start =============================== -->
<section class="banner-two pt-80 position-relative overflow-hidden">

    <img src="assets/images/shapes/banner-two-shape-1.png" class="position-absolute inset-block-end-0 inset-inline-end-0 w-100 h-100 d-lg-block d-none z-n1" alt="" data-tilt="" data-tilt-speed="500" data-tilt-max="6" data-tilt-perspective="5000" data-tilt-full-page-listening="" data-tilt-scale="1.03">
    <img src="assets/images/shapes/shape8.png" alt="" class="shape three animation-rotation z-n1"><img src="assets/images/shapes/shape8.png" alt="" class="shape five animation-scalation">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-xl-6">
                <div class="banner-content pe-md-4">
                    <div class="flex-align gap-8 mb-16 aos-init aos-animate" data-aos="fade-down">
                        <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book"></i></span>
                        <h5 class="text-main-600 mb-0">Повысьте свой уровень обучения</h5>
                    </div>
                    <h1 class="display2 mb-24 wow bounceInLeft" style="visibility: visible;">Учись,<span class="text-main-two-600 wow bounceInRight" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s;"> Расти, </span>
                        <span class="text-main-three-600 wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s;">Достигай</span> и Добивайся</h1>
                    <p class="text-neutral-500 text-line-2 wow bounceInUp" style="visibility: visible;">Добро пожаловать в Afzal - Academy, где обучение не знает границ. Независимо от того, студент ли вы, профессиональный или специалист, человек постоянно обучается.</p>
                    <div class="buttons-wrapper flex-align flex-wrap gap-24 mt-40">
                        <a class="btn btn-main rounded-pill flex-align gap-8 aos-init aos-animate" data-aos="fade-right" target="_blank" href="/course">Все курсы<i class="ph-bold ph-arrow-up-right d-flex text-lg"></i></a>
                        <a class="btn btn-outline-main rounded-pill flex-align gap-8 aos-init aos-animate" data-aos="fade-left" href="#about">О нас<i class="ph-bold ph-arrow-up-right d-flex text-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="banner-thumb position-relative">
                    <img src="file/img/banner-img-2.png" alt="" class="banner-thumb__img rounded-12 aos-init aos-animate" data-aos="fade-up"><img src="assets/images/shapes/shape9.png" class="position-absolute inset-block-end-0 start-0 z-n1" alt="" data-tilt="" data-tilt-max="16" data-tilt-speed="500"><img src="assets/images/shapes/shape10.png" class="position-absolute inset-block-start-0 start-0 z-n1 showHideTwo" alt="" data-tilt="" data-tilt-max="16" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-startx="100" data-tilt-full-page-listening=""></div></div></div></div></section><!-- ========================= Banner SEction End =============================== -->




@include('components.my.tr')


<!-- ================================== Explore Course Section Start =========================== -->
<!-- ================================== Explore Course Section End =========================== -->
<section class="category py-120 position-relative z-1 mash-bg-main mash-bg-main-two mash-reverse" id="courses">
    <div class="container">
        <div class="section-heading text-center">
            <div class="flex-align d-inline-flex gap-8 mb-16 wow bounceInDown">
                <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book"></i></span>
                <h5 class="text-main-600 mb-0">Курсы</h5>
            </div>
            <h2 class="mb-24 wow bounceIn">Повысьте свой уровень обучения</h2>
            <p class=" wow bounceInUp">Наша платформа построена на принципах инноваций, качества и инклюзивности, стремясь обеспечить бесперебойное обучение</p>
        </div>


        <div class="category-item-slider">
            <!-- Лингвистика -->
            <div class="category-item animation-item h-100 text-center px-16 py-32 rounded-12 bg-main-25 border border-neutral-30 hover-border-main-600 transition-2" data-aos="fade-up" data-aos-duration="200">
                <span class="w-96 h-96 flex-center d-inline-flex bg-white text-main-600 text-40 rounded-circle box-shadow-md mb-24">
                    <i class="ph-bold ph-translate"></i>
                </span>
                <h4 class="display-four mb-16 text-neutral-700">Лингвистика</h4>
                <p class="text-neutral-500 text-lg text-line-2">Изучайте английский язык для школы, работы и международного общения.</p>
                <a href="{{route('course',['categories'=>['4']])}}" class="py-12 px-24 bg-white rounded-8 border border-neutral-30 mt-28 fw-semibold text-main-600 hover-bg-main-600 hover-text-white hover-border-main-600">
                    Английский
                </a>
            </div>

            <!-- Логика и программирование -->
            <div class="category-item animation-item h-100 text-center px-16 py-32 rounded-12 bg-main-two-25 border border-neutral-30 hover-border-main-two-600 transition-2" data-aos="fade-up" data-aos-duration="400">
                <span class="w-96 h-96 flex-center d-inline-flex bg-white text-main-two-600 text-40 rounded-circle box-shadow-md mb-24">
                    <i class="ph-bold ph-code"></i>
                </span>
                <h4 class="display-four mb-16 text-neutral-700">Логика и программирование</h4>
                <p class="text-neutral-500 text-lg text-line-2">Развивайте аналитическое мышление и создавайте серверные решения на практике.</p>
                <a href="{{route('course',['categories'=>['5']])}}" class="py-12 px-24 bg-white rounded-8 border border-neutral-30 mt-28 fw-semibold text-main-two-600 hover-bg-main-two-600 hover-text-white hover-border-main-two-600">
                    Математика, Backend
                </a>
            </div>

            <!-- Творчество и дизайн -->
            <div class="category-item animation-item h-100 text-center px-16 py-32 rounded-12 bg-main-three-25 border border-neutral-30 hover-border-main-three-600 transition-2" data-aos="fade-up" data-aos-duration="600">
                <span class="w-96 h-96 flex-center d-inline-flex bg-white text-main-three-600 text-40 rounded-circle box-shadow-md mb-24">
                    <i class="ph-bold ph-paint-brush"></i>
                </span>
                <h4 class="display-four mb-16 text-neutral-700">Творчество и дизайн</h4>
                <p class="text-neutral-500 text-lg text-line-2">Развивайте чувство стиля и создавайте современные интерфейсы и образы.</p>
                <a href="{{route('course',['categories'=>['1']])}}" class="py-12 px-24 bg-white rounded-8 border border-neutral-30 mt-28 fw-semibold text-main-three-600 hover-bg-main-three-600 hover-text-white hover-border-main-three-600">
                    Frontend, Люкс ателье
                </a>
            </div>

            <!-- Интеллект и стратегия -->
            <div class="category-item animation-item h-100 text-center px-16 py-32 rounded-12 bg-main-two-25 border border-neutral-30 hover-border-main-two-600 transition-2" data-aos="fade-up" data-aos-duration="800">
    <span class="w-96 h-96 flex-center d-inline-flex bg-white text-main-two-600 text-40 rounded-circle box-shadow-md mb-24">
        <i class="ph-bold ph-brain"></i>
    </span>
                <h4 class="display-four mb-16 text-neutral-700">Интеллект и стратегия</h4>
                <p class="text-neutral-500 text-lg text-line-2">Развивайте логику и стратегическое мышление через игру в шахматы.</p>
                <a href="{{route('course',['categories'=>['2']])}}" class="py-12 px-24 bg-white rounded-8 border border-neutral-30 mt-28 fw-semibold text-main-two-600 hover-bg-main-two-600 hover-text-white hover-border-main-two-600">
                    Шахматы
                </a>
            </div>

            <!-- Алгоритмы и соревнования -->
            <div class="category-item animation-item h-100 text-center px-16 py-32 rounded-12 bg-main-three-25 border border-neutral-30 hover-border-main-three-600 transition-2" data-aos="fade-up" data-aos-duration="1000">
    <span class="w-96 h-96 flex-center d-inline-flex bg-white text-main-three-600 text-40 rounded-circle box-shadow-md mb-24">
        <i class="ph-bold ph-trophy"></i>
    </span>
                <h4 class="display-four mb-16 text-neutral-700">Алгоритмы и соревнования</h4>
                <p class="text-neutral-500 text-lg text-line-2">Прокачайте навыки в спортивном программировании и участвуйте в олимпиадах.</p>
                <a href="{{route('course',['categories'=>['3']])}}" class="py-12 px-24 bg-white rounded-8 border border-neutral-30 mt-28 fw-semibold text-main-three-600 hover-bg-main-three-600 hover-text-white hover-border-main-three-600">
                    Спортивное программирование
                </a>
            </div>


        </div>

        <div class="flex-align gap-16 mt-40 justify-content-center">
            <button type="button" id="category-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                <i class="ph ph-caret-left"></i>
            </button>
            <button type="button" id="category-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                <i class="ph ph-caret-right"></i>
            </button>
        </div>
    </div>
</section>


<section class="about py-120 position-relative z-1 bg-main-25 mash-bg-main-two" id="about">
    <img src="assets/images/shapes/shape2.png" alt="" class="shape one animation-scalation">
    <img src="assets/images/shapes/shape6.png" alt="" class="shape four animation-scalation">

    <div class="position-relative">
        <div class="container">
            <div class="row gy-xl-0 gy-5 flex-wrap-reverse align-items-center">
                <div class="col-xl-6">
                    <div class="about-thumbs position-relative pe-lg-5">
                        <img src="assets/images/shapes/shape7.png" alt="" class="shape seven animation-scalation">

                        <div class="offer-message px-24 py-12 rounded-12 bg-main-two-50 fw-medium flex-align d-inline-flex gap-16 border border-neutral-30 animation-upDown">
                            <span class="flex-shrink-0 w-48 h-48 bg-main-two-600 text-white text-2xl flex-center rounded-circle"><i class="ph ph-watch"></i></span>
                            <div>
                                <h6 class="mb-4">20% СКИДКА</h6>
                                <span class="text-neutral-500">На все курсы</span>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <img src="assets/images/thumbs/about-img1.png" alt="" class="rounded-12 w-100" data-tilt data-tilt-max="15" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-full-page-listening>
                            </div>
                            <div class="col-sm-6">
                                <div class="flex-align gap-24 mb-24">
                                    <div class="bg-main-600 rounded-12 text-center py-24 px-2 w-50-percent" data-aos="fade-right">
                                        <h1 class="mb-0 text-white counter">16+</h1>
                                        <span class="text-white">Лет опыта</span>
                                    </div>
                                    <div class="bg-neutral-700 rounded-12 text-center py-24 px-2 w-50-percent" data-aos="fade-left">
                                        <h1 class="mb-0 text-white counter">3.2k</h1>
                                        <span class="text-white">Выпускников</span>
                                    </div>
                                </div>
                                <img src="assets/images/thumbs/about-img2.png" alt="" class="rounded-12 w-100" data-tilt data-tilt-max="20" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-full-page-listening>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-content">
                        <div class="mb-40">
                            <div class="flex-align gap-8 mb-16 wow bounceInDown">
                                <span class="w-8 h-8 bg-main-600 rounded-circle"></span>
                                <h5 class="text-main-600 mb-0 ">Об Afzal</h5>
                            </div>
                            <h2 class="mb-24 wow bounceIn">Место, где знания превращаются в успех</h2>
                            <p class="text-neutral-500 text-line-2 wow bounceInUp">Afzal — современное учебное заведение, которое совместно со StartCoding развивает новые поколения IT-специалистов. Мы объединяем инновационные методики обучения и реальные проекты, чтобы каждый студент смог раскрыть свой потенциал и достичь профессиональных целей.</p>
                        </div>

                        <div class="flex-align align-items-start gap-28 mb-32" data-aos="fade-left" data-aos-duration="200">
                            <span class="w-80 h-80 bg-main-25 border border-neutral-30 flex-center rounded-circle flex-shrink-0">
                                <img src="assets/images/icons/about-img1.png" alt="">
                            </span>
                            <div class="flex-grow-1">
                                <h4 class="text-neutral-500 mb-12">Наша миссия</h4>
                                <p class="text-neutral-500">Сделать качественное образование доступным каждому. Благодаря партнёрству со StartCoding, мы создаём практико-ориентированные программы, которые подготавливают студентов к реальной работе в IT-индустрии.</p>
                            </div>
                        </div>
                        <div class="flex-align align-items-start gap-28 mb-0" data-aos="fade-left" data-aos-duration="400">
                            <span class="w-80 h-80 bg-main-25 border border-neutral-30 flex-center rounded-circle flex-shrink-0">
                                <img src="assets/images/icons/about-img2.png" alt="">
                            </span>
                            <div class="flex-grow-1">
                                <h4 class="text-neutral-500 mb-12">Наша цель</h4>
                                <p class="text-neutral-500">Создать экосистему, где студенты, преподаватели и индустрия работают вместе. Мы стремимся формировать специалистов, востребованных не только в Таджикистане, но и за его пределами.</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================================ About Section Start ==================================== -->
<!-- ================================ About Section End ==================================== -->



<!-- ========================== Counter Section start ============================== -->
<section class="testimonials py-120 position-relative z-1 mash-bg-main">
    <img src="assets/images/shapes/shape2.png" alt="" class="shape six animation-scalation">
    <img src="assets/images/shapes/shape3.png" alt="" class="shape four animation-rotation">

    <div class="container">
        <div class="row gy-5">
            <!-- Левая колонка с фото -->
            <div class="col-lg-6">
                <div class="testimonials__thumbs-slider pe-lg-5 me-xxl-5">
                 @foreach($achievements as $achievement)
                        <div class="testimonials__thumbs wow bounceIn" data-tilt data-tilt-max="15" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-full-page-listening>
                            <img src="{{asset('storage/'.$achievement->photo)}}" alt="Победитель олимпиады">
                        </div>
                 @endforeach


                </div>
            </div>

            <!-- Правая колонка с отзывами -->
            <div class="col-lg-6">
                <div class="testimonials__content">
                    <div class="section-heading style-left">
                        <div class="flex-align gap-8 mb-16 wow bounceInDown">
                            <span class="w-8 h-8 bg-main-600 rounded-circle"></span>
                            <h5 class="text-main-600 mb-0">Наша гордость</h5>
                        </div>
                        <h2 class="mb-24 wow bounceIn">Победители и призёры олимпиад</h2>
                        <p class="text-neutral-500 text-line-2 wow bounceInUp">Наши ученики добиваются блестящих результатов, показывая высокий уровень знаний и вдохновения к науке.</p>
                    </div>

                    <div class="testimonials__slider">
                           @foreach($achievements as $achievement)
                            <div class="testimonials-item">
                                <p class="text-neutral-700" data-aos="fade-left" data-aos-duration="1200">
                                    «{{$achievement->description}}»
                                </p>
                                <h4 class="mt-48 mb-8" data-aos="fade-left">{{$achievement->name}}</h4>
                                <span class="text-neutral-700" data-aos="fade-left">Победитель олимпиады {{$achievement->olymp_name}}</span>
                            </div>

                           @endforeach


                    </div>

                    <!-- Кнопки навигации -->
                    <div class="flex-align gap-16 mt-40">
                        <button type="button" id="testimonials-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="testimonials-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================== Counter Section End ============================== -->


<section class="instructor py-120 bg-main-25 position-relative z-1" id="teachers">
    <img src="assets/images/shapes/shape2.png" alt="" class="shape one animation-scalation">
    <img src="assets/images/shapes/shape6.png" alt="" class="shape six animation-scalation">

    <div class="container">
        <div class="section-heading text-center">
            <h2 class="mb-24 wow bounceIn">Учителя</h2>
            <p class=" wow bounceInUp">Присоединяйтесь к нам в этом путешествии открытий, роста и преобразований. Вместе мы создадим светлое будущее.</p>
        </div>
        <div class="instructor-slider">
            @foreach($teachers as $teacher)

                <div class="instructor-item scale-hover-item bg-white rounded-16 p-12 h-100 border border-neutral-30" data-aos="fade-up"  data-aos-duration="200">
                    <div class="rounded-12 overflow-hidden position-relative bg-dark-yellow">
                        <a href="{{route('teacher.show',$teacher->id)}}" class="w-100 h-100 d-flex align-items-end">
                            <img src="{{asset('storage/'.$teacher->photo)}}" alt="Course Image" class="scale-hover-item__img rounded-12 cover-img transition-2">
                        </a>
                    </div>
                    <div class="p-24 position-relative">
                        <div class="">
                            <h4 class="mb-28 pb-24 border-bottom border-neutral-50 mb-24 border-dashed border-0">
                                <a href="{{route('teacher.show',$teacher->id)}}" class="link text-line-2">{{$teacher->name}}</a>
                            </h4>
                            <div class="flex-between gap-8 flex-wrap mb-16">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-lightbulb"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">{{$teacher->courses[0]->name}}</span>
                                </div>
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-watch"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">{{$teacher->courses->count()}} Курса</span>
                                </div>
                            </div>
                            <div class="flex-between gap-8 flex-wrap">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-users"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">{{$teacher->reviews->count()*50}} Студенты</span>
                                </div>
                                <div class="flex-align gap-4">
                                    <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-lg text-neutral-700">
                                    {{$teacher->rating}}
                                    <span class="text-neutral-100">({{$teacher->reviews->count()}})</span>
                                </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

        <div class="flex-align gap-16 mt-40 justify-content-center">
            <button type="button" id="instructor-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                <i class="ph ph-caret-left"></i>
            </button>
            <button type="button" id="instructor-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                <i class="ph ph-caret-right"></i>
            </button>
        </div>

    </div>
</section>


<!-- ================================= testimonials Section Start ========================================= -->



<!-- ================================= testimonials Section End ========================================= -->
@include('components.my.review')

@include('components.my.appli')
<section class="faq-page py-120" id="faq">
    <div class="container">
        <div class="section-heading text-center mb-48">
            <div class="flex-align d-inline-flex gap-8 mb-16">
                <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-question"></i></span>
                <h5 class="text-main-600 mb-0">Часто задаваемые вопросы</h5>
            </div>
            <h2 class="mb-16">Ответы для родителей и учеников</h2>
            <p class="text-neutral-500">Мы собрали самые популярные вопросы, которые задают родители перед тем, как записать ребёнка в наш учебный центр. Надеемся, это поможет вам лучше понять, как мы работаем.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion common-accordion" id="accordionFAQ">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                С какого возраста можно записывать ребёнка на занятия?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p class="accordion-body__desc">Мы принимаем учеников с 6 лет. Для младших школьников программы адаптированы в игровой форме, чтобы обучение было интересным и понятным. Для старших — более углублённые курсы с практикой и проектами.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                Нужно ли покупать дополнительное оборудование или материалы?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p class="accordion-body__desc">Нет, всё необходимое предоставляется центром. Ученики используют ноутбуки, шахматные доски и учебные материалы, которые есть у нас. Родителям не нужно ничего докупать.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Как проходит обучение — онлайн или офлайн?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p class="accordion-body__desc">Мы проводим занятия как в учебных классах, так и онлайн. Родители могут выбрать удобный формат при записи. Онлайн-занятия проходят в интерактивной форме с преподавателем в реальном времени.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                Сколько длится одно занятие и курс в целом?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p class="accordion-body__desc">Продолжительность одного занятия — 60–90 минут, в зависимости от возраста ребёнка. Полный курс длится от 3 до 6 месяцев, после чего можно перейти на следующий уровень обучения.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                Как происходит оплата и можно ли платить частями?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p class="accordion-body__desc">Да, вы можете оплатить курс полностью или частями — ежемесячно. Оплата возможна наличными, по карте или онлайн. Также мы предоставляем скидки при оплате сразу за весь курс.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                Что делать, если ребёнок пропустил занятие?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p class="accordion-body__desc">Мы предлагаем возможность отработать пропущенное занятие — в другой группе или индивидуально по договорённости с преподавателем. Главное — предупредить администратора заранее.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                                Безопасно ли оставлять ребёнка в центре?
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                <p class="accordion-body__desc">Да, наш центр оборудован камерами видеонаблюдения и системой доступа. Все преподаватели проходят проверку и имеют опыт работы с детьми. Родители могут присутствовать на первых занятиях при желании.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@include('components.my.footer')


<!-- Jquery js -->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap Bundle Js -->
<script src="assets/js/boostrap.bundle.min.js"></script>
<!-- select2 Js -->
<script src="assets/js/select2.min.js"></script>
<!-- Phosphor Icon Js -->
<script src="assets/js/phosphor-icon.js"></script>
<!-- Slick js -->
<script src="assets/js/slick.min.js"></script>
<!-- Slick js -->
<script src="assets/js/counter.min.js"></script>
<!-- magnific popup -->
<script src="assets/js/magnific-popup.min.js"></script>
<!-- Jquery Ui js -->
<script src="assets/js/jquery-ui.js"></script>
<!-- plyr Js -->
<script src="assets/js/plyr.js"></script>
<!-- vanilla Tilt -->
<script src="assets/js/vanilla-tilt.min.js"></script>
<!-- wow -->
<script src="assets/js/wow.min.js"></script>

<script src="assets/js/aos.js"></script>

<!-- main js -->
<script src="assets/js/main.js"></script>


</body>
</html>
