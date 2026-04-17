<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aloqa - Sevinch - 475-chi sonli bolalar bog`chasi</title>
    
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
        .contact-card { transition: all 0.3s ease; }
        .contact-card:hover { transform: translateY(-5px); shadow: 0 10px 25px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <x-header></x-header>



    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-12">
        <!-- Breadcrumb -->
        <div class="mb-8 flex items-center text-xs text-gray-400 uppercase tracking-widest font-bold">
            <a href="/" class="hover:text-blue-600 transition-colors">
                <i class="fas fa-home mr-1"></i>{{ __('messages.breadcrumb_home') }}
            </a>
            <span class="mx-3 text-gray-300">/</span>
            <span class="text-blue-600">{{ __('messages.breadcrumb_contact') }}</span>
        </div>
        <!-- Header -->
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ __('messages.contact_title') }}</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                {{ __('messages.contact_desc') }}
            </p>
            <div class="w-24 h-1 bg-blue-600 mx-auto mt-4"></div>
        </div>

        @if(isset($contact) && $contact)
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Contact Information -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b-2 border-blue-600 inline-block uppercase tracking-wider">
                            {{ __('messages.contact_info') }}
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                            <!-- Address Card -->
                            <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm border border-gray-100">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-sm uppercase tracking-widest text-blue-600 mb-2">{{ __('messages.address') }}</h3>
                                <p class="text-gray-700 leading-relaxed">{{ $contact->address ?? __('messages.no_data') }}</p>
                            </div>

                            <!-- Phone Card -->
                            <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm border border-gray-100">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-phone-alt text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-sm uppercase tracking-widest text-blue-600 mb-2">{{ __('messages.phone_label') }}</h3>
                                @if($contact->phone)
                                    <a href="tel:+998{{ preg_replace('/[^0-9]/', '', $contact->phone) }}" class="text-gray-700 hover:text-blue-600 transition font-medium">
                                        +998 {{ $contact->phone }}
                                    </a>
                                @else
                                    <p class="text-gray-700">{{ __('messages.no_data') }}</p>
                                @endif
                            </div>

                            <!-- Email Card -->
                            <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm border border-gray-100">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-envelope text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-sm uppercase tracking-widest text-blue-600 mb-2">{{ __('messages.email_label') }}</h3>
                                @if($contact->email)
                                    <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:underline break-all font-medium">
                                        {{ $contact->email }}
                                    </a>
                                @else
                                    <p class="text-gray-700">{{ __('messages.no_data') }}</p>
                                @endif
                            </div>

                            <!-- Work Time Card -->
                            <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm border border-gray-100">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-clock text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-sm uppercase tracking-widest text-blue-600 mb-2">{{ __('messages.work_time_label') }}</h3>
                                <p class="text-gray-700">
                                    {{ __('messages.work_days') }}<br>
                                    <span class="font-medium">{{ $contact->work_time ?? __('messages.no_data') }}</span>
                                </p>
                            </div>
                        </div>

                        <!-- Transport Card -->
                        @if($contact->bus || $contact->marshrut || $contact->stop)
                            <div class="contact-card bg-blue-50/50 rounded-lg p-6 shadow-sm mt-6 border border-blue-100">
                                <h3 class="font-bold text-sm uppercase tracking-widest text-blue-600 mb-4 flex items-center">
                                    <i class="fas fa-bus mr-2"></i> {{ __('messages.transport') }}
                                </h3>
                                <div class="text-gray-700 space-y-2">
                                    @if($contact->bus)
                                        <p><i class="fas fa-bus-alt text-blue-500 mr-2 w-5"></i>{{ __('messages.bus') }} <span class="font-medium">{{ $contact->bus }}</span></p>
                                    @endif
                                    @if($contact->marshrut)
                                        <p><i class="fas fa-route text-blue-500 mr-2 w-5"></i>{{ __('messages.route') }} <span class="font-medium">{{ $contact->marshrut }}</span></p>
                                    @endif
                                    @if($contact->stop)
                                        <p><i class="fas fa-map-pin text-blue-500 mr-2 w-5"></i>{{ __('messages.stop') }} <span class="font-medium">{{ $contact->stop }}</span></p>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- Social Media -->
                        <div class="mt-8">
                            <h3 class="font-bold text-gray-800 mb-4 uppercase tracking-widest text-sm">{{ __('messages.social_media') }}</h3>
                            <div class="flex flex-wrap gap-4">
                                @if($contact->telegram)
                                    <a href="{{ str_starts_with($contact->telegram, 'http') ? $contact->telegram : 'https://t.me/' . str_replace('@', '', $contact->telegram) }}" 
                                       target="_blank" 
                                       class="bg-blue-500 hover:bg-blue-600 text-white rounded-xl w-12 h-12 flex items-center justify-center transition shadow-lg hover:-translate-y-1">
                                        <i class="fab fa-telegram-plane text-xl"></i>
                                    </a>
                                @endif

                                @if($contact->instagram)
                                    <a href="{{ str_starts_with($contact->instagram, 'http') ? $contact->instagram : 'https://instagram.com/' . $contact->instagram }}" 
                                       target="_blank" 
                                       class="bg-pink-600 hover:bg-pink-700 text-white rounded-xl w-12 h-12 flex items-center justify-center transition shadow-lg hover:-translate-y-1">
                                        <i class="fab fa-instagram text-xl"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Map Section -->
                    <div class="flex flex-col">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b-2 border-blue-600 inline-block uppercase tracking-wider">
                            {{ __('messages.our_address') }}
                        </h2>
                        
                        <div class="rounded-2xl overflow-hidden shadow-xl border-4 border-white flex-grow">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.6755!2d69.1917!3d41.2828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8a4740e2b9c7%3A0xc6ed83c791307ed1!2sChilonzor%20tumani%2C%20Tashkent%2C%20Uzbekistan!5e0!3m2!1suz!2s!4v1713330000000!5m2!1suz!2s"
                                width="100%"
                                height="100%"
                                style="border:0; min-height: 350px;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>

                        <div class="mt-6 flex flex-wrap gap-4">
                            @if($contact->map_link)
                                <a href="{{ $contact->map_link }}" 
                                   target="_blank" 
                                   class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-bold flex items-center justify-center transition shadow-xl hover:-translate-y-1 flex-grow">
                                    <i class="fas fa-map-marked-alt mr-2"></i> 
                                    {{ __('messages.open_maps') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @else
            <!-- No Contact Data -->
            <div class="bg-white rounded-2xl shadow-xl p-16 text-center max-w-2xl mx-auto">
                <div class="w-24 h-24 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-8">
                    <i class="fas fa-exclamation-triangle text-4xl text-red-400"></i>
                </div>
                <h2 class="text-3xl font-black text-gray-800 mb-4">{{ __('messages.not_found') }}</h2>
                <p class="text-gray-500 mb-10 leading-relaxed">{{ __('messages.not_found_desc') }}</p>
                <div class="bg-blue-50 rounded-2xl p-8 text-left border border-blue-100">
                    <p class="font-black text-blue-900 uppercase tracking-widest text-xs mb-4">Qo'llanma:</p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-blue-700 font-medium">
                            <span class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-[10px] mr-3">1</span>
                            Admin panelga kiring
                        </li>
                        <li class="flex items-center text-blue-700 font-medium">
                            <span class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-[10px] mr-3">2</span>
                            "Bog'lanish" (Contacts) bo'limini tanlang
                        </li>
                        <li class="flex items-center text-blue-700 font-medium">
                            <span class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-[10px] mr-3">3</span>
                            Ma'lumotlarni qo'shing va saqlang
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    </main>

    <x-footer></x-footer>

    <!-- Mobile Nav Toggle helper (in case header script fails) -->
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