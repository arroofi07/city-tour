<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PadangTour - Explore Padang Like Never Before! ✨</title>
    <meta name="description" content="Discover hidden gems and must-visit destinations in Padang with our modern travel guide">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 font-outfit">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-xl border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-r from-orange-500 to-pink-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-lg">P</span>
                    </div>
                    <span class="font-space-grotesk font-bold text-xl text-gray-900">PadangTour</span>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-900 hover:text-orange-500 transition-colors font-medium">Home</a>
                    <a href="{{ route('spots.index') }}" class="text-gray-600 hover:text-orange-500 transition-colors font-medium">Destinasi</a>
                    <a href="#about" class="text-gray-600 hover:text-orange-500 transition-colors font-medium">About</a>
                    <a href="{{ route('admin.tourist-spots.index') }}" class="bg-gradient-to-r from-orange-500 to-pink-500 text-white px-4 py-2 rounded-xl font-medium hover:shadow-lg transition-all">Admin</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="text-gray-600 hover:text-gray-900">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-16 min-h-screen flex items-center bg-gradient-to-br from-slate-50 via-orange-50 to-pink-50 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-orange-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-yellow-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center space-y-8">
                <div class="space-y-4">
                    <h1 class="text-5xl md:text-7xl font-space-grotesk font-black text-gray-900 leading-tight">
                        Explore
                        <span class="bg-gradient-to-r from-orange-500 via-pink-500 to-purple-500 bg-clip-text text-transparent">
                            Padang
                        </span>
                        <br>Like Never Before
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto font-light">
                        Temukan destinasi tersembunyi, kuliner autentik, dan pengalaman tak terlupakan di kota Padang yang menawan ✨
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="{{ route('spots.index') }}" class="group bg-gradient-to-r from-orange-500 to-pink-500 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:shadow-2xl hover:shadow-orange-500/25 transition-all transform hover:scale-105">
                        <span class="flex items-center space-x-2">
                            <span>Mulai Jelajahi</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#featured" class="bg-white/80 backdrop-blur text-gray-900 px-8 py-4 rounded-2xl font-semibold text-lg border border-gray-200 hover:bg-white hover:shadow-xl transition-all">
                        Lihat Destinasi Populer
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 max-w-md mx-auto pt-12">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">{{ $spots->count() }}+</div>
                        <div class="text-gray-600 font-medium">Destinasi</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">4.9</div>
                        <div class="text-gray-600 font-medium">Rating</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">1K+</div>
                        <div class="text-gray-600 font-medium">Reviews</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($featuredSpots->count() > 0)
    <!-- Featured Destinations -->
    <section id="featured" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-4 mb-16">
                <div class="inline-flex items-center space-x-2 bg-orange-100 text-orange-600 px-4 py-2 rounded-full text-sm font-medium">
                    <span>🔥</span>
                    <span>FEATURED DESTINATIONS</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-space-grotesk font-bold text-gray-900">
                    Destinasi Pilihan
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Tempat-tempat terbaik yang wajib kamu kunjungi di Padang
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredSpots as $spot)
                <div class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        @if($spot->image)
                        <img src="{{ asset('storage/' . $spot->image) }}" alt="{{ $spot->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-orange-400 to-pink-400 flex items-center justify-center">
                            <span class="text-white text-6xl">📍</span>
                        </div>
                        @endif
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-900 px-3 py-1 rounded-full text-sm font-medium">
                            {{ $spot->category }}
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-900 px-3 py-1 rounded-full text-sm font-medium flex items-center space-x-1">
                            <span class="text-yellow-400">⭐</span>
                            <span>{{ $spot->rating }}</span>
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-orange-500 transition-colors">
                                {{ $spot->name }}
                            </h3>
                            <p class="text-gray-600 text-sm mt-1">📍 {{ $spot->location }}</p>
                        </div>

                        <p class="text-gray-600 line-clamp-2">
                            {{ $spot->short_description }}
                        </p>

                        <div class="flex items-center justify-between">
                            <div class="text-lg font-bold text-gray-900">
                                @if($spot->price > 0)
                                Rp {{ number_format($spot->price, 0, ',', '.') }}
                                @else
                                <span class="text-green-600">GRATIS</span>
                                @endif
                            </div>
                            <a href="{{ route('spots.show', $spot) }}" class="bg-gradient-to-r from-orange-500 to-pink-500 text-white px-4 py-2 rounded-xl font-medium hover:shadow-lg transition-all transform hover:scale-105">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
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

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-8">
                <div class="flex items-center justify-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-pink-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-xl">P</span>
                    </div>
                    <span class="font-space-grotesk font-bold text-2xl">PadangTour</span>
                </div>

                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Menjelajahi keindahan Padang dengan cara yang modern dan menyenangkan.
                    Temukan destinasi terbaik dan ciptakan kenangan tak terlupakan! ✨
                </p>

                <div class="flex justify-center space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">Instagram</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">TikTok</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">YouTube</a>
                </div>

                <div class="border-t border-gray-800 pt-8">
                    <p class="text-gray-500">© 2025 PadangTour. Made with ❤️ for travelers</p>
                </div>
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