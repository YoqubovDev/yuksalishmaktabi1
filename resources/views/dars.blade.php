<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guruhlar - Sevinch 475-chi bolalar bog`chasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
                        'sans': ['Poppins', 'sans-serif'],
                        'serif': ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #161179; border-radius: 10px; }
    </style>
</head>
<body class="font-sans bg-gray-50 overflow-x-hidden" x-data="{ 
    showModal: false, 
    selectedGroup: null, 
    zoomImage: false,
    zoomedImageSrc: '',
    activeTab: 'info'
}">
    <!-- Navigation -->
    <x-header></x-header>

    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-r from-blue-900 via-unipix-blue to-blue-800 relative">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white rounded-full translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
        </div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4 uppercase tracking-wider">
                {{ __('messages.our_groups') }}
            </h1>
            <div class="w-24 h-1.5 bg-yellow-400 mx-auto mb-6 rounded-full"></div>
            <p class="text-blue-100 max-w-2xl mx-auto text-lg font-light">
                {{ __('messages.our_groups_desc') }}
            </p>
        </div>
    </section>

    <!-- Groups Grid -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($groups as $group)
                <div class="bg-white rounded-[2.5rem] shadow-xl border border-gray-100 overflow-hidden group transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl cursor-pointer"
                     @click="selectedGroup = {{ json_encode($group) }}; showModal = true; activeTab = 'info'">
                    
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('storage/' . $group->image) }}" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                             alt="{{ $group->name }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent flex items-end p-8">
                            <div>
                                <h3 class="text-3xl font-black text-white mb-1">{{ $group->name }}</h3>
                                <p class="text-blue-100/90 text-sm font-medium tracking-wide uppercase">{{ $group->direction }}</p>
                            </div>
                        </div>
                        <!-- Zoom Icon on Grid -->
                        <div class="absolute top-6 right-6 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button @click.stop="zoomedImageSrc = '{{ asset('storage/' . $group->image) }}'; zoomImage = true" 
                                    class="p-4 bg-white/90 text-blue-900 rounded-2xl shadow-xl backdrop-blur-sm hover:scale-110 transition-transform">
                                <i class="fas fa-search-plus text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="flex items-center justify-between mb-8">
                            <div class="flex -space-x-3">
                                @foreach($group->students->take(4) as $student)
                                <img src="{{ asset('storage/' . $student->image) }}" class="w-12 h-12 rounded-2xl border-4 border-white object-cover">
                                @endforeach
                                @if($group->students->count() > 4)
                                <div class="w-12 h-12 rounded-2xl border-4 border-white bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-xs">
                                    +{{ $group->students->count() - 4 }}
                                </div>
                                @endif
                            </div>
                            <div class="text-right">
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Status</p>
                                <p class="text-xs font-bold text-green-500 flex items-center">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                                    {{ __('messages.active_group') }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                            <div class="flex items-center text-blue-800 font-black text-sm uppercase tracking-widest">
                                {{ __('messages.more_details') }} <i class="fas fa-arrow-right ml-3 text-xs group-hover:translate-x-2 transition-transform"></i>
                            </div>
                            <div class="bg-yellow-400 text-blue-900 px-4 py-1.5 rounded-xl font-black text-[10px] uppercase tracking-tighter shadow-sm">
                                {{ $group->result_percentage }}% {{ __('messages.result') }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal for Group Details -->
    <div x-show="showModal" 
         class="fixed inset-0 z-[100] overflow-y-auto" 
         x-cloak
         x-transition:enter="transition ease-out duration-300" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="transition ease-in duration-200" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0">
        
        <div class="flex items-center justify-center min-h-screen px-4 p-8">
            <div class="fixed inset-0 bg-blue-900/90 backdrop-blur-md" @click="showModal = false"></div>

            <div class="bg-white rounded-[3rem] shadow-2xl w-full max-w-6xl overflow-hidden relative z-10"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-8 scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 scale-100">
                
                <button @click="showModal = false" class="absolute top-8 right-8 z-30 p-4 text-gray-400 hover:text-red-500 transition-colors bg-white rounded-2xl shadow-xl">
                    <i class="fas fa-times text-2xl"></i>
                </button>

                <div class="md:flex">
                    <!-- Left Sidebar in Modal -->
                    <div class="md:w-1/3 p-10 bg-gradient-to-b from-blue-50 to-white flex flex-col">
                        <div class="relative rounded-3xl overflow-hidden aspect-video shadow-2xl mb-8 group">
                            <img :src="'{{ asset('storage') }}/' + selectedGroup?.image" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center cursor-zoom-in"
                                 @click="zoomedImageSrc = '{{ asset('storage') }}/' + selectedGroup?.image; zoomImage = true">
                                <i class="fas fa-search-plus text-white text-3xl"></i>
                            </div>
                        </div>

                        <h2 class="text-4xl font-black text-blue-900 mb-2" x-text="selectedGroup?.name"></h2>
                        <div class="inline-block px-4 py-1.5 bg-blue-600 text-white rounded-full text-[10px] font-black uppercase tracking-widest shadow-lg mb-8" x-text="selectedGroup?.direction"></div>

                        <!-- Tab Buttons -->
                         <div class="space-y-4">
                            <button @click="activeTab = 'info'" 
                                    :class="activeTab === 'info' ? 'bg-blue-600 text-white shadow-blue-200' : 'bg-white text-blue-900 hover:bg-blue-50'"
                                    class="w-full flex items-center p-5 rounded-2xl font-bold transition-all shadow-lg border border-transparent">
                                <i class="fas fa-info-circle mr-4 text-xl"></i> {{ __('messages.group_info') }}
                            </button>
                            <button @click="activeTab = 'results'" 
                                    :class="activeTab === 'results' ? 'bg-blue-600 text-white shadow-blue-200' : 'bg-white text-blue-900 hover:bg-blue-50'"
                                    class="w-full flex items-center p-5 rounded-2xl font-bold transition-all shadow-lg border border-transparent">
                                <i class="fas fa-chart-line mr-4 text-xl"></i> {{ __('messages.results_tab') }}
                            </button>
                        </div>
                    </div>

                    <!-- Right Content Area -->
                    <div class="md:w-2/3 p-12 lg:p-16 h-[700px] overflow-y-auto custom-scrollbar">
                        
                        <!-- Info Tab -->
                         <div x-show="activeTab === 'info'" x-transition>
                            <div class="mb-12">
                                <h4 class="text-2xl font-black text-blue-900 uppercase tracking-widest mb-8 flex items-center">
                                    <span class="w-12 h-1.5 bg-yellow-400 rounded-full mr-4"></span>
                                    {{ __('messages.responsible_persons') }}
                                </h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                                     <!-- Teacher -->
                                    <div class="bg-blue-50/50 p-6 rounded-[2.5rem] border border-blue-100 flex items-center">
                                        <div class="w-20 h-20 rounded-2xl overflow-hidden shadow-xl mr-6 border-2 border-white">
                                            <img :src="selectedGroup?.teacher?.image ? '{{ asset('storage') }}/' + selectedGroup.teacher.image : 'https://ui-avatars.com/api/?name=Teacher'" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <p class="text-[10px] font-black uppercase text-blue-400 tracking-widest mb-1">{{ __('messages.main_teacher') }}</p>
                                            <p class="text-xl font-bold text-blue-900" x-text="selectedGroup?.teacher?.name || '{{ __('messages.not_assigned') }}'"></p>
                                        </div>
                                    </div>
                                    <!-- Assistant -->
                                    <div class="bg-yellow-50/50 p-6 rounded-[2.5rem] border border-yellow-100 flex items-center">
                                        <div class="w-20 h-20 rounded-2xl overflow-hidden shadow-xl mr-6 border-2 border-white">
                                            <img :src="selectedGroup?.assistant?.image ? '{{ asset('storage') }}/' + selectedGroup.assistant.image : 'https://ui-avatars.com/api/?name=Assistant'" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <p class="text-[10px] font-black uppercase text-yellow-600 tracking-widest mb-1">{{ __('messages.assistant') }}</p>
                                            <p class="text-xl font-bold text-blue-900" x-text="selectedGroup?.assistant?.name || '{{ __('messages.not_available') }}'"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div>
                                <h4 class="text-2xl font-black text-blue-900 uppercase tracking-widest mb-8 flex items-center">
                                    <span class="w-12 h-1.5 bg-blue-600 rounded-full mr-4"></span>
                                    {{ __('messages.children') }}
                                </h4>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                                    <template x-for="student in selectedGroup?.students" :key="student.id">
                                        <div class="group/student cursor-pointer" @click="zoomedImageSrc = '{{ asset('storage') }}/' + student.image; zoomImage = true">
                                            <div class="relative aspect-square rounded-[2rem] overflow-hidden shadow-lg border-4 border-white transition-all group-hover/student:-translate-y-2">
                                                <img :src="'{{ asset('storage') }}/' + student.image" class="w-full h-full object-cover">
                                                <div class="absolute inset-0 bg-blue-900/40 opacity-0 group-hover/student:opacity-100 transition-opacity flex items-center justify-center">
                                                    <i class="fas fa-search-plus text-white text-xl"></i>
                                                </div>
                                            </div>
                                            <p class="text-[10px] font-bold text-center mt-3 text-gray-400 uppercase tracking-tighter truncate" x-text="student.name"></p>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>


                        <!-- Results Tab -->
                         <div x-show="activeTab === 'results'" x-transition>
                            <h4 class="text-2xl font-black text-blue-900 uppercase tracking-widest mb-8 flex items-center">
                                <span class="w-12 h-1.5 bg-green-500 rounded-full mr-4"></span>
                                {{ __('messages.group_indicators') }}
                            </h4>
                            
                             <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                                <div class="bg-green-50 p-10 rounded-[3rem] border border-green-100 text-center relative overflow-hidden group">
                                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-green-200/30 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                                    <p class="text-sm font-black text-green-600 uppercase tracking-widest mb-4">{{ __('messages.overall_result') }}</p>
                                    <h5 class="text-8xl font-black text-green-500 mb-2 leading-none" x-text="selectedGroup?.result_percentage + '%'"></h5>
                                    <p class="text-gray-500 font-medium">{{ __('messages.exam_sessions') }}</p>
                                </div>
                                <div class="bg-blue-50 p-10 rounded-[3rem] border border-blue-100 text-center flex flex-col justify-center">
                                    <div class="w-20 h-20 bg-white rounded-3xl flex items-center justify-center text-blue-600 shadow-xl mx-auto mb-6">
                                        <i class="fas fa-medal text-3xl"></i>
                                    </div>
                                    <p class="text-xl font-bold text-blue-900 mb-2">{{ __('messages.best_group') }}</p>
                                    <p class="text-gray-500">{{ __('messages.best_group_desc') }}</p>
                                </div>
                            </div>

                             <div class="bg-gray-50 p-8 rounded-[2.5rem] border border-gray-100">
                                <div class="flex items-center mb-6">
                                    <div class="w-3 h-3 bg-blue-600 rounded-full mr-3"></div>
                                    <p class="text-sm font-black text-blue-900 uppercase tracking-widest">{{ __('messages.results_table') }}</p>
                                </div>
                                <div class="space-y-6">
                                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-yellow-50 text-yellow-600 rounded-xl flex items-center justify-center mr-4">
                                                <i class="fas fa-palette"></i>
                                            </div>
                                            <span class="font-bold text-gray-700">{{ __('messages.art') }}</span>
                                        </div>
                                        <span class="text-xl font-black text-blue-600">98%</span>
                                    </div>
                                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mr-4">
                                                <i class="fas fa-calculator"></i>
                                            </div>
                                            <span class="font-bold text-gray-700">{{ __('messages.logic') }}</span>
                                        </div>
                                        <span class="text-xl font-black text-blue-600">92%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Global Zoom Overlay -->
    <div x-show="zoomImage" 
         class="fixed inset-0 z-[200] bg-black/95 p-8 flex items-center justify-center"
         x-cloak
         @click="zoomImage = false"
         x-transition:enter="transition opacity duration-300"
         x-transition:leave="transition opacity duration-200">
        <button class="absolute top-10 right-10 text-white text-4xl hover:text-red-500 transition-colors">
            <i class="fas fa-times"></i>
        </button>
        <img :src="zoomedImageSrc" class="max-w-full max-h-full object-contain rounded-2xl shadow-2xl">
    </div>

    <x-footer></x-footer>
</body>
</html>
