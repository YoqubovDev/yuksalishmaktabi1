<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sevinch - 475-chi sonli bolalar bog`chasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="font-sans bg-gray-100">
    <!-- Navigation -->
    <x-header></x-header>

    <div class="container mx-auto py-4 px-4">
        <div class="flex items-center text-gray-600 text-sm">
            <a href="#" class="hover:text-blue-800 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Bosh sahifa
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span>Guruh rasmi</span>
        </div>
    </div>

    <main class="container mx-auto p-4">
        <h2 class="text-3xl font-bold mb-8 text-blue-800 text-center">Sevinch - 475-chi sonli bolalar bog`chasi Guruhlar</h2>

        <!-- GROUP CARDS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @foreach($groups as $group)
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-blue-700 p-4 text-white text-center">
                    <h3 class="text-2xl font-bold">{{ $group->name }}</h3>
                </div>
                <div class="p-4 text-center">
                    <div class="text-sm text-gray-500 mb-2">{{ $group->direction }}</div>
                    <div class="text-lg font-medium text-gray-800">{{ $group->schedule_image }} Students</div>
                    <button onclick="openGroupModal({{ $group->id }})" class="mt-3 px-4 py-2 bg-blue-600 text-white rounded-lg text-sm hover:bg-blue-700 transition-colors">
                        Tafsilotlarni Ko'rish
                    </button>
                </div>
            </div>

            <!-- GROUP MODAL -->
            <div id="group-modal-{{ $group->id }}" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-xl shadow-xl w-full max-w-6xl max-h-screen overflow-auto p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-blue-800">Group {{ $group->name }} - Tafsilotlar</h2>
                        <button onclick="closeGroupModal({{ $group->id }})" class="text-gray-500 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="border-b border-gray-200 mb-6">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                            <li class="mr-2">
                                <a href="#" class="group-tab-link active inline-block p-4 border-b-2 border-blue-600 rounded-t-lg text-blue-600" data-group="{{ $group->id }}" data-tab="schedule">
                                    Guruh rasmi
                                </a>
                            </li>
                            <li>
                                <a href="#" class="group-tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" data-group="{{ $group->id }}" data-tab="results">
                                    Natija
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div id="group-schedule-{{ $group->id }}" class="group-tab-content">
                        <h3 class="text-xl font-semibold mb-4 text-blue-700">Guruh rasmi</h3>
                        <div class="bg-gray-50 rounded-lg p-4 overflow-x-auto">
                            <img src="{{ asset('storage/' . $group->image) }}" alt="Weekly Schedule" class="w-full h-auto rounded shadow-sm">
                            <p class="text-sm text-gray-600 mt-2 text-center">Group {{ $group->name }} Guruh rasmi</p>
                        </div>
                    </div>

                    <div id="group-results-{{ $group->id }}" class="group-tab-content hidden">
                        <h3 class="text-xl font-semibold mb-4 text-blue-700">Baholash Natijalari</h3>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h4 class="text-lg font-medium mb-4 text-blue-800 border-b pb-2">Qabul Qilish Natijalari</h4>
                                <div class="h-64 bg-gray-100 rounded flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="text-gray-500 mb-2">Guruh Natijalari</div>
                                        <div class="text-2xl font-bold text-blue-700">Imtihonlar Bo'yicha: {{ $group->result_percentage }}%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- COURSES SECTION -->
        <section id="courses" class="py-20 bg-gray-50 mt-10">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <span class="inline-block mb-4 bg-violet-500/10 text-violet-500 border border-violet-500/20 px-3 py-1 rounded-full text-sm">
                        Ta'lim dasturlari
                    </span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Bizning kurslar</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Zamonaviy ta'lim dasturlari va yo'nalishlari bilan tanishing
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($courses as $course)
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="p-6">
                            <div class="w-12 h-12 bg-violet-500/10 text-violet-500 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $course->icon }}"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">{{ $course->title }}</h3>
                            <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $course->duration }} yil
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                    </svg>
                                    {{ $course->student_count }} talaba
                                </div>
                            </div>
                            <button onclick="openCourseModal({{ $course->id }})" class="w-full border border-gray-300 text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-lg transition-colors">
                                Batafsil ma'lumot
                            </button>
                        </div>
                    </div>

                    <!-- COURSE MODAL -->
                    <div id="course-modal-{{ $course->id }}" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                        <div class="bg-white rounded-xl shadow-xl w-full max-w-6xl max-h-screen overflow-auto p-6">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-2xl font-bold text-blue-800">{{ $course->title }} - Tafsilotlar</h2>
                                <button onclick="closeCourseModal({{ $course->id }})" class="text-gray-500 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <div class="border-b border-gray-200 mb-6">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                                    <li class="mr-2">
                                        <a href="#" class="course-tab-link active inline-block p-4 border-b-2 border-blue-600 rounded-t-lg text-blue-600" data-course="{{ $course->id }}" data-tab="info">
                                            Batafsil Ma'lumot
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="course-tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" data-course="{{ $course->id }}" data-tab="video">
                                            Video
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div id="course-info-{{ $course->id }}" class="course-tab-content">
                                <h3 class="text-xl font-semibold mb-4 text-blue-700">Batafsil ma'lumot</h3>
                                <div class="bg-gray-50 rounded-lg p-6">
                                    <p class="text-gray-700 leading-relaxed">{{ $course->description }}</p>
                                </div>
                            </div>

                            <div id="course-video-{{ $course->id }}" class="course-tab-content hidden">
                                <h3 class="text-xl font-semibold mb-4 text-blue-700">Kurs videolari</h3>
                                <div class="bg-gray-50 rounded-lg p-6">
                                    @if($course->videos && $course->videos->count() > 0)
                                        <div class="space-y-6">
                                            @foreach($course->videos as $video)
                                                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                                    <div class="p-4 bg-gradient-to-r from-blue-600 to-blue-700">
                                                        <h4 class="text-white font-semibold text-lg">{{ $video->title }}</h4>
                                                        @if($video->published_at)
                                                            <p class="text-blue-100 text-sm mt-1">
                                                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                                </svg>
                                                                {{ $video->published_at->format('d.m.Y') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                    <div class="p-4">
                                                        <div class="video-container">
                                                            <iframe src="{{ $video->embed_url }}" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="text-center py-12">
                                            <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                            <p class="text-gray-500 text-lg font-medium">Video hozircha mavjud emas</p>
                                            <p class="text-gray-400 text-sm mt-2">Tez orada yangi videolar qo'shiladi</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <x-footer></x-footer>

    <script>
    // GROUP MODAL FUNCTIONS
    function openGroupModal(id) {
        document.getElementById(`group-modal-${id}`).classList.remove('hidden');
    }

    function closeGroupModal(id) {
        document.getElementById(`group-modal-${id}`).classList.add('hidden');
    }

    // COURSE MODAL FUNCTIONS
    function openCourseModal(id) {
        document.getElementById(`course-modal-${id}`).classList.remove('hidden');
    }

    function closeCourseModal(id) {
        document.getElementById(`course-modal-${id}`).classList.add('hidden');
    }

    // GROUP TAB SWITCHING
    document.querySelectorAll('.group-tab-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const groupId = this.dataset.group;
            const tab = this.dataset.tab;

            // Hide all group tabs for this modal
            document.querySelectorAll(`[id^="group-schedule-${groupId}"], [id^="group-results-${groupId}"]`).forEach(content => {
                content.classList.add('hidden');
            });

            // Show selected tab
            document.getElementById(`group-${tab}-${groupId}`).classList.remove('hidden');

            // Update tab link styles
            document.querySelectorAll(`[data-group="${groupId}"]`).forEach(l => {
                l.classList.remove('border-blue-600', 'text-blue-600', 'active');
                l.classList.add('border-transparent');
            });

            this.classList.add('border-blue-600', 'text-blue-600', 'active');
            this.classList.remove('border-transparent');
        });
    });

    // COURSE TAB SWITCHING
    document.querySelectorAll('.course-tab-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const courseId = this.dataset.course;
            const tab = this.dataset.tab;

            // Hide all course tabs for this modal
            document.querySelectorAll(`[id^="course-info-${courseId}"], [id^="course-video-${courseId}"]`).forEach(content => {
                content.classList.add('hidden');
            });

            // Show selected tab
            document.getElementById(`course-${tab}-${courseId}`).classList.remove('hidden');

            // Update tab link styles
            document.querySelectorAll(`[data-course="${courseId}"]`).forEach(l => {
                l.classList.remove('border-blue-600', 'text-blue-600', 'active');
                l.classList.add('border-transparent');
            });

            this.classList.add('border-blue-600', 'text-blue-600', 'active');
            this.classList.remove('border-transparent');
        });
    });

    // Close modals when clicking outside
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('bg-opacity-50')) {
            e.target.classList.add('hidden');
        }
    });
    </script>
</body>

</html>
