<div>
    <section class="breadcrumb py-120 bg-main-25 position-relative z-1 overflow-hidden mb-0">
        <img src="assets/images/shapes/shape1.png" alt="" class="shape one animation-rotation d-md-block d-none">
        <img src="assets/images/shapes/shape2.png" alt="" class="shape two animation-scalation d-md-block d-none">
        <img src="assets/images/shapes/shape3.png" alt="" class="shape eight animation-walking d-md-block d-none">
        <img src="assets/images/shapes/shape5.png" alt="" class="shape six animation-walking d-md-block d-none">
        <img src="assets/images/shapes/shape4.png" alt="" class="shape four animation-scalation">
        <img src="assets/images/shapes/shape4.png" alt="" class="shape nine animation-scalation">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Courses List View</h1>
                        <ul class="breadcrumb__list d-flex align-items-center justify-content-center gap-4">
                            <li class="breadcrumb__item">
                                <a href="index.html" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium">
                                    <i class="text-lg d-inline-flex ph-bold ph-house"></i> Home</a>
                            </li>
                            <li class="breadcrumb__item">
                                <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                            </li>
                            <li class="breadcrumb__item">
                                <a href="course.html" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium"> Courses</a>
                            </li>
                            <li class="breadcrumb__item ">
                                <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>
                            </li>
                            <li class="breadcrumb__item">
                                <span class="text-main-two-600"> List View </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ============================== Course List View Section Start ============================== -->
    <section class="course-list-view py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar rounded-12 bg-main-25 p-32 border border-neutral-30">
                        <div class="sidebar rounded-12 bg-main-25 p-32 border border-neutral-30">
                            <!-- Заголовок фильтров -->
                            <div class="flex-between mb-24">
                                <h4 class="mb-0">Filter</h4>
                                <button type="button" class="sidebar-close text-xl text-neutral-500 d-lg-none hover-text-main-600">
                                    <i class="ph-bold ph-x"></i>
                                </button>
                            </div>

                            <!-- Поиск по названию курса -->
                            <div class="position-relative mb-24">
                                <input type="text"
                                       class="common-input pe-48 rounded-pill"
                                       placeholder="Enter Course Name..."
                                       wire:model.debounce.300ms="search">
                                <span class="position-absolute top-50 translate-middle-y inset-inline-end-0 me-24 text-neutral-500">
            <i class="ph-bold ph-magnifying-glass"></i>
        </span>
                            </div>
                            <span class="d-block border border-neutral-30 border-dashed my-24"></span>

                            <!-- Фильтр по навыкам -->
                            <h6 class="text-lg mb-24 fw-medium">Навыки</h6>
                            <div class="d-flex flex-column gap-16 mb-24">
                                @foreach($skills as $skill)
                                    <div class="form-check common-check mb-0">
                                        <input class="form-check-input"
                                               type="checkbox"
                                               value="{{ $skill->id }}"
                                               wire:model="selectedSkills"
                                               id="skill-{{ $skill->id }}">
                                        <label class="form-check-label fw-normal flex-grow-1" for="skill-{{ $skill->id }}">
                                            {{ $skill->skill }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <a href="course.html" class="text-sm text-main-600 fw-semibold mt-0 mb-24 hover-text-decoration-underline">See All</a>
                            <span class="d-block border border-neutral-30 border-dashed my-24"></span>

                            <!-- Популярные теги (чисто визуально) -->
                            <h6 class="text-lg mb-24 fw-medium">Popular Tags</h6>
                            <div class="flex-align flex-wrap gap-12 mb-24">
                                <a href="course.html" class="border border-neutral-30 px-20 py-12 rounded-pill bg-white text-neutral-500 hover-border-main-600 hover-text-main-600">UI/UX Design</a>
                                <a href="course.html" class="border border-neutral-30 px-20 py-12 rounded-pill bg-white text-neutral-500 hover-border-main-600 hover-text-main-600">Web Development</a>
                                <a href="course.html" class="border border-neutral-30 px-20 py-12 rounded-pill bg-white text-neutral-500 hover-border-main-600 hover-text-main-600">Wordpress</a>
                                <a href="course.html" class="border border-neutral-30 px-20 py-12 rounded-pill bg-white text-neutral-500 hover-border-main-600 hover-text-main-600">Machine Learning</a>
                                <a href="course.html" class="border border-neutral-30 px-20 py-12 rounded-pill bg-white text-neutral-500 hover-border-main-600 hover-text-main-600">AI</a>
                                <a href="course.html" class="border border-neutral-30 px-20 py-12 rounded-pill bg-white text-neutral-500 hover-border-main-600 hover-text-main-600">Laravel</a>
                                <a href="course.html" class="border border-neutral-30 px-20 py-12 rounded-pill bg-white text-neutral-500 hover-border-main-600 hover-text-main-600">Python</a>
                            </div>
                            <a href="course.html" class="text-sm text-main-600 fw-semibold mt-0 mb-24 hover-text-decoration-underline">More Tags</a>
                            <span class="d-block border border-neutral-30 border-dashed my-24"></span>

                            <!-- Кнопка сброса фильтров -->
                            <button type="button"
                                    wire:click="resetFilters"
                                    class="btn btn-outline-main rounded-pill flex-center gap-16 fw-semibold w-100">
                                <i class="ph-bold ph-arrow-clockwise d-flex text-lg"></i>
                                Reset Filters
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-list-wrapper">
                        <div class="flex-between gap-16 flex-wrap mb-40">
                            <span class="text-neutral-500">Showing 9 of 600 Results </span>
                            <div class="flex-align gap-16">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-500 flex-shrink-0">Sort By :</span>
                                    <select class="form-select ps-20 pe-28 py-8 fw-medium rounded-pill bg-main-25 border border-neutral-30 text-neutral-700">
                                        <option value="1">Newest</option>
                                        <option value="1">Trending</option>
                                        <option value="1">Popular</option>
                                    </select>
                                </div>
                                <button type="button" class="list-bar-btn text-xl w-40 h-40 bg-main-600 text-white rounded-8 flex-center d-lg-none">
                                    <i class="ph-bold ph-funnel"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row gy-4">
                            @foreach($courses as $course)
                                <div class="col-12">
                                    <div class="course-item bg-main-25 rounded-16 p-12 h-100 border border-neutral-30 list-view">
                                        <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                            <a href="course-details.html" class="w-100 h-100">
                                                <img src="{{asset('storage/'.$course->image)}}" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                            </a>
                                            <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                                <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                                <span class="text-lg fw-medium">9h 36m</span>
                                            </div>
                                            <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                                <i class="ph ph-heart"></i>
                                            </button>
                                        </div>
                                        <div class="course-item__content flex-grow-1">
                                            <div class="">
                                                <h4 class="mb-28">
                                                    <a href="course-details.html" class="link text-line-2">{{$course->name}}</a>
                                                </h4>
                                                <div class="flex-between gap-8 flex-wrap mb-16">
                                                    <div class="flex-align gap-8">
                                                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-video-camera"></i></span>
                                                        <span class="text-neutral-700 text-lg fw-medium">20 Lessons</span>
                                                    </div>
                                                    <div class="flex-align gap-8">
                                                        <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-chart-bar"></i></span>
                                                        <span class="text-neutral-700 text-lg fw-medium">Beginner</span>
                                                    </div>
                                                </div>
                                                <div class="flex-between gap-8 flex-wrap">
                                                    <div class="flex-align gap-4">
                                                        <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                                        <span class="text-lg text-neutral-700">
                                                        4.7
                                                        <span class="text-neutral-100">(6.4k)</span>
                                                    </span>
                                                    </div>
                                                    <div class="flex-align gap-8">
                                                    <span class="text-neutral-700 text-2xl d-flex">
                                                        <img src="{{asset('storage/'.$course->teacher->photo)}}" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                                                    </span>
                                                        <span class="text-neutral-700 text-lg fw-medium">{{$course->teacher->name}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                                <h4 class="mb-0 text-main-two-600">{{$course->price}} сомони/1мох</h4>
                                                <a href="apply-admission.html" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                                                    Enroll Now
                                                    <i class="ph ph-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach



                        </div>

                    </div>
                    <ul class="pagination mt-40 flex-align gap-12 flex-wrap justify-content-center">
                        <li class="page-item">
                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#"><i class="ph-bold ph-caret-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#"><i class="ph-bold ph-caret-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================== Course List View Section End ============================== -->

    <!-- ================================= Certificate Section Start ================================= -->
    <div class="certificate">
        <div class="container container--lg">
            <div class="certificate-box px-16 bg-main-600 rounded-16">
                <div class="container">
                    <div class="position-relative py-80">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <div class="certificate__content">
                                    <div class="flex-align gap-8 mb-16 wow bounceInDown">
                                        <span class="w-8 h-8 bg-white rounded-circle"></span>
                                        <h5 class="text-white mb-0">Get Certificate</h5>
                                    </div>
                                    <h2 class="text-white mb-40 fw-medium wow bounceIn">Get Quality Skills Certificate From the EduAll</h2>
                                    <a href="" class="btn btn-white rounded-pill flex-align d-inline-flex gap-8 hover-bg-main-800 wow bounceInUp">
                                        Get Started Now
                                        <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 d-xl-block d-none">
                                <div class="certificate__thumb" data-aos="fade-up-left">
                                    <img src="assets/images/thumbs/certificate-img.png" alt="" data-tilt data-tilt-max="8" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-full-page-listening>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
