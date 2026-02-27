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
<body class="bg-gray-50">

    <!-- Teachers Hero Section -->
    <section class="py-16 bg-gradient-to-b from-blue-900 to-blue-800">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Muhtaram Ustozlarimiz</h2>
                <div class="w-24 h-1 bg-yellow-400 mx-auto mb-6"></div>
                <p class="text-blue-100 max-w-2xl mx-auto">Akademik mukammallikni va shaxsiy o'sish tomon bizning talabalarga hidoyat ko'rsatuvchi bizning maxsus fakultet a'zolari bilan tanishish</p>
            </div>
        </div>
    </section>

    <!-- Teachers Slider Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-blue-900 mb-10 text-center">O‘qituvchilar jamoasi</h3>

            <div class="swiper teacherSwiper">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div class="bg-white shadow-md rounded-2xl p-6 text-center max-w-sm mx-auto">
                                <div class="w-32 h-32 mx-auto mb-4">
                                    <img src="<?php echo e(asset('storage/' . $teacher->image)); ?>"
                                         class="w-full h-full object-cover rounded-full border-4 border-blue-200"
                                         alt="Teacher">
                                </div>
                                <h4 class="text-xl font-semibold text-blue-900"><?php echo e($teacher->name); ?></h4>
                                <p class="text-blue-600 font-medium"><?php echo e($teacher->subject); ?></p>
                                <p class="text-gray-600 text-sm mt-2"><?php echo e($teacher->bio); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Navigation buttons -->
                <div class=".swiper-button-next"></div>
                <div class=".swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>


    <!-- Teacher Statistics -->
    <section class="py-16 bg-gradient-to-b from-gray-50 to-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2"><?php echo e($stats->asosiy); ?>+</div>
                    <div class="text-gray-600">Asosiy O‘qituvchi</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2"><?php echo e($stats->ilmiy); ?>+</div>
                    <div class="text-gray-600">Ilmiy darajasi bor o‘qituvchilar</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2"><?php echo e($stats->kutator); ?>+</div>
                    <div class="text-gray-600">Kurator o‘qituvchi</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2"><?php echo e($stats->tashqi); ?></div>
                    <div class="text-gray-600">Tashqi o‘rindosh o‘qituvchilar</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Department Information -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Bo‘limlarimiz</h2>
                <div class="w-16 h-1 bg-blue-600 mx-auto mb-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Bo‘lim 1 -->
                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-gray-50 rounded-xl p-6 shadow-md transition-all duration-300 hover:shadow-lg">
                        <div class="w-16 h-16 bg-blue-900 text-white rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="<?php echo e($department->icon); ?>"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-blue-900 mb-3"><?php echo e($department->name); ?></h3>
                        <p class="text-gray-600 text-center mb-4"><?php echo e($department->description); ?></p>
                        <div class="text-center">
                            <span class="text-blue-600 font-medium"><?php echo e($department->teachers_count); ?> nafar o‘qituvchi</span>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
    <!-- Swiper JS -->
    <script>
        const swiper = new Swiper(".teacherSwiper", {
            loop: true, // Bu juda muhim
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

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

</body>
</html>
<?php /**PATH /home/shehroz/Projects/example-app/resources/views/teachers.blade.php ENDPATH**/ ?>