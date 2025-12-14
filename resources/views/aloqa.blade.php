<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aloqa - Jizzax Shahar Yuksalish Maktabi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <style>
        .contact-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .social-icon {
            transition: transform 0.3s ease;
        }
        .social-icon:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Breadcrumb -->
    <div class="bg-white border-b py-4 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex items-center text-gray-600">
                <a href="/" class="hover:text-blue-600 transition-colors duration-300">
                    <i class="fas fa-home mr-2"></i>Asosiy
                </a>
                <span class="mx-2 text-gray-400">/</span>
                <span class="text-blue-600 font-medium">Aloqa</span>
            </div>
        </div>
    </div>
    <x-header></x-header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <!-- Header -->
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Biz bilan bog'laning</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Jizzax Shahar Yuksalish maktabi bilan bog'lanish uchun quyidagi ma'lumotlardan foydalanishingiz mumkin
            </p>
            <div class="w-24 h-1 bg-blue-600 mx-auto mt-4"></div>
        </div>

        @if(isset($contact) && $contact)
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Contact Information -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b-2 border-blue-600 inline-block">
                            Bog'lanish ma'lumotlari
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                            <!-- Address Card -->
                            <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-lg text-blue-600 mb-2">Manzil:</h3>
                                <p class="text-gray-700">{{ $contact->address ?? 'Ma\'lumot kiritilmagan' }}</p>
                            </div>

                            <!-- Phone Card -->
                            <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-phone-alt text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-lg text-blue-600 mb-2">Telefon:</h3>
                                @if($contact->phone)
                                    <a href="tel:+998{{ $contact->phone }}" class="text-gray-700 hover:text-blue-600 transition">
                                        +998 {{ $contact->phone }}
                                    </a>
                                @else
                                    <p class="text-gray-700">Ma'lumot kiritilmagan</p>
                                @endif
                                
                                @if($contact->fax)
                                    <p class="text-gray-600 text-sm mt-2">Fax: +998 {{ $contact->fax }}</p>
                                @endif
                            </div>

                            <!-- Email Card -->
                            <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-envelope text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-lg text-blue-600 mb-2">Email:</h3>
                                @if($contact->email)
                                    <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:underline break-all">
                                        {{ $contact->email }}
                                    </a>
                                @else
                                    <p class="text-gray-700">Ma'lumot kiritilmagan</p>
                                @endif
                            </div>

                            <!-- Work Time Card -->
                            <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-clock text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-lg text-blue-600 mb-2">Ish vaqti:</h3>
                                <p class="text-gray-700">
                                    Dushanba - Shanba<br>
                                    {{ $contact->work_time ?? 'Ma\'lumot kiritilmagan' }}
                                </p>
                                @if($contact->lunch_time)
                                    <p class="text-gray-600 text-sm mt-2">
                                        <i class="fas fa-utensils mr-1"></i>Tushlik: {{ $contact->lunch_time }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <!-- Transport Card -->
                        @if($contact->bus || $contact->marshrut)
                            <div class="contact-card bg-gray-50 rounded-lg p-6 shadow-sm mt-6">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-bus text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-lg text-blue-600 mb-2">Transport:</h3>
                                <div class="text-gray-700 space-y-1">
                                    @if($contact->bus)
                                        <p><i class="fas fa-bus text-blue-500 mr-2"></i>Avtobus: {{ $contact->bus }}</p>
                                    @endif
                                    @if($contact->marshrut)
                                        <p><i class="fas fa-route text-blue-500 mr-2"></i>Marshut: {{ $contact->marshrut }}</p>
                                    @endif
                                    @if($contact->stop)
                                        <p><i class="fas fa-map-pin text-blue-500 mr-2"></i>Bekat: {{ $contact->stop }}</p>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- Social Media -->
                        <div class="mt-8">
                            <h3 class="font-bold text-lg text-gray-800 mb-4">Ijtimoiy tarmoqlar:</h3>
                            <div class="flex flex-wrap gap-4">
                                @if($contact->telegram)
                                    <a href="{{ str_starts_with($contact->telegram, 'http') ? $contact->telegram : 'https://t.me/' . $contact->telegram }}" 
                                       target="_blank" 
                                       class="social-icon bg-blue-500 hover:bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center transition shadow-md">
                                        <i class="fab fa-telegram text-xl"></i>
                                    </a>
                                @endif

                                @if($contact->facebook)
                                    <a href="{{ str_starts_with($contact->facebook, 'http') ? $contact->facebook : 'https://facebook.com/' . $contact->facebook }}" 
                                       target="_blank" 
                                       class="social-icon bg-blue-700 hover:bg-blue-800 text-white rounded-full w-12 h-12 flex items-center justify-center transition shadow-md">
                                        <i class="fab fa-facebook-f text-xl"></i>
                                    </a>
                                @endif

                                @if($contact->youtube)
                                    <a href="{{ str_starts_with($contact->youtube, 'http') ? $contact->youtube : 'https://youtube.com/@' . $contact->youtube }}" 
                                       target="_blank" 
                                       class="social-icon bg-red-600 hover:bg-red-700 text-white rounded-full w-12 h-12 flex items-center justify-center transition shadow-md">
                                        <i class="fab fa-youtube text-xl"></i>
                                    </a>
                                @endif

                                @if($contact->instagram)
                                    <a href="{{ str_starts_with($contact->instagram, 'http') ? $contact->instagram : 'https://instagram.com/' . $contact->instagram }}" 
                                       target="_blank" 
                                       class="social-icon bg-pink-600 hover:bg-pink-700 text-white rounded-full w-12 h-12 flex items-center justify-center transition shadow-md">
                                        <i class="fab fa-instagram text-xl"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Map Section -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b-2 border-blue-600 inline-block">
                            Bizning manzil
                        </h2>
                        
                        <div class="mt-6 rounded-lg overflow-hidden shadow-lg">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.8547891234567!2d67.8254626!3d40.1381056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b297e3416fc6a5%3A0x876569f4c99e9a88!2sYuksalish%20Jizzax!5e0!3m2!1suz!2s!4v1699000000000!5m2!1suz!2s"
                                width="100%"
                                height="450"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>

                        <!-- Rating and Map Link -->
                        <div class="mt-6 bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-6 shadow-sm">
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
                                <div class="flex items-center">
                                    <div class="bg-white shadow-md rounded-lg px-4 py-2 flex items-center mr-4">
                                        <span class="text-yellow-500 text-xl mr-2">★</span>
                                        <span class="font-bold text-lg">{{ $contact->rating ?? '5' }}</span>
                                    </div>
                                    <div>
                                        <p class="text-gray-700 font-medium">O'quvchilar bahosi</p>
                                    </div>
                                </div>
                                
                                @if($contact->map_link)
                                    <a href="{{ $contact->map_link }}" 
                                       target="_blank" 
                                       class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium flex items-center justify-center transition shadow-md">
                                        <i class="fas fa-map-marked-alt mr-2"></i> 
                                        Google Maps
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- Quick Info Box -->
                        <div class="mt-6 bg-blue-600 text-white rounded-lg p-6 shadow-lg">
                            <h3 class="font-bold text-xl mb-4">
                                <i class="fas fa-info-circle mr-2"></i>Tez aloqa
                            </h3>
                            <div class="space-y-3">
                                @if($contact->phone)
                                    <a href="tel:+998{{ $contact->phone }}" class="flex items-center hover:bg-blue-700 p-2 rounded transition">
                                        <i class="fas fa-phone-alt mr-3"></i>
                                        <span>+998 {{ $contact->phone }}</span>
                                    </a>
                                @endif
                                @if($contact->email)
                                    <a href="mailto:{{ $contact->email }}" class="flex items-center hover:bg-blue-700 p-2 rounded transition break-all">
                                        <i class="fas fa-envelope mr-3"></i>
                                        <span>{{ $contact->email }}</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <!-- No Contact Data -->
            <div class="bg-white rounded-xl shadow-lg p-12 text-center">
                <div class="max-w-md mx-auto">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-exclamation-triangle text-4xl text-gray-400"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-700 mb-4">Aloqa ma'lumotlari topilmadi</h2>
                    <p class="text-gray-600 mb-6">Iltimos, admin panel orqali aloqa ma'lumotlarini kiriting</p>
                    <div class="bg-blue-50 border-l-4 border-blue-500 rounded-lg p-4 text-left">
                        <p class="text-sm text-blue-800 font-semibold mb-2">
                            <i class="fas fa-lightbulb mr-2"></i>Qanday qilish kerak:
                        </p>
                        <ol class="text-sm text-blue-700 list-decimal list-inside space-y-1">
                            <li>Admin panelga kiring</li>
                            <li>Contacts bo'limiga o'ting</li>
                            <li>Yangi contact ma'lumotlarini kiriting</li>
                        </ol>
                    </div>
                </div>
            </div>
        @endif
    </main>

    <!-- Footer (agar kerak bo'lsa qo'shing) -->
</body>
</html>