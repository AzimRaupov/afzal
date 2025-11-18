<section class="testimonials-two py-120 position-relative z-1" id="reviews">
    <div class="container">

        <div class="section-heading text-center">
            <div class="flex-align d-inline-flex gap-8 mb-16 wow bounceInDown">
                <span class="text-main-600 text-2xl d-flex"><i class="ph-bold ph-book"></i></span>
                <h5 class="text-main-600 mb-0">Отзывы счастливых учеников</h5>
            </div>
            <h2 class="mb-24 wow bounceIn">Что говорят наши студенты</h2>
            <p class=" wow bounceInUp">Истории успеха наших студентов говорят сами за себя. Вот лишь несколько отзывов от наших довольных учеников.</p>
        </div>

        <div class="testimonials-two-slider">
            @foreach($reviews as $review)
                <div class="testimonials-two-item bg-main-25 rounded-12 p-32" data-aos="fade-up" data-aos-duration="400">
                    <ul class="flex-align gap-8 mb-16">
                        @php
                            $fullStars = floor($review->rating); // Полные звезды
                            $halfStar = $review->rating - $fullStars >= 0.5; // Нужно ли добавить половину
                            $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0); // Пустые звезды
                        @endphp

                        {{-- Полные звезды --}}
                        @for($i = 0; $i < $fullStars; $i++)
                            <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star"></i></li>
                        @endfor

                        {{-- Половина звезды --}}
                        @if($halfStar)
                            <li class="text-warning-600 text-xl d-flex"><i class="ph-fill ph-star-half"></i></li>
                        @endif

                        {{-- Пустые звезды --}}
                        @for($i = 0; $i < $emptyStars; $i++)
                            <li class="text-gray-300 text-xl d-flex"><i class="ph-fill ph-star"></i></li>
                        @endfor
                    </ul>

                    <p class="text-neutral-700 text-xl">"{{$review->comment}}"</p>
                    <div class="flex-between gap-24 flex-wrap pt-28 mt-28 border-top border-neutral-50 mt-28 border-dashed border-0">
                        <div class="flex-align gap-24 ">
                            <img src="file/img/photo.jpg" alt="" class="w-60 h-60 object-fit-cover rounded-circle">
                            <div class="">
                                <h5 class="mb-8 fw-medium">{{$review->name}}</h5>
                                <span class="text-neutral-700">{{$review->course->name}}</span>
                            </div>
                        </div>
                        <span class="quate text-48 d-flex opacity-25">
                        <img src="assets/images/icons/quote-icon.png" alt="">
                    </span>
                    </div>
                </div>

            @endforeach

        </div>
        <div class="flex-center gap-16 mt-40">
            <button type="button" id="testimonials-two-prev" class="slick-prev slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                <i class="ph ph-caret-left"></i>
            </button>
            <button type="button" id="testimonials-two-next" class="slick-next slick-arrow flex-center rounded-circle border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1 w-48 h-48">
                <i class="ph ph-caret-right"></i>
            </button>
        </div>
    </div>
</section>
