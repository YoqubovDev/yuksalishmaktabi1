<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sevinch - 475-chi sonli bolalar bog`chasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

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

    /* Footer styles */
    .footer {
      background-color: #003366;
      color: white;
    }
    .footer i {
      margin-right: 8px;
    }
    .footer a:hover {
      color: #cfcfcf;
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
            position: relative;
            z-index: 1000;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo img {
            height: 60px;
            width: auto;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            white-space: nowrap;
        }

        /* Hamburger Menu Button */
        .mobile-menu-btn {
            display: none;
            background: transparent;
            border: none;
            color: var(--white);
            font-size: 1.8rem;
            cursor: pointer;
            padding: 0.5rem;
            z-index: 1002;
            transition: all 0.3s ease;
            position: relative;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
        }

        .mobile-menu-btn:hover {
            opacity: 0.8;
            transform: scale(1.1);
        }

        .mobile-menu-btn .menu-icon,
        .mobile-menu-btn .close-icon {
            position: absolute;
            transition: all 0.3s ease;
            font-size: 1.5rem;
        }

        .mobile-menu-btn .close-icon {
            opacity: 0;
            transform: rotate(90deg);
        }

        .mobile-menu-btn.active .menu-icon {
            opacity: 0;
            transform: rotate(90deg);
        }

        .mobile-menu-btn.active .close-icon {
            opacity: 1;
            transform: rotate(0deg);
        }

        nav {
            position: relative;
        }

        nav ul {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 0;
            display: block;
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

        /* Mobile Navigation Styles */
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: flex;
            }

            header {
                position: relative;
            }

            nav {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                background-color: var(--primary-color);
                transform: translateY(-100%);
                transition: transform 0.4s ease-in-out;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                z-index: 1001;
                padding-top: 80px;
                padding-bottom: 2rem;
                max-height: 100vh;
                overflow-y: auto;
            }

            nav.active {
                transform: translateY(0);
            }

            nav ul {
                flex-direction: column;
                gap: 0;
                padding: 0 1rem;
            }

            nav ul li {
                width: 100%;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            nav ul li:last-child {
                border-bottom: none;
            }

            nav a {
                padding: 1rem;
                font-size: 1.1rem;
                width: 100%;
            }

            .logo {
                flex: 1;
                min-width: 0;
            }

            .logo img {
                height: 50px;
                width: auto;
            }

            .logo-text {
                font-size: 0.9rem;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .header-content {
                gap: 1rem;
            }

            .main-slider .slide {
                height: 350px;
            }

            .nav-slider .slide {
                height: 70px;
            }
        }

        @media (max-width: 480px) {
            .logo-text {
                font-size: 0.75rem;
            }

            .logo img {
                height: 40px;
            }

            .container {
                padding: 0 0.5rem;
            }

            .mobile-menu-btn {
                width: 35px;
                height: 35px;
                font-size: 1.5rem;
            }

            nav {
                padding-top: 70px;
            }

            nav a {
                font-size: 1rem;
                padding: 0.875rem;
            }
        }
    </style>
</head>
<body x-data @keydown.escape.window="if ($store.modal) $store.modal.showModal = false">
  <x-header></x-header>

  <!-- Hero Slider Section -->
  <section class="main-slider">
    <div class="main-slides">
      <!-- Slide 1 -->
      <div class="main-slide">
        <img src="/image/orig.jpeg" alt="Campus Building" class="w-full h-full object-cover">
        <div class="absolute inset-0 gradient-overlay flex flex-col items-center justify-center text-white">
          <p class="text-white mb-4 flex items-center font-light tracking-widest uppercase text-sm">
            <span class="mr-2"><i class="fas fa-graduation-cap"></i></span>
              {{ __('messages.hero_way') }}
          </p>
            <h3 class="text-5xl md:text-6xl font-serif mb-10 text-center hero-text-shadow">{{ __('messages.hero_with') }}</h3>
            <h2 class="text-6xl md:text-7xl font-serif mb-4 text-center hero-text-shadow font-bold">{{ __('messages.hero_discover') }}</h2>
          <p class="text-lg max-w-2xl text-center mb-12 font-light">{{ __('messages.hero_desc1') }}</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="main-slide">
        <img src="/image/photo_1_2025-03-24_00-16-14.jpg" alt="Student Life" class="w-full h-full object-cover">
        <div class="absolute inset-0 gradient-overlay flex flex-col items-center justify-center text-white">
          <p class="text-white mb-4 flex items-center font-light tracking-widest uppercase text-sm">
            <span class="mr-2"><i class="fas fa-users"></i></span>
              {{ __('messages.hero_unity') }}
          </p>
            <h3 class="text-5xl md:text-6xl font-serif mb-10 text-center hero-text-shadow">{{ __('messages.hero_us') }}</h3>
            <h2 class="text-6xl md:text-7xl font-serif mb-4 text-center hero-text-shadow font-bold">{{ __('messages.hero_passion') }}</h2>
          <p class="text-lg max-w-2xl text-center mb-12 font-light">{{ __('messages.hero_desc2') }}</p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="main-slide">
        <img src="/image/photo_6_2025-03-24_00-16-14.jpg" alt="Research Lab" class="w-full h-full object-cover">
        <div class="absolute inset-0 gradient-overlay flex flex-col items-center justify-center text-white">
          <p class="text-white mb-4 flex items-center font-light tracking-widest uppercase text-sm">
            <span class="mr-2"><i class="fas fa-microscope"></i></span>
              {{ __('messages.hero_research') }}
          </p>
          <h2 class="text-6xl md:text-7xl font-serif mb-4 text-center hero-text-shadow font-bold">{{ __('messages.hero_tomorrow') }}</h2>
          <h3 class="text-5xl md:text-6xl font-serif mb-10 text-center hero-text-shadow">{{ __('messages.hero_build_today') }}</h3>
          <p class="text-lg max-w-2xl text-center mb-12 font-light">{{ __('messages.hero_desc3') }}</p>
        </div>
      </div>
    </div>

    <!-- Navigation Dots -->
    <div class="absolute bottom-12 left-0 right-0 flex justify-center space-x-6">
      <div class="flex space-x-2 slide-dots">
        <span class="w-8 h-2 bg-white rounded-full bg-opacity-80 dot active" data-index="0"></span>
        <span class="w-2 h-2 bg-white rounded-full bg-opacity-50 dot" data-index="1"></span>
        <span class="w-2 h-2 bg-white rounded-full bg-opacity-50 dot" data-index="2"></span>
      </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="slider-prev absolute left-6 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white bg-opacity-10 backdrop-blur-sm rounded-full border border-white text-white flex items-center justify-center focus:outline-none hover:bg-white hover:bg-opacity-20 transition-all duration-300">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button class="slider-next absolute right-6 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white bg-opacity-10 backdrop-blur-sm rounded-full border border-white text-white flex items-center justify-center focus:outline-none hover:bg-white hover:bg-opacity-20 transition-all duration-300">
      <i class="fas fa-chevron-right"></i>
    </button>
  </section>

  <!-- Statistics Section -->
  @if($stat)
  <section class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">
          <h2 class="text-4xl font-bold text-blue-900">{{ $stat->students_count }}+</h2>
          <p class="text-gray-600">{{ __('messages.stat_staff') }}</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">
          <h2 class="text-4xl font-bold text-blue-900">{{ $stat->qualified_teachers }}+</h2>
          <p class="text-gray-600">{{ __('messages.stat_qualified') }}</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md stat-box text-center">
          <h2 class="text-4xl font-bold text-blue-900">{{ $stat->graduation_rate }}</h2>
          <p class="text-gray-600">{{ __('messages.stat_graduation') }}</p>
      </div>
  </section>
  @endif

  <section class="py-20 bg-gray-50" x-data="{ showModal: false, imageUrl: '' }">
      <div class="container mx-auto px-4">
          <h3 class="text-4xl font-extrabold text-blue-900 mb-12 text-center">{{ __('messages.reception_photos') }}</h3>

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-10">
              @foreach($qabulrasmis as $rasm)
                  <div class="bg-white shadow-2xl rounded-3xl p-6 hover:shadow-3xl transition-shadow duration-300">
                      <div class="w-full aspect-[4/5] overflow-hidden rounded-2xl border-2 border-blue-200 cursor-pointer"
                           @click="showModal = true; imageUrl = '{{ asset('storage/' . $rasm->image) }}'">
                          <img src="{{ asset('storage/' . $rasm->image) }}"
                               alt="Qabul rasmi"
                               class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 rounded-2xl">
                      </div>
                  </div>
              @endforeach
          </div>
      </div>

      <!-- Modal -->
      <div x-show="showModal"
           class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
           x-transition>
          <div class="relative">
              <button @click="showModal = false"
                      class="absolute top-2 right-2 text-white text-3xl font-bold">&times;</button>
              <img :src="imageUrl" class="max-w-screen-md max-h-screen rounded-xl border-4 border-white">
          </div>
      </div>
  </section>

  <!-- About Section -->
  <section id="about" class="bg-gray-100 py-12">
    <div class="container mx-auto px-6">
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-4xl font-bold text-unipix-blue text-center mb-8">{{ __('messages.about_us') }}</h2>
        <p class="text-gray-600 text-lg mb-6">
            {{ __('messages.about_desc') }}
        </p>
        <h3 class="text-2xl font-semibold text-unipix-blue mb-4">{{ __('messages.advantages') }}</h3>
        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
          <li><strong>{{ __('messages.adv_prof_title') }}</strong> {{ __('messages.adv_prof_desc') }}</li>
          <li><strong>{{ __('messages.adv_innov_title') }}</strong> {{ __('messages.adv_innov_desc') }}</li>
          <li><strong>{{ __('messages.adv_healthy_title') }}</strong> {{ __('messages.adv_healthy_desc') }}</li>
          <li><strong>{{ __('messages.adv_safe_title') }}</strong> {{ __('messages.adv_safe_desc') }}</li>
        </ul>
        <h3 class="text-2xl font-semibold text-unipix-blue mb-4">{{ __('messages.history') }}</h3>
        <p class="text-gray-600 text-lg mb-6">
            {{ __('messages.history_desc') }}
        </p>
        <h3 class="text-2xl font-semibold text-unipix-blue mb-4">{{ __('messages.mission') }}</h3>
        <p class="text-gray-600 text-lg mb-6">
            {{ __('messages.mission_desc') }}
        </p>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="py-16 bg-gray-50" x-data="{ 
      showTeacherModal: false, 
      selectedTeacher: { group: null }, 
      showImageModal: false, 
      fullImageUrl: '', 
      showGroupModal: false, 
      selectedGroup: { students: [], assistant: {} },
      showStudentModal: false,
      selectedStudent: {}
  }">
      <div class="container mx-auto px-4">
          <h3 class="text-3xl font-bold text-blue-900 mb-10 text-center">{{ __('messages.leadership') }}</h3>

          @php
              $tarbiyachilar = $homes->filter(function($item) {
                  return $item->staffCategory && (
                      str_contains(strtolower($item->staffCategory->name), 'tarbiya') || 
                      str_contains(strtolower($item->staffCategory->name), 'o\'qituvchi')
                  );
              });
              
              $groupedHomes = $tarbiyachilar->groupBy(function($item) {
                  return $item->staffCategory ? $item->staffCategory->name : 'Tarbiyachilar';
              });
          @endphp

          @foreach($groupedHomes as $categoryName => $categoryHomes)
          <div class="mb-12">
              <h4 class="text-2xl font-bold text-blue-800 mb-6 border-b-2 border-blue-200 inline-block pb-2">{{ $categoryName }}</h4>

              <div class="swiper teacherSwiper">
                  <div class="swiper-wrapper">
                      @foreach($categoryHomes as $home)
                          @php
                              $group = $home->teacherOfGroups->first();
                              $groupJson = 'null';
                              if ($group) {
                                  $groupJson = json_encode([
                                      'name' => $group->name,
                                      'direction' => $group->direction,
                                      'assistant_name' => $group->assistant ? $group->assistant->name : 'Noma\'lum',
                                      'students' => $group->students->map(fn($s) => [
                                          'name' => $s->name,
                                          'image' => asset('storage/' . $s->image),
                                          'bio' => $s->bio,
                                          'group_name' => $group->name
                                      ])
                                  ]);
                              }
                          @endphp
                          <div class="swiper-slide py-4">
                              <div @click="selectedTeacher = { 
                                      name: '{{ addslashes($home->name) }}', 
                                      subject: '{{ addslashes($home->subject) }}', 
                                      bio: '{{ str_replace(["\r", "\n"], ['\r', '\n'], addslashes($home->bio)) }}', 
                                      image: '{{ asset('storage/' . $home->image) }}',
                                      group: {{ $groupJson }}
                                  }; showTeacherModal = true" class="bg-white shadow-lg rounded-3xl p-6 text-center max-w-xs mx-auto hover:scale-105 transition-transform duration-300 cursor-pointer border border-gray-100">
                                  <div class="w-28 h-28 mx-auto mb-4">
                                      <img src="{{ asset('storage/' . $home->image) }}"
                                           class="w-full h-full object-cover rounded-full border-4 border-blue-200"
                                           alt="Teacher">
                                  </div>
                                  <h4 class="text-xl font-semibold text-blue-900">{{$home->name}}</h4>
                                  <p class="text-blue-600 font-medium">{{$home->subject}}</p>
                                  <p class="text-gray-600 text-sm mt-2 line-clamp-3">{{$home->bio}}</p>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
          @endforeach

      </div>

      <!-- Teacher Modal -->
      <div x-show="showTeacherModal" 
           style="display: none;" 
           class="fixed inset-0 z-40 overflow-y-auto" 
           aria-labelledby="modal-title" role="dialog" aria-modal="true">
          <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
              
              <div x-show="showTeacherModal" 
                   x-transition:enter="ease-out duration-300" 
                   x-transition:enter-start="opacity-0" 
                   x-transition:enter-end="opacity-100" 
                   x-transition:leave="ease-in duration-200" 
                   x-transition:leave-start="opacity-100" 
                   x-transition:leave-end="opacity-0" 
                   class="fixed inset-0 bg-black bg-opacity-75 transition-opacity" 
                   @click="showTeacherModal = false" aria-hidden="true"></div>

              <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

              <div x-show="showTeacherModal" 
                   x-transition:enter="ease-out duration-300" 
                   x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                   x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
                   x-transition:leave="ease-in duration-200" 
                   x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                   x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                   class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full">
                  
                  <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 relative">
                      <button @click="showTeacherModal = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 focus:outline-none">
                          <i class="fas fa-times text-2xl"></i>
                      </button>
                      <div class="sm:flex sm:items-start flex-col sm:flex-row items-center sm:items-start">
                          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-32 w-32 rounded-full sm:mx-0 border-4 border-blue-100 overflow-hidden mb-4 sm:mb-0 relative group cursor-pointer" @click="showImageModal = true; fullImageUrl = selectedTeacher.image">
                              <img :src="selectedTeacher.image" class="w-full h-full object-cover" alt="Profile">
                              <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                  <i class="fas fa-expand text-white text-xl"></i>
                              </div>
                          </div>
                          <div class="text-center sm:mt-0 sm:ml-6 sm:text-left flex-1 min-w-0">
                              <h3 class="text-2xl leading-6 font-bold text-blue-900 mb-2 truncate" id="modal-title" x-text="selectedTeacher.name"></h3>
                              <p class="text-md text-blue-600 font-semibold border-b pb-3 mb-3 border-gray-100 truncate" x-text="selectedTeacher.subject"></p>
                              <div class="mt-2 text-gray-600 modal-bio-container max-h-60 overflow-y-auto pr-2">
                                  <p class="text-sm leading-relaxed whitespace-pre-wrap" x-text="selectedTeacher.bio"></p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-gray-100 gap-2">
                      <button type="button" @click="showTeacherModal = false" class="w-full inline-flex justify-center rounded-xl border border-transparent shadow-sm px-4 py-2 bg-blue-900 text-base font-medium text-white hover:bg-blue-800 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm transition-colors duration-300">
                          Yopish
                      </button>
                      <button x-show="selectedTeacher.group" type="button" @click="selectedGroup = selectedTeacher.group; showGroupModal = true; showTeacherModal = false" class="w-full inline-flex justify-center rounded-xl border border-blue-900 shadow-sm px-4 py-2 bg-white text-base font-medium text-blue-900 hover:bg-blue-50 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm transition-colors duration-300">
                          Guruh
                      </button>
                  </div>
              </div>
          </div>
      </div>

      <!-- Group Details Modal -->
      <div x-show="showGroupModal" 
           style="display: none;" 
           class="fixed inset-0 z-40 overflow-y-auto" 
           aria-labelledby="modal-title" role="dialog" aria-modal="true">
          <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
              <div x-show="showGroupModal" 
                   x-transition:enter="ease-out duration-300" 
                   x-transition:enter-start="opacity-0" 
                   x-transition:enter-end="opacity-100" 
                   x-transition:leave="ease-in duration-200" 
                   x-transition:leave-start="opacity-100" 
                   x-transition:leave-end="opacity-0" 
                   class="fixed inset-0 bg-black bg-opacity-75 transition-opacity" 
                   @click="showGroupModal = false" aria-hidden="true"></div>

              <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

              <div x-show="showGroupModal" 
                   x-transition:enter="ease-out duration-300" 
                   x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                   x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
                   class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:max-w-4xl w-full">
                  
                  <div class="bg-blue-900 px-6 py-4 flex justify-between items-center text-white">
                      <div>
                        <h3 class="text-2xl font-bold" x-text="selectedGroup.name + ' guruhi'"></h3>
                        <p class="text-blue-100 text-sm" x-text="'Yordamchi tarbiyachi: ' + selectedGroup.assistant_name"></p>
                      </div>
                      <button @click="showGroupModal = false" class="text-white hover:text-blue-200 transition-colors">
                          <i class="fas fa-times text-2xl"></i>
                      </button>
                  </div>

                  <div class="p-6 bg-gray-50">
                      <h4 class="text-lg font-semibold text-blue-900 mb-4 border-b pb-2">Guruhdagi bolalar</h4>
                      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                          <template x-for="(student, index) in selectedGroup.students" :key="index">
                              <div @click="selectedStudent = student; showStudentModal = true" class="bg-white p-2 rounded-2xl shadow hover:shadow-md transition-shadow cursor-pointer text-center group">
                                  <div class="aspect-square rounded-xl overflow-hidden mb-2">
                                      <img :src="student.image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" :alt="student.name">
                                  </div>
                                  <p class="text-xs font-semibold text-blue-900 truncate" x-text="student.name"></p>
                              </div>
                          </template>
                      </div>
                  </div>

                  <div class="bg-white px-6 py-4 flex justify-end border-t">
                      <button @click="showGroupModal = false; showTeacherModal = true" class="mr-auto text-blue-600 font-medium hover:underline">
                          <i class="fas fa-arrow-left mr-1"></i> Orqaga
                      </button>
                      <button @click="showGroupModal = false" class="bg-blue-900 text-white px-6 py-2 rounded-xl hover:bg-blue-800 transition-colors">
                          Yopish
                      </button>
                  </div>
              </div>
          </div>
      </div>

      <!-- Student Detail Modal -->
      <div x-show="showStudentModal" 
           style="display: none;" 
           class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-80 p-4"
           x-transition:enter="ease-out duration-300"
           x-transition:enter-start="opacity-0"
           x-transition:enter-end="opacity-100">
          
          <div @click.away="showStudentModal = false" class="bg-white rounded-3xl overflow-hidden max-w-sm w-full shadow-2xl transform transition-all">
              <div class="relative aspect-square cursor-pointer" @click="showImageModal = true; fullImageUrl = selectedStudent.image">
                  <img :src="selectedStudent.image" class="w-full h-full object-cover" alt="Student">
                  <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                      <div class="text-white">
                          <h4 class="text-2xl font-bold" x-text="selectedStudent.name"></h4>
                          <p class="text-blue-100" x-text="selectedStudent.group_name + ' guruhi'"></p>
                      </div>
                  </div>
                  <button @click="showStudentModal = false" class="absolute top-4 right-4 bg-white/20 backdrop-blur-md text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-white/40 transition-colors">
                      <i class="fas fa-times"></i>
                  </button>
              </div>
              <div class="p-6">
                  <h5 class="text-gray-400 uppercase text-xs font-bold tracking-widest mb-2">Haqida</h5>
                  <p class="text-gray-700 leading-relaxed" x-text="selectedStudent.bio || 'Malumot berilmagan'"></p>
                  
                  <button @click="showStudentModal = false" class="mt-6 w-full bg-blue-900 text-white py-3 rounded-2xl font-bold hover:bg-blue-800 transition-colors">
                      Yopish
                  </button>
              </div>
          </div>
      </div>

      <!-- Full Image Modal -->
      <div x-show="showImageModal" 
           style="display: none;" 
           class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90"
           x-transition:enter="ease-out duration-300"
           x-transition:enter-start="opacity-0"
           x-transition:enter-end="opacity-100"
           x-transition:leave="ease-in duration-200"
           x-transition:leave-start="opacity-100"
           x-transition:leave-end="opacity-0">
          <button @click="showImageModal = false" class="absolute top-4 right-6 text-white text-4xl hover:text-gray-300 focus:outline-none z-50">
              &times;
          </button>
          <div class="relative w-full h-full flex items-center justify-center p-4">
              <img :src="fullImageUrl" class="max-w-full max-h-full object-contain rounded-lg shadow-2xl" alt="Full Image" @click.away="showImageModal = false">
          </div>
      </div>
  </section>

  <!-- SwiperJS Script -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
      const swiper = new Swiper('.teacherSwiper', {
          slidesPerView: 3,
          spaceBetween: 30,
          loop: true,
          autoplay: {
              delay: 2500,
              disableOnInteraction: false
          },
          breakpoints: {
              0: {
                  slidesPerView: 1
              },
              768: {
                  slidesPerView: 2
              },
              1024: {
                  slidesPerView: 3
              }
          }
      });
  </script>

  <!-- Latest News Section -->
  <section id="news" class="py-20">
      <div class="container mx-auto px-4">
          <div class="text-center mb-16">
          <span class="inline-block mb-4 bg-cyan-600/10 text-cyan-600 border border-cyan-600/20 px-3 py-1 rounded-full text-sm">
              {{ __('messages.news') }}
          </span>
              <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">{{ __('messages.latest_news') }}</h2>
              <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                  {{ __('messages.news_desc') }}
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
                              <i class="fas fa-calendar-alt text-cyan-600"></i>
                              {{ $item->published_at ? $item->published_at->format('d.m.Y') : '' }}
                          </div>
                          <h3 class="text-lg font-semibold hover:text-cyan-600 transition-colors mb-2">
                              {{ $item->title }}
                          </h3>
                          <p class="text-gray-600 mb-4 line-clamp-2">
                              {{ $item->excerpt ?? Str::limit($item->content, 100) }}
                          </p>
                          <a href="{{ route('news') }}" class="text-cyan-600 hover:text-cyan-700 transition-colors flex items-center">
                              {{ __('messages.more_details') }}
                              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                      </div>
                  </div>
              @empty
                  <div class="col-span-full text-center py-12">
                      <p class="text-gray-500 text-lg">{{ __('messages.no_news') }}</p>
                  </div>
              @endforelse
          </div>
      </div>
  </section>

  <!-- Footer -->
  <x-footer></x-footer>

  <!-- JavaScript for Sliders -->
  <script>
    // Main Hero Slider
    const mainSlides = document.querySelector('.main-slides');
    const mainSlideCount = document.querySelectorAll('.main-slide').length;
    const dots = document.querySelectorAll('.dot');
    const prevButton = document.querySelector('.slider-prev');
    const nextButton = document.querySelector('.slider-next');
    let currentMainSlide = 0;

    function updateMainSlider() {
      mainSlides.style.transform = `translateX(-${currentMainSlide * 100}%)`;
      dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentMainSlide);
        dot.classList.toggle('w-8', index === currentMainSlide);
        dot.classList.toggle('w-2', index !== currentMainSlide);
      });
    }

    nextButton.addEventListener('click', () => {
      currentMainSlide = (currentMainSlide + 1) % mainSlideCount;
      updateMainSlider();
    });

    prevButton.addEventListener('click', () => {
      currentMainSlide = (currentMainSlide - 1 + mainSlideCount) % mainSlideCount;
      updateMainSlider();
    });

    dots.forEach(dot => {
      dot.addEventListener('click', () => {
        currentMainSlide = parseInt(dot.dataset.index);
        updateMainSlider();
      });
    });

    // Auto-slide every 5 seconds
    setInterval(() => {
      currentMainSlide = (currentMainSlide + 1) % mainSlideCount;
      updateMainSlider();
    }, 5000);
  </script>
</body>
</html>