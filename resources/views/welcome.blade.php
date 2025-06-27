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

                <!-- Premium Action Button -->
                <div class="flex justify-center px-4 sm:px-6 mt-8 sm:mt-12">
                    <a href="{{ route('spots.index') }}" class="group bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-xl hover:shadow-cyan-500/25 transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center space-x-3">
                        <span>Jelajahi Semua Destinasi</span>
                        <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
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
    <!-- Featured Spots - REDESIGNED GEN Z 2025 🔥 -->
    <section id="featured" class="py-20 relative overflow-hidden">
        <!-- Epic Background with Floating Elements -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-900/80 via-cyan-900/60 to-teal-900/40 backdrop-blur-lg"></div>
            <div class="absolute top-10 right-20 w-40 h-40 bg-gradient-to-r from-cyan-500/30 to-teal-500/30 rounded-full blur-2xl animate-pulse"></div>
            <div class="absolute bottom-20 left-20 w-60 h-60 bg-gradient-to-r from-teal-500/20 to-emerald-500/20 rounded-full blur-3xl animate-bounce slow"></div>
            <div class="absolute top-1/2 right-1/4 w-32 h-32 bg-gradient-to-r from-emerald-500/25 to-lime-500/25 rounded-full blur-xl animate-ping"></div>

            <!-- Floating Icons -->
            <div class="absolute top-16 left-16 text-4xl animate-float opacity-60">✨</div>
            <div class="absolute bottom-32 right-32 text-3xl animate-bounce opacity-40">🌟</div>
            <div class="absolute top-1/3 left-1/3 text-2xl animate-pulse opacity-50">💫</div>
        </div>

        <div class="max-w-8xl mx-auto px-4 sm:px-6 relative z-10">
            <!-- Epic Section Header -->
            <div class="text-center max-w-4xl mx-auto mb-16 sm:mb-20">
                <!-- Status Badge -->
                <div class="inline-flex items-center glass-card rounded-full px-6 sm:px-8 py-3 sm:py-4 mb-8 group hover:scale-105 transition-all duration-300">
                    <div class="w-3 h-3 bg-gradient-to-r from-cyan-400 to-teal-400 rounded-full mr-3 animate-pulse"></div>
                    <span class="text-white/90 font-bold text-sm sm:text-lg tracking-wider">🌟 SPOT YANG LAGI VIRAL</span>
                    <div class="w-3 h-3 bg-gradient-to-r from-teal-400 to-emerald-400 rounded-full ml-3 animate-pulse"></div>
                </div>

                <!-- Main Title -->
                <h2 class="text-4xl sm:text-6xl md:text-7xl font-space-grotesk font-black mb-6 leading-tight">
                    <span class="block text-white mb-2">Destinasi</span>
                    <span class="bg-gradient-to-r from-cyan-300 via-teal-300 to-emerald-300 bg-clip-text text-transparent animate-pulse">
                        Hits Banget! 🔥
                    </span>
                </h2>

                <!-- Subtitle -->
                <p class="text-xl sm:text-2xl text-white/80 max-w-3xl mx-auto leading-relaxed mb-8">
                    Spot-spot legendaris yang bikin feed Instagram kamu makin aesthetic goals! 📸✨
                </p>

                <!-- Trending Tags -->
                <div class="flex flex-wrap justify-center gap-3">
                    <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-cyan-300 hover:scale-110 transition-transform cursor-pointer">#TrendingNow</span>
                    <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-teal-300 hover:scale-110 transition-transform cursor-pointer">#MustVisit</span>
                    <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-emerald-300 hover:scale-110 transition-transform cursor-pointer">#ContentCreator</span>
                </div>
            </div>

            <!-- Interactive Destination Cards Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 mb-16">
                @foreach($featuredSpots as $index => $spot)
                <div class="group relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-white/10 via-white/5 to-transparent backdrop-blur-lg border border-white/20 hover:border-cyan-400/50 transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl hover:shadow-cyan-500/20">

                    <!-- Image Container with Overlay Effects -->
                    <div class="relative aspect-[4/3] overflow-hidden">
                        @if($spot->image)
                        <img src="{{ asset('storage/' . $spot->image) }}" alt="{{ $spot->name }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-cyan-500 via-teal-500 to-emerald-500 flex items-center justify-center">
                            <span class="text-white text-6xl animate-bounce">📍</span>
                        </div>
                        @endif

                        <!-- Gradient Overlays -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>

                        <!-- Floating Badges -->
                        <div class="absolute top-4 left-4 flex flex-col space-y-2">
                            <div class="glass-card text-white px-3 py-1 rounded-full text-sm font-semibold border border-white/30 flex items-center space-x-1">
                                <span class="text-cyan-300">🏷️</span>
                                <span>{{ $spot->category }}</span>
                            </div>
                            @if($index < 2)
                                <div class="glass-card text-white px-3 py-1 rounded-full text-xs font-bold border border-cyan-400/50 bg-gradient-to-r from-cyan-500/20 to-teal-500/20">
                                <span class="animate-pulse">🔥 TRENDING</span>
                        </div>
                        @endif
                    </div>

                    <!-- Rating Badge -->
                    <div class="absolute top-4 right-4 glass-card text-white px-3 py-2 rounded-full border border-white/30 flex items-center space-x-1 group-hover:scale-110 transition-transform">
                        <span class="text-yellow-400 animate-pulse">⭐</span>
                        <span class="font-bold">{{ $spot->rating }}</span>
                    </div>

                    <!-- Love & Share Buttons -->
                    <div class="absolute top-1/2 right-4 transform -translate-y-1/2 flex flex-col space-y-3 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-x-4 group-hover:translate-x-0">
                        <button class="glass-card p-3 rounded-full hover:scale-110 transition-transform group-hover:bg-red-500/20">
                            <svg class="w-5 h-5 text-red-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </button>
                        <button class="glass-card p-3 rounded-full hover:scale-110 transition-transform group-hover:bg-cyan-500/20">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="p-6 space-y-4">
                    <!-- Header -->
                    <div class="space-y-2">
                        <h3 class="text-xl font-bold text-white group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-cyan-300 group-hover:to-emerald-300 group-hover:bg-clip-text transition-all duration-300">
                            {{ $spot->name }}
                        </h3>
                        <div class="flex items-center space-x-2 text-white/60">
                            <span class="text-cyan-300">📍</span>
                            <span class="text-sm font-medium">{{ $spot->location }}</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-white/80 line-clamp-2 leading-relaxed">
                        {{ $spot->short_description }}
                    </p>

                    <!-- Stats Row -->
                    <div class="flex items-center space-x-4 text-sm">
                        <div class="flex items-center space-x-1">
                            <span class="text-teal-300">👀</span>
                            <span class="text-white/60">{{ rand(100, 999) }}k views</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <span class="text-emerald-300">❤️</span>
                            <span class="text-white/60">{{ rand(50, 200) }}k likes</span>
                        </div>
                    </div>

                    <!-- Price & Action -->
                    <div class="flex items-center justify-between pt-2">
                        <div>
                            @if($spot->price > 0)
                            <div class="text-lg font-bold">
                                <span class="bg-gradient-to-r from-cyan-300 to-emerald-300 bg-clip-text text-transparent">
                                    Rp {{ number_format($spot->price, 0, ',', '.') }}
                                </span>
                            </div>
                            <span class="text-xs text-white/60">per orang</span>
                            @else
                            <div class="text-lg font-bold">
                                <span class="bg-gradient-to-r from-emerald-300 to-lime-300 bg-clip-text text-transparent animate-pulse">
                                    FREE ENTRY! 🎉
                                </span>
                            </div>
                            @endif
                        </div>

                        <a href="{{ route('spots.show', $spot) }}"
                            class="group/btn bg-gradient-to-r from-cyan-500 via-teal-500 to-emerald-500 text-white px-6 py-3 rounded-full font-semibold hover:shadow-xl hover:shadow-cyan-500/25 transition-all transform hover:scale-105 inline-flex items-center space-x-2">
                            <span>Explore 🚀</span>
                            <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Hover Glow Effect -->
                <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-r from-cyan-500/10 via-teal-500/10 to-emerald-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10 blur-xl"></div>
            </div>
            @endforeach
        </div>

        <!-- CTA Section -->
        <div class="text-center">
            <div class="inline-flex flex-col items-center space-y-4">
                <!-- Main CTA Button -->
                <a href="{{ route('spots.index') }}"
                    class="group bg-gradient-to-r from-cyan-500 via-teal-500 to-emerald-500 text-white px-12 py-5 rounded-full font-bold text-lg hover:shadow-2xl hover:shadow-cyan-500/30 transition-all transform hover:scale-105 inline-flex items-center space-x-3">
                    <span>Jelajahi Semua Destinasi 🌟</span>
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>

                <!-- Sub Text -->
                <p class="text-white/60 text-sm">
                    Ada {{ $featuredSpots->count() }}+ destinasi keren lainnya yang siap bikin konten kamu viral! 🔥
                </p>
            </div>
        </div>
        </div>
    </section>
    @endif


    <!-- About Air Manis Section - REDESIGNED GEN Z 2025 ✨ -->
    <section id="about" class="py-16 sm:py-24 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-r from-pink-500/20 to-purple-500/20 rounded-full blur-xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-48 h-48 bg-gradient-to-r from-cyan-500/20 to-teal-500/20 rounded-full blur-2xl animate-bounce slow"></div>
            <div class="absolute top-1/2 left-1/4 w-20 h-20 bg-gradient-to-r from-emerald-500/20 to-lime-500/20 rounded-full blur-lg animate-ping"></div>
        </div>

        <div class="max-w-8xl mx-auto px-4 sm:px-6 relative z-10">
            <!-- Epic Section Title with Interactive Elements -->
            <div class="text-center max-w-4xl mx-auto mb-12 sm:mb-20">
                <div class="inline-flex items-center glass-card rounded-full px-6 sm:px-8 py-3 sm:py-4 mb-8 group hover:scale-105 transition-all duration-300">
                    <div class="w-3 h-3 bg-gradient-to-r from-pink-400 to-purple-400 rounded-full mr-3 animate-pulse"></div>
                    <span class="text-white/90 font-bold text-sm sm:text-lg tracking-wider">🌺 EKSPLORASI LEGENDARIS</span>
                    <div class="w-3 h-3 bg-gradient-to-r from-cyan-400 to-teal-400 rounded-full ml-3 animate-pulse"></div>
                </div>

                <h2 class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-space-grotesk font-black mb-6 sm:mb-8 leading-tight">
                    <span class="block text-white mb-2">Vibes</span>
                    <span class="bg-gradient-to-r from-pink-300 via-purple-300 to-cyan-300 bg-clip-text text-transparent animate-pulse">
                        Air Manis ✨
                    </span>
                </h2>

                <p class="text-xl sm:text-2xl md:text-3xl text-white/80 max-w-3xl mx-auto leading-relaxed">
                    Dimana legenda bertemu aesthetic goals yang limitless! 🔥💫
                </p>

                <!-- Interactive Tags -->
                <div class="flex flex-wrap justify-center gap-3 mt-8">
                    <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-cyan-300 hover:scale-110 transition-transform cursor-pointer">#LegendaryVibes</span>
                    <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-pink-300 hover:scale-110 transition-transform cursor-pointer">#AestheticGoals</span>
                    <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-purple-300 hover:scale-110 transition-transform cursor-pointer">#InstagramWorthy</span>
                    <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-emerald-300 hover:scale-110 transition-transform cursor-pointer">#MainCharacterMoment</span>
                </div>
            </div>



            <!-- Dynamic Stories from Admin -->
            @if($stories->count() > 0)
            @foreach($stories as $index => $story)
            <div class="relative mb-12">
                <!-- Story Card with 3D Effect -->
                <div class="glass-card rounded-[2rem] p-8 sm:p-12 relative overflow-hidden group hover:scale-[1.02] transition-all duration-500 hover:shadow-2xl hover:shadow-cyan-500/20 border border-white/20 hover:border-cyan-400/50">

                    <!-- Animated Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-pink-500/20 via-purple-500/20 to-cyan-500/20 animate-pulse"></div>
                        <div class="absolute top-10 right-10 w-32 h-32 border-2 border-white/20 rounded-full animate-spin slow"></div>
                        <div class="absolute bottom-10 left-10 w-24 h-24 border-2 border-white/20 rounded-full animate-ping"></div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 items-center relative z-10">
                        <!-- Content Side -->
                        <div class="space-y-6">
                            <!-- Category Tag -->
                            <div class="inline-flex items-center space-x-2 glass-card rounded-full px-4 py-2">
                                <span class="text-2xl">📜</span>
                                <span class="text-cyan-300 font-semibold text-sm tracking-wider">LEGENDARY STORY</span>
                            </div>

                            <!-- Title with Gradient -->
                            <h3 class="text-3xl sm:text-4xl md:text-5xl font-space-grotesk font-black leading-tight">
                                <span class="bg-gradient-to-r from-pink-300 via-purple-300 to-cyan-300 bg-clip-text text-transparent">
                                    {{ $story->title }}
                                </span>
                                @if($story->subtitle)
                                <span class="block text-white text-2xl sm:text-3xl mt-2">{{ $story->subtitle }}</span>
                                @endif
                            </h3>

                            <!-- Story Text -->
                            <div class="space-y-4">
                                <div class="text-white/90 text-lg leading-relaxed">
                                    {{ $story->excerpt }}
                                </div>
                                <div class="flex items-center space-x-4 text-sm text-white/60">
                                    <span>📖 {{ $story->read_time }} menit baca</span>
                                    <span>•</span>
                                    <span>✨ Kisah Legendaris</span>
                                </div>
                            </div>

                            <!-- Interactive Elements -->
                            <div class="flex flex-wrap gap-3">
                                <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-pink-300 hover:scale-110 transition-transform cursor-pointer">#LegendaryVibes</span>
                                <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-purple-300 hover:scale-110 transition-transform cursor-pointer">#LocalWisdom</span>
                                <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-cyan-300 hover:scale-110 transition-transform cursor-pointer">#CultureContent</span>
                            </div>

                            <!-- Additional CTA for Stories -->
                            @if($stories->count() > 1)
                            <div class="pt-2">
                                <a href="{{ route('stories.index') }}" class="inline-flex items-center space-x-2 text-purple-300 hover:text-purple-200 transition-colors text-sm font-medium">
                                    <span>Lihat Semua Stories</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </a>
                            </div>
                            @endif

                            <!-- CTA Button -->
                            <div class="pt-4">
                                <a href="{{ route('stories.show', $story) }}" class="group bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-500 text-white px-8 py-4 rounded-full font-bold hover:shadow-xl hover:shadow-emerald-500/25 transform hover:scale-105 transition-all duration-300 inline-flex items-center space-x-3">
                                    <span>Baca Selengkapnya 📖</span>
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Image Side with 3D Effects -->
                        <div class="relative">
                            <!-- Main Image Container -->
                            <div class="relative group/image">
                                <div class="aspect-[4/3] rounded-3xl overflow-hidden bg-gradient-to-br from-pink-500/20 via-purple-500/20 to-cyan-500/20 p-1">
                                    <div class="w-full h-full rounded-3xl overflow-hidden">
                                        @if($story->image_path)
                                        <img src="{{ asset('storage/' . $story->image_path) }}" alt="{{ $story->title }}"
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover/image:scale-110">
                                        @else
                                        <div class="w-full h-full bg-gradient-to-br from-pink-500 via-purple-500 to-cyan-500 flex items-center justify-center">
                                            <span class="text-white text-6xl">📜</span>
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Floating Elements -->
                                <div class="absolute -top-6 -right-6 w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-500 rounded-3xl flex items-center justify-center transform rotate-12 hover:rotate-0 transition-transform duration-500 group-hover:scale-110">
                                    <span class="text-3xl transform -rotate-12 group-hover:rotate-0 transition-transform duration-500">🌊</span>
                                </div>

                                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center transform -rotate-12 hover:rotate-0 transition-transform duration-500 group-hover:scale-110">
                                    <span class="text-2xl transform rotate-12 group-hover:rotate-0 transition-transform duration-500">📿</span>
                                </div>

                                <!-- Glow Effect -->
                                <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-pink-500/20 via-purple-500/20 to-cyan-500/20 blur-xl opacity-0 group-hover/image:opacity-100 transition-opacity duration-500 -z-10"></div>
                            </div>

                            <!-- Floating Stats -->
                            <div class="absolute top-4 left-4 glass-card rounded-2xl p-3 opacity-0 group-hover:opacity-100 transition-all duration-500 transform -translate-y-4 group-hover:translate-y-0">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-white">{{ $index + 1 }}</div>
                                    <div class="text-xs text-white/80">Story</div>
                                </div>
                            </div>

                            <div class="absolute bottom-4 right-4 glass-card rounded-2xl p-3 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-pink-300">✨</div>
                                    <div class="text-xs text-white/80">Legendary</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <!-- Default/Fallback Story -->
            <div class="relative">
                <!-- Story Card with 3D Effect -->
                <div class="glass-card rounded-[2rem] p-8 sm:p-12 relative overflow-hidden group hover:scale-[1.02] transition-all duration-500 hover:shadow-2xl hover:shadow-cyan-500/20 border border-white/20 hover:border-cyan-400/50">

                    <!-- Animated Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-pink-500/20 via-purple-500/20 to-cyan-500/20 animate-pulse"></div>
                        <div class="absolute top-10 right-10 w-32 h-32 border-2 border-white/20 rounded-full animate-spin slow"></div>
                        <div class="absolute bottom-10 left-10 w-24 h-24 border-2 border-white/20 rounded-full animate-ping"></div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 items-center relative z-10">
                        <!-- Content Side -->
                        <div class="space-y-6">
                            <!-- Category Tag -->
                            <div class="inline-flex items-center space-x-2 glass-card rounded-full px-4 py-2">
                                <span class="text-2xl">📜</span>
                                <span class="text-cyan-300 font-semibold text-sm tracking-wider">LEGENDARY STORY</span>
                            </div>

                            <!-- Title with Gradient -->
                            <h3 class="text-3xl sm:text-4xl md:text-5xl font-space-grotesk font-black leading-tight">
                                <span class="bg-gradient-to-r from-pink-300 via-purple-300 to-cyan-300 bg-clip-text text-transparent">
                                    Legenda Air Manis
                                </span>
                                <span class="block text-white text-2xl sm:text-3xl mt-2">Kisah yang Menginspirasi! 🔥</span>
                            </h3>

                            <!-- Story Text -->
                            <div class="space-y-4">
                                <p class="text-white/90 text-lg leading-relaxed">
                                    Temukan kisah-kisah legendaris yang telah menjadi bagian dari sejarah dan budaya Air Manis.
                                    Setiap cerita memiliki makna dan pembelajaran yang mendalam.
                                </p>
                                <p class="text-white/80 text-base leading-relaxed">
                                    Admin dapat menambahkan dan mengelola cerita-cerita legendaris melalui panel admin.
                                </p>
                            </div>

                            <!-- Interactive Elements -->
                            <div class="flex flex-wrap gap-3">
                                <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-pink-300 hover:scale-110 transition-transform cursor-pointer">#ComingSoon</span>
                                <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-purple-300 hover:scale-110 transition-transform cursor-pointer">#AddStories</span>
                                <span class="glass-card px-4 py-2 rounded-full text-sm font-semibold text-cyan-300 hover:scale-110 transition-transform cursor-pointer">#ManageContent</span>
                            </div>
                        </div>

                        <!-- Image Side with 3D Effects -->
                        <div class="relative">
                            <!-- Main Image Container -->
                            <div class="relative group/image">
                                <div class="aspect-[4/3] rounded-3xl overflow-hidden bg-gradient-to-br from-pink-500/20 via-purple-500/20 to-cyan-500/20 p-1">
                                    <div class="w-full h-full rounded-3xl overflow-hidden bg-gradient-to-br from-pink-500 via-purple-500 to-cyan-500 flex items-center justify-center">
                                        <span class="text-white text-6xl">📚</span>
                                    </div>
                                </div>

                                <!-- Floating Elements -->
                                <div class="absolute -top-6 -right-6 w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-500 rounded-3xl flex items-center justify-center transform rotate-12 hover:rotate-0 transition-transform duration-500 group-hover:scale-110">
                                    <span class="text-3xl transform -rotate-12 group-hover:rotate-0 transition-transform duration-500">✨</span>
                                </div>

                                <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center transform -rotate-12 hover:rotate-0 transition-transform duration-500 group-hover:scale-110">
                                    <span class="text-2xl transform rotate-12 group-hover:rotate-0 transition-transform duration-500">📝</span>
                                </div>

                                <!-- Glow Effect -->
                                <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-pink-500/20 via-purple-500/20 to-cyan-500/20 blur-xl opacity-0 group-hover/image:opacity-100 transition-opacity duration-500 -z-10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
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
                    <form class="space-y-6" id="contact-form">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-white font-medium mb-2">Nama Lengkap</label>
                                <input type="text" id="nama" class="w-full px-4 py-3 rounded-xl glass-card text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-cyan-400" placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label class="block text-white font-medium mb-2">Nomor WhatsApp</label>
                                <input type="tel" id="whatsapp" class="w-full px-4 py-3 rounded-xl glass-card text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-cyan-400" placeholder="08123456789">
                            </div>
                        </div>
                        <div>
                            <label class="block text-white font-medium mb-2">Pesan</label>
                            <textarea rows="4" id="pesan" class="w-full px-4 py-3 rounded-xl glass-card text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-cyan-400" placeholder="Apa yang ingin Anda tanyakan?"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="button" onclick="sendToWhatsApp()" class="bg-gradient-to-r from-emerald-500 to-teal-500 text-white px-8 py-4 rounded-2xl font-bold hover:shadow-xl hover:shadow-emerald-500/25 transform hover:-translate-y-1 transition-all inline-flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                </svg>
                                <span>Kirim ke WhatsApp</span>
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
                        <li class="text-white/60">💬 +62 812-3456-7890 (WhatsApp)</li>
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
                <p class="text-white/40">© 2025 Air Manis Tour. Made with YO GROUP DEVELOPER</p>
                <p class="text-white/40">
                    <a href="https://arovi.vercel.app" class="text-blue-300 hover:text-yellow-400 transition-colors">CONTACT DEVELOPER</a>
                </p>
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

        /* Gen Z 2025 Custom Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes slow-bounce {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        @keyframes slow-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-bounce.slow {
            animation: slow-bounce 4s ease-in-out infinite;
        }

        .animate-spin.slow {
            animation: slow-spin 8s linear infinite;
        }

        /* Glass morphism enhanced */
        .glass-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        /* Gradient text animation */
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Hover effects for cards */
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #06b6d4, #14b8a6);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #0891b2, #0d9488);
        }
    </style>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('mobile-menu-active');
            }
        });

        // WhatsApp function
        function sendToWhatsApp() {
            const nama = document.getElementById('nama').value;
            const whatsapp = document.getElementById('whatsapp').value;
            const pesan = document.getElementById('pesan').value;

            // Validasi basic
            if (!nama.trim()) {
                alert('Mohon isi nama lengkap Anda');
                return;
            }

            if (!pesan.trim()) {
                alert('Mohon isi pesan yang ingin dikirim');
                return;
            }

            // Format pesan WhatsApp
            let whatsappMessage = `Halo Air Manis Tour! 🌊\n\n`;
            whatsappMessage += `Nama: ${nama}\n`;

            if (whatsapp.trim()) {
                whatsappMessage += `WhatsApp: ${whatsapp}\n`;
            }

            whatsappMessage += `\nPesan:\n${pesan}\n\n`;
            whatsappMessage += `Terima kasih! 😊`;

            // Nomor WhatsApp tujuan (ganti dengan nomor yang benar)
            const adminWhatsApp = '6281234567890'; // Ganti dengan nomor admin Air Manis Tour

            // Encode message untuk URL
            const encodedMessage = encodeURIComponent(whatsappMessage);

            // Buka WhatsApp
            const whatsappUrl = `https://wa.me/${adminWhatsApp}?text=${encodedMessage}`;
            window.open(whatsappUrl, '_blank');

            // Reset form
            document.getElementById('contact-form').reset();
        }
    </script>
</body>

</html>