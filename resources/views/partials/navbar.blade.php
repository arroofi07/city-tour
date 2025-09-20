<!-- Simple Professional Navigation -->
<nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 navbar-transparent">
    <!-- Main Navigation Container -->
    <div class="nav-container">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">

                <!-- Logo Section -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                        <!-- Animated Logo -->
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-teal-400 rounded-2xl blur-md opacity-60 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="relative w-12 h-12 bg-gradient-to-br from-cyan-500 via-teal-500 to-emerald-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <span class="text-white font-black text-xl animate-pulse">🌊</span>
                            </div>
                        </div>
                        <!-- Brand Text -->
                        <div class="flex flex-col">
                            <span class="font-space-grotesk font-black text-2xl text-white tracking-tight group-hover:text-cyan-300 transition-colors duration-300">
                                Air Manis
                            </span>
                            <span class="text-cyan-300 text-xs font-medium tracking-widest uppercase opacity-80">
                                Tour Experience
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-8">
                    <!-- Main Menu Items -->
                    <div class="flex items-center space-x-1">

                        <!-- Beranda -->
                        <a href="{{ route('home') }}"
                           class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                            <span class="nav-link-text">Beranda</span>
                            <span class="nav-link-indicator"></span>
                        </a>

                        <!-- Destinasi Dropdown -->
                        <div class="relative nav-dropdown">
                            <button class="nav-link {{ request()->routeIs('spots.*') ? 'active' : '' }}">
                                <span class="nav-link-text">Destinasi</span>
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200 dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                                <span class="nav-link-indicator"></span>
                            </button>

                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu">
                                <div class="py-2">
                                    <a href="{{ route('spots.index') }}" class="dropdown-item">
                                        <span class="text-lg mr-3">🏖️</span>
                                        <div>
                                            <div class="font-semibold">Semua Destinasi</div>
                                            <div class="text-xs opacity-75">Jelajahi semua spot wisata</div>
                                        </div>
                                    </a>
                                    <div class="border-t border-white/10 my-2"></div>
                                    <a href="{{ route('spots.index') }}?category=pantai" class="dropdown-item">
                                        <span class="text-lg mr-3">🌊</span>
                                        <div>
                                            <div class="font-semibold">Pantai</div>
                                            <div class="text-xs opacity-75">Destinasi pantai eksotis</div>
                                        </div>
                                    </a>
                                    <a href="{{ route('spots.index') }}?category=kuliner" class="dropdown-item">
                                        <span class="text-lg mr-3">🍽️</span>
                                        <div>
                                            <div class="font-semibold">Kuliner</div>
                                            <div class="text-xs opacity-75">Wisata kuliner khas</div>
                                        </div>
                                    </a>
                                    <a href="{{ route('spots.index') }}?category=budaya" class="dropdown-item">
                                        <span class="text-lg mr-3">🎭</span>
                                        <div>
                                            <div class="font-semibold">Budaya</div>
                                            <div class="text-xs opacity-75">Warisan budaya lokal</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Stories -->
                        <a href="{{ route('stories.index') }}"
                           class="nav-link {{ request()->routeIs('stories.*') ? 'active' : '' }}">
                            <span class="nav-link-text">Stories</span>
                            <span class="nav-link-indicator"></span>
                        </a>

                        <!-- Video -->
                        <a href="/#video-showcase"
                           class="nav-link">
                            <span class="nav-link-text">Video</span>
                            <span class="nav-link-indicator"></span>
                        </a>

                        <!-- Galeri -->
                        <a href="{{ route('gallery.index') }}"
                           class="nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                            <span class="nav-link-text">Galeri</span>
                            <span class="nav-link-indicator"></span>
                        </a>

                        <!-- Tentang Dropdown -->
                        <div class="relative nav-dropdown">
                            <button class="nav-link">
                                <span class="nav-link-text">Tentang</span>
                                <svg class="w-4 h-4 ml-1 transition-transform duration-200 dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                                <span class="nav-link-indicator"></span>
                            </button>

                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu">
                                <div class="py-2">
                                    <a href="/#about" class="dropdown-item">
                                        <span class="text-lg mr-3">ℹ️</span>
                                        <div>
                                            <div class="font-semibold">Tentang Air Manis</div>
                                            <div class="text-xs opacity-75">Sejarah dan informasi</div>
                                        </div>
                                    </a>
                                    <a href="/#featured" class="dropdown-item">
                                        <span class="text-lg mr-3">⭐</span>
                                        <div>
                                            <div class="font-semibold">Destinasi Unggulan</div>
                                            <div class="text-xs opacity-75">Spot paling populer</div>
                                        </div>
                                    </a>
                                    <a href="/#contact" class="dropdown-item">
                                        <span class="text-lg mr-3">📞</span>
                                        <div>
                                            <div class="font-semibold">Hubungi Kami</div>
                                            <div class="text-xs opacity-75">Informasi kontak</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <a href="/#contact" class="cta-button">
                        <span>Hubungi Kami</span>
                        <svg class="w-4 h-4 ml-2 cta-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-toggle" class="mobile-menu-btn">
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-dropdown" class="mobile-dropdown">
        <div class="mobile-dropdown-content">
            <div class="mobile-nav-links">
                <a href="{{ route('home') }}" class="mobile-nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <span class="mobile-nav-icon">🏠</span>
                    <span>Beranda</span>
                </a>

                <div class="mobile-nav-group">
                    <button class="mobile-nav-item mobile-dropdown-trigger" data-target="destinasi">
                        <div class="flex items-center">
                            <span class="mobile-nav-icon">🏖️</span>
                            <span>Destinasi</span>
                        </div>
                        <svg class="mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-submenu" id="mobile-destinasi">
                        <a href="{{ route('spots.index') }}" class="mobile-submenu-item">
                            <span class="mobile-submenu-icon">📍</span>
                            <span>Semua Destinasi</span>
                        </a>
                        <a href="{{ route('spots.index') }}?category=pantai" class="mobile-submenu-item">
                            <span class="mobile-submenu-icon">🌊</span>
                            <span>Pantai</span>
                        </a>
                        <a href="{{ route('spots.index') }}?category=kuliner" class="mobile-submenu-item">
                            <span class="mobile-submenu-icon">🍽️</span>
                            <span>Kuliner</span>
                        </a>
                        <a href="{{ route('spots.index') }}?category=budaya" class="mobile-submenu-item">
                            <span class="mobile-submenu-icon">🎭</span>
                            <span>Budaya</span>
                        </a>
                    </div>
                </div>

                <a href="{{ route('stories.index') }}" class="mobile-nav-item {{ request()->routeIs('stories.*') ? 'active' : '' }}">
                    <span class="mobile-nav-icon">📚</span>
                    <span>Stories</span>
                </a>

                <a href="/#video-showcase" class="mobile-nav-item">
                    <span class="mobile-nav-icon">🎥</span>
                    <span>Video</span>
                </a>

                <a href="{{ route('gallery.index') }}" class="mobile-nav-item {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                    <span class="mobile-nav-icon">📸</span>
                    <span>Galeri</span>
                </a>

                <div class="mobile-nav-group">
                    <button class="mobile-nav-item mobile-dropdown-trigger" data-target="tentang">
                        <div class="flex items-center">
                            <span class="mobile-nav-icon">ℹ️</span>
                            <span>Tentang</span>
                        </div>
                        <svg class="mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-submenu" id="mobile-tentang">
                        <a href="/#about" class="mobile-submenu-item">
                            <span class="mobile-submenu-icon">📖</span>
                            <span>Tentang Air Manis</span>
                        </a>
                        <a href="/#featured" class="mobile-submenu-item">
                            <span class="mobile-submenu-icon">⭐</span>
                            <span>Destinasi Unggulan</span>
                        </a>
                        <a href="/#contact" class="mobile-submenu-item">
                            <span class="mobile-submenu-icon">📞</span>
                            <span>Hubungi Kami</span>
                        </a>
                    </div>
                </div>

                <a href="/#contact" class="mobile-nav-item">
                    <span class="mobile-nav-icon">📞</span>
                    <span>Kontak</span>
                </a>
            </div>

            <!-- Mobile CTA -->
            <div class="mobile-cta">
                <a href="/#contact" class="mobile-cta-btn">
                    Hubungi Kami Sekarang
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Navbar Styles -->
<style>
    /* Base Navbar Styles */
    .navbar-transparent {
        background: rgba(15, 23, 42, 0.1);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .navbar-solid {
        background: linear-gradient(135deg, #0f172a 0%, #0e7490 100%);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    /* Desktop Navigation Links */
    .nav-link {
        position: relative;
        display: flex;
        align-items: center;
        padding: 0.625rem 1rem;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 600;
        font-size: 0.95rem;
        letter-spacing: 0.025em;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 0.75rem;
    }

    .nav-link:hover {
        color: #67e8f9;
        background: rgba(255, 255, 255, 0.05);
        transform: translateY(-2px);
    }

    .nav-link.active {
        color: #67e8f9;
        background: rgba(103, 232, 249, 0.1);
    }

    .nav-link-indicator {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, #06b6d4 0%, #14b8a6 100%);
        transition: width 0.3s ease;
    }

    .nav-link:hover .nav-link-indicator,
    .nav-link.active .nav-link-indicator {
        width: 60%;
    }

    /* Desktop Dropdown Styles */
    .nav-dropdown {
        position: relative;
    }

    .dropdown-menu {
        position: absolute;
        top: calc(100% + 0.5rem);
        left: 50%;
        transform: translateX(-50%);
        min-width: 280px;
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.98) 0%, rgba(14, 116, 144, 0.98) 100%);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 1rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        opacity: 0;
        visibility: hidden;
        transform: translateX(-50%) translateY(-10px);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 1000;
    }

    .nav-dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }

    .nav-dropdown:hover .dropdown-arrow {
        transform: rotate(180deg);
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        color: rgba(255, 255, 255, 0.9);
        transition: all 0.2s ease;
        border-radius: 0.5rem;
        margin: 0.25rem;
    }

    .dropdown-item:hover {
        background: rgba(103, 232, 249, 0.1);
        color: #67e8f9;
        transform: translateX(4px);
    }

    /* CTA Button */
    .cta-button {
        display: inline-flex;
        align-items: center;
        background: linear-gradient(135deg, #06b6d4 0%, #14b8a6 100%);
        color: white;
        padding: 0.625rem 1.5rem;
        border-radius: 2rem;
        font-weight: 600;
        font-size: 0.95rem;
        letter-spacing: 0.025em;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 15px rgba(6, 182, 212, 0.3);
    }

    .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(6, 182, 212, 0.4);
        background: linear-gradient(135deg, #0891b2 0%, #0d9488 100%);
    }

    .cta-arrow {
        transition: transform 0.3s ease;
    }

    .cta-button:hover .cta-arrow {
        transform: translateX(4px);
    }

    /* Mobile Menu Button */
    .mobile-menu-btn {
        position: relative;
        width: 3rem;
        height: 3rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .mobile-menu-btn:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(103, 232, 249, 0.5);
    }

    .hamburger-line {
        display: block;
        width: 24px;
        height: 2px;
        background: white;
        margin: 3px 0;
        transition: all 0.3s ease;
        border-radius: 2px;
    }

    .mobile-menu-btn.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .mobile-menu-btn.active .hamburger-line:nth-child(2) {
        opacity: 0;
        transform: translateX(-10px);
    }

    .mobile-menu-btn.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
    }

    /* Mobile Dropdown */
    .mobile-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: linear-gradient(135deg, #0f172a 0%, #0e7490 100%);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        z-index: 999;
    }

    .mobile-dropdown.active {
        max-height: 100vh;
    }

    .mobile-dropdown-content {
        padding: 1rem;
    }

    /* Mobile Navigation Items */
    .mobile-nav-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.875rem 1rem;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        margin-bottom: 0.25rem;
        border: 1px solid transparent;
        cursor: pointer;
        text-decoration: none;
    }

    .mobile-nav-item:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #67e8f9;
        border-color: rgba(103, 232, 249, 0.2);
        transform: translateX(2px);
    }

    .mobile-nav-item.active {
        background: rgba(103, 232, 249, 0.12);
        color: #67e8f9;
        border-color: rgba(103, 232, 249, 0.3);
    }

    .mobile-nav-icon {
        font-size: 1.25rem;
        margin-right: 0.75rem;
        min-width: 1.5rem;
    }

    /* Mobile Dropdown Arrow */
    .mobile-dropdown-arrow {
        width: 1.25rem;
        height: 1.25rem;
        transition: transform 0.3s ease;
    }

    .mobile-dropdown-trigger.active .mobile-dropdown-arrow {
        transform: rotate(180deg);
    }

    /* Mobile Submenu */
    .mobile-submenu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        background: rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        margin: 0.25rem 0;
    }

    .mobile-submenu.active {
        max-height: 300px;
    }

    .mobile-submenu-item {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem 0.75rem 2rem;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.875rem;
        transition: all 0.3s ease;
        border-radius: 0.375rem;
        margin: 0.125rem 0.5rem;
        border: 1px solid transparent;
        cursor: pointer;
        text-decoration: none;
    }

    .mobile-submenu-item:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #67e8f9;
        border-color: rgba(103, 232, 249, 0.2);
        transform: translateX(2px);
    }

    .mobile-submenu-icon {
        font-size: 1rem;
        margin-right: 0.5rem;
        min-width: 1.25rem;
    }

    /* Mobile CTA */
    .mobile-cta {
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .mobile-cta-btn {
        display: block;
        width: 100%;
        text-align: center;
        background: linear-gradient(135deg, #06b6d4 0%, #14b8a6 100%);
        color: white;
        padding: 0.875rem;
        border-radius: 0.75rem;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(6, 182, 212, 0.2);
        cursor: pointer;
        text-decoration: none;
    }

    .mobile-cta-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(6, 182, 212, 0.4);
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .nav-link {
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
        }

        .cta-button {
            padding: 0.5rem 1.25rem;
            font-size: 0.875rem;
        }
    }

    @media (max-width: 768px) {
        .nav-link {
            padding: 0.4rem 0.6rem;
            font-size: 0.8rem;
        }
    }
</style>

<!-- Simple JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Simple navbar initialized');

    const navbar = document.getElementById('navbar');
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileDropdown = document.getElementById('mobile-dropdown');
    const dropdownTriggers = document.querySelectorAll('.mobile-dropdown-trigger');

    // Navbar scroll effect
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        // Add/remove solid background on scroll
        if (currentScroll > 50) {
            navbar.classList.remove('navbar-transparent');
            navbar.classList.add('navbar-solid');
        } else {
            navbar.classList.remove('navbar-solid');
            navbar.classList.add('navbar-transparent');
        }

        lastScroll = currentScroll;
    });

    // Mobile menu toggle
    if (mobileToggle && mobileDropdown) {
        mobileToggle.addEventListener('click', function() {
            console.log('Mobile toggle clicked');

            mobileToggle.classList.toggle('active');
            mobileDropdown.classList.toggle('active');
        });
    }

    // Mobile dropdown functionality
    dropdownTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Dropdown trigger clicked');

            const target = this.getAttribute('data-target');
            const submenu = document.getElementById('mobile-' + target);

            if (submenu) {
                // Close all other submenus
                document.querySelectorAll('.mobile-submenu').forEach(menu => {
                    if (menu !== submenu) {
                        menu.classList.remove('active');
                    }
                });

                document.querySelectorAll('.mobile-dropdown-trigger').forEach(t => {
                    if (t !== this) {
                        t.classList.remove('active');
                    }
                });

                // Toggle current submenu
                this.classList.toggle('active');
                submenu.classList.toggle('active');
            }
        });
    });

    // Close mobile menu on window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            mobileToggle.classList.remove('active');
            mobileDropdown.classList.remove('active');
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offset = navbar.offsetHeight;
                const targetPosition = target.offsetTop - offset;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                if (mobileDropdown.classList.contains('active')) {
                    mobileToggle.classList.remove('active');
                    mobileDropdown.classList.remove('active');
                }
            }
        });
    });
});
</script>