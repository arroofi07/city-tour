<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $spot->name }} - Destinasi Legendaris Air Manis Tour</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    .glass-card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .backdrop-blur-2xl {
      backdrop-filter: blur(40px);
    }

    .animate-wave-gentle {
      animation: wave-gentle 8s ease-in-out infinite;
    }

    @keyframes wave-gentle {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-15px);
      }
    }

    .rounded-4xl {
      border-radius: 2rem;
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

  <!-- Epic Hero Image -->
  <section class="pt-16 sm:pt-20 relative h-[60vh] sm:h-[80vh] overflow-hidden">
    @if($spot->image)
    <img src="{{ asset('storage/' . $spot->image) }}"
      alt="{{ $spot->name }}"
      class="w-full h-full object-cover">
    @else
    <div class="w-full h-full bg-gradient-to-br from-cyan-500 via-teal-500 to-emerald-500 flex items-center justify-center">
      <span class="text-white text-6xl sm:text-8xl lg:text-9xl xl:text-[12rem] animate-wave-gentle">🏝️</span>
    </div>
    @endif

    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

    <!-- Enhanced Breadcrumb -->
    <div class="absolute top-20 sm:top-28 left-0 w-full z-30">
      <div class="max-w-8xl mx-auto px-4 sm:px-6">
        <nav class="glass-card rounded-xl sm:rounded-2xl px-4 sm:px-6 py-2 sm:py-3 inline-flex items-center space-x-2 sm:space-x-3 text-white/90 text-xs sm:text-sm font-medium">
          <a href="/" class="hover:text-cyan-300 transition-colors">🏠 Beranda</a>
          <span class="text-white/60">•</span>
          <a href="/spots" class="hover:text-cyan-300 transition-colors">🏖️ Destinasi</a>
          <span class="text-white/60">•</span>
          <span class="text-cyan-300 font-bold">{{ Str::limit($spot->name, 20) }}</span>
        </nav>
      </div>
    </div>

    <!-- Epic Title Overlay -->
    <div class="absolute bottom-0 left-0 w-full p-4 sm:p-6 md:p-8 lg:p-12 z-20">
      <div class="max-w-8xl mx-auto">
        <div class="max-w-5xl space-y-4 sm:space-y-8">
          @if($spot->is_featured)
          <div class="inline-flex items-center bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-xl sm:rounded-2xl text-sm sm:text-base font-black shadow-xl">
            <span class="text-lg sm:text-xl mr-2 sm:mr-3">👑</span>
            <span>DESTINASI UNGGULAN</span>
          </div>
          @endif

          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-space-grotesk font-black text-white leading-tight drop-shadow-2xl">
            {{ $spot->name }}
          </h1>

          <!-- Premium Stats Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4 md:gap-6">
            <div class="glass-card rounded-xl sm:rounded-2xl px-4 sm:px-6 py-3 sm:py-4 flex items-center space-x-3 sm:space-x-4">
              <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-xl sm:rounded-2xl flex items-center justify-center">
                <span class="text-white text-lg sm:text-xl">📍</span>
              </div>
              <div>
                <p class="text-white/60 text-xs sm:text-sm font-medium">Lokasi</p>
                <p class="text-white font-bold text-base sm:text-lg">{{ Str::limit($spot->location, 20) }}</p>
              </div>
            </div>

            <div class="glass-card rounded-xl sm:rounded-2xl px-4 sm:px-6 py-3 sm:py-4 flex items-center space-x-3 sm:space-x-4">
              <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-xl sm:rounded-2xl flex items-center justify-center">
                <span class="text-white text-lg sm:text-xl">⭐</span>
              </div>
              <div>
                <p class="text-white/60 text-xs sm:text-sm font-medium">Rating</p>
                <p class="text-white font-bold text-base sm:text-lg">{{ number_format($spot->rating, 1) }} / 5.0</p>
              </div>
            </div>

            <div class="glass-card rounded-xl sm:rounded-2xl px-4 sm:px-6 py-3 sm:py-4 flex items-center space-x-3 sm:space-x-4">
              <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-xl sm:rounded-2xl flex items-center justify-center">
                <span class="text-white text-lg sm:text-xl">🏷️</span>
              </div>
              <div>
                <p class="text-white/60 text-xs sm:text-sm font-medium">Kategori</p>
                <p class="text-white font-bold text-base sm:text-lg capitalize">{{ $spot->category }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Premium Content -->
  <section class="py-8 sm:py-16 md:py-24">
    <div class="max-w-8xl mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-12">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6 sm:space-y-8 md:space-y-12">
          <!-- Description -->
          <div class="glass-card rounded-3xl sm:rounded-4xl p-6 sm:p-8 md:p-12">
            <div class="flex items-center space-x-3 sm:space-x-4 mb-6 sm:mb-8">
              <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-2xl sm:rounded-3xl flex items-center justify-center">
                <span class="text-white text-xl sm:text-2xl">📖</span>
              </div>
              <div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-space-grotesk font-black text-white">
                  Tentang Destinasi
                </h2>
                <p class="text-white/60 mt-1 sm:mt-2 text-sm sm:text-base">Cerita di balik keajaiban tempat ini</p>
              </div>
            </div>
            <div class="prose prose-lg sm:prose-xl max-w-none text-white/80 leading-relaxed">
              {!! nl2br(e($spot->description)) !!}
            </div>
          </div>

          <!-- Facilities -->
          @if($spot->facilities && count($spot->facilities) > 0)
          <div class="glass-card rounded-3xl sm:rounded-4xl p-6 sm:p-8 md:p-12">
            <div class="flex items-center space-x-3 sm:space-x-4 mb-6 sm:mb-8">
              <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl sm:rounded-3xl flex items-center justify-center">
                <span class="text-white text-xl sm:text-2xl">🎯</span>
              </div>
              <div>
                <h3 class="text-2xl sm:text-3xl md:text-4xl font-space-grotesk font-black text-white">
                  Fasilitas
                </h3>
                <p class="text-white/60 mt-1 sm:mt-2 text-sm sm:text-base">Kemudahan untuk kenyamanan Anda</p>
              </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 md:gap-6">
              @foreach($spot->facilities as $facility)
              <div class="flex items-center gap-3 sm:gap-4 bg-white/10 backdrop-blur-sm px-4 sm:px-6 py-3 sm:py-4 rounded-xl sm:rounded-2xl border border-white/20 hover:bg-white/20 transition-all">
                <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-r from-cyan-400 to-teal-400 rounded-xl sm:rounded-2xl flex items-center justify-center">
                  <span class="text-white text-base sm:text-lg">✓</span>
                </div>
                <span class="text-white font-bold text-base sm:text-lg">{{ $facility }}</span>
              </div>
              @endforeach
            </div>
          </div>
          @endif

          <!-- Gallery -->
          @if($spot->gallery && count($spot->gallery) > 0)
          <div class="glass-card rounded-3xl sm:rounded-4xl p-6 sm:p-8 md:p-12">
            <div class="flex items-center space-x-3 sm:space-x-4 mb-6 sm:mb-8">
              <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl sm:rounded-3xl flex items-center justify-center">
                <span class="text-white text-xl sm:text-2xl">📸</span>
              </div>
              <div>
                <h3 class="text-2xl sm:text-3xl md:text-4xl font-space-grotesk font-black text-white">
                  Galeri
                </h3>
                <p class="text-white/60 mt-1 sm:mt-2 text-sm sm:text-base">Koleksi foto terbaik dari destinasi ini</p>
              </div>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
              @foreach($spot->gallery as $index => $image)
              <div class="aspect-square rounded-3xl overflow-hidden cursor-pointer group gallery-item hover:scale-105 transition-all duration-500"
                data-image="{{ asset('storage/' . $image) }}">
                <img src="{{ asset('storage/' . $image) }}"
                  alt="Gallery {{ $index + 1 }}"
                  class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
              </div>
              @endforeach
            </div>
            <div class="mt-8 text-center">
              <p class="text-white/60 text-lg">Klik foto untuk melihat dalam ukuran penuh</p>
            </div>
          </div>
          @endif
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1 space-y-6 sm:space-y-8">
          <!-- Booking Card -->
          <div class="bg-gradient-to-br from-orange-500 to-pink-500 rounded-3xl p-6 sm:p-8 text-white shadow-lg sticky top-24">
            <h3 class="text-xl sm:text-2xl font-bold mb-4">Informasi Tiket</h3>

            @if($spot->price)
            <div class="mb-6">
              <span class="text-3xl sm:text-4xl font-bold">Rp {{ number_format($spot->price, 0, ',', '.') }}</span>
              <span class="text-base sm:text-lg opacity-90">/orang</span>
            </div>
            @else
            <div class="mb-6">
              <span class="text-2xl sm:text-3xl font-bold">✨ Gratis!</span>
            </div>
            @endif

            @if($spot->opening_hours)
            <div class="mb-6">
              <h4 class="font-semibold mb-2 flex items-center gap-2">
                <span>🕐</span>
                <span>Jam Operasional</span>
              </h4>
              <p class="opacity-90 text-sm sm:text-base">{{ $spot->opening_hours }}</p>
            </div>
            @endif

            @if($spot->contact)
            <div class="mb-6">
              <h4 class="font-semibold mb-2 flex items-center gap-2">
                <span>📞</span>
                <span>Kontak</span>
              </h4>
              <p class="opacity-90 text-sm sm:text-base">{{ $spot->contact }}</p>
            </div>
            @endif

            <button onclick="bookNow()" class="w-full bg-white text-orange-500 py-3 sm:py-4 rounded-2xl font-bold hover:shadow-lg transform hover:-translate-y-0.5 transition-all">
              Hubungi Sekarang 📞
            </button>
          </div>

          <!-- Location Card (Only on larger screens) -->
          <div class="hidden lg:block bg-white rounded-3xl p-6 shadow-lg">
            <h4 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
              <span>📍</span>
              <span>Lokasi</span>
            </h4>
            <p class="text-gray-600 mb-4">{{ $spot->location }}</p>
            <button onclick="openMaps()" class="w-full bg-gradient-to-r from-orange-500 to-pink-500 text-white py-3 rounded-xl font-medium hover:shadow-lg transition-all">
              Buka di Maps
            </button>
          </div>

          <!-- Tips Card -->
          <div class="bg-purple-50 rounded-3xl p-6 border-2 border-purple-200">
            <h4 class="text-xl font-bold text-purple-800 mb-3 flex items-center gap-2">
              <span>💡</span>
              <span>Tips Berkunjung</span>
            </h4>
            <ul class="space-y-2 text-purple-700 text-sm sm:text-base">
              <li class="flex items-start gap-2">
                <span class="text-purple-500 mt-1">•</span>
                <span>Datang pagi untuk menghindari keramaian</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-purple-500 mt-1">•</span>
                <span>Jangan lupa bawa kamera untuk foto aesthetic</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-purple-500 mt-1">•</span>
                <span>Gunakan sunscreen untuk melindungi kulit</span>
              </li>
              <li class="flex items-start gap-2">
                <span class="text-purple-500 mt-1">•</span>
                <span>Patuhi protokol kesehatan yang berlaku</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Mobile Location Card -->
      <div class="lg:hidden mt-8">
        <div class="bg-white rounded-3xl p-6 shadow-lg">
          <h4 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
            <span>📍</span>
            <span>Lokasi</span>
          </h4>
          <p class="text-gray-600 mb-4">{{ $spot->location }}</p>
          <button onclick="openMaps()" class="w-full bg-gradient-to-r from-orange-500 to-pink-500 text-white py-3 rounded-xl font-medium hover:shadow-lg transition-all">
            Buka di Maps
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Destinations -->
  @if($relatedSpots && count($relatedSpots) > 0)
  <section class="py-8 sm:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6">
      <div class="text-center mb-8 sm:mb-12">
        <h2 class="text-3xl sm:text-4xl font-bold font-['Space_Grotesk'] text-gray-800 mb-4">
          Destinasi Serupa 🌟
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Temukan destinasi lainnya dengan kategori yang sama
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        @foreach($relatedSpots as $relatedSpot)
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500">
          <div class="relative h-48 sm:h-56 overflow-hidden">
            @if($relatedSpot->image)
            <img src="{{ asset('storage/' . $relatedSpot->image) }}"
              alt="{{ $relatedSpot->name }}"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            @else
            <div class="w-full h-full bg-gradient-to-br from-orange-400 to-pink-400 flex items-center justify-center">
              <span class="text-white text-4xl sm:text-5xl">🏝️</span>
            </div>
            @endif

            @if($relatedSpot->is_featured)
            <div class="absolute top-4 left-4">
              <span class="bg-gradient-to-r from-orange-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                🔥 Trending
              </span>
            </div>
            @endif

            <div class="absolute top-4 right-4">
              <div class="bg-white/90 backdrop-blur-sm rounded-full px-2 py-1 flex items-center gap-1">
                <span class="text-yellow-500 text-sm">⭐</span>
                <span class="text-gray-800 text-sm font-semibold">{{ number_format($relatedSpot->rating, 1) }}</span>
              </div>
            </div>
          </div>

          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
              <span>📍</span>
              <span>{{ Str::limit($relatedSpot->location, 30) }}</span>
            </div>

            <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2 line-clamp-2">
              {{ $relatedSpot->name }}
            </h3>

            <p class="text-gray-600 text-sm sm:text-base mb-4 line-clamp-2">
              {{ $relatedSpot->short_description ?? Str::limit($relatedSpot->description, 100) }}
            </p>

            <div class="flex items-center justify-between">
              @if($relatedSpot->price)
              <div class="text-lg sm:text-xl font-bold text-orange-500">
                Rp {{ number_format($relatedSpot->price, 0, ',', '.') }}
                <span class="text-sm text-gray-500 font-normal">/orang</span>
              </div>
              @else
              <div class="text-lg sm:text-xl font-bold text-green-500">
                Gratis!
              </div>
              @endif

              <a href="{{ route('spots.show', $relatedSpot) }}"
                class="bg-gradient-to-r from-orange-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all">
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

  <!-- Premium Back to Top Button -->
  <button id="back-to-top" class="hidden fixed bottom-8 right-8 w-16 h-16 bg-gradient-to-r from-cyan-500 to-teal-500 text-white rounded-3xl shadow-2xl hover:shadow-cyan-500/25 transform hover:scale-110 hover:-translate-y-2 transition-all duration-300 z-50 backdrop-blur-sm border border-white/20">
    <svg class="w-8 h-8 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
  </button>

  <!-- Image Modal -->
  <div id="image-modal" class="hidden fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-4">
    <div class="relative max-w-4xl max-h-full">
      <img id="modal-image" src="" alt="Gallery Image" class="max-w-full max-h-full object-contain rounded-lg">
      <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-all">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
  </div>

  <!-- Premium Footer -->
  <footer class="bg-gradient-to-br from-slate-900 via-cyan-900 to-teal-900 text-white py-20 relative overflow-hidden border-t border-white/20">
    <!-- Ocean Wave Background -->
    <div class="absolute top-0 w-full h-32 overflow-hidden">
      <svg viewBox="0 0 1200 120" fill="none" class="w-full h-full">
        <path d="M0,60 C200,20 400,100 600,60 C800,20 1000,100 1200,60 L1200,0 L0,0 Z" fill="rgba(6, 182, 212, 0.1)" />
      </svg>
    </div>

    <div class="max-w-8xl mx-auto px-4 sm:px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
        <!-- Brand Section -->
        <div class="lg:col-span-2 space-y-8">
          <div class="flex items-center space-x-4">
            <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 via-teal-500 to-emerald-500 rounded-3xl flex items-center justify-center shadow-2xl">
              <span class="text-white font-black text-2xl">🌊</span>
            </div>
            <div>
              <span class="font-space-grotesk font-black text-3xl text-white">Air Manis Tour</span>
              <p class="text-cyan-300 text-sm font-bold tracking-wider">LEGENDARY BEACH EXPERIENCE</p>
            </div>
          </div>

          <p class="text-white/80 text-lg leading-relaxed max-w-2xl">
            Platform wisata premium untuk menjelajahi keajaiban Pantai Air Manis dan sekitarnya.
            Rasakan pengalaman tak terlupakan dengan legenda Malin Kundang dan sunset terindah Sumatera Barat.
          </p>

          <!-- Premium Social Media -->
          <div class="flex space-x-4">
            <a href="#" class="group w-14 h-14 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center hover:bg-gradient-to-r hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:-translate-y-1">
              <span class="text-2xl group-hover:scale-110 transition-transform">📘</span>
            </a>
            <a href="#" class="group w-14 h-14 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center hover:bg-gradient-to-r hover:from-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:-translate-y-1">
              <span class="text-2xl group-hover:scale-110 transition-transform">📷</span>
            </a>
            <a href="#" class="group w-14 h-14 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-600 transition-all duration-300 transform hover:-translate-y-1">
              <span class="text-2xl group-hover:scale-110 transition-transform">🐦</span>
            </a>
            <a href="https://wa.me/6281234567890" class="group w-14 h-14 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center hover:bg-gradient-to-r hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:-translate-y-1">
              <span class="text-2xl group-hover:scale-110 transition-transform">💬</span>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="space-y-6">
          <h4 class="font-black text-xl text-white mb-6">Navigasi Cepat</h4>
          <ul class="space-y-4">
            <li><a href="/" class="text-white/70 hover:text-cyan-300 transition-colors font-medium text-lg flex items-center gap-3 group">
                <span class="w-2 h-2 bg-cyan-400 rounded-full group-hover:scale-150 transition-transform"></span>
                Beranda
              </a></li>
            <li><a href="/spots" class="text-cyan-300 font-medium text-lg flex items-center gap-3 group">
                <span class="w-2 h-2 bg-teal-400 rounded-full group-hover:scale-150 transition-transform"></span>
                Destinasi Wisata
              </a></li>
            <li><a href="/#featured" class="text-white/70 hover:text-cyan-300 transition-colors font-medium text-lg flex items-center gap-3 group">
                <span class="w-2 h-2 bg-emerald-400 rounded-full group-hover:scale-150 transition-transform"></span>
                Unggulan
              </a></li>
            <li><a href="/#about" class="text-white/70 hover:text-cyan-300 transition-colors font-medium text-lg flex items-center gap-3 group">
                <span class="w-2 h-2 bg-cyan-400 rounded-full group-hover:scale-150 transition-transform"></span>
                Tentang Air Manis
              </a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="space-y-6">
          <h4 class="font-black text-xl text-white mb-6">Hubungi Kami</h4>
          <ul class="space-y-4">
            <li class="flex items-center space-x-4 group">
              <div class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center group-hover:bg-cyan-500 transition-colors">
                <span class="text-lg">📍</span>
              </div>
              <div>
                <p class="text-white font-medium">Air Manis Beach</p>
                <p class="text-white/60 text-sm">Padang, Sumatera Barat</p>
              </div>
            </li>
            <li class="flex items-center space-x-4 group">
              <div class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center group-hover:bg-green-500 transition-colors">
                <span class="text-lg">📞</span>
              </div>
              <div>
                <p class="text-white font-medium">+62 812-3456-7890</p>
                <p class="text-white/60 text-sm">24/7 Customer Support</p>
              </div>
            </li>
            <li class="flex items-center space-x-4 group">
              <div class="w-10 h-10 bg-white/10 backdrop-blur-sm rounded-xl flex items-center justify-center group-hover:bg-blue-500 transition-colors">
                <span class="text-lg">✉️</span>
              </div>
              <div>
                <p class="text-white font-medium">info@airmanistour.com</p>
                <p class="text-white/60 text-sm">Respons dalam 24 jam</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- Bottom Section -->
      <div class="border-t border-white/20 mt-16 pt-8">
        <div class="flex flex-col lg:flex-row justify-between items-center space-y-4 lg:space-y-0">
          <div class="text-center lg:text-left">
            <p class="text-white/80 text-lg">&copy; 2024 Air Manis Tour. YO Group .</p>
            <p class="text-white/60">KONTAK DEVELOPER <a href="https://arovi.vercel.app" class="text-blue-300 hover:text-yellow-400 transition-colors">NAA</a></p>
          </div>

          <div class="flex items-center space-x-6">
            <span class="text-white/60">Powered by</span>
            <div class="flex items-center space-x-2">
              <div class="w-8 h-8 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-lg flex items-center justify-center">
                <span class="text-white font-bold text-sm">L</span>
              </div>
              <span class="text-white font-medium">Laravel</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });

    // Back to top button
    const backToTopButton = document.getElementById('back-to-top');

    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 300) {
        backToTopButton.classList.remove('hidden');
      } else {
        backToTopButton.classList.add('hidden');
      }
    });

    backToTopButton.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    // Gallery item click handlers
    document.addEventListener('DOMContentLoaded', function() {
      const galleryItems = document.querySelectorAll('.gallery-item');
      galleryItems.forEach(item => {
        item.addEventListener('click', function() {
          const imageSrc = this.getAttribute('data-image');
          openImageModal(imageSrc);
        });
      });
    });

    // Image modal functions
    function openImageModal(imageSrc) {
      const modal = document.getElementById('image-modal');
      const modalImage = document.getElementById('modal-image');
      modalImage.src = imageSrc;
      modal.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }

    function closeImageModal() {
      const modal = document.getElementById('image-modal');
      modal.classList.add('hidden');
      document.body.style.overflow = 'auto';
    }

    // Close modal on click outside
    document.getElementById('image-modal').addEventListener('click', function(e) {
      if (e.target === this) {
        closeImageModal();
      }
    });

    // Book now function
    function bookNow() {
      const phone = '+6281234567890';
      const spotName = '{{ addslashes($spot->name) }}';
      const message = 'Halo! Saya tertarik untuk berkunjung ke ' + spotName + '. Bisa bantu informasi lebih lanjut?';
      const whatsappUrl = 'https://wa.me/' + phone + '?text=' + encodeURIComponent(message);
      window.open(whatsappUrl, '_blank');
    }

    // Open maps function
    function openMaps() {
      const location = encodeURIComponent('{{ $spot->location }}, Padang, Sumatra Barat');
      const mapsUrl = 'https://www.google.com/maps/search/?api=1&query=' + location;
      window.open(mapsUrl, '_blank');
    }
  </script>

  <style>
    .line-clamp-2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    /* Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }

    /* Backdrop blur support fallback */
    @supports not (backdrop-filter: blur(12px)) {
      .backdrop-blur-md {
        background-color: rgba(255, 255, 255, 0.9);
      }
    }

    /* Ocean-themed scrollbar */
    ::-webkit-scrollbar {
      width: 12px;
    }

    ::-webkit-scrollbar-track {
      background: linear-gradient(180deg, #e0f2fe, #b2ebf2);
      border-radius: 6px;
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(180deg, #0891b2, #0d9488);
      border-radius: 6px;
      border: 2px solid #e0f2fe;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(180deg, #0e7490, #0f766e);
    }
  </style>
</body>

</html>