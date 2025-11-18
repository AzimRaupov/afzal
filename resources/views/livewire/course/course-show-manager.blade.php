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
{{--                        <h1 class="breadcrumb__title display-4 fw-semibold text-center"> Courses Details</h1>--}}
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
{{--                                <span class="text-main-two-600"> Courses Details </span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ============================== Course Details Section Start ============================== -->
    <section class="course-details py-120">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-8">
                    <!-- Details Content Start -->
                    <div class="course-details__content border border-neutral-30 rounded-12 bg-main-25 p-12">
                        <img src="{{asset('storage/'.$course->image)}}" alt="" class="rounded-8 cover-img">
                        <div class="p-20">
                            <h2 class="mt-24 mb-24">{{$course->name}}</h2>
                            <p class="text-neutral-700">{{$course->info}}</p>
                            <span class="d-block border-bottom border-main-100 my-32"></span>
                            <h3 class="mb-16">Что вы узнаете:</h3>
                            <ul class="list-dotted d-flex flex-column gap-24">
                                @foreach($course->topics as $topic)
                                    <li>{{$topic->topic}}</li>
                                @endforeach

                            </ul>
                            <span class="d-block border-bottom border-main-100 my-32"></span>
                            <h4 class="mb-16">Навыки:</h4>
                            <ul class="list-dotted d-flex flex-column gap-24">

 @foreach($course->skills as $skill)
     <li>{{$skill->skill}}</li>
 @endforeach
                            </ul>

                        </div>
                    </div>


                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 mt-24">

                        <div class="flex-between gap-16 flex-wrap mb-24">
                            <h6 class="mb-0">Все отзывы</h6>
                        </div>

                        @foreach($course->ratings as $rating)
                            <!-- Review Item -->
                            <div class="border border-neutral-30 rounded-12 bg-white p-32">
                                <div class="flex-align gap-8 mb-16">
                                    @php
                                        $fullStars = floor($rating->rating); // Полные звезды
                                        $halfStar = $rating->rating - $fullStars >= 0.5; // Нужно ли добавить половину
                                        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0); // Пустые звезды
                                    @endphp

                                    {{-- Полные звезды --}}
                                    @for($i = 0; $i < $fullStars; $i++)
                                        <span class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star"></i></span>
                                    @endfor

                                    {{-- Половина звезды --}}
                                    @if($halfStar)
                                        <span class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star-half"></i></span>
                                    @endif

                                    {{-- Пустые звезды --}}
                                    @for($i = 0; $i < $emptyStars; $i++)
                                        <span class="text-gray-300 text-xl d-flex"><i class="ph-fill ph-star"></i></span>
                                    @endfor


                                </div>
                                <p class="text-neutral-700">"{{$rating->comment}}"</p>
                                <span class="d-block border border-neutral-30 my-24 border-dashed"></span>
                                <div class="flex-align gap-24">
                                    <img src="{{asset('file/img/photo.jpg')}}" alt="" class="w-60 h-60 rounded-circle cover-img">
                                    <div class="">
                                        <h6 class="text-xl mb-8 fw-medium">{{$rating->name}}</h6>
                                    </div>
                                </div>

                            </div>
                            <!-- Review Item -->
                        @endforeach



                    </div>
                    <!-- Review Form Start -->
                    <div class="border border-neutral-30 rounded-12 bg-main-25 p-32 mt-24">
                        <form wire:submit.prevent="addComment" id="commentForm" wire:key="addComment-form">
                            <h5 class="mb-0">Написать отзыв</h5>
                            <span class="d-block border border-neutral-30 my-32 border-dashed"></span>
                            <div class="mb-24">
                                <label for="name"  class="text-neutral-700 text-lg fw-medium mb-12">Имя </label>
                                <input type="text" wire:model="name" class="common-input rounded-pill" id="name" placeholder="Имя...">
                            </div>

                            <div class="mb-24">
                                <label class="text-neutral-700 text-lg fw-medium mb-12">Оценка</label>

                                <div id="half-star-rating">
                                    <div class="rating-group">
                                        <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
                                        <label aria-label="0 stars" wire:model="rating" class="rating__label" for="rating2-0">&nbsp;</label>
                                        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star ph-fill ph-star-half"></i></label>
                                        <input class="rating__input" wire:model="rating" name="rating2" id="rating2-05" value="0.5" type="radio">
                                        <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star ph-fill ph-star"></i></label>
                                        <input class="rating__input" wire:model="rating" name="rating2" id="rating2-10" value="1" type="radio">
                                        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star ph-fill ph-star-half"></i></label>
                                        <input class="rating__input" wire:model="rating" name="rating2" id="rating2-15" value="1.5" type="radio">
                                        <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star ph-fill ph-star"></i></label>
                                        <input class="rating__input" wire:model="rating" name="rating2" id="rating2-20" value="2" type="radio">
                                        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star ph-fill ph-star-half"></i></label>
                                        <input class="rating__input" wire:model="rating" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
                                        <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star ph-fill ph-star"></i></label>
                                        <input class="rating__input" wire:model="rating" name="rating2" id="rating2-30" value="3" type="radio">
                                        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star ph-fill ph-star-half"></i></label>
                                        <input class="rating__input" wire:model="rating" name="rating2" id="rating2-35" value="3.5" type="radio">
                                        <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star ph-fill ph-star"></i></label>
                                        <input class="rating__input" wire:model="rating" name="rating2" id="rating2-40" value="4" type="radio">
                                        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star ph-fill ph-star-half"></i></label>
                                        <input class="rating__input" wire:model="rating" name="rating2" id="rating2-45" value="4.5" type="radio">
                                        <label aria-label="5 stars"  class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star ph-fill ph-star"></i></label>
                                        <input class="rating__input" wire:model="rating" name="rating2" id="rating2-50" value="5" type="radio">
                                    </div>
                                </div>

                            </div>
                            <div class="mb-24">
                                <label for="desc" class="text-neutral-700 text-lg fw-medium mb-12">Что вы думаете об {{$course->name}}? </label>
                                <textarea id="desc" wire:model="comment" class="common-input rounded-24" placeholder="Напиши свое мнение..."></textarea>
                            </div>
                            <div class="mb-0">
                                <button type="submit" class="btn btn-main rounded-pill flex-center gap-8 mt-40">
                                    Отправить отзыв
                                    <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="course-details__sidebar border border-neutral-30 rounded-12 bg-white p-8">
                        <div class="border border-neutral-30 rounded-12 bg-main-25 p-24 bg-main-25">
                            <span class="text-neutral-700 text-lg mb-12">Цена</span>
                            <div class="flex-align align-items-start flex-wrap gap-8 border-bottom border-neutral-40 pb-24 mb-24">
                                <div class="flex-align gap-12 text-neutral-700">
                                    <h2 class="mb-0">{{$course->price}}/мох</h2>
                                </div>
                                <button type="button" class="text-neutral-500 text-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Initial Price">
                                    <i class="ph-bold ph-info"></i>
                                </button>
                            </div>

                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"><i class="ph ph-globe"></i> </span>
                                    <span class="text-neutral-700 text-lg fw-normal">Язык</span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">Таджикский/Русский</span>
                            </div>
                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"> <i class="ph ph-chart-pie"></i></span>
                                    <span class="text-neutral-700 text-lg fw-normal">Уровень курса</span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">Новичок</span>
                            </div>
                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"> <i class="ph ph-star"></i> </span>
                                    <span class="text-neutral-700 text-lg fw-normal">Отзывы</span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">{{$course->rating}}(10)</span>
                            </div>

                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"> <i class="ph ph-clock"></i> </span>
                                    <span class="text-neutral-700 text-lg fw-normal">Продолжительность</span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">7 Недели</span>
                            </div>
                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"> <i class="ph ph-users"></i> </span>
                                    <span class="text-neutral-700 text-lg fw-normal">Студенты</span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">2.5k</span>
                            </div>
                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"> <i class="ph ph-certificate"></i> </span>
                                    <span class="text-neutral-700 text-lg fw-normal">Сертификаты</span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">Есть</span>
                            </div>

                            <div class="border-bottom border-neutral-40 pb-24 mb-24 flex-between flex-wrap gap-16">
                                <div class="flex-align gap-12">
                                    <span class="text-neutral-700 text-2xl d-flex"> <i class="ph ph-user-circle"></i> </span>
                                    <span class="text-neutral-700 text-lg fw-normal">Учитель </span>
                                </div>
                                <span class="text-lg fw-medium text-neutral-700">{{$course->teacher->name}}</span>
                            </div>
                            <a href="#application" class="btn btn-main rounded-pill flex-center gap-8 mt-40">
                                Записат на курс
                                <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.my.tr')
    @include('components.my.certificate')
    @include('components.my.appli')
</div>
