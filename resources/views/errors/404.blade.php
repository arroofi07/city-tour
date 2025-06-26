<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Halaman Tidak Ditemukan | Padang Tour</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-orange-50 via-pink-50 to-purple-50 font-[Outfit] min-h-screen flex items-center justify-center">
  <!-- Background decoration -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-orange-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-4000"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-2xl mx-auto text-center px-6">
    <!-- 404 Number -->
    <div class="mb-8">
      <h1 class="text-[180px] md:text-[220px] font-['Space_Grotesk'] font-bold leading-none bg-gradient-to-r from-orange-500 to-pink-500 bg-clip-text text-transparent">
        404
      </h1>
      <div class="text-6xl -mt-8">🏝️</div>
    </div>

    <!-- Message -->
    <div class="mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Oops! Halaman Tidak Ditemukan
      </h2>
      <p class="text-lg text-gray-600 mb-2">
        Sepertinya kamu tersesat di perjalanan wisata digital!
      </p>
      <p class="text-gray-500">
        Halaman yang kamu cari mungkin sudah dipindahkan atau tidak ada.
      </p>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="/"
        class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-full font-semibold hover:shadow-xl hover:shadow-orange-500/25 transform hover:-translate-y-0.5 transition-all">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        Kembali ke Beranda
      </a>

      <a href="/spots"
        class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-gray-700 rounded-full font-semibold border-2 border-gray-200 hover:border-orange-500 hover:text-orange-600 transform hover:-translate-y-0.5 transition-all">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
        </svg>
        Jelajahi Destinasi
      </a>
    </div>

    <!-- Fun Facts -->
    <div class="mt-16 p-8 bg-white/80 backdrop-blur rounded-3xl shadow-xl">
      <h3 class="text-xl font-bold text-gray-800 mb-4">
        💡 Tahukah Kamu?
      </h3>
      <p class="text-gray-600">
        Padang memiliki lebih dari 50 destinasi wisata menarik yang bisa kamu kunjungi!
        Mulai dari pantai eksotis, kuliner legendaris, hingga wisata budaya yang memukau.
      </p>
    </div>
  </div>

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
  </style>
</body>

</html>