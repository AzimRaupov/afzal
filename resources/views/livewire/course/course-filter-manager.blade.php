<div>
{{--    <section class="breadcrumb py-120 bg-main-25 position-relative z-1 overflow-hidden mb-0">--}}
{{--        <img src="assets/images/shapes/shape1.png" alt="" class="shape one animation-rotation d-md-block d-none">--}}
{{--        <img src="assets/images/shapes/shape2.png" alt="" class="shape two animation-scalation d-md-block d-none">--}}
{{--        <img src="assets/images/shapes/shape3.png" alt="" class="shape eight animation-walking d-md-block d-none">--}}
{{--        <img src="assets/images/shapes/shape5.png" alt="" class="shape six animation-walking d-md-block d-none">--}}
{{--        <img src="assets/images/shapes/shape4.png" alt="" class="shape four animation-scalation">--}}
{{--        <img src="assets/images/shapes/shape4.png" alt="" class="shape nine animation-scalation">--}}

{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="breadcrumb__wrapper">--}}
{{--                        <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Courses List View</h1>--}}
{{--                        <ul class="breadcrumb__list d-flex align-items-center justify-content-center gap-4">--}}
{{--                            <li class="breadcrumb__item">--}}
{{--                                <a href="index.html" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium">--}}
{{--                                    <i class="text-lg d-inline-flex ph-bold ph-house"></i> Home</a>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb__item">--}}
{{--                                <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb__item">--}}
{{--                                <a href="course.html" class="breadcrumb__link text-neutral-500 hover-text-main-600 fw-medium"> Courses</a>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb__item ">--}}
{{--                                <i class="text-neutral-500 d-flex ph-bold ph-caret-right"></i>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb__item">--}}
{{--                                <span class="text-main-two-600"> List View </span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- ==================== Breadcrumb End Here ==================== -->

    <section class="course-list-view py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar rounded-12 bg-main-25 p-32 border border-neutral-30">
                        <form wire:submit="save">
                            <div class="flex-between mb-24">
                                <h4 class="mb-0">Название</h4>
                                <button type="button" class="sidebar-close text-xl text-neutral-500 d-lg-none hover-text-main-600">
                                    <i class="ph-bold ph-x"></i>
                                </button>
                            </div>

                            <div class="position-relative mb-24">
                                <input type="text"
                                       class="common-input pe-48 rounded-pill"
                                       placeholder="Название..."
                                       wire:model="courseName">
                                <button type="submit" class="text-neutral-500 text-xl d-flex position-absolute top-50 translate-middle-y inset-inline-end-0 me-24 hover-text-main-600"><i class="ph-bold ph-magnifying-glass"></i></button>

                            </div>
                            <span class="d-block border border-neutral-30 border-dashed my-24"></span>

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



                            <span class="d-block border border-neutral-30 border-dashed my-24"></span>


                            <h6 class="text-lg mb-24 fw-medium">Категори</h6>
                            <div class="flex-align flex-wrap gap-12">
                                @foreach($categories as $category)
                                    <div class="form-check common-check mb-0">
                                        <input class="form-check-input"
                                               type="checkbox"
                                               value="{{ $category->id }}"
                                               wire:model="selectedCategories"
                                               id="cat-{{ $category->id }}">
                                        <label class="form-check-label fw-normal flex-grow-1" for="cat-{{ $category->id }}">
                                            {{ $category->category }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                            <span class="d-block border border-neutral-30 border-dashed my-24"></span>



                            <button type="submit" class="btn btn-outline-main rounded-pill flex-center gap-16 fw-semibold w-100">
                                Найти
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-list-wrapper">
                        <style>
                            .course-info-limit {
                                display: -webkit-box;
                                max-width: 500px;
                                -webkit-line-clamp: 3;     /* максимум 3 строки */
                                -webkit-box-orient: vertical;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                line-height: 1.5;
                                min-height: 4.5em;         /* чтобы все карточки были одной высоты */
                            }

                        </style>
                        <div class="row gy-4">

                            @foreach($courses as $course)


                                <div class="col-12">
                                    <div class="course-item bg-main-25 rounded-16 p-12 h-100 border border-neutral-30 list-view">
                                        <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                            <a href="{{route('course.show',$course->id)}}" class="w-100 h-100">
                                                <img src="{{asset('storage/'.$course->image)}}" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                            </a>
                                            <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                                <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                                <span class="text-lg fw-medium">2ч 30мин</span>
                                            </div>
                                            <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                                <i class="ph ph-heart"></i>
                                            </button>
                                        </div>
                                        <div class="course-item__content flex-grow-1">
                                            <div>
                                                <h4 class="mb-28">
                                                    <a href="course-details.html" class="link text-line-2">
                                                        {{$course->name}}
                                                    </a>
                                                </h4>

                                                <div class="flex-between gap-8 flex-wrap mb-16">
                                                    <p class="course-info-limit">{{ $course->info }}</p>
                                                </div>

                                                <div class="flex-between gap-8 flex-wrap">
                                                    <div class="flex-align gap-4">
                <span class="text-2xl fw-medium text-warning-600 d-flex">
                    <i class="ph-fill ph-star"></i>
                </span>
                                                        <span class="text-lg text-neutral-700">
                    4.7
                    <span class="text-neutral-100">(6.4k)</span>
                </span>
                                                    </div>

                                                    <div class="flex-align gap-8">
                <span class="text-neutral-700 text-2xl d-flex">
                    <img src="{{asset('storage/'.$course->teacher->photo)}}"
                         alt="User Image"
                         class="w-32 h-32 object-fit-cover rounded-circle">
                </span>
                                                        <span class="text-neutral-700 text-lg fw-medium">{{$course->teacher->name}}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                                <h4 class="mb-0 text-main-two-600">{{$course->price}}см/мох</h4>
                                                <a href="{{route('course.show',$course->id)}}"
                                                   class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold"
                                                   tabindex="0">
                                                    Подробнее
                                                    <i class="ph ph-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
{{--                    <ul class="pagination mt-40 flex-align gap-12 flex-wrap justify-content-center">--}}
{{--                        <li class="page-item">--}}
{{--                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#"><i class="ph-bold ph-caret-left"></i></a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item">--}}
{{--                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#">1</a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item">--}}
{{--                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#">2</a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item">--}}
{{--                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#">3</a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item">--}}
{{--                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#">...</a>--}}
{{--                        </li>--}}
{{--                        <li class="page-item">--}}
{{--                            <a class="page-link text-neutral-700 fw-semibold w-40 h-40 bg-main-25 rounded-circle hover-bg-main-600 border-neutral-30 hover-border-main-600 hover-text-white flex-center p-0" href="#"><i class="ph-bold ph-caret-right"></i></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </section>

    @include('components.my.tr')
@include('components.my.certificate')
@include('components.my.appli')
</div>
