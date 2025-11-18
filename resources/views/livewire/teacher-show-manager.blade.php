<div>


    <!-- ================================ Instructor Details Section Start ==================================== -->
    <section class="instructor-details py-120 position-relative z-1">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="instructor-details__thumb">
                        <img src="{{asset('storage/'.$teacher->photo)}}" alt="" class="max-h-416 max-w-416 cover-img rounded-circle">

                    </div>
                </div>
                <div class="col-lg-8 ps-xl-5">
                    <div class="ps-lg-5">
                        <h5 class="text-main-600 mb-0">Учитель</h5>
                        <h2 class="my-16">{{$teacher->name}}</h2>
                        <div class="d-flex flex-column gap-16 flex-wrap max-w-340 mt-40">
                            <div class="flex-between gap-8">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-lightbulb"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">{{$teacher->courses[0]->name}}</span>
                                </div>
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-watch"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">{{$teacher->courses->count()}} Курсов</span>
                                </div>
                            </div>
                            <div class="flex-between gap-8 flex-wrap">
                                <div class="flex-align gap-8">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph-bold ph-users"></i></span>
                                    <span class="text-neutral-700 text-lg fw-medium">{{$teacher->courses->count()*50}}</span>
                                </div>
                                <div class="flex-align gap-4">
                                    <span class="text-2xl fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                                    <span class="text-lg text-neutral-700 fw-semibold">
                                        4.9
                                        <span class="text-neutral-100 fw-normal">(4)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <span class="d-block border border-neutral-30 my-40 border-dashed"></span>
                        <h4 class="mb-24">Биография</h4>
                        <p class="text-neutral-500">{{$teacher->info}}</p>
                        <span class="d-block border border-neutral-30 my-40 border-dashed"></span>
                        <h4 class="mb-24">Контакты</h4>
                        <div class="d-flex flex-column gap-24">
                            <div class="flex-align gap-12">
                                <span class="text-2xl w-44 h-44 border border border-neutral-30 rounded-4 flex-center text-main-600 bg-main-25">
                                    <i class="ph-bold ph-phone-call"></i>
                                </span>
                                <a href="tel:{{$teacher->phone}}" class="text-neutral-500 hover-text-main-600">{{$teacher->phone}}</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================ Instructor Details Section End ==================================== -->

    <!-- ================================ Course Section Start ==================================== -->
    <section class="py-120 bg-main-25">
        <div class="container">
            <div class="section-heading text-center">
                <div class="flex-align d-inline-flex gap-8 mb-16">
                    <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book"></i></span>
                    <h5 class="text-main-600 mb-0">Мои курсы</h5>
                </div>
                <h2 class="mb-24">Мои популярные курсы</h2>
                <p class="">Наша платформа построена на принципах инноваций, качества и инклюзивности, стремясь обеспечить бесперебойное обучение</p>
            </div>
            <div class="row gy-4">
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
               @foreach($teacher->courses as $course)
                    <div class="col-lg-4 col-sm-6">
                        <div class="course-item bg-white rounded-16 p-12 h-100 box-shadow-md">
                            <div class="course-item__thumb rounded-12 overflow-hidden position-relative">
                                <a href="{{route('course.show',$course->id)}}" class="w-100 h-100">
                                    <img src="{{asset('storage/'.$course->image)}}" alt="Course Image" class="course-item__img rounded-12 cover-img transition-2">
                                </a>
                                <div class="flex-align gap-8 bg-main-600 rounded-pill px-24 py-12 text-white position-absolute inset-block-start-0 inset-inline-start-0 mt-20 ms-20 z-1">
                                    <span class="text-2xl d-flex"><i class="ph ph-clock"></i></span>
                                    <span class="text-lg fw-medium">3часа</span>
                                </div>
                                <button type="button" class="wishlist-btn w-48 h-48 bg-white text-main-two-600 flex-center position-absolute inset-block-start-0 inset-inline-end-0 mt-20 me-20 z-1 text-2xl rounded-circle transition-2">
                                    <i class="ph ph-heart"></i>
                                </button>
                            </div>
                            <div class="course-item__content">
                                <div class="">
                                    <h4 class="mb-28">
                                        <a href="{{route('course.show',$course->id)}}" class="link text-line-2">{{$course->name}}</a>
                                    </h4>
                                    <p class="course-info-limit">{{ $course->info }}</p>

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
                                            <img src="{{asset('storage/'.$teacher->photo)}}" alt="User Image" class="w-32 h-32 object-fit-cover rounded-circle">
                                        </span>
                                            <span class="text-neutral-700 text-lg fw-medium">{{$teacher->name}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-between gap-8 pt-24 border-top border-neutral-50 mt-28 border-dashed border-0">
                                    <h4 class="mb-0 text-main-two-600">{{$course->price}}/месац</h4>
                                    <a href="{{route('course.show',$course->id)}}" class="flex-align gap-8 text-main-600 hover-text-decoration-underline transition-1 fw-semibold" tabindex="0">
                                        Перейти
                                        <i class="ph ph-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

               @endforeach

            </div>
        </div>
    </section>
    <!-- ================================ Course Section End ==================================== -->


  @include('components.my.tr')

  @include('components.my.certificate')

    @include('components.my.appli')

</div>
