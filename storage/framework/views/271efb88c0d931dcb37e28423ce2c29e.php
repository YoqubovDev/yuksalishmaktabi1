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
<body class="font-sans bg-gray-50" x-data="{ 
    showModal: false, 
    selectedTeacher: null, 
    zoomImage: false,
    showGroup: false,
    zoomedImageSrc: ''
}">
    <!-- Navigation -->
    <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
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

    <!-- Teachers Hero Section -->
    <section class="py-16 bg-gradient-to-br from-unipix-dark via-blue-900 to-unipix-blue relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-unipix-light rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>
        </div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="text-center mb-10">
                <h2 class="text-5xl md:text-6xl font-serif font-bold text-white mb-6 uppercase tracking-widest drop-shadow-lg">
                    <?php echo e(__('messages.our_teachers')); ?>

                </h2>
                <div class="w-40 h-1.5 bg-yellow-400 mx-auto mb-8 rounded-full shadow-lg"></div>
                <p class="text-blue-100 max-w-2xl mx-auto text-xl leading-relaxed font-light">
                    <?php echo e(__('messages.teachers_desc')); ?>

                </p>
            </div>
        </div>
    </section>

    <!-- Teachers Grid Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white border border-gray-100 shadow-xl rounded-3xl p-10 text-center transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl cursor-pointer group relative overflow-hidden"
                         @click="selectedTeacher = <?php echo e(json_encode($teacher)); ?>; showModal = true; showGroup = false">
                        
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-bl-full -mr-16 -mt-16 group-hover:bg-blue-100 transition-colors duration-500"></div>
                        
                        <div class="w-48 h-48 mx-auto mb-8 relative">
                            <div class="absolute inset-0 bg-blue-600 rounded-full scale-110 opacity-0 group-hover:opacity-20 transition-all duration-500 blur-md"></div>
                            <img src="<?php echo e(asset('storage/' . $teacher->image)); ?>"
                                 class="w-full h-full object-cover rounded-full border-8 border-white shadow-2xl relative z-10 transition-transform duration-500 group-hover:scale-105"
                                 alt="<?php echo e($teacher->name); ?>">
                        </div>
                        
                        <h4 class="text-3xl font-bold text-blue-900 mb-3 group-hover:text-unipix-light transition-colors"><?php echo e($teacher->name); ?></h4>
                        <div class="inline-block px-6 py-1.5 bg-blue-50 text-blue-700 rounded-full text-xs font-black mb-6 uppercase tracking-widest border border-blue-100">
                            <?php echo e($teacher->subject); ?>

                        </div>
                        
                        <p class="text-gray-500 text-base line-clamp-2 leading-relaxed mb-8 px-4"><?php echo e($teacher->bio); ?></p>
                        
                        <div class="pt-6 border-t border-gray-100 flex justify-center items-center">
                            <span class="text-blue-600 font-black text-sm uppercase tracking-widest flex items-center group-hover:translate-x-2 transition-transform duration-300">
                                Batafsil <i class="fas fa-chevron-right ml-3 text-xs bg-blue-600 text-white p-1.5 rounded-full shadow-md"></i>
                            </span>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Modal for Teacher Details -->
    <div x-show="showModal" 
         class="fixed inset-0 z-[100] overflow-y-auto" 
         x-transition:enter="transition ease-out duration-300" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="transition ease-in duration-200" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0" 
         style="display: none;">
        
        <div class="flex items-center justify-center min-h-screen px-4 py-12 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-blue-900/90 backdrop-blur-md" @click="showModal = false"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

            <div class="inline-block overflow-hidden text-left align-middle transition-all transform bg-white rounded-[2rem] shadow-2xl sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-8 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100">
                
                <!-- Close Button -->
                <div class="absolute top-6 right-6 z-30">
                    <button @click="showModal = false" class="p-3 text-gray-400 bg-white hover:text-red-500 hover:bg-red-50 rounded-2xl shadow-xl transition-all duration-300">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>

                <div class="bg-white min-h-[500px]">
                    <div class="md:flex h-full">
                        <!-- Left side: Image & Name -->
                        <div class="md:w-1/3 p-10 bg-gradient-to-b from-blue-50 to-white flex flex-col items-center">
                            <div class="relative w-full aspect-square mb-8 group overflow-hidden rounded-3xl shadow-2xl">
                                <img :src="'<?php echo e(asset('storage')); ?>/' + selectedTeacher?.image" 
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 cursor-zoom-in" 
                                     @click="zoomedImageSrc = '<?php echo e(asset('storage')); ?>/' + selectedTeacher?.image; zoomImage = true"
                                     alt="Profile">
                                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center pointer-events-none">
                                    <i class="fas fa-search-plus text-white text-4xl"></i>
                                </div>
                            </div>
                            
                            <h3 class="text-3xl font-bold text-blue-900 text-center leading-tight mb-2" x-text="selectedTeacher?.name"></h3>
                            <div class="px-4 py-1.5 bg-blue-600 text-white rounded-full text-[10px] font-black uppercase tracking-widest shadow-lg mb-8" x-text="selectedTeacher?.subject"></div>
                            
                            <!-- Guruh Button -->
                            <template x-if="selectedTeacher?.teacher_of_groups?.length > 0">
                                <button @click="showGroup = !showGroup" 
                                        class="flex items-center justify-center w-full px-8 py-4 bg-yellow-400 text-blue-900 rounded-2xl font-black uppercase tracking-widest shadow-xl hover:bg-yellow-500 hover:-translate-y-1 transition-all duration-300">
                                    <i class="fas fa-users mr-3 text-xl"></i>
                                    <span x-text="showGroup ? 'Ma\'lumotga qaytish' : 'Guruhimni ko\'rish'"></span>
                                </button>
                            </template>
                        </div>

                        <!-- Right side: Content -->
                        <div class="md:w-2/3 p-10 md:p-14 overflow-hidden">
                            <!-- Teacher Bio View -->
                            <div x-show="!showGroup" x-transition:enter="transition opacity duration-300" class="h-full flex flex-col justify-center">
                                <div class="flex items-center mb-6">
                                    <div class="w-12 h-1 bg-blue-600 rounded-full mr-4"></div>
                                    <h4 class="text-xl font-bold text-blue-900 uppercase tracking-widest italic">Biografiya</h4>
                                </div>
                                <p class="text-gray-600 text-xl leading-relaxed italic font-serif" x-text="selectedTeacher?.bio"></p>
                                <div class="mt-12 flex flex-wrap gap-4">
                                    <div class="flex items-center bg-gray-50 px-6 py-3 rounded-2xl border border-gray-100 shadow-sm text-gray-500 font-bold text-sm">
                                        <i class="fas fa-graduation-cap mr-3 text-blue-600 text-lg"></i> Oliy ma'lumotli
                                    </div>
                                    <div class="flex items-center bg-gray-50 px-6 py-3 rounded-2xl border border-gray-100 shadow-sm text-gray-500 font-bold text-sm">
                                        <i class="fas fa-award mr-3 text-yellow-500 text-lg"></i> Toifali mutaxassis
                                    </div>
                                </div>
                            </div>

                            <!-- Group View -->
                            <div x-show="showGroup" x-transition:enter="transition opacity duration-300" class="h-full">
                                <template x-if="selectedTeacher?.teacher_of_groups?.[0]">
                                    <div class="space-y-10">
                                        <div class="flex items-center justify-between">
                                            <h4 class="text-2xl font-black text-blue-900 uppercase tracking-widest">
                                                <i class="fas fa-shapes text-yellow-400 mr-3"></i>
                                                <span x-text="selectedTeacher.teacher_of_groups[0].name"></span>
                                            </h4>
                                        </div>

                                        <!-- Assistant Section -->
                                        <div class="bg-blue-50 p-6 rounded-3xl border border-blue-100 flex items-center">
                                            <div class="w-20 h-20 rounded-2xl overflow-hidden shadow-xl mr-6 border-2 border-white">
                                                <img :src="selectedTeacher.teacher_of_groups[0].assistant ? '<?php echo e(asset('storage')); ?>/' + selectedTeacher.teacher_of_groups[0].assistant.image : 'https://ui-avatars.com/api/?name=Assistant'" 
                                                     class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <p class="text-[10px] font-black uppercase text-blue-400 tracking-widest mb-1">Yordamchi tarbiyachi</p>
                                                <p class="text-xl font-bold text-blue-900" x-text="selectedTeacher.teacher_of_groups[0].assistant?.name || 'Mavjud emas'"></p>
                                            </div>
                                        </div>

                                        <!-- Students Grid (Children) -->
                                        <div>
                                            <h5 class="text-sm font-black text-gray-400 uppercase tracking-widest mb-6 flex items-center">
                                                <span class="w-8 h-[2px] bg-gray-200 mr-3"></span>
                                                Tarbiyalanuvchilar (Bolalar)
                                            </h5>
                                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 max-h-[300px] overflow-y-auto pr-4 custom-scrollbar">
                                                <template x-for="student in selectedTeacher.teacher_of_groups[0].students" :key="student.id">
                                                    <div class="group/child cursor-pointer" @click="zoomedImageSrc = '<?php echo e(asset('storage')); ?>/' + student.image; zoomImage = true">
                                                        <div class="relative aspect-square rounded-2xl overflow-hidden shadow-lg border-4 border-white transition-all group-hover/child:-translate-y-1">
                                                            <img :src="'<?php echo e(asset('storage')); ?>/' + student.image" 
                                                                 class="w-full h-full object-cover">
                                                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover/child:opacity-100 transition-opacity flex items-center justify-center">
                                                                <i class="fas fa-search-plus text-white"></i>
                                                            </div>
                                                        </div>
                                                        <p class="text-[10px] font-bold text-center mt-3 text-gray-600 truncate" x-text="student.name"></p>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Zoom Overlay -->
    <div x-show="zoomImage" 
         class="fixed inset-0 z-[120] bg-black/95 flex items-center justify-center p-6"
         x-transition:enter="transition opacity duration-300"
         @click="zoomImage = false"
         style="display: none;">
        <div class="absolute top-8 right-8 text-white text-4xl cursor-pointer hover:text-red-500 transition-colors">
            <i class="fas fa-times"></i>
        </div>
        <img :src="zoomedImageSrc" class="max-w-full max-h-full object-contain rounded-lg shadow-2xl">
    </div>

    <!-- Teacher Statistics -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
                <div class="bg-white p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all border border-gray-100 text-center">
                    <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                        <i class="fas fa-user-tie text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black text-blue-900 mb-2"><?php echo e($stats->asosiy); ?>+</div>
                    <div class="text-gray-400 font-black uppercase tracking-widest text-[10px]"><?php echo e(__('messages.primary_teacher')); ?></div>
                </div>
                <!-- ... other stats ... -->
                <div class="bg-white p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all border border-gray-100 text-center">
                    <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                        <i class="fas fa-certificate text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black text-blue-900 mb-2"><?php echo e($stats->ilmiy); ?>+</div>
                    <div class="text-gray-400 font-black uppercase tracking-widest text-[10px]"><?php echo e(__('messages.academic_degree')); ?></div>
                </div>
                <div class="bg-white p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all border border-gray-100 text-center">
                    <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                        <i class="fas fa-chalkboard-teacher text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black text-blue-900 mb-2"><?php echo e($stats->kutator); ?>+</div>
                    <div class="text-gray-400 font-black uppercase tracking-widest text-[10px]"><?php echo e(__('messages.curator_teacher')); ?></div>
                </div>
                <div class="bg-white p-10 rounded-3xl shadow-xl hover:shadow-2xl transition-all border border-gray-100 text-center">
                    <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                        <i class="fas fa-globe text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black text-blue-900 mb-2"><?php echo e($stats->tashqi); ?></div>
                    <div class="text-gray-400 font-black uppercase tracking-widest text-[10px]"><?php echo e(__('messages.external_teacher')); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>

</body>
</html>
<?php /**PATH /home/shehroz/Projects/example-app/resources/views/teachers.blade.php ENDPATH**/ ?>