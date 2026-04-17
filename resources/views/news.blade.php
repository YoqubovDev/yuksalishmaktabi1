<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.news') }} - Sevinch - 475-chi sonli bolalar bog`chasi</title>
    
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
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
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <style>
        body { font-family: 'Poppins', sans-serif; }
        [x-cloak] { display: none !important; }
        .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
        .hover-scale { transition: transform 0.5s ease; }
        .hover-lift:hover .hover-scale { transform: scale(1.05); }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <x-header></x-header>

    <!-- Page Header -->
    <section class="relative bg-blue-900 py-24 object-cover object-center bg-no-repeat bg-cover" style="background-image: linear-gradient(rgba(12, 9, 80, 0.8), rgba(22, 17, 121, 0.8)), url('{{ asset('image/orig.jpeg') }}');">
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-5xl font-bold text-white mb-6 font-serif tracking-wide">{{ __('messages.news') }}</h1>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto font-light">
                {{ __('messages.news_desc') }}
            </p>
            <div class="w-24 h-1 bg-yellow-400 mx-auto mt-8"></div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-16">
        <!-- Breadcrumb -->
        <div class="mb-8 flex items-center justify-center text-xs text-gray-400 uppercase tracking-widest font-bold">
            <a href="/" class="hover:text-blue-600 transition-colors">
                <i class="fas fa-home mr-1"></i>{{ __('messages.breadcrumb_home') }}
            </a>
            <span class="mx-3 text-gray-300">/</span>
            <span class="text-blue-600">{{ __('messages.news') }}</span>
        </div>

        @if($news->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($news as $item)
                    <div class="bg-white rounded-2xl shadow-lg hover-lift overflow-hidden border border-gray-100 flex flex-col h-full">
                        <div class="aspect-[16/10] overflow-hidden relative group">
                            @if($item->image)
                                <img
                                    src="{{ asset('storage/' . $item->image) }}"
                                    alt="{{ $item->title }}"
                                    class="w-full h-full object-cover hover-scale"
                                />
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center hover-scale">
                                    <i class="fas fa-image text-4xl text-gray-400"></i>
                                </div>
                            @endif
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur text-blue-900 text-xs font-bold px-3 py-1.5 rounded-lg shadow-sm">
                                <i class="fas fa-calendar-alt mr-1"></i>
                                {{ $item->published_at ? $item->published_at->format('d.m.Y') : $item->created_at->format('d.m.Y') }}
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2 hover:text-blue-600 transition-colors cursor-pointer">
                                {{ $item->title }}
                            </h3>
                            <p class="text-gray-600 mb-6 line-clamp-3 text-sm leading-relaxed flex-grow">
                                {{ $item->excerpt ?? \Illuminate\Support\Str::limit($item->content, 120) }}
                            </p>
                            <button @click="$dispatch('open-news-modal', { 
                                    title: '{{ addslashes(str_replace(\"\\n\", \" \", $item->title)) }}', 
                                    date: '{{ $item->published_at ? $item->published_at->format('d.m.Y') : $item->created_at->format('d.m.Y') }}', 
                                    content: '{{ addslashes(str_replace(\"\\n\", \"<br>\", $item->content)) }}', 
                                    image: '{{ $item->image ? asset('storage/' . $item->image) : '' }}' 
                                })"
                               class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors group mt-auto">
                                {{ __('messages.more_details') }}
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if ($news->hasPages())
            <div class="mt-16 flex justify-center">
                {{ $news->links('pagination::tailwind') }}
            </div>
            @endif
        @else
            <!-- No News State -->
            <div class="bg-white rounded-3xl shadow-xl p-16 text-center max-w-2xl mx-auto border border-gray-100">
                <div class="w-24 h-24 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-8">
                    <i class="far fa-newspaper text-5xl text-blue-400"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ __('messages.no_news') }}</h2>
                <p class="text-gray-500 mb-8">{{ __('messages.not_found_desc') }}</p>
                <a href="{{ route('home') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-xl transition shadow-lg hover:-translate-y-1">
                    <i class="fas fa-home mr-2"></i>{{ __('messages.breadcrumb_home') }}
                </a>
            </div>
        @endif
    </main>

    <!-- News Detail Modal -->
    <div x-data="{ 
            open: false, 
            news: null 
         }" 
         @open-news-modal.window="news = $event.detail; open = true; document.body.style.overflow = 'hidden';"
         class="relative z-[100]" x-cloak>
        
        <div x-show="open" 
             x-transition.opacity 
             class="fixed inset-0 bg-gray-900/80 backdrop-blur-sm transition-opacity" 
             aria-hidden="true"></div>

        <div x-show="open" 
             x-transition:enter="ease-out duration-300" 
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
             x-transition:leave="ease-in duration-200" 
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
             class="fixed inset-0 w-screen h-screen overflow-y-auto" 
             @click.away="open = false; document.body.style.overflow = '';">
            
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-4xl border border-gray-100 w-full" @click.stop>
                    
                    <!-- Close button -->
                    <button @click="open = false; document.body.style.overflow = '';" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/80 backdrop-blur rounded-full flex items-center justify-center text-gray-500 hover:text-red-500 hover:bg-red-50 transition-colors shadow-sm focus:outline-none">
                        <i class="fas fa-times text-xl"></i>
                    </button>

                    <template x-if="news">
                        <div>
                            <!-- Header Image -->
                            <div class="w-full h-64 sm:h-80 bg-gray-100 relative overflow-hidden">
                                <template x-if="news.image">
                                    <img :src="news.image" :alt="news.title" class="w-full h-full object-cover">
                                </template>
                                <template x-if="!news.image">
                                    <div class="w-full h-full flex items-center justify-center">
                                        <i class="fas fa-newspaper text-6xl text-gray-300"></i>
                                    </div>
                                </template>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                                <div class="absolute bottom-6 left-6 right-6 text-white">
                                    <div class="flex items-center text-sm font-medium text-blue-200 mb-3 bg-white/20 backdrop-blur-md w-max px-3 py-1.5 rounded-lg">
                                        <i class="fas fa-calendar-alt mr-2"></i>
                                        <span x-text="news.date"></span>
                                    </div>
                                    <h2 class="text-2xl sm:text-3xl font-bold leading-tight" x-text="news.title"></h2>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="px-6 py-10 sm:px-10 max-h-[50vh] overflow-y-auto">
                                <div class="prose prose-blue max-w-none text-gray-700 leading-relaxed font-sans" x-html="news.content"></div>
                            </div>
                            
                            <!-- Footer -->
                            <div class="bg-gray-50 px-6 py-6 sm:flex sm:flex-row-reverse sm:px-10 border-t border-gray-100">
                                <button type="button" 
                                        @click="open = false; document.body.style.overflow = '';" 
                                        class="inline-flex w-full justify-center rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 sm:w-auto transition-colors focus:outline-none">
                                    {{ __('messages.close') }}
                                </button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobileMenuBtn');
            const nav = document.getElementById('mainNav');
            if (btn && nav) {
                btn.addEventListener('click', function() {
                    nav.classList.toggle('active');
                    btn.classList.toggle('active');
                });
            }
        });
    </script>
</body>
</html>
