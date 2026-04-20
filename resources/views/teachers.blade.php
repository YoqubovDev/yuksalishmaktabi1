<x-header></x-header>

<div x-data="{
        teachers: @json($teachers),
        selectedTeacher: null,
        showModal: false,
        showGroup: false,
        zoomImage: false,
        zoomedImageSrc: ''
    }" class="bg-gray-50">

    <style>
        .teacher-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at top, rgba(59, 130, 246, 0.16), transparent 40%);
            opacity: 0.9;
            pointer-events: none;
        }
        .teacher-card:hover .teacher-image {
            transform: translateY(-8px) scale(1.04);
        }
        .teacher-card .teacher-image {
            transition: transform 0.5s ease;
        }
        .modal-scrollbar::-webkit-scrollbar {
            width: 8px;
        }
        .modal-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 9999px;
        }
        .modal-scrollbar::-webkit-scrollbar-thumb {
            background: #93c5fd;
            border-radius: 9999px;
        }
    </style>

    <section class="relative overflow-hidden bg-gradient-to-br from-unipix-dark via-blue-900 to-unipix-blue py-20">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute -left-16 top-10 h-72 w-72 rounded-full bg-white/20 blur-3xl"></div>
            <div class="absolute right-0 bottom-0 h-96 w-96 rounded-full bg-yellow-400/20 blur-3xl"></div>
        </div>
        <div class="container mx-auto relative z-10 px-4 text-center">
            <span class="inline-flex rounded-full bg-yellow-400/20 px-4 py-2 text-xs font-black uppercase tracking-[0.35em] text-yellow-100 mb-6">
                O'qituvchilar
            </span>
            <h1 class="text-5xl md:text-6xl font-serif font-black uppercase text-white tracking-[0.03em] leading-tight mb-6">
                Muhtaram ustozlarimiz
            </h1>
            <p class="mx-auto max-w-3xl text-lg text-blue-100 leading-relaxed">
                Akademik mukammallikni va shaxsiy o'sish tomon bizning talabalarga hidoyat ko'rsatuvchi maxsus fakultet a'zolari bilan tanishing.
            </p>
        </div>
    </section>

    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="mb-12 text-center">
                <h2 class="text-3xl md:text-4xl font-black text-blue-900">O'qituvchilar</h2>
                <p class="mx-auto mt-4 max-w-2xl text-gray-600">Har bir ustoz mehribon, tajribali va bolalar uchun ilhom manbai hisoblanadi.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
                @foreach($teachers as $index => $teacher)
                    <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-xl transition duration-500 hover:-translate-y-2 hover:shadow-2xl cursor-pointer teacher-card"
                         @click="selectedTeacher = teachers[{{ $index }}]; showModal = true; showGroup = false;">
                        <div class="absolute inset-x-0 top-0 h-32 bg-gradient-to-r from-blue-900 via-unipix-blue to-unipix-light"></div>
                        <div class="relative px-8 pb-10 pt-20 text-center">
                            <div class="relative mx-auto mb-6 h-48 w-48 overflow-hidden rounded-full border-8 border-white bg-white shadow-2xl teacher-image">
                                <img src="{{ asset('storage/' . $teacher->image) }}" alt="{{ $teacher->name }}" class="h-full w-full object-cover">
                                <div class="absolute inset-0 flex items-center justify-center bg-slate-900/20 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <i class="fas fa-search-plus text-white text-3xl"></i>
                                </div>
                            </div>
                            <h3 class="text-2xl font-black text-blue-900 mb-2">{{ $teacher->name }}</h3>
                            <p class="text-xs uppercase tracking-[0.35em] text-blue-600 font-black mb-4">
                                {{ $teacher->subject ?? $teacher->category->name ?? "O'qituvchi" }}
                            </p>
                            <p class="text-gray-500 text-sm leading-relaxed line-clamp-3">{{ $teacher->bio }}</p>
                            <span class="mt-8 inline-flex items-center justify-center rounded-full bg-blue-50 px-6 py-3 text-sm font-black uppercase tracking-widest text-blue-700 shadow-sm transition-all duration-300 hover:bg-blue-600 hover:text-white">
                                Batafsil
                                <i class="fas fa-arrow-right ml-3 text-xs transition-transform duration-300 group-hover:translate-x-2"></i>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div x-show="showModal" x-transition.opacity class="fixed inset-0 z-50 flex items-center justify-center px-4 py-8 bg-blue-900/40 backdrop-blur-sm" style="display: none;" @click.self="showModal = false">
        <div class="relative w-full max-w-4xl rounded-[2.5rem] bg-white shadow-2xl overflow-hidden">
            <button @click="showModal = false" class="absolute right-6 top-6 z-20 inline-flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600 shadow-lg transition hover:bg-red-200">
                <i class="fas fa-times text-2xl"></i>
            </button>

            <div class="grid md:grid-cols-2 gap-0">
                <!-- Left: Profile Section -->
                <div class="bg-gradient-to-b from-blue-50 to-gray-50 p-8 md:p-12 flex flex-col items-center justify-center text-center">
                    <div class="relative mb-8 h-80 w-80 overflow-hidden rounded-3xl border-4 border-white bg-white shadow-xl">
                        <img x-show="selectedTeacher?.image" 
                             :src="selectedTeacher?.image ? '{{ asset('storage/') }}' + selectedTeacher.image : ''" 
                             alt="Teacher" 
                             class="h-full w-full object-cover">
                        <div class="absolute inset-0 flex items-center justify-center bg-blue-900/10 opacity-0 transition-opacity duration-300 hover:opacity-100 cursor-zoom-in"
                             @click="selectedTeacher?.image && (zoomedImageSrc = '{{ asset('storage/') }}' + selectedTeacher.image, zoomImage = true)">
                            <i class="fas fa-search-plus text-blue-600 text-4xl"></i>
                        </div>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-black text-blue-900 mb-4 leading-tight" x-text="selectedTeacher?.name"></h2>
                    <span class="inline-flex rounded-full bg-blue-600 px-6 py-3 text-xs font-black uppercase tracking-[0.25em] text-white shadow-lg" 
                          x-text="selectedTeacher?.subject || selectedTeacher?.category?.name || \"O'qituvchi\""></span>
                </div>

                <!-- Right: Info Section -->
                <div class="p-8 md:p-12 flex flex-col justify-between">
                    <!-- Information -->
                    <div>
                        <div class="mb-8">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-1.5 bg-yellow-400 rounded-full mr-3"></div>
                                <h3 class="text-2xl font-black text-blue-900 uppercase tracking-[0.3em]">Ma'lumotlar</h3>
                            </div>

                            <div class="space-y-4">
                                <div class="flex items-start gap-4 bg-blue-50 p-5 rounded-2xl border border-blue-100">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-briefcase text-2xl text-blue-600 mt-1"></i>
                                    </div>
                                    <div>
                                        <p class="text-[11px] font-black uppercase tracking-[0.35em] text-blue-500 mb-1">Tajriba</p>
                                        <p class="text-lg font-bold text-blue-900" x-text="selectedTeacher?.experience || '10+ yillik malaka'"></p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 bg-yellow-50 p-5 rounded-2xl border border-yellow-100">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-language text-2xl text-yellow-600 mt-1"></i>
                                    </div>
                                    <div>
                                        <p class="text-[11px] font-black uppercase tracking-[0.35em] text-yellow-600 mb-1">Tillar</p>
                                        <p class="text-lg font-bold text-blue-900" x-text="selectedTeacher?.languages || 'O\'zbek, Rus'"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Biography -->
                        <div class="mb-8">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-1.5 bg-blue-600 rounded-full mr-3"></div>
                                <h3 class="text-2xl font-black text-blue-900 uppercase tracking-[0.3em]">Biografiya</h3>
                            </div>
                            <p class="text-base text-gray-600 leading-relaxed italic font-serif" x-text="selectedTeacher?.bio"></p>
                        </div>
                    </div>

                    <!-- Bottom Section -->
                    <div class="pt-6 border-t border-gray-100">
                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="bg-gray-50 p-4 rounded-2xl border border-gray-100 flex items-center gap-3">
                                <i class="fas fa-graduation-cap text-2xl text-blue-600"></i>
                                <div>
                                    <p class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 mb-1">Darajasi</p>
                                    <p class="text-sm font-bold text-gray-700" x-text="selectedTeacher?.education || 'Oliy ma\'lumotli'"></p>
                                </div>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-2xl border border-gray-100 flex items-center gap-3">
                                <i class="fas fa-award text-2xl text-yellow-500"></i>
                                <div>
                                    <p class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 mb-1">Toifasi</p>
                                    <p class="text-sm font-bold text-gray-700" x-text="selectedTeacher?.award || 'Toifali mutaxassis'"></p>
                                </div>
                            </div>
                        </div>

                        <button @click="selectedTeacher?.phone && (window.location.href = 'tel:' + selectedTeacher.phone)" 
                                class="w-full flex items-center justify-center gap-3 rounded-full bg-blue-600 px-8 py-4 text-sm font-black uppercase tracking-[0.25em] text-white shadow-lg transition hover:bg-blue-700 hover:-translate-y-1">
                            <i class="fas fa-phone-alt"></i> Bog'lanish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-show="zoomImage" x-transition.opacity class="fixed inset-0 z-[60] flex items-center justify-center bg-black/90 p-6" @click="zoomImage = false" style="display: none;">
        <div class="absolute right-6 top-6 text-white text-4xl cursor-pointer hover:text-red-500">
            <i class="fas fa-times"></i>
        </div>
        <img :src="zoomedImageSrc" class="max-h-full max-w-full rounded-3xl object-contain shadow-2xl">
    </div>

    <section class="py-24 bg-gradient-to-b from-gray-50 to-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid gap-10 sm:grid-cols-2 md:grid-cols-4">
                <div class="rounded-3xl border border-gray-100 bg-white p-10 text-center shadow-xl transition hover:shadow-2xl">
                    <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-3xl bg-blue-100 text-blue-600 shadow-inner">
                        <i class="fas fa-user-tie text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black text-blue-900 mb-2">{{ $stats->asosiy ?? 0 }}+</div>
                    <div class="text-[10px] font-black uppercase tracking-[0.35em] text-gray-400">Asosiy O'qituvchi</div>
                </div>
                <div class="rounded-3xl border border-gray-100 bg-white p-10 text-center shadow-xl transition hover:shadow-2xl">
                    <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-3xl bg-blue-100 text-blue-600 shadow-inner">
                        <i class="fas fa-certificate text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black text-blue-900 mb-2">{{ $stats->ilmiy ?? 0 }}+</div>
                    <div class="text-[10px] font-black uppercase tracking-[0.35em] text-gray-400">Ilmiy darajasi bor o'qituvchilar</div>
                </div>
                <div class="rounded-3xl border border-gray-100 bg-white p-10 text-center shadow-xl transition hover:shadow-2xl">
                    <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-3xl bg-blue-100 text-blue-600 shadow-inner">
                        <i class="fas fa-chalkboard-teacher text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black text-blue-900 mb-2">{{ $stats->kurator ?? 0 }}+</div>
                    <div class="text-[10px] font-black uppercase tracking-[0.35em] text-gray-400">Kurator o'qituvchi</div>
                </div>
                <div class="rounded-3xl border border-gray-100 bg-white p-10 text-center shadow-xl transition hover:shadow-2xl">
                    <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-3xl bg-blue-100 text-blue-600 shadow-inner">
                        <i class="fas fa-globe text-3xl"></i>
                    </div>
                    <div class="text-5xl font-black text-blue-900 mb-2">{{ $stats->tashqi ?? 0 }}</div>
                    <div class="text-[10px] font-black uppercase tracking-[0.35em] text-gray-400">Tashqi o'rindosh o'qituvchilar</div>
                </div>
            </div>
        </div>
    </section>
</div>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<x-footer></x-footer>
</body>
</html>

