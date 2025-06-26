<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Air Manis Tour - Jelajahi Keindahan Pantai Legendaris Padang 🌊</title>
    <meta name="description" content="Temukan pesona Pantai Air Manis, rumah dari batu Malin Kundang dan keindahan alam yang menakjubkan">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .animate-wave-gentle {
            animation: wave-gentle 6s ease-in-out infinite;
        }

        @keyframes wave-gentle {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .backdrop-blur-2xl {
            backdrop-filter: blur(40px);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        @media (max-width: 640px) {
            .mobile-menu-active {
                display: block;
                animation: slideDown 0.3s ease-out;
            }

            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-900 via-cyan-900 to-teal-900 font-outfit text-white min-h-screen">
    <!-- Premium Navigation -->
    <nav class="fixed top-0 w-full bg-white/10 backdrop-blur-2xl z-50 border-b border-white/20">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 py-3 sm:py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="flex items-center space-x-2 sm:space-x-3">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-r from-cyan-500 via-teal-500 to-emerald-500 rounded-2xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-black text-lg sm:text-xl">🌊</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-space-grotesk font-black text-xl sm:text-2xl text-white">Air Manis Tour</span>
                        <span class="text-cyan-300 text-[10px] sm:text-xs font-medium tracking-wider">LEGENDARY BEACH EXPERIENCE</span>
                    </div>
                </a>

                <div class="hidden md:flex items-center space-x-10">
                    <a href="/" class="text-cyan-300 font-bold text-lg relative">
                        Beranda
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-cyan-300"></span>
                    </a>
                    <a href="/spots" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-lg relative group">
                        Destinasi
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-300 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#featured" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-lg relative group">
                        Unggulan
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-300 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#about" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-lg relative group">
                        Air Manis
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-300 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#contact" class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-8 py-3 rounded-2xl font-bold hover:shadow-xl hover:shadow-cyan-500/25 transform hover:-translate-y-1 transition-all duration-300">
                        Kontak Kami
                    </a>
                </div>

                <!-- Enhanced Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white/80 hover:text-white p-3 rounded-xl bg-white/10 backdrop-blur-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Enhanced Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4 pt-2">
                <div class="flex flex-col space-y-3 glass-card rounded-2xl p-4 sm:p-6 mt-2">
                    <a href="/" class="text-cyan-300 font-bold text-base sm:text-lg py-2 flex items-center space-x-3">
                        <span>🏠</span><span>Beranda</span>
                    </a>
                    <a href="/spots" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-base sm:text-lg py-2 flex items-center space-x-3">
                        <span>🏖️</span><span>Destinasi</span>
                    </a>
                    <a href="#featured" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-base sm:text-lg py-2 flex items-center space-x-3">
                        <span>⭐</span><span>Unggulan</span>
                    </a>
                    <a href="#about" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-base sm:text-lg py-2 flex items-center space-x-3">
                        <span>🌊</span><span>Air Manis</span>
                    </a>
                    <a href="#contact" class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-4 sm:px-6 py-3 rounded-xl sm:rounded-2xl font-bold hover:shadow-lg transition-all text-center mt-2 text-base sm:text-lg flex items-center justify-center space-x-2">
                        <span>📞</span><span>Kontak Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Epic Hero Section -->
    <section class="pt-24 sm:pt-28 pb-12 sm:pb-16 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute bottom-0 w-full h-40 overflow-hidden">
                <svg viewBox="0 0 1200 120" fill="none" class="w-full h-full animate-wave-gentle">
                    <path d="M0,60 C200,100 400,20 600,60 C800,100 1000,20 1200,60 L1200,120 L0,120 Z" fill="rgba(6, 182, 212, 0.2)" />
                </svg>
            </div>
        </div>

        <div class="max-w-8xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="text-center max-w-6xl mx-auto">
                <!-- Epic Title -->
                <div class="space-y-4 sm:space-y-6 mb-8 sm:mb-12">
                    <div class="inline-flex items-center glass-card rounded-full px-4 sm:px-8 py-2 sm:py-4 mb-6 sm:mb-8">
                        <div class="w-2 sm:w-3 h-2 sm:h-3 bg-cyan-400 rounded-full mr-2 sm:mr-3 animate-pulse"></div>
                        <span class="text-white/90 font-bold text-sm sm:text-lg tracking-wide">🌊 DESTINASI LEGENDARIS PADANG</span>
                    </div>

                    <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-space-grotesk font-black leading-tight">
                        <span class="block text-white mb-2 sm:mb-4">Jelajahi Pesona</span>
                        <span class="bg-gradient-to-r from-cyan-200 via-teal-200 to-emerald-200 bg-clip-text text-transparent">
                            Pantai Air Manis
                        </span>
                    </h1>

                    <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl text-white/80 max-w-4xl mx-auto leading-relaxed px-4">
                        Temukan keajaiban Batu Malin Kundang dan keindahan pantai yang menakjubkan 🏝️
                    </p>
                </div>

                <!-- Premium Search Bar -->
                <div class="max-w-3xl mx-auto mb-8 sm:mb-12 px-4">
                    <div class="relative">
                        <input type="text" id="search-input"
                            placeholder="Cari spot foto terbaik di Air Manis..."
                            class="w-full px-6 sm:px-8 py-4 sm:py-6 rounded-2xl sm:rounded-3xl glass-card text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-cyan-400 text-base sm:text-xl pl-14 sm:pl-16 font-medium">
                        <div class="absolute left-4 sm:left-6 top-1/2 transform -translate-y-1/2">
                            <div class="w-6 h-6 sm:w-8 sm:h-8 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Premium Filter Tabs -->
                <div class="flex flex-wrap justify-center gap-2 sm:gap-4 px-2 sm:px-4">
                    <button data-category="all" class="filter-btn active px-4 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl bg-gradient-to-r from-cyan-500 to-teal-500 text-white font-bold hover:shadow-xl hover:shadow-cyan-500/25 transition-all transform hover:-translate-y-1 text-sm sm:text-base">
                        🌊 Semua Spot
                    </button>
                    <button data-category="foto" class="filter-btn px-4 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl glass-card text-white/80 hover:text-white hover:bg-white/20 transition-all transform hover:-translate-y-1 font-bold text-sm sm:text-base">
                        📸 Spot Foto
                    </button>
                    <button data-category="sejarah" class="filter-btn px-4 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl glass-card text-white/80 hover:text-white hover:bg-white/20 transition-all transform hover:-translate-y-1 font-bold text-sm sm:text-base">
                        🏛️ Situs Sejarah
                    </button>
                    <button data-category="kuliner" class="filter-btn px-4 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl glass-card text-white/80 hover:text-white hover:bg-white/20 transition-all transform hover:-translate-y-1 font-bold text-sm sm:text-base">
                        🍜 Kuliner
                    </button>
                    <button data-category="aktivitas" class="filter-btn px-4 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl glass-card text-white/80 hover:text-white hover:bg-white/20 transition-all transform hover:-translate-y-1 font-bold text-sm sm:text-base">
                        🏄‍♂️ Aktivitas
                    </button>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-4 gap-4 sm:gap-8 max-w-4xl mx-auto mt-16 sm:mt-20">
                    <div class="glass-card rounded-2xl p-4 sm:p-6">
                        <div class="text-3xl sm:text-4xl font-bold text-cyan-300">10+</div>
                        <div class="text-white/80 font-medium text-sm sm:text-base">Spot Foto</div>
                    </div>
                    <div class="glass-card rounded-2xl p-4 sm:p-6">
                        <div class="text-3xl sm:text-4xl font-bold text-cyan-300">4.9</div>
                        <div class="text-white/80 font-medium text-sm sm:text-base">Rating</div>
                    </div>
                    <div class="glass-card rounded-2xl p-4 sm:p-6">
                        <div class="text-3xl sm:text-4xl font-bold text-cyan-300">5K+</div>
                        <div class="text-white/80 font-medium text-sm sm:text-base">Pengunjung</div>
                    </div>
                    <div class="glass-card rounded-2xl p-4 sm:p-6">
                        <div class="text-3xl sm:text-4xl font-bold text-cyan-300">3+</div>
                        <div class="text-white/80 font-medium text-sm sm:text-base">Kuliner</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($featuredSpots->count() > 0)
    <!-- Featured Spots -->
    <section id="featured" class="py-20 bg-slate-900/50 backdrop-blur-lg">
        <div class="max-w-8xl mx-auto px-4 sm:px-6">
            <div class="text-center space-y-4 mb-16">
                <div class="inline-flex items-center glass-card rounded-full px-4 sm:px-8 py-2 sm:py-4">
                    <div class="w-2 sm:w-3 h-2 sm:h-3 bg-cyan-400 rounded-full mr-2 sm:mr-3 animate-pulse"></div>
                    <span class="text-white/90 font-bold text-sm sm:text-lg tracking-wide">⭐ SPOT UNGGULAN</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-space-grotesk font-bold text-white">
                    Spot Legendaris
                </h2>
                <p class="text-xl text-white/80 max-w-2xl mx-auto">
                    Lokasi ikonik yang wajib kamu kunjungi di Air Manis
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredSpots as $spot)
                <div class="group glass-card rounded-3xl overflow-hidden border border-white/10 hover:border-cyan-500/50 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        @if($spot->image)
                        <img src="{{ asset('storage/' . $spot->image) }}" alt="{{ $spot->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-cyan-500 to-teal-500 flex items-center justify-center">
                            <span class="text-white text-6xl">📍</span>
                        </div>
                        @endif
                        <div class="absolute top-4 left-4 bg-white/10 backdrop-blur-sm text-white px-3 py-1 rounded-full text-sm font-medium border border-white/20">
                            {{ $spot->category }}
                        </div>
                        <div class="absolute top-4 right-4 bg-white/10 backdrop-blur-sm text-white px-3 py-1 rounded-full text-sm font-medium border border-white/20 flex items-center space-x-1">
                            <span class="text-yellow-400">⭐</span>
                            <span>{{ $spot->rating }}</span>
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <div>
                            <h3 class="text-xl font-bold text-white group-hover:text-cyan-300 transition-colors">
                                {{ $spot->name }}
                            </h3>
                            <p class="text-white/60 text-sm mt-1">📍 {{ $spot->location }}</p>
                        </div>

                        <p class="text-white/80 line-clamp-2">
                            {{ $spot->short_description }}
                        </p>

                        <div class="flex items-center justify-between">
                            <div class="text-lg font-bold">
                                @if($spot->price > 0)
                                <span class="text-cyan-300">Rp {{ number_format($spot->price, 0, ',', '.') }}</span>
                                @else
                                <span class="text-emerald-400">GRATIS</span>
                                @endif
                            </div>
                            <a href="{{ route('spots.show', $spot) }}" class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-4 py-2 rounded-xl font-medium hover:shadow-lg hover:shadow-cyan-500/25 transition-all transform hover:scale-105">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('spots.index') }}" class="inline-flex items-center space-x-2 bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:shadow-xl hover:shadow-cyan-500/25 transition-all transform hover:scale-105">
                    <span>Lihat Semua Spot</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    @endif

    @if($spots->count() > 0)
    <!-- Popular Destinations -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-4 mb-16">
                <div class="inline-flex items-center space-x-2 bg-pink-100 text-pink-600 px-4 py-2 rounded-full text-sm font-medium">
                    <span>🚀</span>
                    <span>TRENDING NOW</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-space-grotesk font-bold text-gray-900">
                    Destinasi Populer
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Tempat favorit yang paling banyak dikunjungi wisatawan
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($spots as $spot)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative aspect-square overflow-hidden">
                        @if($spot->image)
                        <img src="{{ asset('storage/' . $spot->image) }}" alt="{{ $spot->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-orange-400 to-pink-400 flex items-center justify-center">
                            <span class="text-white text-4xl">📍</span>
                        </div>
                        @endif
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="font-bold text-lg">{{ $spot->name }}</h3>
                            <p class="text-sm opacity-90">{{ $spot->location }}</p>
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-900 px-2 py-1 rounded-lg text-xs font-medium flex items-center space-x-1">
                            <span class="text-yellow-400">⭐</span>
                            <span>{{ $spot->rating }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('spots.index') }}" class="bg-gradient-to-r from-orange-500 to-pink-500 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:shadow-xl hover:shadow-orange-500/25 transition-all transform hover:scale-105">
                    Lihat Semua Destinasi
                </a>
            </div>
        </div>
    </section>
    @endif

    <!-- Air Manis Section -->
    <section id="about" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 w-full h-40 overflow-hidden rotate-180">
                <svg viewBox="0 0 1200 120" fill="none" class="w-full h-full animate-wave-gentle">
                    <path d="M0,60 C200,100 400,20 600,60 C800,100 1000,20 1200,60 L1200,120 L0,120 Z" fill="rgba(6, 182, 212, 0.2)" />
                </svg>
            </div>
        </div>

        <div class="max-w-8xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center glass-card rounded-full px-4 sm:px-8 py-2 sm:py-4">
                        <div class="w-2 sm:w-3 h-2 sm:h-3 bg-cyan-400 rounded-full mr-2 sm:mr-3 animate-pulse"></div>
                        <span class="text-white/90 font-bold text-sm sm:text-lg tracking-wide">🏖️ TENTANG AIR MANIS</span>
                    </div>

                    <h2 class="text-4xl lg:text-5xl font-space-grotesk font-bold text-white leading-tight">
                        Pantai Legendaris dengan
                        <span class="bg-gradient-to-r from-cyan-200 via-teal-200 to-emerald-200 bg-clip-text text-transparent">
                            Cerita yang Mendunia
                        </span>
                    </h2>

                    <div class="prose prose-lg text-white/80 max-w-none space-y-6">
                        <p>
                            Air Manis adalah salah satu pantai paling legendaris di Padang, terkenal dengan kisah Malin Kundang yang mendunia. Pantai ini menyimpan batu karang berbentuk kapal yang dipercaya sebagai kapal Malin Kundang yang telah dikutuk menjadi batu.
                        </p>
                        <p>
                            Selain nilai sejarah dan budayanya, Air Manis juga menawarkan pemandangan pantai yang menakjubkan, dengan pasir putih yang lembut dan air laut yang jernih. Pengunjung dapat menikmati berbagai aktivitas seperti berenang, berfoto, atau sekadar menikmati sunset yang memukau.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6">
                        <div class="glass-card rounded-2xl p-4 sm:p-6 text-center">
                            <div class="text-3xl sm:text-4xl font-bold text-cyan-300 mb-1">1.5km</div>
                            <div class="text-white/80 font-medium text-sm">Panjang Pantai</div>
                        </div>
                        <div class="glass-card rounded-2xl p-4 sm:p-6 text-center">
                            <div class="text-3xl sm:text-4xl font-bold text-cyan-300 mb-1">1819</div>
                            <div class="text-white/80 font-medium text-sm">Tahun Legenda</div>
                        </div>
                        <div class="glass-card rounded-2xl p-4 sm:p-6 text-center">
                            <div class="text-3xl sm:text-4xl font-bold text-cyan-300 mb-1">24/7</div>
                            <div class="text-white/80 font-medium text-sm">Jam Buka</div>
                        </div>
                        <div class="glass-card rounded-2xl p-4 sm:p-6 text-center">
                            <div class="text-3xl sm:text-4xl font-bold text-cyan-300 mb-1">500+</div>
                            <div class="text-white/80 font-medium text-sm">Review/Bulan</div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-6">
                        <a href="#contact" class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-8 py-4 rounded-2xl font-bold hover:shadow-xl hover:shadow-cyan-500/25 transform hover:-translate-y-1 transition-all text-center">
                            Hubungi Guide
                        </a>
                        <a href="https://maps.google.com" target="_blank" class="glass-card text-white px-8 py-4 rounded-2xl font-bold hover:bg-white/20 transition-all text-center inline-flex items-center justify-center space-x-2">
                            <span>Buka di Maps</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:gap-6">
                    <div class="space-y-4 sm:space-y-6 pt-12">
                        <div class="glass-card rounded-2xl aspect-[4/5] overflow-hidden">
                            <img src="https://source.unsplash.com/random/600x800?beach" alt="Air Manis Beach 1" class="w-full h-full object-cover">
                        </div>
                        <div class="glass-card rounded-2xl aspect-square overflow-hidden">
                            <img src="https://source.unsplash.com/random/600x600?sunset+beach" alt="Air Manis Beach 2" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="space-y-4 sm:space-y-6">
                        <div class="glass-card rounded-2xl aspect-square overflow-hidden">
                            <img src="https://source.unsplash.com/random/600x600?rock+beach" alt="Air Manis Beach 3" class="w-full h-full object-cover">
                        </div>
                        <div class="glass-card rounded-2xl aspect-[4/5] overflow-hidden">
                            <img src="https://source.unsplash.com/random/600x800?tropical+beach" alt="Air Manis Beach 4" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 relative overflow-hidden">
        <div class="max-w-8xl mx-auto px-4 sm:px-6">
            <div class="text-center space-y-4 mb-16">
                <div class="inline-flex items-center glass-card rounded-full px-4 sm:px-8 py-2 sm:py-4">
                    <div class="w-2 sm:w-3 h-2 sm:h-3 bg-cyan-400 rounded-full mr-2 sm:mr-3 animate-pulse"></div>
                    <span class="text-white/90 font-bold text-sm sm:text-lg tracking-wide">📞 HUBUNGI KAMI</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-space-grotesk font-bold text-white">
                    Butuh Informasi?
                </h2>
                <p class="text-xl text-white/80 max-w-2xl mx-auto">
                    Tim kami siap membantu merencanakan perjalanan terbaik Anda
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="glass-card rounded-3xl p-6 sm:p-8 md:p-12">
                    <form class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-white font-medium mb-2">Nama Lengkap</label>
                                <input type="text" class="w-full px-4 py-3 rounded-xl glass-card text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-cyan-400" placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label class="block text-white font-medium mb-2">Email</label>
                                <input type="email" class="w-full px-4 py-3 rounded-xl glass-card text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-cyan-400" placeholder="email@example.com">
                            </div>
                        </div>
                        <div>
                            <label class="block text-white font-medium mb-2">Pesan</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-xl glass-card text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-cyan-400" placeholder="Apa yang ingin Anda tanyakan?"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-8 py-4 rounded-2xl font-bold hover:shadow-xl hover:shadow-cyan-500/25 transform hover:-translate-y-1 transition-all inline-flex items-center space-x-2">
                                <span>Kirim Pesan</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Premium Footer -->
    <footer class="py-12 sm:py-16 relative overflow-hidden">
        <div class="max-w-8xl mx-auto px-4 sm:px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
                <div class="space-y-4">
                    <a href="/" class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gradient-to-r from-cyan-500 via-teal-500 to-emerald-500 rounded-xl flex items-center justify-center">
                            <span class="text-white font-black text-lg">🌊</span>
                        </div>
                        <span class="font-space-grotesk font-bold text-xl text-white">Air Manis Tour</span>
                    </a>
                    <p class="text-white/60">
                        Jelajahi keindahan Pantai Air Manis dengan cara yang modern dan menyenangkan.
                        Temukan spot terbaik dan ciptakan kenangan tak terlupakan! ✨
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-white mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-white/60 hover:text-cyan-300 transition-colors">Beranda</a></li>
                        <li><a href="/spots" class="text-white/60 hover:text-cyan-300 transition-colors">Destinasi</a></li>
                        <li><a href="#featured" class="text-white/60 hover:text-cyan-300 transition-colors">Unggulan</a></li>
                        <li><a href="#about" class="text-white/60 hover:text-cyan-300 transition-colors">Tentang</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-white mb-4">Kontak</h3>
                    <ul class="space-y-2">
                        <li class="text-white/60">📍 Pantai Air Manis, Padang</li>
                        <li class="text-white/60">📱 +62 812-3456-7890</li>
                        <li class="text-white/60">📧 info@airmanistour.com</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-white mb-4">Social Media</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white/60 hover:text-cyan-300 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12c0-5.523-4.477-10-10-10z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-white/60 hover:text-cyan-300 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-white/60 hover:text-cyan-300 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-white/60 hover:text-cyan-300 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M21.593 7.203a2.506 2.506 0 00-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 00-1.766 1.778C2 8.769 2 12 2 12s0 3.231.437 4.797a2.506 2.506 0 001.767 1.763C5.736 18.993 12 19 12 19s6.264.007 7.831-.404a2.506 2.506 0 001.767-1.763C22 15.231 22 12 22 12s0-3.231-.437-4.797z"></path>
                                <path fill="currentColor" d="M9.75 15.5V8.5l6.5 3.5-6.5 3.5z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/10 mt-12 pt-8 text-center">
                <p class="text-white/40">© 2025 Air Manis Tour. Made with ❤️ for travelers</p>
            </div>
        </div>
    </footer>

    <style>
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .font-outfit {
            font-family: 'Outfit', sans-serif;
        }

        .font-space-grotesk {
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>
</body>

</html>