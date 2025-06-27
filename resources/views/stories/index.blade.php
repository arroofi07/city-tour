<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Legenda & Cerita - Air Manis Tour</title>
  <meta name="description" content="Kumpulan legenda dan cerita menarik tentang Air Manis dan budaya Minangkabau">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vite -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-pink-900 min-h-screen font-outfit text-white">

  <!-- Navigation -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-black/20 backdrop-blur-xl border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between h-16">
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
          <div class="w-8 h-8 bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-500 rounded-xl flex items-center justify-center">
            <span class="text-white font-bold text-sm">🌊</span>
          </div>
          <span class="font-space-grotesk font-bold text-xl text-white">Air Manis</span>
        </a>

        <div class="flex items-center space-x-6">
          <a href="{{ route('home') }}" class="text-white/80 hover:text-white transition-colors">Home</a>
          <a href="{{ route('spots.index') }}" class="text-white/80 hover:text-white transition-colors">Destinasi</a>
          <a href="{{ route('stories.index') }}" class="text-white border-b-2 border-purple-400">Stories</a>
        </div>
      </div>
    </div>
  </nav>

  <main class="pt-16">{/* Content area begins after navigation */}
    <!-- Hero Section -->
    <section class="py-20 sm:py-32 relative overflow-hidden">
      <!-- Background Elements -->
      <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900/95 via-purple-900/90 to-pink-900/85"></div>
        <div class="absolute top-20 left-20 w-40 h-40 bg-gradient-to-r from-pink-500/20 to-purple-500/20 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-32 right-16 w-56 h-56 bg-gradient-to-r from-cyan-500/15 to-purple-500/15 rounded-full blur-3xl animate-bounce slow"></div>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
          <!-- Trending Badge -->
          <div class="inline-flex items-center glass-card rounded-full px-6 sm:px-8 py-3 sm:py-4 mb-8 group hover:scale-105 transition-all duration-300">
            <div class="w-3 h-3 bg-gradient-to-r from-pink-400 to-purple-400 rounded-full mr-3 animate-pulse"></div>
            <span class="text-white/90 font-bold text-sm sm:text-lg tracking-wider">📚 KOLEKSI LEGENDA</span>
            <div class="w-3 h-3 bg-gradient-to-r from-purple-400 to-cyan-400 rounded-full ml-3 animate-pulse"></div>
          </div>

          <!-- Main Title -->
          <h1 class="text-4xl sm:text-6xl md:text-7xl font-space-grotesk font-black mb-6 leading-tight">
            <span class="block text-white mb-2">Cerita</span>
            <span class="bg-gradient-to-r from-pink-300 via-purple-300 to-cyan-300 bg-clip-text text-transparent animate-pulse">
              Legendaris ✨
            </span>
          </h1>

          <!-- Subtitle -->
          <p class="text-xl sm:text-2xl text-white/80 max-w-3xl mx-auto leading-relaxed mb-8">
            Jelajahi kisah-kisah epik yang udah jadi bagian dari sejarah dan budaya kita! 🔥
          </p>

          <!-- Stats -->
          <div class="flex flex-wrap justify-center gap-8 text-center">
            <div class="glass-card rounded-2xl px-6 py-4">
              <div class="text-2xl font-bold text-pink-300">{{ $stories->count() }}</div>
              <div class="text-sm text-white/60">Cerita Tersedia</div>
            </div>
            <div class="glass-card rounded-2xl px-6 py-4">
              <div class="text-2xl font-bold text-purple-300">{{ $stories->sum('read_time') }}</div>
              <div class="text-sm text-white/60">Menit Bacaan</div>
            </div>
            <div class="glass-card rounded-2xl px-6 py-4">
              <div class="text-2xl font-bold text-cyan-300">∞</div>
              <div class="text-sm text-white/60">Inspirasi</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stories Grid -->
    <section class="py-16 sm:py-24 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        @if($stories->count() > 0)
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          @foreach($stories as $index => $story)
          <article class="group relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-white/10 via-white/5 to-transparent backdrop-blur-lg border border-white/20 hover:border-purple-400/50 transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl hover:shadow-purple-500/20">

            <!-- Image Section -->
            <div class="relative aspect-[4/3] overflow-hidden">
              @if($story->image_path)
              <img src="{{ asset('storage/' . $story->image_path) }}" alt="{{ $story->title }}"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              @else
              <div class="w-full h-full bg-gradient-to-br from-pink-500 via-purple-500 to-cyan-500 flex items-center justify-center">
                <span class="text-white text-4xl">📜</span>
              </div>
              @endif

              <!-- Overlay -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>

              <!-- Story Number Badge -->
              <div class="absolute top-4 left-4 glass-card text-white px-3 py-1 rounded-full text-sm font-bold border border-white/30">
                Story #{{ $index + 1 }}
              </div>

              <!-- Read Time Badge -->
              <div class="absolute top-4 right-4 glass-card text-white px-3 py-1 rounded-full text-xs font-semibold border border-white/30 flex items-center space-x-1">
                <span>📖</span>
                <span>{{ $story->read_time }} min</span>
              </div>
            </div>

            <!-- Content Section -->
            <div class="p-6 space-y-4">
              <!-- Title -->
              <h2 class="text-xl sm:text-2xl font-bold text-white group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-pink-300 group-hover:to-purple-300 group-hover:bg-clip-text transition-all duration-300 line-clamp-2">
                {{ $story->title }}
              </h2>

              <!-- Subtitle -->
              @if($story->subtitle)
              <p class="text-white/70 text-sm line-clamp-1">{{ $story->subtitle }}</p>
              @endif

              <!-- Excerpt -->
              <p class="text-white/80 line-clamp-3 leading-relaxed">
                {{ $story->excerpt }}
              </p>

              <!-- Meta Info -->
              <div class="flex items-center justify-between pt-4 border-t border-white/10">
                <div class="flex items-center space-x-3 text-xs text-white/60">
                  <span class="flex items-center space-x-1">
                    <span>✨</span>
                    <span>Legendaris</span>
                  </span>
                  <span>•</span>
                  <span>{{ $story->updated_at->diffForHumans() }}</span>
                </div>

                <a href="{{ route('stories.show', $story) }}"
                  class="group/btn bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-500 text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-purple-500/25 transition-all transform hover:scale-105 inline-flex items-center space-x-2">
                  <span>Baca</span>
                  <svg class="w-3 h-3 group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                  </svg>
                </a>
              </div>
            </div>

            <!-- Hover Glow Effect -->
            <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-r from-pink-500/10 via-purple-500/10 to-cyan-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10 blur-xl"></div>
          </article>
          @endforeach
        </div>
        @else
        <!-- Empty State -->
        <div class="text-center py-16">
          <div class="glass-card rounded-3xl p-12 max-w-2xl mx-auto">
            <div class="text-8xl mb-6 animate-bounce">📚</div>
            <h3 class="text-3xl font-bold text-white mb-4">Belum Ada Cerita 📖</h3>
            <p class="text-white/80 text-lg">
              Cerita-cerita legendaris akan segera hadir! Stay tuned ya bestie! ✨
            </p>
          </div>
        </div>
        @endif
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 relative overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
        <div class="glass-card rounded-3xl p-8 sm:p-12 relative overflow-hidden">
          <!-- Background Pattern -->
          <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-pink-500/20 via-purple-500/20 to-cyan-500/20 animate-pulse"></div>
          </div>

          <div class="relative z-10 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-bold text-white">
              Punya Cerita Menarik? 📝
            </h2>
            <p class="text-white/80 text-lg max-w-2xl mx-auto">
              Bagikan kisah legendaris atau pengalaman seru kamu di Air Manis!
              Tim kami akan review dan publish cerita terbaik! 🌟
            </p>
            <a href="{{ route('home') }}#contact"
              class="inline-flex items-center space-x-3 bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-500 text-white px-8 py-4 rounded-full font-bold hover:shadow-xl hover:shadow-purple-500/25 transform hover:scale-105 transition-all duration-300">
              <span>Hubungi Kami</span>
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="py-12 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
      <div class="space-y-4">
        <div class="flex items-center justify-center space-x-2">
          <div class="w-8 h-8 bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-500 rounded-xl flex items-center justify-center">
            <span class="text-white font-bold text-sm">🌊</span>
          </div>
          <span class="font-space-grotesk font-bold text-xl text-white">Air Manis Tour</span>
        </div>
        <p class="text-white/60 max-w-md mx-auto">
          Jelajahi keindahan Pantai Air Manis dengan cara yang modern dan menyenangkan.
        </p>
        <div class="border-t border-white/10 pt-6">
          <p class="text-white/40">© 2025 Air Manis Tour. Made with YO GROUP DEVELOPER</p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>