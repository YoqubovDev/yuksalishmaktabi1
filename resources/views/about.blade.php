<x-header></x-header>

    <!-- Hero Section -->
    <section class="bg-blue-900 text-white text-center py-20">
        <h1 class="text-5xl font-bold">Jizzax Shahar Yuksalish maktabiga xush kelibsiz!</h1>
        <p class="text-lg mt-4">Jizzax Shahar Yuksalish Maktabi innovatsiya ta'limning mukammalligiga javob beradi</p>
    </section>

    <!-- Statistics Section -->
{{--    <section class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-6">--}}
{{--        <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">--}}
{{--            <h2 class="text-4xl font-bold text-blue-900">422+</h2>--}}
{{--            <p class="text-gray-600">Maktabda Tahsil Oladigan O'qituvchilar</p>--}}
{{--        </div>--}}
{{--        <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">--}}
{{--            <h2 class="text-4xl font-bold text-blue-900">37+</h2>--}}
{{--            <p class="text-gray-600">Malakali O'qituvchilar</p>--}}
{{--        </div>--}}
{{--        <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">--}}
{{--            <h2 class="text-4xl font-bold text-blue-900">100%</h2>--}}
{{--            <p class="text-gray-600">Bitiruv Darajasi</p>--}}
{{--        </div>--}}
{{--    </section>--}}
<section class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">
        <h2 class="text-4xl font-bold text-blue-900">{{ $stat->students_count }}+</h2>
        <p class="text-gray-600">Maktabda Tahsil Oladigan O'qituvchilar</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">
        <h2 class="text-4xl font-bold text-blue-900">{{ $stat->qualified_teachers }}+</h2>
        <p class="text-gray-600">Malakali O'qituvchilar</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">
        <h2 class="text-4xl font-bold text-blue-900">{{ $stat->graduation_rate }}</h2>
        <p class="text-gray-600">Bitiruv Darajasi</p>
    </div>
</section>


    <!-- Latest News Section -->
    <section id="news" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
            <span class="inline-block mb-4 bg-cyan-600/10 text-cyan-600 border border-cyan-600/20 px-3 py-1 rounded-full text-sm">
                Yangiliklar
            </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">So'nggi yangiliklar</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Maktabimizning so'nggi yangiliklari va tadbirlari bilan tanishing
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($news as $item)
                    <!-- News Card -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover-lift overflow-hidden">
                        <div class="aspect-video overflow-hidden">
                            @if($item->image)
                                <img
                                    src="{{ asset('storage/' . $item->image) }}"
                                    alt="{{ $item->title }}"
                                    class="w-full h-full object-cover hover-scale transition-transform duration-300"
                                />
                            @else
                                <img
                                    src="/placeholder-news.jpg"
                                    alt="Default image"
                                    class="w-full h-full object-cover hover-scale transition-transform duration-300"
                                />
                            @endif
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h8m-8 0H6a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V9a2 2 0 00-2-2h-2"></path>
                                </svg>
                                {{ $item->published_at ? $item->published_at->format('d.m.Y') : $item->created_at->format('d.m.Y') }}
                            </div>
                            <h3 class="text-lg font-semibold hover:text-cyan-600 transition-colors mb-2">
                                {{ $item->title }}
                            </h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">
                                {{ $item->excerpt ?? Str::limit($item->content, 100) }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-lg">Hozircha yangiliklar mavjud emas</p>
                    </div>
                @endforelse
            </div>

            @if($news->count() >= 3)
                <div class="text-center mt-12">
                </div>
            @endif
        </div>
    </section>

    <x-footer></x-footer>

    <!-- JavaScript for menu toggle -->
    <script>
        $(document).ready(function() {
            $('#menuToggle').click(function() {
                $('#mainMenu').toggleClass('show');
                $(this).toggleClass('active');
            });
        });
    </script>

    <!-- JavaScript for Slider -->
    <script>
        jQuery(document).ready(function($) {
            console.log("jQuery working!");

            // Slider functionality
            const $sliderImages = $('.slider-images');
            const $slides = $('.slider-img');
            const $prevBtn = $('#prev-btn');
            const $nextBtn = $('#next-btn');
            const slideWidth = $slides.first().outerWidth(true); // Including margins
            const totalSlides = $slides.length;
            let currentIndex = 0;

            // Dynamically add dots based on the number of slides
            for (let i = 0; i < totalSlides; i++) {
                $('.slider-dots').append(`<span class="dot ${i === 0 ? 'active' : ''}" data-index="${i}"></span>`);
            }


            const $dots = $('.dot');

            // Function to update slider position and active states
            function updateSlider() {
                $sliderImages.css('transform', `translateX(-${currentIndex * slideWidth}px)`);
                $slides.removeClass('active');
                $slides.eq(currentIndex).addClass('active');
                $dots.removeClass('active').eq(currentIndex).addClass('active');
            }

            // Next button click handler
            $nextBtn.on('click', function() {
                if (currentIndex < totalSlides - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Loop back to the first slide
                }
                updateSlider();
            });

            // Previous button click handler
            $prevBtn.on('click', function() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = totalSlides - 1; // Loop to the last slide
                }
                updateSlider();
            });

            // Dot click handler
            $dots.on('click', function() {
                currentIndex = parseInt($(this).data('index'));
                updateSlider();
            });

            // Auto-slide every 5 seconds
            setInterval(function() {
                if (currentIndex < totalSlides - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateSlider();
            }, 5000);

            // Initial update
            updateSlider();
        });
        function toggleMenu() {
        const nav = document.getElementById('mainNav');
        nav.classList.toggle('active');
    }
    </script>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'922f25ba8e57d684',t:'MTc0MjQxMDE0MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
</body>
</html>
