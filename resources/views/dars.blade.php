<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dars jarayoni</title>
</head>
<body>
<x-header></x-header>

<div class="font-sans bg-gray-50" x-data="{
    showModal: false,
    selectedGroup: null,
    zoomImage: false,
    zoomedImageSrc: ''
}">

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-r from-blue-900 via-unipix-blue to-blue-800 py-20">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute -left-16 top-10 h-72 w-72 rounded-full bg-white/20 blur-3xl"></div>
            <div class="absolute right-0 bottom-0 h-96 w-96 rounded-full bg-yellow-400/20 blur-3xl"></div>
        </div>
        <div class="container mx-auto relative z-10 px-4 text-center text-white">
            <span class="inline-flex rounded-full bg-yellow-400/20 px-4 py-2 text-xs font-black uppercase tracking-[0.35em] text-yellow-100 mb-6">
                Dars jarayoni
            </span>
            <h1 class="text-4xl md:text-5xl font-black uppercase tracking-[0.03em] mb-6">Sevinch 475 guruhlari</h1>
            <p class="mx-auto max-w-3xl text-lg leading-relaxed text-blue-100">
                Har bir guruhimiz iqtidorli tarbiyachilar, yordamchi tarbiyachilar va malakali bolalar bilan ajoyib o'quv jarayoniga ega.
            </p>
        </div>
    </section>

    <!-- Groups Grid -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
                @foreach($groups as $group)
                <div class="group-card relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-xl transition duration-500 hover:-translate-y-2 hover:shadow-2xl cursor-pointer"
                     @click="selectedGroup = @json($group); showModal = true; zoomImage = false;">
                    <div class="relative h-72 overflow-hidden">
                        <img src="{{ asset('storage/' . $group->image) }}" alt="{{ $group->name }}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-950/80 via-blue-950/10 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <h3 class="text-3xl font-black text-white">{{ $group->name }}</h3>
                            <p class="mt-2 text-sm uppercase tracking-[0.25em] text-blue-200">{{ $group->direction }}</p>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="flex items-center justify-between mb-8">
                            <div class="flex -space-x-3">
                                @foreach($group->students->take(4) as $student)
                                <img src="{{ asset('storage/' . $student->image) }}" class="h-12 w-12 rounded-2xl border-4 border-white object-cover shadow-sm">
                                @endforeach
                                @if($group->students->count() > 4)
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl border-4 border-white bg-blue-50 text-sm font-black text-blue-800 shadow-sm">+{{ $group->students->count() - 4 }}</div>
                                @endif
                            </div>
                            <div class="text-right">
                                <p class="text-[10px] font-black uppercase tracking-[0.35em] text-gray-400 mb-1">Status</p>
                                <p class="text-xs font-bold text-green-500 flex items-center justify-end">
                                    <span class="mr-2 inline-flex h-2 w-2 rounded-full bg-green-500 animate-pulse"></span>
                                    Faol guruh
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4 pt-6 border-t border-slate-100 text-sm text-blue-900 font-black uppercase tracking-[0.2em]">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-arrow-right"></i>
                                Tafsilotlar
                            </div>
                            <div class="rounded-full bg-yellow-400 px-4 py-2 text-xs uppercase tracking-[0.25em] text-blue-900 shadow-sm">
                                {{ $group->result_percentage }}% natija
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Group Modal -->
    <div x-show="showModal" x-cloak class="fixed inset-0 z-[100] flex items-center justify-center overflow-y-auto bg-black/50 p-4 md:p-6" x-transition.opacity @click.self="showModal = false">
        <div class="relative w-full max-w-6xl rounded-3xl bg-white shadow-2xl max-h-[90vh] overflow-y-auto">
            <button @click="showModal = false" class="sticky top-6 right-6 z-20 float-right inline-flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600 shadow-lg transition hover:bg-red-200">
                <i class="fas fa-times text-2xl"></i>
            </button>

            <div class="md:flex">
                <div class="md:w-1/3 bg-gradient-to-b from-blue-50 to-white p-8 md:p-10 flex flex-col items-center text-center">
                    <div class="relative mb-8 h-72 w-72 overflow-hidden rounded-3xl border-4 border-blue-100 bg-gray-100 shadow-xl flex items-center justify-center">
                        <img x-show="selectedGroup?.image" 
                             :src="selectedGroup?.image ? '{{ asset('storage/') }}' + selectedGroup.image : ''" 
                             class="h-full w-full object-cover"
                             @error="this.src = 'https://ui-avatars.com/api/?name=' + selectedGroup.name">
                        <div class="absolute inset-0 flex items-center justify-center bg-blue-900/10 opacity-0 transition-opacity duration-300 hover:opacity-100 cursor-zoom-in"
                             @click="selectedGroup?.image && (zoomedImageSrc = '{{ asset('storage/') }}' + selectedGroup.image, zoomImage = true)">
                            <i class="fas fa-search-plus text-blue-600 text-4xl"></i>
                        </div>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-black text-blue-900 mb-3" x-text="selectedGroup?.name"></h2>
                    <div class="inline-flex rounded-full bg-blue-600 px-6 py-2 text-xs md:text-sm uppercase tracking-[0.25em] text-white shadow-lg" x-text="selectedGroup?.direction"></div>
                </div>

                <div class="md:w-2/3 p-8 md:p-10 lg:p-14 overflow-y-auto">
                    <!-- Teachers Section -->
                    <div class="mb-10">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-1 rounded-full bg-yellow-400 mr-3"></div>
                            <h3 class="text-xl md:text-2xl font-black uppercase tracking-[0.3em] text-blue-900">Mas'ullar</h3>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div class="rounded-2xl border-2 border-blue-100 bg-blue-50 p-5 flex items-center gap-4">
                                <div class="flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-2xl bg-white shadow-lg overflow-hidden">
                                    <img x-show="selectedGroup?.teacher?.image"
                                         :src="selectedGroup?.teacher?.image ? '{{ asset('storage/') }}' + selectedGroup.teacher.image : ''" 
                                         class="h-full w-full object-cover">
                                    <i x-show="!selectedGroup?.teacher?.image" class="fas fa-user text-2xl text-gray-300"></i>
                                </div>
                                <div class="min-w-0">
                                    <p class="text-[10px] font-black uppercase tracking-[0.35em] text-blue-500 mb-2">Asosiy tarbiyachi</p>
                                    <p class="text-lg font-bold text-blue-900 truncate" x-text="selectedGroup?.teacher?.name || 'Mavjud emas'"></p>
                                </div>
                            </div>
                            <div class="rounded-2xl border-2 border-yellow-100 bg-yellow-50 p-5 flex items-center gap-4">
                                <div class="flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-2xl bg-white shadow-lg overflow-hidden">
                                    <img x-show="selectedGroup?.assistant?.image"
                                         :src="selectedGroup?.assistant?.image ? '{{ asset('storage/') }}' + selectedGroup.assistant.image : ''" 
                                         class="h-full w-full object-cover">
                                    <i x-show="!selectedGroup?.assistant?.image" class="fas fa-user text-2xl text-gray-300"></i>
                                </div>
                                <div class="min-w-0">
                                    <p class="text-[10px] font-black uppercase tracking-[0.35em] text-yellow-600 mb-2">Yordamchi</p>
                                    <p class="text-lg font-bold text-blue-900 truncate" x-text="selectedGroup?.assistant?.name || 'Mavjud emas'"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Students Section -->
                    <div class="mb-10">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-1 rounded-full bg-blue-600 mr-3"></div>
                            <h3 class="text-xl md:text-2xl font-black uppercase tracking-[0.3em] text-blue-900">Tarbiyalanuvchilar</h3>
                        </div>
                        <div class="grid grid-cols-3 gap-4 sm:grid-cols-4 md:grid-cols-5">
                            <template x-for="student in selectedGroup?.students?.slice(0, 15)" :key="student.id">
                                <div class="cursor-pointer group" 
                                     @click="student.image && (zoomedImageSrc = '{{ asset('storage/') }}' + student.image, zoomImage = true)">
                                    <div class="relative aspect-square overflow-hidden rounded-2xl border-3 border-white bg-gray-100 shadow-lg transition duration-300 group-hover:shadow-xl flex items-center justify-center">
                                        <img x-show="student.image"
                                             :src="student.image ? '{{ asset('storage/') }}' + student.image : ''" 
                                             class="h-full w-full object-cover">
                                        <i x-show="!student.image" class="fas fa-user text-2xl text-gray-300"></i>
                                        <div class="absolute inset-0 flex items-center justify-center bg-blue-900/20 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                            <i class="fas fa-search-plus text-white text-lg"></i>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-center text-xs font-bold uppercase tracking-[0.2em] text-gray-500 truncate" x-text="student.name"></p>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="flex gap-4">
                        <button @click="selectedGroup && (window.location.href = '#')" class="inline-flex items-center justify-center rounded-full bg-blue-900 px-8 py-3 text-sm font-bold uppercase tracking-[0.25em] text-white shadow-lg transition hover:bg-blue-800">
                            <i class="fas fa-phone-alt mr-2"></i> Bog'lanish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Zoom Overlay -->
    <div x-show="zoomImage" x-cloak class="fixed inset-0 z-[200] flex items-center justify-center bg-black/95 p-4" @click="zoomImage = false" x-transition.opacity>
        <button @click="zoomImage = false" class="absolute right-6 top-6 text-white text-3xl hover:text-red-400 transition">
            <i class="fas fa-times"></i>
        </button>
        <img :src="zoomedImageSrc" class="max-h-full max-w-full rounded-2xl object-contain shadow-2xl">
    </div>

    <x-footer></x-footer>

