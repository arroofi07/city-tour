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

<body class="bg-gradient-to-br from-slate-900 via-emerald-900 to-teal-900 min-h-screen font-outfit text-white">

  <!-- Navigation -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-black/20 backdrop-blur-xl border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between h-16">
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
          <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-500 rounded-xl flex items-center justify-center">
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
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900/95 via-emerald-900/90 to-teal-900/85"></div>
        @if($story->image_path)
        <div class="absolute inset-0 opacity-20">
          <img src="{{ asset('storage/' . $story->image_path) }}" alt="{{ $story->title }}" class="w-full h-full object-cover">
        </div>
        @endif
        <div class="absolute top-20 left-20 w-40 h-40 bg-gradient-to-r from-emerald-500/20 to-teal-500/20 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-32 right-16 w-56 h-56 bg-gradient-to-r from-cyan-500/15 to-emerald-500/15 rounded-full blur-3xl animate-bounce slow"></div>
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
            <div class="w-3 h-3 bg-gradient-to-r from-emerald-400 to-teal-400 rounded-full mr-3 animate-pulse"></div>
            <span class="text-white/90 font-bold text-sm tracking-wider">📜 LEGENDA KLASIK</span>
            <div class="w-3 h-3 bg-gradient-to-r from-teal-400 to-cyan-400 rounded-full ml-3 animate-pulse"></div>
          </div>

          <!-- Title -->
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-space-grotesk font-black leading-tight">
            <span class="bg-gradient-to-r from-emerald-300 via-teal-300 to-cyan-300 bg-clip-text text-transparent">
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
              <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-emerald-500/20 via-teal-500/20 to-cyan-500/20 animate-pulse"></div>
            </div>

            <div class="relative z-10 prose prose-lg prose-invert max-w-none">
              <div class="text-white/90 text-lg leading-relaxed whitespace-pre-line">
                {{ $story->description }}
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
          <article class="group relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-white/10 via-white/5 to-transparent backdrop-blur-lg border border-white/20 hover:border-emerald-400/50 transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl hover:shadow-emerald-500/20">

            <!-- Image Section -->
            <div class="relative aspect-[4/3] overflow-hidden">
              @if($relatedStory->image_path)
              <img src="{{ asset('storage/' . $relatedStory->image_path) }}" alt="{{ $relatedStory->title }}"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              @else
              <div class="w-full h-full bg-gradient-to-br from-emerald-500 via-teal-500 to-cyan-500 flex items-center justify-center">
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
              <h3 class="text-lg font-bold text-white group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-emerald-300 group-hover:to-cyan-300 group-hover:bg-clip-text transition-all duration-300 line-clamp-2">
                {{ $relatedStory->title }}
              </h3>

              <!-- Excerpt -->
              <p class="text-white/80 text-sm line-clamp-3 leading-relaxed">
                {{ $relatedStory->excerpt }}
              </p>

              <!-- Read Button -->
              <div class="pt-2">
                <a href="{{ route('stories.show', $relatedStory) }}"
                  class="group/btn bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-500 text-white px-4 py-2 rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-emerald-500/25 transition-all transform hover:scale-105 inline-flex items-center space-x-2">
                  <span>Baca</span>
                  <svg class="w-3 h-3 group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                  </svg>
                </a>
              </div>
            </div>

            <!-- Hover Glow Effect -->
            <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-r from-emerald-500/10 via-teal-500/10 to-cyan-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10 blur-xl"></div>
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
          <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-500 rounded-xl flex items-center justify-center">
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