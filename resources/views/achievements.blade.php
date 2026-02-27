<x-header></x-header>

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
            @if($achievements->isEmpty())
            <div class="text-center py-12">
                <p class="text-gray-600 text-xl">Hozircha yutuqlar qo'shilmagan</p>
            </div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($achievements as $achievement)
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="h-48 w-full">
                        @if($achievement->image)
                        <img src="{{ asset('storage/' . $achievement->image) }}" class="w-full h-full object-cover"
                            alt="{{ $achievement->name }}">
                        @else
                        <div
                            class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-trophy text-white text-6xl"></i>
                        </div>
                        @endif
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


            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="{{ $stats->cefr }}">0</div>
                <div class="text-gray-600 font-medium">CEFR sertifikatlari</div>
            </div>


            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="{{ $stats->universitet }}">0</div>
                <div class="text-gray-600 font-medium">Universitetlarga qabul %</div>
            </div>


            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="{{ $stats->ielts }}">0</div>
                <div class="text-gray-600 font-medium">IELTS yuqori balllar</div>
            </div>


            <div class="text-center">
                <div class="text-5xl font-bold text-blue-600 mb-2 counter" data-target="{{ $stats->sat }}">0</div>
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
