<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $spot->name }} - Padang Tour</title>
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
          <a href="/spots" class="text-gray-700 hover:text-orange-500 transition-colors">Destinasi</a>
          <a href="#" class="text-gray-700 hover:text-orange-500 transition-colors">Tentang</a>
          <a href="#" class="text-gray-700 hover:text-orange-500 transition-colors">Kontak</a>
          <a href="/admin" class="bg-gradient-to-r from-orange-500 to-pink-500 text-white px-6 py-2 rounded-full hover:shadow-lg transform hover:-translate-y-0.5 transition-all">
            Admin
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Image -->
  <section class="pt-20 relative h-[70vh] overflow-hidden">
    @if($spot->image)
    <img src="{{ asset('storage/' . $spot->image) }}"
      alt="{{ $spot->name }}"
      class="w-full h-full object-cover">
    @else
    <div class="w-full h-full bg-gradient-to-br from-orange-400 to-pink-400 flex items-center justify-center">
      <span class="text-white text-9xl">🏝️</span>
    </div>
    @endif

    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

    <!-- Breadcrumb -->
    <div class="absolute top-24 left-0 w-full">
      <div class="container mx-auto px-6">
        <nav class="text-white/80 text-sm">
          <a href="/" class="hover:text-white">Beranda</a>
          <span class="mx-2">/</span>
          <a href="/spots" class="hover:text-white">Destinasi</a>
          <span class="mx-2">/</span>
          <span class="text-white">{{ $spot->name }}</span>
        </nav>
      </div>
    </div>

    <!-- Title Overlay -->
    <div class="absolute bottom-0 left-0 w-full p-8">
      <div class="container mx-auto">
        <div class="max-w-4xl">
          @if($spot->is_featured)
          <span class="inline-block bg-gradient-to-r from-orange-500 to-pink-500 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
            🔥 Destinasi Trending
          </span>
          @endif
          <h1 class="text-5xl md:text-6xl font-bold text-white font-['Space_Grotesk'] mb-4">
            {{ $spot->name }}
          </h1>
          <div class="flex flex-wrap items-center gap-4 text-white">
            <span class="flex items-center gap-2">
              <span class="text-2xl">📍</span>
              {{ $spot->location }}
            </span>
            <span class="flex items-center gap-2">
              <span class="text-2xl">⭐</span>
              {{ number_format($spot->rating, 1) }} / 5.0
            </span>
            <span class="flex items-center gap-2">
              <span class="text-2xl">🏷️</span>
              <span class="capitalize">{{ $spot->category }}</span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Content -->
  <section class="py-16">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2">
          <!-- Description -->
          <div class="bg-white rounded-3xl p-8 shadow-lg mb-8">
            <h2 class="text-3xl font-bold font-['Space_Grotesk'] mb-6 text-gray-800">
              Tentang Destinasi Ini
            </h2>
            <div class="prose prose-lg max-w-none text-gray-600">
              {!! nl2br(e($spot->description)) !!}
            </div>
          </div>

          <!-- Facilities -->
          @if($spot->facilities && count($spot->facilities) > 0)
          <div class="bg-white rounded-3xl p-8 shadow-lg mb-8">
            <h3 class="text-2xl font-bold font-['Space_Grotesk'] mb-6 text-gray-800">
              Fasilitas Tersedia 🎯
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
              @foreach($spot->facilities as $facility)
              <div class="flex items-center gap-3 bg-orange-50 px-4 py-3 rounded-2xl">
                <span class="text-orange-500">✓</span>
                <span class="text-gray-700">{{ $facility }}</span>
              </div>
              @endforeach
            </div>
          </div>
          @endif

          <!-- Gallery -->
          @if($spot->gallery && count($spot->gallery) > 0)
          <div class="bg-white rounded-3xl p-8 shadow-lg">
            <h3 class="text-2xl font-bold font-['Space_Grotesk'] mb-6 text-gray-800">
              Galeri Foto 📸
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
              @foreach($spot->gallery as $image)
              <div class="aspect-square rounded-2xl overflow-hidden">
                <img src="{{ asset('storage/' . $image) }}"
                  alt="Gallery"
                  class="w-full h-full object-cover hover:scale-110 transition-transform duration-500 cursor-pointer">
              </div>
              @endforeach
            </div>
          </div>
          @endif
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
          <!-- Booking Card -->
          <div class="bg-gradient-to-br from-orange-500 to-pink-500 rounded-3xl p-8 text-white shadow-lg mb-8 sticky top-24">
            <h3 class="text-2xl font-bold mb-4">Informasi Tiket</h3>

            @if($spot->price)
            <div class="mb-6">
              <span class="text-4xl font-bold">Rp {{ number_format($spot->price, 0, ',', '.') }}</span>
              <span class="text-lg opacity-90">/orang</span>
            </div>
            @else
            <div class="mb-6">
              <span class="text-3xl font-bold">✨ Gratis!</span>
            </div>
            @endif

            @if($spot->opening_hours)
            <div class="mb-6">
              <h4 class="font-semibold mb-2">🕐 Jam Operasional</h4>
              <p class="opacity-90">{{ $spot->opening_hours }}</p>
            </div>
            @endif

            @if($spot->contact)
            <div class="mb-6">
              <h4 class="font-semibold mb-2">📞 Kontak</h4>
              <p class="opacity-90">{{ $spot->contact }}</p>
            </div>
            @endif

            <button class="w-full bg-white text-orange-500 py-4 rounded-2xl font-bold hover:shadow-lg transform hover:-translate-y-0.5 transition-all">
              Pesan Sekarang 🎟️
            </button>
          </div>

          <!-- Tips Card -->
          <div class="bg-purple-50 rounded-3xl p-6 border-2 border-purple-200">
            <h4 class="text-xl font-bold text-purple-800 mb-3">
              💡 Tips Berkunjung
            </h4>
            <ul class="space-y-2 text-purple-700">
              <li class="flex items-start gap-2">
                <span>•</span>
                <span>Datang pagi untuk menghindari keramaian</span>
              </li>
              <li class="flex items-start gap-2">
                <span>•</span>
                <span>Jangan lupa bawa kamera untuk foto aesthetic</span>
              </li>
              <li class="flex items-start gap-2">
                <span>•</span>
                <span>Gunakan sunscreen untuk melindungi kulit</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related Spots -->
  @if($relatedSpots->count() > 0)
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-bold font-['Space_Grotesk'] text-center mb-12">
        Destinasi Lain yang <span class="bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">Menarik</span> 🎯
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($relatedSpots as $related)
        <a href="{{ route('spots.show', $related) }}" class="group">
          <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
            <div class="relative h-48 overflow-hidden">
              @if($related->image)
              <img src="{{ asset('storage/' . $related->image) }}"
                alt="{{ $related->name }}"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
              @else
              <div class="w-full h-full bg-gradient-to-br from-orange-400 to-pink-400 flex items-center justify-center">
                <span class="text-white text-5xl">🏝️</span>
              </div>
              @endif
            </div>

            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-orange-500 transition-colors">
                {{ $related->name }}
              </h3>
              <p class="text-gray-600 text-sm mb-4">📍 {{ $related->location }}</p>

              @if($related->price)
              <span class="text-lg font-bold text-orange-500">
                Rp {{ number_format($related->price, 0, ',', '.') }}
              </span>
              @else
              <span class="text-lg font-semibold text-green-500">Gratis</span>
              @endif
            </div>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </section>
  @endif

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