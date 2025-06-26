<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eksplorasi Destinasi Legendaris - Air Manis Tour</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

    /* Tambahan CSS untuk Mobile */
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
          <a href="/" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-lg relative group">
            Beranda
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-300 group-hover:w-full transition-all duration-300"></span>
          </a>
          <a href="/spots" class="text-cyan-300 font-bold text-lg relative">
            Destinasi
            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-cyan-300"></span>
          </a>
          <a href="/#featured" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-lg relative group">
            Unggulan
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-300 group-hover:w-full transition-all duration-300"></span>
          </a>
          <a href="/#about" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-lg relative group">
            Air Manis
            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-cyan-300 group-hover:w-full transition-all duration-300"></span>
          </a>
          <a href="/#contact" class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-8 py-3 rounded-2xl font-bold hover:shadow-xl hover:shadow-cyan-500/25 transform hover:-translate-y-1 transition-all duration-300">
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
          <a href="/" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-base sm:text-lg py-2 flex items-center space-x-3">
            <span>🏠</span><span>Beranda</span>
          </a>
          <a href="/spots" class="text-cyan-300 font-bold text-base sm:text-lg py-2 flex items-center space-x-3">
            <span>🏖️</span><span>Destinasi</span>
          </a>
          <a href="/#featured" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-base sm:text-lg py-2 flex items-center space-x-3">
            <span>⭐</span><span>Unggulan</span>
          </a>
          <a href="/#about" class="text-white/80 hover:text-cyan-300 transition-colors font-bold text-base sm:text-lg py-2 flex items-center space-x-3">
            <span>🌊</span><span>Air Manis</span>
          </a>
          <a href="/#contact" class="bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-4 sm:px-6 py-3 rounded-xl sm:rounded-2xl font-bold hover:shadow-lg transition-all text-center mt-2 text-base sm:text-lg flex items-center justify-center space-x-2">
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
            <span class="text-white/90 font-bold text-sm sm:text-lg tracking-wide">🌊 EKSPLORASI DESTINASI LEGENDARIS</span>
          </div>

          <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-space-grotesk font-black leading-tight">
            <span class="block text-white mb-2 sm:mb-4">Jelajahi Pesona</span>
            <span class="bg-gradient-to-r from-cyan-200 via-teal-200 to-emerald-200 bg-clip-text text-transparent">
              Air Manis & Padang
            </span>
          </h1>

          <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl text-white/80 max-w-4xl mx-auto leading-relaxed px-4">
            Temukan destinasi legendaris dengan cerita yang mendunia dan keindahan yang tak terlupakan 🏝️
          </p>
        </div>

        <!-- Premium Search Bar -->
        <div class="max-w-3xl mx-auto mb-8 sm:mb-12 px-4">
          <div class="relative">
            <input type="text" id="search-input"
              placeholder="Cari destinasi impian Anda..."
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
            🌊 Semua
          </button>
          <button data-category="pantai" class="filter-btn px-4 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl glass-card text-white/80 hover:text-white hover:bg-white/20 transition-all transform hover:-translate-y-1 font-bold text-sm sm:text-base">
            🏖️ Pantai
          </button>
          <button data-category="gunung" class="filter-btn px-4 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl glass-card text-white/80 hover:text-white hover:bg-white/20 transition-all transform hover:-translate-y-1 font-bold text-sm sm:text-base">
            🏔️ Gunung
          </button>
          <button data-category="kuliner" class="filter-btn px-4 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl glass-card text-white/80 hover:text-white hover:bg-white/20 transition-all transform hover:-translate-y-1 font-bold text-sm sm:text-base">
            🍜 Kuliner
          </button>
          <button data-category="budaya" class="filter-btn px-4 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl glass-card text-white/80 hover:text-white hover:bg-white/20 transition-all transform hover:-translate-y-1 font-bold text-sm sm:text-base">
            🎭 Budaya
          </button>
          <button data-category="belanja" class="filter-btn px-4 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl glass-card text-white/80 hover:text-white hover:bg-white/20 transition-all transform hover:-translate-y-1 font-bold text-sm sm:text-base">
            🛍️ Belanja
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Premium Results Info -->
  <section class="py-6 sm:py-8 relative">
    <div class="max-w-8xl mx-auto px-4 sm:px-6">
      <div class="glass-card rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 sm:gap-6">
          <div class="flex items-center space-x-3 sm:space-x-4">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-xl sm:rounded-2xl flex items-center justify-center">
              <span class="text-white font-bold text-lg sm:text-xl">📊</span>
            </div>
            <div>
              <p class="text-white/80 text-base sm:text-lg">
                Menampilkan <span id="results-count" class="font-black text-cyan-300 text-lg sm:text-xl">{{ $spots->count() }}</span> destinasi
              </p>
              <p class="text-white/60 text-xs sm:text-sm">Pilihan terbaik untuk petualangan Anda</p>
            </div>
          </div>

          <div class="flex items-center space-x-3 sm:space-x-4">
            <div class="w-6 h-6 sm:w-8 sm:h-8 bg-gradient-to-r from-teal-500 to-emerald-500 rounded-lg sm:rounded-xl flex items-center justify-center">
              <span class="text-white text-xs sm:text-sm">⚡</span>
            </div>
            <label class="text-white/80 font-bold text-sm sm:text-base">Urutkan:</label>
            <select id="sort-select" class="px-4 sm:px-6 py-2 sm:py-3 rounded-xl sm:rounded-2xl glass-card text-white bg-white/10 border border-white/20 focus:border-cyan-400 focus:outline-none font-medium text-sm sm:text-base">
              <option value="name" class="bg-slate-800 text-white">Nama A-Z</option>
              <option value="rating" class="bg-slate-800 text-white">Rating Tertinggi</option>
              <option value="price-low" class="bg-slate-800 text-white">Harga Terendah</option>
              <option value="price-high" class="bg-slate-800 text-white">Harga Tertinggi</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Premium Tourist Spots Grid -->
  <section class="py-12 sm:py-20">
    <div class="max-w-8xl mx-auto px-4 sm:px-6">
      <div id="spots-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6 md:gap-8 xl:gap-10">
        @forelse($spots as $spot)
        <a href="{{ route('spots.show', $spot) }}" class="spot-card group"
          data-name="{{ strtolower($spot->name) }}"
          data-location="{{ strtolower($spot->location) }}"
          data-category="{{ $spot->category }}"
          data-rating="{{ $spot->rating }}"
          data-price="{{ $spot->price }}">
          <div class="glass-card rounded-3xl sm:rounded-4xl overflow-hidden hover:bg-white/20 transform hover:-translate-y-2 sm:hover:-translate-y-4 hover:scale-[1.02] sm:hover:scale-105 transition-all duration-500 border border-white/30 h-full flex flex-col">
            <!-- Image Container dengan Aspect Ratio yang Konsisten -->
            <div class="relative w-full pt-[75%]">
              @if($spot->image)
              <img src="{{ asset('storage/' . $spot->image) }}"
                alt="{{ $spot->name }}"
                class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 sm:group-hover:scale-125 transition-transform duration-700">
              @else
              <div class="absolute inset-0 bg-gradient-to-br from-cyan-500 via-teal-500 to-emerald-500 flex items-center justify-center">
                <span class="text-white text-4xl sm:text-5xl lg:text-6xl xl:text-7xl animate-bounce">🏝️</span>
              </div>
              @endif

              @if($spot->is_featured)
              <div class="absolute top-4 sm:top-6 left-4 sm:left-6 bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-xl sm:rounded-2xl text-xs sm:text-sm font-black shadow-xl">
                👑 UNGGULAN
              </div>
              @endif

              <div class="absolute top-4 sm:top-6 right-4 sm:right-6 bg-white/10 backdrop-blur-2xl px-3 sm:px-4 py-1.5 sm:py-2 rounded-xl sm:rounded-2xl border border-white/30">
                <span class="text-yellow-300 font-black text-xs sm:text-sm">⭐ {{ number_format($spot->rating, 1) }}</span>
              </div>

              <!-- Category Badge -->
              <div class="absolute bottom-4 sm:bottom-6 left-4 sm:left-6">
                <div class="bg-black/60 backdrop-blur-sm text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-xl sm:rounded-2xl text-xs sm:text-sm font-bold capitalize border border-white/20">
                  {{ $spot->category }}
                </div>
              </div>

              <!-- Gradient Overlay -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>

            <!-- Content Container -->
            <div class="p-6 sm:p-8 flex-grow flex flex-col justify-between">
              <div class="space-y-2 sm:space-y-3">
                <h3 class="text-xl sm:text-2xl font-space-grotesk font-black text-white line-clamp-2">
                  {{ $spot->name }}
                </h3>
                <p class="text-white/80 text-sm sm:text-base line-clamp-2">
                  {{ $spot->description }}
                </p>
              </div>

              <div class="mt-4 sm:mt-6 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                  <div class="w-8 h-8 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-xl flex items-center justify-center">
                    <span class="text-white text-sm">📍</span>
                  </div>
                  <span class="text-white/80 text-sm sm:text-base line-clamp-1">{{ Str::limit($spot->location, 20) }}</span>
                </div>

                <div class="flex items-center space-x-1">
                  <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-xl flex items-center justify-center">
                    <span class="text-white text-sm">💰</span>
                  </div>
                  <span class="text-white font-bold text-sm sm:text-base">{{ number_format($spot->price, 0, ',', '.') }}</span>
                </div>
              </div>
            </div>
          </div>
        </a>
        @empty
        <div class="col-span-full text-center py-12 glass-card rounded-4xl bg-gradient-to-br from-cyan-900/50 via-teal-900/50 to-emerald-900/50">
          <div class="max-w-md mx-auto px-6">
            <div class="w-20 h-20 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-3xl flex items-center justify-center mx-auto mb-6">
              <span class="text-white text-3xl">🏖️</span>
            </div>
            <h3 class="text-2xl sm:text-3xl font-space-grotesk font-black text-white mb-4">
              Ada Tempat Wisata Menarik?
            </h3>
            <p class="text-white/80 text-base sm:text-lg mb-8">
              Kami sedang mengumpulkan destinasi wisata terbaik di Padang. Nantikan update selanjutnya!
            </p>
            <a href="/#contact" class="inline-flex items-center justify-center bg-gradient-to-r from-cyan-500 to-teal-500 text-white px-8 py-3 rounded-2xl font-bold hover:shadow-xl hover:shadow-cyan-500/25 transform hover:-translate-y-1 transition-all duration-300">
              <span class="mr-2">📞</span>
              Hubungi Kami
            </a>
          </div>
        </div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- No Results Message -->
  <div id="no-results" class="hidden text-center py-12 sm:py-16">
    <div class="glass-card rounded-3xl sm:rounded-4xl p-8 sm:p-12 max-w-lg mx-auto bg-gradient-to-br from-cyan-900/50 via-teal-900/50 to-emerald-900/50">
      <div class="w-20 h-20 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-3xl flex items-center justify-center mx-auto mb-6">
        <span class="text-white text-3xl">🔍</span>
      </div>
      <h3 class="text-2xl sm:text-3xl font-space-grotesk font-black text-white mb-3">
        Tidak Ada Hasil
      </h3>
      <p class="text-white/80 text-base sm:text-lg">
        Coba gunakan kata kunci atau filter yang berbeda
      </p>
    </div>
  </div>

  <!-- Pagination -->
  @if($spots->hasPages())
  <div class="mt-8 sm:mt-12">
    <div class="glass-card rounded-2xl sm:rounded-3xl p-4 sm:p-6 inline-flex mx-auto">
      {{ $spots->links() }}
    </div>
  </div>
  @endif

  <!-- CTA Section -->
  <section class="py-16 bg-gradient-to-r from-orange-500 to-pink-500">
    <div class="container mx-auto px-4 sm:px-6 text-center">
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4">
        Ada Tempat Wisata Menarik? 🏖️
      </h2>
      <p class="text-lg sm:text-xl text-white/90 mb-8">
        Bagikan rekomendasi destinasi terbaikmu dengan travelers lainnya!
      </p>
      <a href="/#contact" class="bg-white text-orange-500 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all inline-block">
        Hubungi Kami
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="col-span-1 md:col-span-2">
          <div class="flex items-center space-x-2 mb-4">
            <div class="w-8 h-8 bg-gradient-to-r from-orange-500 to-pink-500 rounded-xl flex items-center justify-center">
              <span class="text-white font-bold text-lg">A</span>
            </div>
            <span class="font-['Space_Grotesk'] font-bold text-xl">Air Manis Tour</span>
          </div>
          <p class="text-gray-400 mb-6 max-w-md">
            Platform destinasi wisata terlengkap di Kota Padang. Temukan pengalaman tak terlupakan bersama kami.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-orange-500 transition-colors">
              <span>📘</span>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-pink-500 transition-colors">
              <span>📷</span>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-500 transition-colors">
              <span>🐦</span>
            </a>
          </div>
        </div>

        <div>
          <h4 class="font-semibold mb-4">Menu</h4>
          <ul class="space-y-2 text-gray-400">
            <li><a href="/" class="hover:text-orange-400 transition-colors">Beranda</a></li>
            <li><a href="/spots" class="hover:text-orange-400 transition-colors">Destinasi</a></li>
            <li><a href="/#featured" class="hover:text-orange-400 transition-colors">Populer</a></li>
            <li><a href="/#about" class="hover:text-orange-400 transition-colors">Tentang</a></li>
          </ul>
        </div>

        <div>
          <h4 class="font-semibold mb-4">Kontak</h4>
          <ul class="space-y-2 text-gray-400">
            <li class="flex items-center space-x-2">
              <span>📍</span>
              <span>Padang, Sumatra Barat</span>
            </li>
            <li class="flex items-center space-x-2">
              <span>📞</span>
              <span>+62 812-3456-7890</span>
            </li>
            <li class="flex items-center space-x-2">
              <span>✉️</span>
              <span>info@airmanistour.com</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
        <p>&copy; 2024 Air Manis Tour. All rights reserved. Made with ❤️ in Padang</p>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });

    // Search functionality
    const searchInput = document.getElementById('search-input');
    const spotCards = document.querySelectorAll('.spot-card');
    const noResults = document.getElementById('no-results');
    const spotsGrid = document.getElementById('spots-grid');
    const resultsCount = document.getElementById('results-count');

    function updateResultsCount() {
      const visibleCards = Array.from(spotCards).filter(card => !card.classList.contains('hidden'));
      resultsCount.textContent = visibleCards.length;

      if (visibleCards.length === 0) {
        noResults.classList.remove('hidden');
        spotsGrid.classList.add('hidden');
      } else {
        noResults.classList.add('hidden');
        spotsGrid.classList.remove('hidden');
      }
    }

    function filterSpots() {
      const searchTerm = searchInput.value.toLowerCase();
      const activeCategory = document.querySelector('.filter-btn.active').dataset.category;

      spotCards.forEach(card => {
        const name = card.dataset.name;
        const location = card.dataset.location;
        const category = card.dataset.category;

        const matchesSearch = name.includes(searchTerm) || location.includes(searchTerm);
        const matchesCategory = activeCategory === 'all' || category === activeCategory;

        if (matchesSearch && matchesCategory) {
          card.classList.remove('hidden');
        } else {
          card.classList.add('hidden');
        }
      });

      updateResultsCount();
    }

    // Search input
    searchInput.addEventListener('input', filterSpots);

    // Filter buttons
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        // Remove active class from all buttons
        document.querySelectorAll('.filter-btn').forEach(b => {
          b.classList.remove('active');
          b.classList.remove('bg-gradient-to-r', 'from-orange-500', 'to-pink-500', 'text-white');
          b.classList.add('bg-white', 'border-2', 'border-gray-200', 'text-gray-700');
        });

        // Add active class to clicked button
        this.classList.add('active');
        this.classList.remove('bg-white', 'border-2', 'border-gray-200', 'text-gray-700');
        this.classList.add('bg-gradient-to-r', 'from-orange-500', 'to-pink-500', 'text-white');

        filterSpots();
      });
    });

    // Sort functionality
    document.getElementById('sort-select').addEventListener('change', function() {
      const sortType = this.value;
      const container = document.getElementById('spots-grid');
      const cards = Array.from(container.querySelectorAll('.spot-card'));

      cards.sort((a, b) => {
        switch (sortType) {
          case 'name':
            return a.dataset.name.localeCompare(b.dataset.name);
          case 'rating':
            return parseFloat(b.dataset.rating) - parseFloat(a.dataset.rating);
          case 'price-low':
            return parseInt(a.dataset.price || 0) - parseInt(b.dataset.price || 0);
          case 'price-high':
            return parseInt(b.dataset.price || 0) - parseInt(a.dataset.price || 0);
          default:
            return 0;
        }
      });

      // Re-append sorted cards
      cards.forEach(card => container.appendChild(card));
    });

    // Initialize
    updateResultsCount();
  </script>

  <style>
    .line-clamp-2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
  </style>
</body>

</html>