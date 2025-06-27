<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $story->title }} - Air Manis Tour</title>
  <meta name="description" content="{{ $story->excerpt }}">

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
          <a href="{{ route('stories.index') }}" class="text-white/80 hover:text-white transition-colors">Stories</a>
        </div>
      </div>
    </div>
  </nav>

  <main class="pt-16">

    <!-- Hero Section -->
    <section class="py-16 sm:py-24 relative overflow-hidden">
      <!-- Background Elements -->
      <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900/95 via-purple-900/90 to-pink-900/85"></div>
        @if($story->image_path)
        <div class="absolute inset-0 opacity-20">
          <img src="{{ asset('storage/' . $story->image_path) }}" alt="{{ $story->title }}" class="w-full h-full object-cover">
        </div>
        @endif
        <div class="absolute top-20 left-20 w-40 h-40 bg-gradient-to-r from-pink-500/20 to-purple-500/20 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-32 right-16 w-56 h-56 bg-gradient-to-r from-cyan-500/15 to-purple-500/15 rounded-full blur-3xl animate-bounce slow"></div>
      </div>

      <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10">
        <!-- Back Button -->
        <div class="mb-8">
          <a href="{{ route('stories.index') }}" class="inline-flex items-center space-x-2 glass-card rounded-full px-4 py-2 text-white/80 hover:text-white transition-colors group">
            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span>Kembali ke Stories</span>
          </a>
        </div>

        <div class="text-center space-y-6">
          <!-- Story Badge -->
          <div class="inline-flex items-center glass-card rounded-full px-6 py-3 group hover:scale-105 transition-all duration-300">
            <div class="w-3 h-3 bg-gradient-to-r from-pink-400 to-purple-400 rounded-full mr-3 animate-pulse"></div>
            <span class="text-white/90 font-bold text-sm tracking-wider">📜 LEGENDA KLASIK</span>
            <div class="w-3 h-3 bg-gradient-to-r from-purple-400 to-cyan-400 rounded-full ml-3 animate-pulse"></div>
          </div>

          <!-- Title -->
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-space-grotesk font-black leading-tight">
            <span class="bg-gradient-to-r from-pink-300 via-purple-300 to-cyan-300 bg-clip-text text-transparent">
              {{ $story->title }}
            </span>
          </h1>

          <!-- Subtitle -->
          @if($story->subtitle)
          <h2 class="text-xl sm:text-2xl text-white/80 max-w-2xl mx-auto leading-relaxed">
            {{ $story->subtitle }}
          </h2>
          @endif

          <!-- Meta Info -->
          <div class="flex flex-wrap justify-center gap-6 text-sm text-white/60">
            <div class="flex items-center space-x-2">
              <span>📖</span>
              <span>{{ $story->read_time }} menit baca</span>
            </div>
            <div class="flex items-center space-x-2">
              <span>📅</span>
              <span>{{ $story->updated_at->format('d M Y') }}</span>
            </div>
            <div class="flex items-center space-x-2">
              <span>✨</span>
              <span>Legendaris</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Story Content -->
    <section class="py-16 relative">
      <div class="max-w-4xl mx-auto px-4 sm:px-6">
        <article class="space-y-8">
          <!-- Featured Image -->
          @if($story->image_path)
          <div class="relative">
            <div class="glass-card rounded-3xl p-4 sm:p-6">
              <div class="aspect-video rounded-2xl overflow-hidden">
                <img src="{{ asset('storage/' . $story->image_path) }}" alt="{{ $story->title }}"
                  class="w-full h-full object-cover">
              </div>
            </div>
          </div>
          @endif

          <!-- Story Content -->
          <div class="glass-card rounded-3xl p-6 sm:p-8 md:p-12 relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-5">
              <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-pink-500/20 via-purple-500/20 to-cyan-500/20 animate-pulse"></div>
            </div>

            <div class="relative z-10 prose prose-lg prose-invert max-w-none">
              <div class="text-white/90 text-lg leading-relaxed whitespace-pre-line">
                {{ $story->description }}
              </div>
            </div>
          </div>

          <!-- Share Section -->
          <div class="glass-card rounded-3xl p-6 sm:p-8">
            <div class="text-center space-y-4">
              <h3 class="text-xl font-bold text-white">Bagikan Cerita Ini! 📢</h3>
              <p class="text-white/70">Ceritakan legenda ini kepada teman-temanmu!</p>

              <div class="flex justify-center space-x-4">
                <button onclick="shareStory('twitter')" class="glass-card p-3 rounded-full hover:scale-110 transition-transform group">
                  <svg class="w-5 h-5 text-cyan-400 group-hover:text-cyan-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                  </svg>
                </button>
                <button onclick="shareStory('facebook')" class="glass-card p-3 rounded-full hover:scale-110 transition-transform group">
                  <svg class="w-5 h-5 text-blue-400 group-hover:text-blue-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                  </svg>
                </button>
                <button onclick="shareStory('whatsapp')" class="glass-card p-3 rounded-full hover:scale-110 transition-transform group">
                  <svg class="w-5 h-5 text-green-400 group-hover:text-green-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                  </svg>
                </button>
                <button onclick="copyLink()" class="glass-card p-3 rounded-full hover:scale-110 transition-transform group">
                  <svg class="w-5 h-5 text-purple-400 group-hover:text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- Related Stories -->
    @if($relatedStories->count() > 0)
    <section class="py-16 relative">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-12">
          <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
            Cerita Lainnya 📚
          </h2>
          <p class="text-white/70 text-lg">
            Jelajahi legenda-legenda menarik lainnya!
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          @foreach($relatedStories as $relatedStory)
          <article class="group relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-white/10 via-white/5 to-transparent backdrop-blur-lg border border-white/20 hover:border-purple-400/50 transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl hover:shadow-purple-500/20">

            <!-- Image Section -->
            <div class="relative aspect-[4/3] overflow-hidden">
              @if($relatedStory->image_path)
              <img src="{{ asset('storage/' . $relatedStory->image_path) }}" alt="{{ $relatedStory->title }}"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              @else
              <div class="w-full h-full bg-gradient-to-br from-pink-500 via-purple-500 to-cyan-500 flex items-center justify-center">
                <span class="text-white text-4xl">📜</span>
              </div>
              @endif

              <!-- Overlay -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>

              <!-- Read Time Badge -->
              <div class="absolute top-4 right-4 glass-card text-white px-3 py-1 rounded-full text-xs font-semibold border border-white/30 flex items-center space-x-1">
                <span>📖</span>
                <span>{{ $relatedStory->read_time }} min</span>
              </div>
            </div>

            <!-- Content Section -->
            <div class="p-6 space-y-4">
              <!-- Title -->
              <h3 class="text-lg font-bold text-white group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-pink-300 group-hover:to-purple-300 group-hover:bg-clip-text transition-all duration-300 line-clamp-2">
                {{ $relatedStory->title }}
              </h3>

              <!-- Excerpt -->
              <p class="text-white/80 text-sm line-clamp-3 leading-relaxed">
                {{ $relatedStory->excerpt }}
              </p>

              <!-- Read Button -->
              <div class="pt-2">
                <a href="{{ route('stories.show', $relatedStory) }}"
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
      </div>
    </section>
    @endif

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

  <script>
    function shareStory(platform) {
      const url = window.location.href;
      const title = '{{ $story->title }}';
      const text = '{{ $story->excerpt }}';

      switch (platform) {
        case 'twitter':
          window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(text)}`, '_blank');
          break;
        case 'facebook':
          window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank');
          break;
        case 'whatsapp':
          window.open(`https://wa.me/?text=${encodeURIComponent(text + ' ' + url)}`, '_blank');
          break;
      }
    }

    function copyLink() {
      navigator.clipboard.writeText(window.location.href).then(() => {
        alert('Link berhasil disalin! 📋');
      });
    }
  </script>

</body>

</html>