<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sevinch - 475-chi sonli bolalar bog`chasi</title>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'unipix-blue': '#161179',
                        'unipix-light': '#2a2a9e',
                        'unipix-dark': '#0c0950',
                        'turin-green': '#16A34A',
                        'turin-dark': '#003366',
                    },
                    fontFamily: {
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Poppins', 'sans-serif'],
                    },
                    boxShadow: {
                        'elegant': '0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        [x-cloak] { display: none !important; }
        .hero-text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .gradient-overlay {
            background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(22,17,121,0.7) 100%);
        }
        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(22, 17, 121, 0.6);
        }
        .nav-indicator::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background-color: #161179;
            transition: width 0.3s ease;
        }
        .nav-indicator:hover::after {
            width: 70%;
        }
        .active-nav::after {
            width: 70%;
        }

        /* Team slider styles */
        .slides2 {
            display: flex;
            gap: 24px;
            width: max-content;
        }
        .slider2 {
            overflow: hidden;
        }
        .slider2 .slides2 > div {
            flex-shrink: 0;
            min-width: auto;
            max-width: 240px;
        }

        /* Main Slider */
        .main-slider {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        .main-slides {
            display: flex;
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
        }
        .main-slide {
            flex: 0 0 100%;
            position: relative;
        }

        .footer {
            background: linear-gradient(to bottom, #003366, #001830);
            color: white;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(to right, #161179, #16A34A);
        }

        .footer-top {
            padding: 5rem 0 3rem;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .footer-logo-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .footer-heading {
            position: relative;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .footer-nav-item {
            display: flex;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .footer-nav-item:hover {
            transform: translateX(5px);
        }

        .footer-nav-item i {
            color: var(--accent-color);
            font-size: 12px;
            margin-right: 8px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 2rem 0;
        }
    </style>
    <style>
        .stat-box {
            transition: transform 0.3s ease-in-out;
        }
        .stat-box:hover {
            transform: scale(1.05);
        }

        /* Team Slider Styles */
        .slider-container {
            overflow: hidden;
            position: relative;
            width: 100%;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .slider-images {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 2rem;
        }

        .slider-img {
            position: relative;
            height: 450px;
            width: 300px;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
            flex-shrink: 0;
            transition: all 0.5s ease;
            opacity: 0.6;
            transform: scale(0.9);
        }

        .slider-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slider-img h1 {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            font-size: 24px;
            opacity: 0;
            transition: all 0.5s ease;
            z-index: 1;
        }

        .slider-img .details {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: all 0.5s ease;
        }

        .slider-img.active {
            opacity: 1;
            transform: scale(1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        .slider-img.active h1 {
            opacity: 1;
        }

        .slider-img:hover .details {
            opacity: 1;
        }

        .slider-controls {
            position: absolute;
            bottom: 30px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .slider-controls button {
            background: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-controls button:hover {
            background: white;
            color: black;
        }

        .slider-dots {
            display: flex;
            gap: 8px;
            margin-top: 20px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: white;
            transform: scale(1.3);
        }

        .spoon-icon {
            width: 24px;
            height: 24px;
            margin-right: 8px;
            display: inline-block;
            vertical-align: middle;
        }

        .favorite-spoon {
            background: rgba(255, 255, 255, 0.1);
            padding: 6px 12px;
            border-radius: 20px;
            margin-top: 8px;
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .spoon-collection {
            position: absolute;
            bottom: 80px;
            left: 0;
            right: 0;
            text-align: center;
        }

        .spoon-collection img {
            display: inline-block;
            height: 40px;
            margin: 0 5px;
            filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.7));
            transition: all 0.3s ease;
        }

        .spoon-collection img:hover {
            transform: rotate(30deg) scale(1.2);
        }

        @media (max-width: 768px) {
            .slider-img {
                height: 350px;
                width: 250px;
            }
        }
    </style>
    <style>
        :root {
            --primary-color: #0a4480;
            --secondary-color: #1a6cb4;
            --text-color: #333;
            --light-bg: #f5f7fa;
            --white: #ffffff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
        }

        header {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 1rem 0;
            box-shadow: var(--shadow);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo img {
            height: 60px;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav ul {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        nav a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #b8d8ff;
        }

        .lang-switcher {
            display: flex;
            gap: 0.5rem;
        }

        .lang-switcher a {
            color: var(--white);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .gallery-section {
            padding: 3rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--primary-color);
            font-size: 2rem;
            position: relative;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        .main-slider {
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow);
            border-radius: 8px;
            overflow: hidden;
        }

        .main-slider .slide {
            position: relative;
            height: 500px;
        }

        .main-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            padding: 1.5rem;
        }

        .slide-info h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .nav-slider .slide {
            height: 100px;
            margin: 0 10px;
            cursor: pointer;
            border-radius: 4px;
            overflow: hidden;
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .nav-slider .slide:hover,
        .nav-slider .slick-current .slide {
            opacity: 1;
            transform: scale(1.05);
        }

        .nav-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-categories {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 2rem 0;
        }

        .category-btn {
            background-color: var(--white);
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .category-btn:hover,
        .category-btn.active {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .slick-prev, .slick-next {
            z-index: 1;
            width: 40px;
            height: 40px;
        }

        .slick-prev {
            left: 15px;
        }

        .slick-next {
            right: 15px;
        }

        .slick-prev:before, .slick-next:before {
            font-size: 30px;
        }

        @media (max-width: 768px) {
            .main-slider .slide {
                height: 350px;
            }

            .nav-slider .slide {
                height: 70px;
            }

            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            nav ul {
                gap: 1rem;
            }
        }
    </style>
</head>
<body class="font-sans bg-gray-100" x-data="{ zoomImage: false, zoomedImageSrc: '' }">
    <!-- Image Zoom Overlay -->
    <div x-show="zoomImage" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-90"
         class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/95 p-4 md:p-10"
         @click="zoomImage = false"
         x-cloak>
        <button class="absolute top-6 right-6 text-white/50 hover:text-white transition-colors">
            <i class="fas fa-times text-4xl"></i>
        </button>
        <img :src="zoomedImageSrc" class="max-w-full max-h-full rounded-2xl shadow-2xl object-contain border-4 border-white/10">
    </div>
    <!-- Navigation -->
    <x-header></x-header>

    <!-- Achievements Section Header -->
    <section id="achievements" class="py-16 bg-gradient-to-b from-blue-900 to-blue-800">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-black text-white mb-4 uppercase tracking-widest">{{ __('messages.achievements_title_main') }}</h2>
            <div class="w-40 h-1.5 bg-yellow-400 mx-auto mb-8 rounded-full"></div>
            <p class="text-blue-100 max-w-2xl mx-auto text-xl font-light">
                {{ __('messages.achievements_page_desc') }}
            </p>
        </div>
    </section>

    <!-- Achievements Cards - Database dan ma'lumotlar -->
    <section class="py-16 -mt-24">
        <div class="container mx-auto px-4">
            @if($achievements->isEmpty())
            <div class="text-center py-12">
                <p class="text-gray-600 text-xl">{{ __('messages.no_achievements') }}</p>
            </div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($achievements as $achievement)
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="h-56 w-full relative group overflow-hidden cursor-zoom-in" 
                         @click="zoomedImageSrc = '{{ asset('storage/' . $achievement->image) }}'; zoomImage = true">
                        @if($achievement->image)
                        <img src="{{ asset('storage/' . $achievement->image) }}" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110"
                            alt="{{ $achievement->name }}">
                        @else
                        <div
                            class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-trophy text-white text-6xl"></i>
                        </div>
                        @endif
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <i class="fas fa-search-plus text-white text-4xl drop-shadow-lg"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-gray-800">{{ $achievement->name }}</h3>
                            @if($achievement->badge)
                            <span class="px-3 py-1 rounded-full text-sm font-medium
                                            @if(stripos($achievement->badge, 'oltin') !== false || stripos($achievement->badge, 'gold') !== false)
                                                badge-oltin
                                            @elseif(stripos($achievement->badge, 'kumush') !== false || stripos($achievement->badge, 'silver') !== false)
                                                badge-kumush
                                            @elseif(stripos($achievement->badge, 'bronza') !== false || stripos($achievement->badge, 'bronze') !== false)
                                                badge-bronza
                                            @else
                                                badge-default
                                            @endif
                                        ">
                                {{ $achievement->badge }}
                            </span>
                            @endif
                        </div>
                        <p class="text-gray-600 mb-4">{{ $achievement->description }}</p>
                        @if($achievement->category)
                        <div class="mt-4">
                            <span
                                class="inline-block px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">
                                <i class="fas fa-tag mr-1"></i>{{ $achievement->category }}
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <!-- Achievements Counter -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">


            <div class="text-center group p-8 rounded-3xl hover:bg-white hover:shadow-2xl transition-all duration-500">
                <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner group-hover:scale-110 transition-transform">
                    <i class="fas fa-medal text-3xl"></i>
                </div>
                <div class="text-5xl font-black text-blue-900 mb-2 counter" data-target="{{ $stats->olympiad_winners }}">0</div>
                <div class="text-gray-500 font-bold uppercase tracking-tighter text-xs">{{ __('messages.olympiad_winners') }}</div>
            </div>

            <div class="text-center group p-8 rounded-3xl hover:bg-white hover:shadow-2xl transition-all duration-500">
                <div class="w-20 h-20 bg-green-100 text-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner group-hover:scale-110 transition-transform">
                    <i class="fas fa-graduation-cap text-3xl"></i>
                </div>
                <div class="text-5xl font-black text-blue-900 mb-2 counter" data-target="{{ $stats->maktab_tayyorlov }}">0</div>
                <div class="text-gray-500 font-bold uppercase tracking-tighter text-xs">{{ __('messages.school_prep') }}</div>
            </div>

            <div class="text-center group p-8 rounded-3xl hover:bg-white hover:shadow-2xl transition-all duration-500">
                <div class="w-20 h-20 bg-yellow-100 text-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner group-hover:scale-110 transition-transform">
                    <i class="fas fa-star text-3xl"></i>
                </div>
                <div class="text-5xl font-black text-blue-900 mb-2 counter" data-target="{{ $stats->iqtidorli_bolalar }}">0</div>
                <div class="text-gray-500 font-bold uppercase tracking-tighter text-xs">{{ __('messages.talented_children') }}</div>
            </div>

            <div class="text-center group p-8 rounded-3xl hover:bg-white hover:shadow-2xl transition-all duration-500">
                <div class="w-20 h-20 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner group-hover:scale-110 transition-transform">
                    <i class="fas fa-trophy text-3xl"></i>
                </div>
                <div class="text-5xl font-black text-blue-900 mb-2 counter" data-target="{{ $stats->jami_yutuqlar }}">0</div>
                <div class="text-gray-500 font-bold uppercase tracking-tighter text-xs">{{ __('messages.total_awards') }}</div>
            </div>


        </div>
    </div>
</section>


<script>
    const counters = document.querySelectorAll('.counter');
    const speed = 150;


    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / speed;


            if(count < target) {
                counter.innerText = Math.ceil(count + inc);
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target;
            }
        };


        updateCount();
    });
</script>

    <!-- Footer -->
    <x-footer></x-footer>


    <!-- Counter Animation Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            const increment = target / speed;
            let count = 0;

            const updateCount = () => {
                count += increment;
                if (count < target) {
                    counter.innerText = Math.ceil(count);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        });

        counters.forEach(counter => observer.observe(counter));
    });
    </script>
</body>

</html>
