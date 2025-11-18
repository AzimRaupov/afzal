<section class="join-community" id="application">
    <div class="container container--lg">
        <div class="bg-main-25 rounded-20 py-120 px-8">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="join-community__content">
                            <div class="mb-40">
                                <h2 class="mb-24 wow bounceIn">Присоединяйтесь к сообществу Afzal: начните сейчас</h2>
                                <p class="text-neutral-500 text-line-2 wow bounceInUp">Готовы лично ознакомиться с нашими курсами? Запишитесь на бесплатный пробный урок уже сегодня и оцените, насколько это увлекательно.</p>
                            </div>

                            <form action="{{route('application.add')}}" method="post">
                                @csrf
                                <div class="mb-24 position-relative" data-aos="fade-up-left" data-aos-duration="400">
                                    <input type="text" name="name" class="bg-white text-black border border-transparent focus-border-main-600 h-48 rounded-pill px-16 ps-60 outline-0 w-100" placeholder="Имя...">
                                    <span class="bg-white text-neutral-200 text-2xl flex-center w-48 h-48 rounded-circle border border-main-25 border-4 position-absolute inset-inline-start-0 top-50 translate-middle-y">
                                        <i class="ph-bold ph-user-circle"></i>
                                    </span>
                                </div>
                                <div class="mb-24 position-relative" data-aos="fade-up-left" data-aos-duration="600">
                                    <input type="number" name="phone" class="bg-white text-black border border-transparent focus-border-main-600 h-48 rounded-pill px-16 ps-60 outline-0 w-100" placeholder="Номер телефона">
                                    <span class="bg-white text-neutral-200 text-2xl flex-center w-48 h-48 rounded-circle border border-main-25 border-4 position-absolute inset-inline-start-0 top-50 translate-middle-y">
                                        <i class="ph-bold ph-envelope-open"></i>
                                    </span>
                                </div>
                                <div class="mb-24 position-relative" data-aos="fade-up-left" data-aos-duration="800">
                                    <select name="course" class="bg-white text-black border border-transparent focus-border-main-600 h-48 rounded-pill px-16 ps-60 outline-0 w-100 text-neutral-300">
                                       @if(isset($selectC))
                                            <option value="{{$selectC}}">{{$selectC}}</option>
                                            @foreach($lcourses as $course)
                                                @if($selectC!=$course)
                                                <option value="{{$course->name}}">{{$course->name}}</option>
                                                @endif
                                            @endforeach


                                           @else
                                               @foreach($lcourses as $course)
                                                   <option value="{{$course->name}}">{{$course->name}}</option>

                                               @endforeach
                                           @endif

                                    </select>
                                    <span class="bg-white text-neutral-200 text-2xl flex-center w-48 h-48 rounded-circle border border-main-25 border-4 position-absolute inset-inline-start-0 top-50 translate-middle-y">
                                        <i class="ph-bold ph-book"></i>
                                    </span>
                                </div>
                                <div class="mt-40 position-relative" data-aos="fade-up-left" data-aos-duration="1000">
                                    <button type="submit" class="btn btn-main rounded-pill flex-align d-inline-flex gap-8">
                                        Присоединяйтесь сейчас
                                        <i class="ph-bold ph-arrow-up-right d-flex text-lg"></i>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="join-community__thumb text-end position-relative">
                            <img src="{{asset('file/img/join-community-img.png')}}" alt="" class="wow bounceIn" data-tilt data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-full-page-listening>

                            <div class="offer-message style-two px-24 py-12 rounded-12 bg-white fw-medium flex-align d-inline-flex gap-16 box-shadow-lg animation-upDown">
                                <span class="banner-box__icon flex-shrink-0 w-48 h-48 bg-purple-400 text-white text-2xl flex-center rounded-circle">
                                    <i class="ph-bold ph-users"></i>
                                </span>
                                <div class="text-start">
                                    <h6 class="mb-4">500</h6>
                                    <span class="">Студенты</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
