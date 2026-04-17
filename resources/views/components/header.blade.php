
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .gradient-overlay {
            background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(22,17,121,0.7) 100%);
        }
        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(22, 17, 121, 0.6);
        }
        .nav-indicator::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background-color: #161179;
            transition: width 0.3s ease;
        }
        .nav-indicator:hover::after {
            width: 70%;
        }
        .active-nav::after {
            width: 70%;
        }

        /* Team slider styles */
        .slides2 {
            display: flex;
            gap: 24px;
            width: max-content;
        }
        .slider2 {
            overflow: hidden;
        }
        .slider2 .slides2 > div {
            flex-shrink: 0;
            min-width: auto;
            max-width: 240px;
        }

        /* Main Slider */
        .main-slider {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        .main-slides {
            display: flex;
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
        }
        .main-slide {
            flex: 0 0 100%;
            position: relative;
        }

        .footer {
            background: linear-gradient(to bottom, #003366, #001830);
            color: white;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(to right, #161179, #16A34A);
        }

        .footer-top {
            padding: 5rem 0 3rem;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .footer-logo-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .footer-heading {
            position: relative;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .footer-nav-item {
            display: flex;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .footer-nav-item:hover {
            transform: translateX(5px);
        }

        .footer-nav-item i {
            color: var(--accent-color);
            font-size: 12px;
            margin-right: 8px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 2rem 0;
        }
    </style>
    <style>
        .stat-box {
            transition: transform 0.3s ease-in-out;
        }
        .stat-box:hover {
            transform: scale(1.05);
        }

        /* Team Slider Styles */
        .slider-container {
            overflow: hidden;
            position: relative;
            width: 100%;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .slider-images {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 2rem;
        }

        .slider-img {
            position: relative;
            height: 450px;
            width: 300px;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
            flex-shrink: 0;
            transition: all 0.5s ease;
            opacity: 0.6;
            transform: scale(0.9);
        }

        .slider-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slider-img h1 {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            font-size: 24px;
            opacity: 0;
            transition: all 0.5s ease;
            z-index: 1;
        }

        .slider-img .details {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: all 0.5s ease;
        }

        .slider-img.active {
            opacity: 1;
            transform: scale(1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        }

        .slider-img.active h1 {
            opacity: 1;
        }

        .slider-img:hover .details {
            opacity: 1;
        }

        .slider-controls {
            position: absolute;
            bottom: 30px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .slider-controls button {
            background: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-controls button:hover {
            background: white;
            color: black;
        }

        .slider-dots {
            display: flex;
            gap: 8px;
            margin-top: 20px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: white;
            transform: scale(1.3);
        }

        .spoon-icon {
            width: 24px;
            height: 24px;
            margin-right: 8px;
            display: inline-block;
            vertical-align: middle;
        }

        .favorite-spoon {
            background: rgba(255, 255, 255, 0.1);
            padding: 6px 12px;
            border-radius: 20px;
            margin-top: 8px;
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .spoon-collection {
            position: absolute;
            bottom: 80px;
            left: 0;
            right: 0;
            text-align: center;
        }

        .spoon-collection img {
            display: inline-block;
            height: 40px;
            margin: 0 5px;
            filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.7));
            transition: all 0.3s ease;
        }

        .spoon-collection img:hover {
            transform: rotate(30deg) scale(1.2);
        }

        @media (max-width: 768px) {
            .slider-img {
                height: 350px;
                width: 250px;
            }
        }
    </style>
    <style>
        :root {
            --primary-color: #0a4480;
            --secondary-color: #1a6cb4;
            --text-color: #333;
            --light-bg: #f5f7fa;
            --white: #ffffff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
        }

        header {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 1rem 0;
            box-shadow: var(--shadow);
            position: relative;
            z-index: 1000;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo img {
            height: 60px;
            width: auto;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            white-space: nowrap;
        }

        /* Hamburger Menu Button */
        .mobile-menu-btn {
            display: none;
            background: transparent;
            border: none;
            color: var(--white);
            font-size: 1.8rem;
            cursor: pointer;
            padding: 0.5rem;
            z-index: 1002;
            transition: all 0.3s ease;
            position: relative;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
        }

        .mobile-menu-btn:hover {
            opacity: 0.8;
            transform: scale(1.1);
        }

        .mobile-menu-btn .menu-icon,
        .mobile-menu-btn .close-icon {
            position: absolute;
            transition: all 0.3s ease;
            font-size: 1.5rem;
        }

        .mobile-menu-btn .close-icon {
            opacity: 0;
            transform: rotate(90deg);
        }

        .mobile-menu-btn.active .menu-icon {
            opacity: 0;
            transform: rotate(90deg);
        }

        .mobile-menu-btn.active .close-icon {
            opacity: 1;
            transform: rotate(0deg);
        }

        /* Desktop Navigation styles */
        /* Desktop Navigation styles */
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            gap: 2rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-shrink: 0;
        }

        .main-nav {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .main-nav ul {
            display: flex;
            align-items: center;
            gap: 1rem;
            list-style: none;
            flex-wrap: nowrap;
        }

        .main-nav a {
            color: white;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            padding: 0.5rem 0.75rem;
            border-radius: 9999px;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        @media (min-width: 1280px) {
            .main-nav a {
                font-size: 0.95rem;
                padding: 0.5rem 1.25rem;
            }
            .main-nav ul {
                gap: 1.5rem;
            }
        }

        .lang-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-left: 1px solid rgba(255, 255, 255, 0.2);
            padding-left: 1.5rem;
            margin-left: 0.5rem;
        }

        .active-link {
            background-color: white;
            color: #161179 !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 1024px) {
            .main-nav a.active-link {
                background-color: rgba(255, 255, 255, 0.15);
                color: white !important;
                border-left: 4px solid white;
                border-radius: 0;
            }
        }


        .lang-btn {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 0.75rem;
            font-weight: bold;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .lang-btn.active-lang {
            background-color: white;
            color: #161179 !important;
            border-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 1024px) {
            .main-nav {
                display: none;
            }
            .mobile-menu-btn {
                display: flex !important;
            }
            .logo-text {
                font-size: 1.1rem;
            }
        }

        /* Mobile Navigation Styles */
        @media (max-width: 1024px) {
            .mobile-menu-btn {
                display: flex !important;
            }

            header {
                position: relative;
            }

            .main-nav {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                background-color: #161179;
                transform: translateY(-110%);
                transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
                z-index: 1001;
                padding-top: 80px;
                padding-bottom: 2rem;
                max-height: 100vh;
                overflow-y: auto;
                display: block !important;
            }

            .main-nav.active {
                transform: translateY(0);
            }

            .main-nav ul {
                flex-direction: column;
                gap: 0;
                padding: 0 1rem;
            }

            .main-nav ul li {
                width: 100%;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .main-nav a {
                padding: 1.25rem;
                font-size: 1.1rem;
                width: 100%;
                border-radius: 0;
                display: block;
            }

            .lang-container {
                border-left: none;
                margin-left: 0;
                padding: 1.5rem;
                justify-content: center;
                border-top: 1px solid rgba(255, 255, 255, 0.2);
            }

            .logo-text {
                font-size: 0.9rem;
            }
        }

        .lang-switcher {
            display: flex;
            gap: 0.5rem;
        }

        .lang-switcher a {
            color: var(--white);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .gallery-section {
            padding: 3rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--primary-color);
            font-size: 2rem;
            position: relative;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        .main-slider {
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow);
            border-radius: 8px;
            overflow: hidden;
        }

        .main-slider .slide {
            position: relative;
            height: 500px;
        }

        .main-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            padding: 1.5rem;
        }

        .slide-info h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .nav-slider .slide {
            height: 100px;
            margin: 0 10px;
            cursor: pointer;
            border-radius: 4px;
            overflow: hidden;
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .nav-slider .slide:hover,
        .nav-slider .slick-current .slide {
            opacity: 1;
            transform: scale(1.05);
        }

        .nav-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-categories {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 2rem 0;
        }

        .category-btn {
            background-color: var(--white);
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .category-btn:hover,
        .category-btn.active {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .slick-prev, .slick-next {
            z-index: 1;
            width: 40px;
            height: 40px;
        }

        .slick-prev {
            left: 15px;
        }

        .slick-next {
            right: 15px;
        }

        .slick-prev:before, .slick-next:before {
            font-size: 30px;
        }

        @media (max-width: 768px) {
            .main-slider .slide {
                height: 350px;
            }

            .nav-slider .slide {
                height: 70px;
            }

            .hover-lift {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .hover-lift:hover {
                transform: translateY(-8px);
            }

            .hover-scale {
                transition: transform 0.3s ease;
            }

            .hover-scale:hover {
                transform: scale(1.05);
            }

            .line-clamp-2 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
            .slider-img { width: 90vw; max-width: 300px; height: auto; }
        }
    </style>

    <!-- Navigation -->
    <header>
        <div class="px-4 md:px-8 max-w-[1600px] mx-auto">
            <div class="header-content">
                <div class="logo">
                    <img class="w-12 h-12 md:w-14 md:h-14 rounded-full border-2 border-white/20" src="/image/logo.png" alt="logo">
                    <div class="logo-text text-lg xl:text-xl font-bold tracking-tight">{{ __('messages.school_name') }}</div>
                </div>
                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
                    <i class="fas fa-bars menu-icon"></i>
                    <i class="fas fa-times close-icon"></i>
                </button>
                <nav id="mainNav" class="main-nav">
                    <ul>
                        <li><a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'active-link' : '' }}">{{ __('messages.home') }}</a></li>
                        <li><a href="{{route('about')}}" class="{{ request()->routeIs('about') ? 'active-link' : '' }}">{{ __('messages.about') }}</a></li>
                        <li><a href="{{route('teachers')}}" class="{{ request()->routeIs('teachers') ? 'active-link' : '' }}">{{ __('messages.teachers') }}</a></li>
                        <li><a href="{{route('subject')}}" class="{{ request()->routeIs('subject') ? 'active-link' : '' }}">{{ __('messages.subjects') }}</a></li>
                        <li><a href="{{route('achievements')}}" class="{{ request()->routeIs('achievements') ? 'active-link' : '' }}">{{ __('messages.achievements') }}</a></li>
                        <li><a href="{{route('news')}}" class="{{ request()->routeIs('news') ? 'active-link' : '' }}">{{ __('messages.news') }}</a></li>
                        <li><a href="{{route('contact')}}" class="{{ request()->routeIs('contact') ? 'active-link' : '' }}">{{ __('messages.contact') }}</a></li>
                        
                        <li class="lang-container">
                            <a href="{{ route('lang.switch', 'uz') }}" 
                               class="lang-btn {{ app()->getLocale() == 'uz' ? 'active-lang' : '' }}">
                                UZ
                            </a>
                            <a href="{{ route('lang.switch', 'ru') }}" 
                               class="lang-btn {{ app()->getLocale() == 'ru' ? 'active-lang' : '' }}">
                                RU
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <script>
        function initNavigation() {
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mainNav = document.getElementById('mainNav');
            if(!mobileMenuBtn || !mainNav) return;
            
            const navLinks = mainNav.querySelectorAll('a');

            // Toggle menu on hamburger click
            const handleMobileToggle = function() {
                mainNav.classList.toggle('active');
                mobileMenuBtn.classList.toggle('active');
                if (mainNav.classList.contains('active')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            };
            
            mobileMenuBtn.removeEventListener('click', handleMobileToggle);
            mobileMenuBtn.addEventListener('click', handleMobileToggle);

            // Close menu when clicking on a link (mobile)
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 1024) {
                        mainNav.classList.remove('active');
                        mobileMenuBtn.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                });
            });

            // Close menu when clicking outside (mobile)
            document.addEventListener('click', function(event) {
                const isClickInsideNav = mainNav.contains(event.target);
                const isClickOnButton = mobileMenuBtn.contains(event.target);

                if (window.innerWidth <= 1024 && !isClickInsideNav && !isClickOnButton && mainNav.classList.contains('active')) {
                    mainNav.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 1024) {
                    mainNav.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        }

        document.addEventListener('DOMContentLoaded', initNavigation);


            // Smooth Language Switch without full page refresh
            document.querySelectorAll('.lang-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    if (this.classList.contains('active-lang')) {
                        e.preventDefault();
                        return;
                    }
                    
                    e.preventDefault();
                    const url = this.getAttribute('href');
                    
                    // Show premium loader
                    const loader = document.getElementById('page-loader');
                    loader.style.display = 'flex';
                    loader.style.opacity = '1';

                    // Use AJAX to change language AND fetch new content
            // Smooth Language Switch without full page refresh
            document.addEventListener('click', function(e) {
                const btn = e.target.closest('.lang-btn');
                if (!btn) return;
                
                if (btn.classList.contains('active-lang')) {
                    e.preventDefault();
                    return;
                }
                
                e.preventDefault();
                const url = btn.getAttribute('href');
                
                // Show premium loader
                const loader = document.getElementById('page-loader');
                if(loader) {
                    loader.style.display = 'flex';
                    loader.style.opacity = '1';
                }

                // Fade out current body
                document.body.style.opacity = '0.5';
                document.body.style.transition = 'opacity 0.3s ease';

                fetch(url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(res => res.json())
                .then(data => {
                    return fetch(window.location.href);
                })
                .then(res => res.text())
                .then(html => {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    
                    // Swap the content
                    document.body.innerHTML = doc.body.innerHTML;
                    document.title = doc.title;
                    
                    // Re-execute scripts
                    const scripts = document.body.querySelectorAll('script');
                    scripts.forEach(oldScript => {
                        const newScript = document.createElement('script');
                        Array.from(oldScript.attributes).forEach(attr => newScript.setAttribute(attr.name, attr.value));
                        if (oldScript.src) {
                            newScript.src = oldScript.src;
                        } else {
                            newScript.textContent = oldScript.textContent;
                        }
                        oldScript.parentNode.replaceChild(newScript, oldScript);
                    });

                    // Re-init core components
                    initNavigation();
                    
                    // Fade back in
                    document.body.style.opacity = '1';
                    
                    // Hide loader
                    setTimeout(() => {
                       const newLoader = document.getElementById('page-loader');
                       if(newLoader) newLoader.style.display = 'none';
                    }, 300);
                })
                .catch(err => {
                    window.location.href = url;
                });
            });
    </script>

    <div id="page-loader" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(22,17,121,0.1); backdrop-filter:blur(5px); z-index:9999; justify-content:center; align-items:center;">
        <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-white"></div>
    </div>
