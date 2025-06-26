<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eksplorasi Tempat Wisata - Padang Tour</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 font-[Outfit]">
  <!-- Navigation -->
  <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-md z-50 shadow-sm">
    <div class="container mx-auto px-6 py-4">
      <div class="flex items-center justify-between">
        <a href="/" class="text-2xl font-bold font-['Space_Grotesk'] bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">
          PadangTour
        </a>
        <div class="hidden md:flex items-center space-x-8">
          <a href="/" class="text-gray-700 hover:text-orange-500 transition-colors">Beranda</a>
          <a href="/spots" class="text-orange-500 font-semibold">Destinasi</a>
          <a href="#" class="text-gray-700 hover:text-orange-500 transition-colors">Tentang</a>
          <a href="#" class="text-gray-700 hover:text-orange-500 transition-colors">Kontak</a>
          <a href="/admin" class="bg-gradient-to-r from-orange-500 to-pink-500 text-white px-6 py-2 rounded-full hover:shadow-lg transform hover:-translate-y-0.5 transition-all">
            Admin
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="pt-24 pb-12 bg-gradient-to-br from-orange-50 via-pink-50 to-purple-50">
    <div class="container mx-auto px-6">
      <div class="text-center max-w-4xl mx-auto">
        <h1 class="text-5xl md:text-6xl font-bold font-['Space_Grotesk'] mb-6">
          Jelajahi <span class="bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">Keindahan</span> Padang 🌴
        </h1>
        <p class="text-xl text-gray-600 mb-8">
          Temukan destinasi wisata terbaik di Kota Padang yang bikin feed Instagram kamu makin aesthetic ✨
        </p>

        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto">
          <div class="relative">
            <input type="text"
              placeholder="Cari destinasi favoritmu..."
              class="w-full px-6 py-4 rounded-full border-2 border-gray-200 focus:border-orange-500 focus:outline-none text-lg pl-14">
            <svg class="absolute left-5 top-1/2 transform -translate-y-1/2 text-gray-400" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </div>
        </div>

        <!-- Filter Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mt-8">
          <button class="px-6 py-2 rounded-full bg-gradient-to-r from-orange-500 to-pink-500 text-white font-medium hover:shadow-lg transition-all">
            Semua
          </button>
          <button class="px-6 py-2 rounded-full bg-white border-2 border-gray-200 text-gray-700 hover:border-orange-500 hover:text-orange-500 transition-all">
            Pantai 🏖️
          </button>
          <button class="px-6 py-2 rounded-full bg-white border-2 border-gray-200 text-gray-700 hover:border-orange-500 hover:text-orange-500 transition-all">
            Gunung 🏔️
          </button>
          <button class="px-6 py-2 rounded-full bg-white border-2 border-gray-200 text-gray-700 hover:border-orange-500 hover:text-orange-500 transition-all">
            Kuliner 🍜
          </button>
          <button class="px-6 py-2 rounded-full bg-white border-2 border-gray-200 text-gray-700 hover:border-orange-500 hover:text-orange-500 transition-all">
            Budaya 🎭
          </button>
          <button class="px-6 py-2 rounded-full bg-white border-2 border-gray-200 text-gray-700 hover:border-orange-500 hover:text-orange-500 transition-all">
            Belanja 🛍️
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Tourist Spots Grid -->
  <section class="py-16">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($spots as $spot)
        <a href="{{ route('spots.show', $spot) }}" class="group">
          <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
            <div class="relative h-64 overflow-hidden">
              @if($spot->image)
              <img src="{{ asset('storage/' . $spot->image) }}"
                alt="{{ $spot->name }}"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
              @else
              <div class="w-full h-full bg-gradient-to-br from-orange-400 to-pink-400 flex items-center justify-center">
                <span class="text-white text-6xl">🏝️</span>
              </div>
              @endif

              @if($spot->is_featured)
              <div class="absolute top-4 left-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold">
                🔥 Trending
              </div>
              @endif

              <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full">
                <span class="text-orange-500 font-semibold">⭐ {{ number_format($spot->rating, 1) }}</span>
              </div>
            </div>

            <div class="p-6">
              <div class="flex items-center gap-2 text-sm text-gray-500 mb-2">
                <span>📍 {{ $spot->location }}</span>
                <span>•</span>
                <span class="capitalize">{{ $spot->category }}</span>
              </div>

              <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-orange-500 transition-colors">
                {{ $spot->name }}
              </h3>

              <p class="text-gray-600 mb-4 line-clamp-2">
                {{ $spot->short_description }}
              </p>

              <div class="flex items-center justify-between">
                <div>
                  @if($spot->price)
                  <span class="text-2xl font-bold text-orange-500">
                    Rp {{ number_format($spot->price, 0, ',', '.') }}
                  </span>
                  <span class="text-gray-500 text-sm">/orang</span>
                  @else
                  <span class="text-xl font-semibold text-green-500">Gratis</span>
                  @endif
                </div>

                <button class="bg-gray-100 p-3 rounded-full group-hover:bg-orange-500 group-hover:text-white transition-all">
                  <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </a>
        @empty
        <div class="col-span-full text-center py-20">
          <div class="text-6xl mb-4">😔</div>
          <h3 class="text-2xl font-bold text-gray-700 mb-2">Belum Ada Destinasi</h3>
          <p class="text-gray-500">Destinasi wisata akan segera hadir!</p>
        </div>
        @endforelse
      </div>

      <!-- Pagination -->
      @if($spots->hasPages())
      <div class="mt-12 flex justify-center">
        {{ $spots->links() }}
      </div>
      @endif
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-16 bg-gradient-to-r from-orange-500 to-pink-500">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
        Punya Tempat Wisata? 🏖️
      </h2>
      <p class="text-xl text-white/90 mb-8">
        Daftarkan destinasi wisatamu dan raih lebih banyak pengunjung!
      </p>
      <a href="/admin" class="bg-white text-orange-500 px-8 py-3 rounded-full font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all inline-block">
        Daftar Sekarang
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <h3 class="text-2xl font-bold font-['Space_Grotesk'] bg-gradient-to-r from-orange-400 to-pink-400 bg-clip-text text-transparent mb-4">
            PadangTour
          </h3>
          <p class="text-gray-400">
            Platform destinasi wisata terlengkap di Kota Padang
          </p>
        </div>

        <div>
          <h4 class="font-semibold mb-4">Menu</h4>
          <ul class="space-y-2 text-gray-400">
            <li><a href="/" class="hover:text-orange-400 transition-colors">Beranda</a></li>
            <li><a href="/spots" class="hover:text-orange-400 transition-colors">Destinasi</a></li>
            <li><a href="#" class="hover:text-orange-400 transition-colors">Tentang</a></li>
            <li><a href="#" class="hover:text-orange-400 transition-colors">Kontak</a></li>
          </ul>
        </div>

        <div>
          <h4 class="font-semibold mb-4">Kategori</h4>
          <ul class="space-y-2 text-gray-400">
            <li><a href="#" class="hover:text-orange-400 transition-colors">Pantai</a></li>
            <li><a href="#" class="hover:text-orange-400 transition-colors">Gunung</a></li>
            <li><a href="#" class="hover:text-orange-400 transition-colors">Kuliner</a></li>
            <li><a href="#" class="hover:text-orange-400 transition-colors">Budaya</a></li>
          </ul>
        </div>

        <div>
          <h4 class="font-semibold mb-4">Follow Us</h4>
          <div class="flex space-x-4">
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange-500 transition-colors">
              <span>📸</span>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange-500 transition-colors">
              <span>🐦</span>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange-500 transition-colors">
              <span>📘</span>
            </a>
          </div>
        </div>
      </div>

      <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
        <p>&copy; 2025 PadangTour. Made with ❤️ in Padang</p>
      </div>
    </div>
  </footer>
</body>

</html>