<x-header></x-header>

<div x-data="{ 
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

  <!-- Hero Slider Section -->
  <section class="main-slider">
    <div class="main-slides">
      <!-- Slide 1 -->
      <div class="main-slide">
        <img src="/image/orig.jpeg" alt="Campus Building" class="w-full h-full object-cover">
        <div class="absolute inset-0 gradient-overlay flex flex-col items-center md:items-end justify-start text-white p-10 md:p-20 md:pt-40">
          <div class="max-w-5xl md:text-right">
            <p class="text-white mb-6 flex items-center justify-center md:justify-end font-light tracking-widest uppercase text-xs md:text-sm animate-fade-in-down">
              <span class="mr-2"><i class="fas fa-graduation-cap"></i></span>
              bilim innovatsiyaga yo‘li
            </p>
            <!-- <h3 class="text-2xl md:text-4xl lg:text-5xl font-serif mb-6 hero-text-shadow leading-snug">Jizzax shahar Yuksalish maktabi bilan</h3> -->
            <p  class="text-3xl md:text-5xl lg:text-6xl font-serif mb-10 hero-text-shadow font-bold leading-snug">
              Zehinlilarni tarbiyalaymiz, yetakchilarni voyaga yetkazamiz.
            </p>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="main-slide">
        <img src="/image/photo_1_2025-03-24_00-16-14.jpg" alt="Student Life" class="w-full h-full object-cover">
        <div class="absolute inset-0 gradient-overlay flex flex-col items-center md:items-end justify-start text-white p-10 md:p-20 md:pt-40">
          <div class="max-w-4xl md:text-right">
            <!-- <p class="text-white mb-6 flex items-center justify-center md:justify-end font-light tracking-widest uppercase text-xs md:text-sm">
              <span class="mr-2"><i class="fas fa-users"></i></span>
              Birlik va mukammallik
            </p>
            <h3 class="text-2xl md:text-4xl lg:text-5xl font-serif mb-6 hero-text-shadow leading-snug">Biz bilan</h3>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-10 hero-text-shadow font-bold leading-snug">O‘z ishtiyoqingni angla</h2>
            <p class="text-lg md:text-xl font-light opacity-90 max-w-2xl ml-auto leading-relaxed">Huradan tortib fanlargacha – bizning qo‘llab-quvvatlovchi muhitimizda o‘z yo‘lingizni toping.</p> -->
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="main-slide">
        <img src="/image/photo_6_2025-03-24_00-16-14.jpg" alt="Research Lab" class="w-full h-full object-cover">
        <div class="absolute inset-0 gradient-overlay flex flex-col items-center md:items-end justify-start text-white p-10 md:p-20 md:pt-40">
          <div class="max-w-4xl md:text-right">
            <!-- <p class="text-white mb-6 flex items-center justify-center md:justify-end font-light tracking-widest uppercase text-xs md:text-sm">
              <span class="mr-2"><i class="fas fa-microscope"></i></span>
              Tadqiqot va innovatsiya
            </p> -->
            <!-- <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif mb-6 hero-text-shadow font-bold leading-snug">Ertangi kuningni</h2>
            <h3 class="text-2xl md:text-4xl lg:text-5xl font-serif mb-10 hero-text-shadow leading-snug">Bugun qur</h3>
            <p class="text-lg md:text-xl font-light opacity-90 max-w-2xl ml-auto leading-relaxed">Zamonaviy jihozlangan infratuzilmamiz ilg‘or tadqiqotlar va innovatsiyalarni qo‘llab-quvvatlaydi.</p> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation Dots -->
    <div class="absolute bottom-12 left-0 right-0 flex justify-center space-x-6">
      <div class="flex space-x-2 slide-dots">
        <span class="w-8 h-2 bg-white rounded-full bg-opacity-80 dot active" data-index="0"></span>
        <span class="w-2 h-2 bg-white rounded-full bg-opacity-50 dot" data-index="1"></span>
        <span class="w-2 h-2 bg-white rounded-full bg-opacity-50 dot" data-index="2"></span>
      </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="slider-prev absolute left-6 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white bg-opacity-10 backdrop-blur-sm rounded-full border border-white text-white flex items-center justify-center focus:outline-none hover:bg-white hover:bg-opacity-20 transition-all duration-300">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button class="slider-next absolute right-6 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white bg-opacity-10 backdrop-blur-sm rounded-full border border-white text-white flex items-center justify-center focus:outline-none hover:bg-white hover:bg-opacity-20 transition-all duration-300">
      <i class="fas fa-chevron-right"></i>
    </button>
  </section>


  <section class="py-20 bg-gray-50" x-data="{ showModal: false, imageUrl: '' }">
      <div class="container mx-auto px-4">
          <h3 class="text-4xl font-extrabold text-blue-900 mb-12 text-center">Maktab jihozlari</h3>

          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-10">
              @foreach($qabulrasmis as $rasm)
                  <div class="bg-white shadow-2xl rounded-3xl p-6 hover:shadow-3xl transition-shadow duration-300">
                      <div class="w-full aspect-[4/5] overflow-hidden rounded-2xl border-2 border-blue-200 cursor-pointer"
                           @click="showModal = true; imageUrl = '{{ asset('storage/' . $rasm->image) }}'">
                          <img src="{{ asset('storage/' . $rasm->image) }}"
                               alt="Qabul rasmi"
                               class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 rounded-2xl">
                      </div>
                  </div>
              @endforeach
          </div>
      </div>

      <!-- Modal -->
      <div x-show="showModal"
           class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
           x-transition>
          <div class="relative">
              <button @click="showModal = false"
                      class="absolute top-2 right-2 text-white text-3xl font-bold">&times;</button>
              <img :src="imageUrl" class="max-w-screen-md max-h-screen rounded-xl border-4 border-white">
          </div>
      </div>
  </section>

  <!-- About Section -->
  <section id="about" class="bg-gray-100 py-12">
    <div class="container mx-auto px-6">
      <div class="bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-4xl font-bold text-unipix-blue text-center mb-8">Biz haqimizda</h2>
        <p class="text-gray-600 text-lg mb-6">
            Yuksalish maktabi ta'lim, innovatsiya va rivojlanish markazi. Bizning asosiy maqsadimiz nafaqat talabalarga bilim berish, balki ularni kelajakdagi muvaffaqiyatli hayotga tayyorlashdir.
        </p>
        <h3 class="text-2xl font-semibold text-unipix-blue mb-4">Bizning afzalliklarimiz</h3>
        <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
          <li><strong>Professional o'qituvchilar:</strong>Maktabimiz o'z sohalari bo'yicha yuqori malakaga ega bo'lgan tajribali pedagoglar.</li>
          <li><strong>Innovatsion metodologiyalar:</strong> O'qitish zamonaviy texnologiyalar va interfaol ta'lim usullaridan foydalangan holda amalga oshiriladi.</li>
          <li><strong>Amaliy o'quv jarayoni:</strong> Haqiqiy loyihalar va amaliy mashg'ulotlar orqali nazariy bilimlarni mustahkamlash imkoniyati.</li>
          <li><strong>Global yondashuv:</strong> Talabalarga xalqaro standartlarga javob beradigan bilim va ko'nikmalar beriladi.</li>
        </ul>
        <h3 class="text-2xl font-semibold text-unipix-blue mb-4">Bizning tariximiz</h3>
        <p class="text-gray-600 text-lg mb-6">
            2023 yilda tashkil etilgan Jizzax shahridagi Yuksalish maktab O'zbekiston yoshlariga sifatli ta'lim berish maqsadida tashkil etilgan. 450 nafar o'quvchiga mo'ljallangan  maktabi milliy ta'lim standartlariga asoslangan zamonaviy o'quv muhitini taklif etadi. U talabalarni fan, texnologiya, muhandislik, matematika va gumanitar fanlar bo'yicha qat'iy dasturlar orqali tayyorlaydi. Qabul ingliz tilidagi rasmiy intervyu bilan bir qatorda matematika, fizika va ingliz tilidagi test natijalariga asoslanadi. Yuksalish maktabi o'quvchilarni kuchli ilmiy asoslar va professional ustozlik orqali akademik maqsadlariga va kelajakdagi martabalariga erishishda g'urur bilan qo'llab-quvvatlaydi.
        </p>
        <h3 class="text-2xl font-semibold text-unipix-blue mb-4">Bizning missiyamiz</h3>
        <p class="text-gray-600 text-lg mb-6">
            Bizning vazifamiz talabalarga akademik salohiyati va shaxsiy o'sishini ta'minlaydigan yuqori sifatli ta'lim berishdir. Biz talabalar fan, texnologiya, muhandislik, matematika va gumanitar fanlar bo'yicha chuqur bilim olishlari mumkin bo'lgan dinamik o'quv muhitini ta'minlashga intilamiz. Tajribali fakulteti orqali, zamonaviy inshootlari, va mukammallikni uchun majburiyat, biz universitet uchun emas, balki faqat bizning talabalarga tayyorlash, lekin ularning kelajakda martaba muvaffaqiyat va jamiyat uchun mazmunli hissasi uchun.
        </p>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
          <h3 class="text-3xl font-bold text-blue-900 mb-10 text-center">Yuksalish maktab rahbariyati</h3>

          <div class="flex flex-wrap justify-center gap-8">
              @foreach($homes as $home)
                  <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 max-w-xs">
                      <div @click="openProfile({ 
                                name: '{{$home->name}}', 
                                subject: '{{$home->subject}}', 
                                image: '{{ asset('storage/' . $home->image) }}',
                                bio: '{{ addslashes($home->bio) }}',
                                experience: '{{ $home->experience }}',
                                languages: '{{ $home->languages }}',
                                education: '{{ $home->education }}',
                                specialization: '{{ $home->specialization }}',
                                phone: '{{ $home->phone }}'
                            })" 
                           class="bg-white shadow-xl rounded-3xl p-6 text-center hover:scale-105 transition-transform duration-300 cursor-pointer h-full flex flex-col items-center">
                          <div class="w-28 h-28 mx-auto mb-4 flex-shrink-0">
                              <img src="{{ asset('storage/' . $home->image) }}"
                                   class="w-full h-full object-cover rounded-full border-4 border-blue-200"
                                   alt="Teacher">
                          </div>
                          <h4 class="text-xl font-semibold text-blue-900">{{$home->name}}</h4>
                          <p class="text-blue-600 font-medium">{{$home->subject}}</p>
                          <p class="text-gray-600 text-sm mt-2 line-clamp-2">{{$home->bio}}</p>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </section>




  <!-- JS for Auto Sliding -->
  <script>
      const slider = document.getElementById("team-slider");
      const prevBtn = document.getElementById("team-prev");
      const nextBtn = document.getElementById("team-next");
      let scrollAmount = 0;
      const scrollStep = 300;

      function scrollNext() {
          if (scrollAmount >= slider.scrollWidth - slider.clientWidth) {
              scrollAmount = 0;
          } else {
              scrollAmount += scrollStep;
          }
          slider.scrollTo({ left: scrollAmount, behavior: "smooth" });
      }

      function scrollPrev() {
          scrollAmount -= scrollStep;
          if (scrollAmount < 0) {
              scrollAmount = slider.scrollWidth - slider.clientWidth;
          }
          slider.scrollTo({ left: scrollAmount, behavior: "smooth" });
      }

      nextBtn.addEventListener("click", scrollNext);
      prevBtn.addEventListener("click", scrollPrev);

      setInterval(scrollNext, 4000); // har 4 sekundda avtomatik suriladi
  </script>


  <!-- Footer -->
  <!-- Footer with improved design -->
      <x-footer></x-footer>


  <!-- JavaScript for Sliders -->
  <script>
    // Main Hero Slider
    const mainSlides = document.querySelector('.main-slides');
    const mainSlideCount = document.querySelectorAll('.main-slide').length;
    const dots = document.querySelectorAll('.dot');
    const prevButton = document.querySelector('.slider-prev');
    const nextButton = document.querySelector('.slider-next');
    let currentMainSlide = 0;

    function updateMainSlider() {
      mainSlides.style.transform = `translateX(-${currentMainSlide * 100}%)`;
      dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentMainSlide);
        dot.classList.toggle('w-8', index === currentMainSlide);
        dot.classList.toggle('w-2', index !== currentMainSlide);
      });
    }

    nextButton.addEventListener('click', () => {
      currentMainSlide = (currentMainSlide + 1) % mainSlideCount;
      updateMainSlider();
    });

    prevButton.addEventListener('click', () => {
      currentMainSlide = (currentMainSlide - 1 + mainSlideCount) % mainSlideCount;
      updateMainSlider();
    });

    dots.forEach(dot => {
      dot.addEventListener('click', () => {
        currentMainSlide = parseInt(dot.dataset.index);
        updateMainSlider();
      });
    });

    // Auto-slide every 5 seconds
    setInterval(() => {
      currentMainSlide = (currentMainSlide + 1) % mainSlideCount;
      updateMainSlider();
    }, 5000);

    // Team Slider
    const teamSlides = document.querySelector('.slides2');
    const teamPrev = document.getElementById('team-prev');
    const teamNext = document.getElementById('team-next');
    const teamSlideWidth = 264; // Width of each team member card (240px + 24px gap)
    const teamVisibleSlides = 3; // Number of visible slides
    let currentTeamSlide = 0;
    const totalTeamSlides = document.querySelectorAll('.slides2 > div').length;

    teamNext.addEventListener('click', () => {
      if (currentTeamSlide < totalTeamSlides - teamVisibleSlides) {
        currentTeamSlide++;
        teamSlides.style.transform = `translateX(-${currentTeamSlide * teamSlideWidth}px)`;
      }
    });

    teamPrev.addEventListener('click', () => {
      if (currentTeamSlide > 0) {
        currentTeamSlide--;
        teamSlides.style.transform = `translateX(-${currentTeamSlide * teamSlideWidth}px)`;
      }
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

</body>
</html>
