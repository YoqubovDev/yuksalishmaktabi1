<x-header></x-header>

<div class="bg-gray-50" x-data="{ 
    profileModal: { show: false, person: {} },
    openProfile(data) {
        this.profileModal.person = data;
        this.profileModal.show = true;
        document.body.style.overflow = 'hidden';
    },
    closeProfile() {
        this.profileModal.show = false;
        document.body.style.overflow = '';
    }
}" @keydown.escape.window="closeProfile()">

    <!-- Teachers Hero Section -->
    <section class="py-16 bg-gradient-to-b from-blue-900 to-blue-800">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Muhtaram ustozlarimiz</h2>
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
                    @foreach($teachers as $teacher)
                        <div class="swiper-slide">
                            <div @click="openProfile({ 
                                    name: '{{$teacher->name}}', 
                                    subject: '{{$teacher->subject}}', 
                                    image: '{{ asset('storage/' . $teacher->image) }}',
                                    bio: '{{ addslashes($teacher->bio) }}',
                                    experience: '{{ $teacher->experience }}',
                                    languages: '{{ $teacher->languages }}',
                                    education: '{{ $teacher->education }}',
                                    specialization: '{{ $teacher->specialization }}',
                                    phone: '{{ $teacher->phone }}'
                                })"
                                 class="bg-white shadow-md rounded-2xl p-6 text-center max-w-sm mx-auto hover:shadow-xl transition-all cursor-pointer">
                                <div class="w-32 h-32 mx-auto mb-4">
                                    <img src="{{ asset('storage/' . $teacher->image) }}"
                                         class="w-full h-full object-cover rounded-full border-4 border-blue-200"
                                         alt="Teacher">
                                </div>
                                <h4 class="text-xl font-semibold text-blue-900">{{$teacher->name}}</h4>
                                <p class="text-blue-600 font-medium">{{$teacher->subject}}</p>
                                <p class="text-gray-600 text-sm mt-2 line-clamp-2">{{$teacher->bio}}</p>
                            </div>
                        </div>
                    @endforeach
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
                    <div class="text-5xl font-bold text-blue-900 mb-2">{{ $stats?->asosiy ?? 0 }}+</div>
                    <div class="text-gray-600">Asosiy O‘qituvchi</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2">{{ $stats?->ilmiy ?? 0 }}+</div>
                    <div class="text-gray-600">Ilmiy darajasi bor o‘qituvchilar</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2">{{ $stats?->kurator ?? 0 }}+</div>
                    <div class="text-gray-600">Kurator o‘qituvchi</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-blue-900 mb-2">{{ $stats?->tashqi ?? 0 }}</div>
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
                @foreach($departments as $department)
                    <div class="bg-gray-50 rounded-xl p-6 shadow-md transition-all duration-300 hover:shadow-lg">
                        <div class="w-16 h-16 bg-blue-900 text-white rounded-full flex items-center justify-center mb-4 mx-auto">
                            <i class="{{ $department->icon }}"></i>
                        </div>
                        <h3 class="text-xl font-bold text-center text-blue-900 mb-3">{{ $department->name }}</h3>
                        <p class="text-gray-600 text-center mb-4">{{ $department->description }}</p>
                        <div class="text-center">
                            <span class="text-blue-600 font-medium">{{ $department->teachers_count }} nafar o‘qituvchi</span>
                        </div>
                    </div>
                @endforeach

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

  <!-- Profile Detail Modal -->
  <div x-show="profileModal.show" 
       x-transition:enter="transition ease-out duration-300"
       x-transition:enter-start="opacity-0 scale-95"
       x-transition:enter-end="opacity-100 scale-100"
       x-transition:leave="transition ease-in duration-200"
       x-transition:leave-start="opacity-100 scale-100"
       x-transition:leave-end="opacity-0 scale-95"
       class="fixed inset-0 z-[2000] flex items-center justify-center p-4 bg-black bg-opacity-50" 
       x-cloak>
      
      <div @click.away="closeProfile()" class="bg-white rounded-[30px] md:rounded-[40px] shadow-2xl w-full max-w-5xl max-h-[90vh] md:max-h-none overflow-y-auto md:overflow-visible flex flex-col md:flex-row relative">
          <!-- Close Button -->
          <button @click="closeProfile()" class="absolute top-4 right-4 md:top-6 md:right-8 text-gray-400 hover:text-gray-600 z-[101] p-2 bg-gray-100 rounded-full transition-colors">
              <i class="fas fa-times text-lg md:text-xl"></i>
          </button>

          <!-- Left Side - Profile Summary -->
          <div class="w-full md:w-2/5 p-8 md:p-12 flex flex-col items-center justify-center bg-gray-50 bg-opacity-50 border-b md:border-b-0 md:border-r border-gray-100">
              <div class="w-48 h-56 md:w-64 md:h-72 rounded-[30px] md:rounded-[40px] overflow-hidden shadow-lg mb-6 md:mb-8">
                  <img :src="profileModal.person.image" class="w-full h-full object-cover" alt="">
              </div>
              <h3 x-text="profileModal.person.name" class="text-2xl md:text-3xl font-bold text-blue-900 mb-2 text-center px-4"></h3>
              <div class="bg-blue-600 text-white px-5 py-1.5 md:px-6 md:py-2 rounded-full text-xs md:text-sm font-semibold uppercase tracking-wider mb-2 md:mb-4" x-text="profileModal.person.subject"></div>
          </div>

          <!-- Right Side - Details -->
          <div class="w-full md:w-3/5 p-8 md:p-12">
              <div class="mb-8 md:mb-10">
                  <div class="flex items-center gap-2 mb-6">
                      <div class="w-8 md:w-10 h-1 bg-yellow-400 rounded-full"></div>
                      <h4 class="text-sm md:text-lg font-bold text-blue-900 uppercase tracking-widest">MA'LUMOTLAR</h4>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                      <div class="bg-blue-50 border border-blue-100 p-4 md:p-6 rounded-2xl md:rounded-3xl flex items-center gap-4">
                          <div class="w-10 h-10 md:w-12 md:h-12 bg-white rounded-xl md:rounded-2xl flex items-center justify-center text-blue-600 shadow-sm text-lg md:text-xl">
                              <i class="fas fa-briefcase"></i>
                          </div>
                          <div>
                              <p class="text-[9px] md:text-[10px] text-blue-400 uppercase font-bold tracking-wider mb-0.5 md:mb-1">TAJRIBA</p>
                              <p class="text-sm md:text-blue-900 font-bold" x-text="profileModal.person.experience || 'Tajriba mavjud emas'"></p>
                          </div>
                      </div>
                      <div class="bg-yellow-50 bg-opacity-50 border border-yellow-100 p-4 md:p-6 rounded-2xl md:rounded-3xl flex items-center gap-4">
                          <div class="w-10 h-10 md:w-12 md:h-12 bg-white rounded-xl md:rounded-2xl flex items-center justify-center text-yellow-600 shadow-sm text-lg md:text-xl">
                              <i class="fas fa-language"></i>
                          </div>
                          <div>
                              <p class="text-[9px] md:text-[10px] text-yellow-500 uppercase font-bold tracking-wider mb-0.5 md:mb-1">TILLAR</p>
                              <p class="text-sm md:text-blue-900 font-bold" x-text="profileModal.person.languages || 'O\'zbek tili'"></p>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="mb-8 md:mb-10">
                  <div class="flex items-center gap-2 mb-6">
                      <div class="w-8 md:w-10 h-1 bg-blue-600 rounded-full"></div>
                      <h4 class="text-sm md:text-lg font-bold text-blue-900 uppercase tracking-widest">BIOGRAFIYA</h4>
                  </div>
                  <p class="text-sm md:text-gray-600 leading-relaxed italic" x-text="profileModal.person.bio"></p>
              </div>

              <div class="flex flex-wrap gap-3 md:gap-4 mb-8 md:mb-10">
                  <div class="flex items-center gap-2 md:gap-3 bg-gray-50 px-4 py-2.5 md:px-6 md:py-3 rounded-xl md:rounded-2xl border border-gray-100">
                      <i class="fas fa-user-graduate text-blue-600 text-sm md:text-base"></i>
                      <span class="text-xs md:text-sm font-medium text-gray-700" x-text="profileModal.person.education || 'Oliy ma\'lumotli'"></span>
                  </div>
                  <div class="flex items-center gap-2 md:gap-3 bg-gray-50 px-4 py-2.5 md:px-6 md:py-3 rounded-xl md:rounded-2xl border border-gray-100">
                      <i class="fas fa-award text-yellow-600 text-sm md:text-base"></i>
                      <span class="text-xs md:text-sm font-medium text-gray-700" x-text="profileModal.person.specialization || 'Toifali mutaxassis'"></span>
                  </div>
              </div>

              <div x-show="profileModal.person.phone">
                <a :href="'tel:' + profileModal.person.phone" class="inline-flex items-center justify-center w-full md:w-auto gap-3 bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 md:py-4 rounded-2xl md:rounded-3xl font-bold transition-all shadow-lg text-sm md:text-base">
                    <i class="fas fa-phone-alt"></i>
                    Bog'lanish
                </a>
              </div>
          </div>
      </div>
  </div>

  <style>
      [x-cloak] { display: none !important; }
  </style>

    <!-- Footer -->
    <x-footer></x-footer>
