<!-- Professional Navigation Component -->
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
                    <button id="mobile-menu-button" class="mobile-menu-button"
                            style="position: relative; width: 3rem; height: 3rem; display: flex; flex-direction: column; justify-content: center; align-items: center; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 0.75rem; cursor: pointer; z-index: 10000;">
                        <span class="hamburger-line" style="display: block; width: 24px; height: 2px; background: white; margin: 3px 0; transition: all 0.3s ease; border-radius: 2px;"></span>
                        <span class="hamburger-line" style="display: block; width: 24px; height: 2px; background: white; margin: 3px 0; transition: all 0.3s ease; border-radius: 2px;"></span>
                        <span class="hamburger-line" style="display: block; width: 24px; height: 2px; background: white; margin: 3px 0; transition: all 0.3s ease; border-radius: 2px;"></span>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="mobile-menu"
         style="position: fixed; top: 0; right: -100%; width: 80%; max-width: 400px; height: 100vh; background: linear-gradient(135deg, #0f172a 0%, #0e7490 100%); transition: right 0.4s ease; z-index: 10001; overflow-y: auto; box-shadow: -10px 0 30px rgba(0, 0, 0, 0.3);">
        <div class="mobile-menu-container">
            <!-- Mobile Header -->
            <div class="mobile-menu-header">
                <div class="flex items-center justify-between p-4 border-b border-white/10">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 via-teal-500 to-emerald-500 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-lg">🌊</span>
                        </div>
                        <div>
                            <span class="font-space-grotesk font-bold text-lg text-white">Air Manis</span>
                            <p class="text-cyan-300 text-xs">Tour Experience</p>
                        </div>
                    </div>
                    <button id="mobile-menu-close" class="text-white/60 hover:text-white p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu Items -->
            <nav class="mobile-nav">
                <a href="{{ route('home') }}"
                   class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    <span class="text-xl mr-3">🏠</span>
                    <span>Beranda</span>
                </a>

                <!-- Mobile Destinasi Accordion -->
                <div class="mobile-nav-accordion">
                    <button class="mobile-nav-link accordion-trigger">
                        <div class="flex items-center">
                            <span class="text-xl mr-3">🏖️</span>
                            <span>Destinasi</span>
                        </div>
                        <svg class="w-5 h-5 accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="accordion-content">
                        <a href="{{ route('spots.index') }}" class="mobile-submenu-link">
                            <span class="text-lg mr-2">📍</span> Semua Destinasi
                        </a>
                        <a href="{{ route('spots.index') }}?category=pantai" class="mobile-submenu-link">
                            <span class="text-lg mr-2">🌊</span> Pantai
                        </a>
                        <a href="{{ route('spots.index') }}?category=kuliner" class="mobile-submenu-link">
                            <span class="text-lg mr-2">🍽️</span> Kuliner
                        </a>
                        <a href="{{ route('spots.index') }}?category=budaya" class="mobile-submenu-link">
                            <span class="text-lg mr-2">🎭</span> Budaya
                        </a>
                    </div>
                </div>

                <a href="{{ route('stories.index') }}"
                   class="mobile-nav-link {{ request()->routeIs('stories.*') ? 'active' : '' }}">
                    <span class="text-xl mr-3">📚</span>
                    <span>Stories</span>
                </a>

                <a href="{{ route('gallery.index') }}"
                   class="mobile-nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                    <span class="text-xl mr-3">📸</span>
                    <span>Galeri</span>
                </a>

                <!-- Mobile Tentang Accordion -->
                <div class="mobile-nav-accordion">
                    <button class="mobile-nav-link accordion-trigger">
                        <div class="flex items-center">
                            <span class="text-xl mr-3">ℹ️</span>
                            <span>Tentang</span>
                        </div>
                        <svg class="w-5 h-5 accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="accordion-content">
                        <a href="/#about" class="mobile-submenu-link">
                            <span class="text-lg mr-2">📖</span> Tentang Air Manis
                        </a>
                        <a href="/#featured" class="mobile-submenu-link">
                            <span class="text-lg mr-2">⭐</span> Destinasi Unggulan
                        </a>
                    </div>
                </div>

                <a href="/#contact" class="mobile-nav-link">
                    <span class="text-xl mr-3">📞</span>
                    <span>Kontak</span>
                </a>
            </nav>

            <!-- Mobile Footer -->
            <div class="mobile-menu-footer">
                <!-- Mobile CTA Button -->
                <div class="p-4">
                    <a href="/#contact" class="mobile-cta-button">
                        Hubungi Kami Sekarang
                    </a>
                </div>

                <!-- Social Links -->
                <div class="flex items-center justify-center space-x-6 p-4 border-t border-white/10">
                <a href="#" class="text-white/60 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12c0-5.523-4.477-10-10-10z"></path>
                    </svg>
                </a>
                <a href="#" class="text-white/60 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"></path>
                    </svg>
                </a>
                <a href="#" class="text-white/60 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                    </svg>
                </a>
                <a href="#" class="text-white/60 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"></path>
                    </svg>
                </a>
                </div>
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

    /* Navigation Links */
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

    /* Dropdown Styles */
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
    .mobile-menu-button {
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
    }

    .mobile-menu-button:hover {
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

    .mobile-menu-button.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .mobile-menu-button.active .hamburger-line:nth-child(2) {
        opacity: 0;
        transform: translateX(-10px);
    }

    .mobile-menu-button.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
    }

    /* Mobile Menu */
    .mobile-menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 80%;
        max-width: 400px;
        height: 100vh;
        background: linear-gradient(135deg, #0f172a 0%, #0e7490 100%);
        transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 9999;
        overflow-y: auto;
        box-shadow: -10px 0 30px rgba(0, 0, 0, 0.3);
    }

    .mobile-menu.active {
        right: 0;
    }

    .mobile-menu-container {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .mobile-menu-header {
        flex-shrink: 0;
    }

    .mobile-nav {
        flex: 1;
        overflow-y: auto;
        padding: 1rem;
        padding-bottom: 0;
    }

    .mobile-nav-link {
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
        position: relative;
        z-index: 1;
    }

    .mobile-nav-link:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #67e8f9;
        border-color: rgba(103, 232, 249, 0.2);
        transform: translateX(2px);
    }

    .mobile-nav-link.active {
        background: rgba(103, 232, 249, 0.12);
        color: #67e8f9;
        border-color: rgba(103, 232, 249, 0.3);
    }

    /* Mobile Accordion */
    .mobile-nav-accordion {
        margin-bottom: 0.25rem;
    }

    .accordion-trigger {
        width: 100%;
        text-align: left;
        background: transparent;
        border: none;
        cursor: pointer;
        outline: none;
        position: relative;
        z-index: 1;
    }

    .accordion-icon {
        transition: transform 0.3s ease;
    }

    .accordion-trigger.active .accordion-icon {
        transform: rotate(180deg);
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        background: rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        margin-top: 0.25rem;
    }

    .accordion-content.active {
        max-height: 300px;
    }

    .mobile-submenu-link {
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
        position: relative;
        z-index: 1;
    }

    .mobile-submenu-link:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #67e8f9;
        border-color: rgba(103, 232, 249, 0.2);
        transform: translateX(2px);
    }


    /* Mobile Footer */
    .mobile-menu-footer {
        flex-shrink: 0;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        margin-top: auto;
    }

    /* Mobile CTA */
    .mobile-cta-button {
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
        position: relative;
        z-index: 1;
    }

    .mobile-cta-button:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(6, 182, 212, 0.4);
    }


    /* Animations */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100%);
        }
        to {
            transform: translateX(0);
        }
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

