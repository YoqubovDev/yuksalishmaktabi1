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

    <!-- Achievements Section Header -->
    <section id="achievements" class="py-16 bg-gradient-to-b from-blue-900 to-blue-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Talabalar yutuqlari</h2>
                <div class="w-24 h-1 bg-yellow-400 mx-auto mb-6"></div>
                <p class="text-blue-100 max-w-2xl mx-auto">Iqtidorli talabalarimizning yuksak natijalari va a'lo
                    yutuqlarini e'tirof etamiz</p>
            </div>
        </div>
    </section>

    <!-- Achievements Cards - Database dan ma'lumotlar -->
    <section class="py-16 -mt-24">
        <div class="container mx-auto px-4">
            <?php if($achievements->isEmpty()): ?>
            <div class="text-center py-12">
                <p class="text-gray-600 text-xl">Hozircha yutuqlar qo'shilmagan</p>
            </div>
            <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="h-48 w-full">
                        <?php if($achievement->image): ?>
                        <img src="<?php echo e(asset('storage/' . $achievement->image)); ?>" class="w-full h-full object-cover"
                            alt="<?php echo e($achievement->name); ?>">
                        <?php else: ?>
                        <div
                            class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-trophy text-white text-6xl"></i>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold text-gray-800"><?php echo e($achievement->name); ?></h3>
                            <?php if($achievement->badge): ?>
                            <span class="px-3 py-1 rounded-full text-sm font-medium
                                            <?php if(stripos($achievement->badge, 'oltin') !== false || stripos($achievement->badge, 'gold') !== false): ?>
                                                badge-oltin
                                            <?php elseif(stripos($achievement->badge, 'kumush') !== false || stripos($achievement->badge, 'silver') !== false): ?>
                                                badge-kumush
                                            <?php elseif(stripos($achievement->badge, 'bronza') !== false || stripos($achievement->badge, 'bronze') !== false): ?>
                                                badge-bronza
                                            <?php else: ?>
                                                badge-default
                                            <?php endif; ?>
                                        ">
                                <?php echo e($achievement->badge); ?>

                            </span>
                            <?php endif; ?>
                        </div>
                        <p class="text-gray-600 mb-4"><?php echo e($achievement->description); ?></p>
                        <?php if($achievement->category): ?>
                        <div class="mt-4">
                            <span
                                class="inline-block px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">
                                <i class="fas fa-tag mr-1"></i><?php echo e($achievement->category); ?>

                            </span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Achievements Counter -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">


            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="<?php echo e($stats->cefr); ?>">0</div>
                <div class="text-gray-600 font-medium">CEFR sertifikatlari</div>
            </div>


            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="<?php echo e($stats->universitet); ?>">0</div>
                <div class="text-gray-600 font-medium">Universitetlarga qabul %</div>
            </div>


            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="<?php echo e($stats->ielts); ?>">0</div>
                <div class="text-gray-600 font-medium">IELTS yuqori balllar</div>
            </div>


            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="<?php echo e($stats->sat); ?>">0</div>
                <div class="text-gray-600 font-medium">SAT yuqori balllar</div>
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
<?php /**PATH /home/shehroz/Projects/example-app/resources/views/achievements.blade.php ENDPATH**/ ?>