</div>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dars jarayoni</title>
</head>
<body>
<x-header></x-header>

<div class="font-sans bg-gray-50" x-data="{
    showModal: false,
    selectedGroup: null,
    zoomImage: false,
    zoomedImageSrc: ''
}">

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-r from-blue-900 via-unipix-blue to-blue-800 py-20">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute -left-16 top-10 h-72 w-72 rounded-full bg-white/20 blur-3xl"></div>
            <div class="absolute right-0 bottom-0 h-96 w-96 rounded-full bg-yellow-400/20 blur-3xl"></div>
        </div>
        <div class="container mx-auto relative z-10 px-4 text-center text-white">
            <span class="inline-flex rounded-full bg-yellow-400/20 px-4 py-2 text-xs font-black uppercase tracking-[0.35em] text-yellow-100 mb-6">
                Dars jarayoni
            </span>
            <h1 class="text-4xl md:text-5xl font-black uppercase tracking-[0.03em] mb-6">Sevinch 475 guruhlari</h1>
            <p class="mx-auto max-w-3xl text-lg leading-relaxed text-blue-100">
                Har bir guruhimiz iqtidorli tarbiyachilar, yordamchi tarbiyachilar va malakali bolalar bilan ajoyib o'quv jarayoniga ega.
            </p>
        </div>
    </section>

    <!-- Groups Grid -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
                @foreach($groups as $group)
                    <div class="group-card relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-xl transition duration-500 hover:-translate-y-2 hover:shadow-2xl cursor-pointer"
                         @click="selectedGroup = @json($group); showModal = true; zoomImage = false;">
                        <div class="relative h-72 overflow-hidden">
                            <img src="{{ asset('storage/' . $group->image) }}" alt="{{ $group->name }}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-950/80 via-blue-950/10 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8">
                                <h3 class="text-3xl font-black text-white">{{ $group->name }}</h3>
                                <p class="mt-2 text-sm uppercase tracking-[0.25em] text-blue-200">{{ $group->direction }}</p>
                            </div>
                        </div>

                        <div class="p-8">
                            <div class="flex items-center justify-between mb-8">
                                <div class="flex -space-x-3">
                                    @foreach($group->students->take(4) as $student)
                                        <img src="{{ asset('storage/' . $student->image) }}" class="h-12 w-12 rounded-2xl border-4 border-white object-cover shadow-sm">
                                    @endforeach
                                    @if($group->students->count() > 4)
                                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl border-4 border-white bg-blue-50 text-sm font-black text-blue-800 shadow-sm">+{{ $group->students->count() - 4 }}</div>
                                    @endif
                                </div>
                                <div class="text-right">
                                    <p class="text-[10px] font-black uppercase tracking-[0.35em] text-gray-400 mb-1">Status</p>
                                    <p class="text-xs font-bold text-green-500 flex items-center justify-end">
                                        <span class="mr-2 inline-flex h-2 w-2 rounded-full bg-green-500 animate-pulse"></span>
                                        Faol guruh
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center justify-between gap-4 pt-6 border-t border-slate-100 text-sm text-blue-900 font-black uppercase tracking-[0.2em]">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-arrow-right"></i>
                                    Tafsilotlar
                                </div>
                                <div class="rounded-full bg-yellow-400 px-4 py-2 text-xs uppercase tracking-[0.25em] text-blue-900 shadow-sm">
                                    {{ $group->result_percentage }}% natija
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Group Modal -->
    <div x-show="showModal" x-cloak class="fixed inset-0 z-[100] flex items-center justify-center overflow-y-auto bg-black/50 p-4 md:p-6" x-transition.opacity @click.self="showModal = false">
        <div class="relative w-full max-w-6xl rounded-3xl bg-white shadow-2xl max-h-[90vh] overflow-y-auto">
            <button @click="showModal = false" class="sticky top-6 right-6 z-20 float-right inline-flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600 shadow-lg transition hover:bg-red-200">
                <i class="fas fa-times text-2xl"></i>
            </button>

            <div class="md:flex">
                <div class="md:w-1/3 bg-gradient-to-b from-blue-50 to-white p-8 md:p-10 flex flex-col items-center text-center">
                    <div class="relative mb-8 h-72 w-72 overflow-hidden rounded-3xl border-4 border-blue-100 bg-gray-100 shadow-xl flex items-center justify-center">
                        <img x-show="selectedGroup?.image" 
                             :src="selectedGroup?.image ? '{{ asset('storage/') }}' + selectedGroup.image : ''" 
                             class="h-full w-full object-cover"
                             @error="this.src = 'https://ui-avatars.com/api/?name=' + selectedGroup.name">
                        <div class="absolute inset-0 flex items-center justify-center bg-blue-900/10 opacity-0 transition-opacity duration-300 hover:opacity-100 cursor-zoom-in"
                             @click="selectedGroup?.image && (zoomedImageSrc = '{{ asset('storage/') }}' + selectedGroup.image, zoomImage = true)">
                            <i class="fas fa-search-plus text-blue-600 text-4xl"></i>
                        </div>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-black text-blue-900 mb-3" x-text="selectedGroup?.name"></h2>
                    <div class="inline-flex rounded-full bg-blue-600 px-6 py-2 text-xs md:text-sm uppercase tracking-[0.25em] text-white shadow-lg" x-text="selectedGroup?.direction"></div>
                </div>

                <div class="md:w-2/3 p-8 md:p-10 lg:p-14 overflow-y-auto">
                    <!-- Teachers Section -->
                    <div class="mb-10">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-1 rounded-full bg-yellow-400 mr-3"></div>
                            <h3 class="text-xl md:text-2xl font-black uppercase tracking-[0.3em] text-blue-900">Mas'ullar</h3>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div class="rounded-2xl border-2 border-blue-100 bg-blue-50 p-5 flex items-center gap-4">
                                <div class="flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-2xl bg-white shadow-lg overflow-hidden">
                                    <img x-show="selectedGroup?.teacher?.image"
                                         :src="selectedGroup?.teacher?.image ? '{{ asset('storage/') }}' + selectedGroup.teacher.image : ''" 
                                         class="h-full w-full object-cover">
                                    <i x-show="!selectedGroup?.teacher?.image" class="fas fa-user text-2xl text-gray-300"></i>
                                </div>
                                <div class="min-w-0">
                                    <p class="text-[10px] font-black uppercase tracking-[0.35em] text-blue-500 mb-2">Asosiy tarbiyachi</p>
                                    <p class="text-lg font-bold text-blue-900 truncate" x-text="selectedGroup?.teacher?.name || 'Mavjud emas'"></p>
                                </div>
                            </div>
                            <div class="rounded-2xl border-2 border-yellow-100 bg-yellow-50 p-5 flex items-center gap-4">
                                <div class="flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-2xl bg-white shadow-lg overflow-hidden">
                                    <img x-show="selectedGroup?.assistant?.image"
                                         :src="selectedGroup?.assistant?.image ? '{{ asset('storage/') }}' + selectedGroup.assistant.image : ''" 
                                         class="h-full w-full object-cover">
                                    <i x-show="!selectedGroup?.assistant?.image" class="fas fa-user text-2xl text-gray-300"></i>
                                </div>
                                <div class="min-w-0">
                                    <p class="text-[10px] font-black uppercase tracking-[0.35em] text-yellow-600 mb-2">Yordamchi</p>
                                    <p class="text-lg font-bold text-blue-900 truncate" x-text="selectedGroup?.assistant?.name || 'Mavjud emas'"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Students Section -->
                    <div class="mb-10">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-1 rounded-full bg-blue-600 mr-3"></div>
                            <h3 class="text-xl md:text-2xl font-black uppercase tracking-[0.3em] text-blue-900">Tarbiyalanuvchilar</h3>
                        </div>
                        <div class="grid grid-cols-3 gap-4 sm:grid-cols-4 md:grid-cols-5">
                            <template x-for="student in selectedGroup?.students?.slice(0, 15)" :key="student.id">
                                <div class="cursor-pointer group" 
                                     @click="student.image && (zoomedImageSrc = '{{ asset('storage/') }}' + student.image, zoomImage = true)">
                                    <div class="relative aspect-square overflow-hidden rounded-2xl border-3 border-white bg-gray-100 shadow-lg transition duration-300 group-hover:shadow-xl flex items-center justify-center">
                                        <img x-show="student.image"
                                             :src="student.image ? '{{ asset('storage/') }}' + student.image : ''" 
                                             class="h-full w-full object-cover">
                                        <i x-show="!student.image" class="fas fa-user text-2xl text-gray-300"></i>
                                        <div class="absolute inset-0 flex items-center justify-center bg-blue-900/20 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                            <i class="fas fa-search-plus text-white text-lg"></i>
                                        </div>
                                    </div>
                                    <p class="mt-2 text-center text-xs font-bold uppercase tracking-[0.2em] text-gray-500 truncate" x-text="student.name"></p>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="flex gap-4">
                        <button @click="selectedGroup && (window.location.href = '#')" class="inline-flex items-center justify-center rounded-full bg-blue-900 px-8 py-3 text-sm font-bold uppercase tracking-[0.25em] text-white shadow-lg transition hover:bg-blue-800">
                            <i class="fas fa-phone-alt mr-2"></i> Bog'lanish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Zoom Overlay -->
    <div x-show="zoomImage" x-cloak class="fixed inset-0 z-[200] flex items-center justify-center bg-black/95 p-4" @click="zoomImage = false" x-transition.opacity>
        <button @click="zoomImage = false" class="absolute right-6 top-6 text-white text-3xl hover:text-red-400 transition">
            <i class="fas fa-times"></i>
        </button>
        <img :src="zoomedImageSrc" class="max-h-full max-w-full rounded-2xl object-contain shadow-2xl">
    </div>

    <x-footer></x-footer>
</div>

</body>
</html>