<!-- Navbar JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing navbar...');

    const navbar = document.getElementById('navbar');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const accordionTriggers = document.querySelectorAll('.accordion-trigger');

    console.log('Elements found:', {
        navbar: !!navbar,
        mobileMenuButton: !!mobileMenuButton,
        mobileMenuClose: !!mobileMenuClose,
        mobileMenu: !!mobileMenu,
        accordionTriggers: accordionTriggers.length
    });

    // Create overlay element (simplified)
    const overlay = document.createElement('div');
    overlay.style.cssText = `
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0);
        pointer-events: none;
        transition: background 0.3s ease;
        z-index: 10000;
    `;
    document.body.appendChild(overlay);

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

        // Hide/show navbar on scroll
        if (currentScroll > lastScroll && currentScroll > 100) {
            navbar.style.transform = 'translateY(-100%)';
        } else {
            navbar.style.transform = 'translateY(0)';
        }

        lastScroll = currentScroll;
    });

    // Simple mobile menu toggle
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Mobile menu button clicked!');

            const currentRight = mobileMenu.style.right;
            console.log('Current right position:', currentRight);

            if (currentRight === '0px' || currentRight === '0') {
                // Close menu
                console.log('Closing menu');
                mobileMenu.style.right = '-100%';
                overlay.style.background = 'rgba(0, 0, 0, 0)';
                overlay.style.pointerEvents = 'none';
                document.body.style.overflow = '';
            } else {
                // Open menu
                console.log('Opening menu');
                mobileMenu.style.right = '0';
                overlay.style.background = 'rgba(0, 0, 0, 0.5)';
                overlay.style.pointerEvents = 'auto';
                document.body.style.overflow = 'hidden';
            }
        });
    }

    // Close button functionality
    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', function() {
            console.log('Close button clicked');
            mobileMenu.style.right = '-100%';
            overlay.style.background = 'rgba(0, 0, 0, 0)';
            overlay.style.pointerEvents = 'none';
            document.body.style.overflow = '';
        });
    }

    // Overlay click to close
    overlay.addEventListener('click', function() {
        console.log('Overlay clicked');
        mobileMenu.style.right = '-100%';
        overlay.style.background = 'rgba(0, 0, 0, 0)';
        overlay.style.pointerEvents = 'none';
        document.body.style.overflow = '';
    });

    // Mobile accordion functionality
    accordionTriggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            console.log('Accordion clicked');

            const accordion = trigger.parentElement;
            const content = accordion.querySelector('.accordion-content');
            const isActive = trigger.classList.contains('active');

            // Close all accordions
            accordionTriggers.forEach(t => {
                t.classList.remove('active');
                const c = t.parentElement.querySelector('.accordion-content');
                if (c) c.classList.remove('active');
            });

            // Open clicked accordion if it was closed
            if (!isActive && content) {
                trigger.classList.add('active');
                content.classList.add('active');
            }
        });
    });

    // Close mobile menu on window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            closeMobileMenu();
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
                if (mobileMenu.classList.contains('active')) {
                    closeMobileMenu();
                }
            }
        });
    });

});
</script>