<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>500 - Server Error | Padang Tour</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-red-50 via-orange-50 to-pink-50 font-[Outfit] min-h-screen flex items-center justify-center">
  <!-- Background decoration -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-red-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-orange-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-4000"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-2xl mx-auto text-center px-6">
    <!-- 500 Number -->
    <div class="mb-8">
      <h1 class="text-[180px] md:text-[220px] font-['Space_Grotesk'] font-bold leading-none bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text text-transparent">
        500
      </h1>
      <div class="text-6xl -mt-8">🔥</div>
    </div>

    <!-- Message -->
    <div class="mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Waduh! Ada Masalah Server
      </h2>
      <p class="text-lg text-gray-600 mb-2">
        Maaf ya, sepertinya server kami sedang bermasalah!
      </p>
      <p class="text-gray-500">
        Tim teknis kami sedang bekerja keras untuk memperbaikinya. Coba lagi beberapa saat.
      </p>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <button onclick="window.location.reload()"
        class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-gradient-to-r from-red-500 to-orange-500 text-white rounded-full font-semibold hover:shadow-xl hover:shadow-red-500/25 transform hover:-translate-y-0.5 transition-all cursor-pointer">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
        </svg>
        Refresh Halaman
      </button>

      <a href="/"
        class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-gray-700 rounded-full font-semibold border-2 border-gray-200 hover:border-red-500 hover:text-red-600 transform hover:-translate-y-0.5 transition-all">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        Kembali ke Beranda
      </a>
    </div>

    <!-- Status Info -->
    <div class="mt-16 p-8 bg-white/80 backdrop-blur rounded-3xl shadow-xl">
      <h3 class="text-xl font-bold text-gray-800 mb-4">
        🛠️ Status Server
      </h3>
      <div class="space-y-3">
        <div class="flex items-center justify-between">
          <span class="text-gray-600">Kode Error:</span>
          <span class="font-mono text-red-600">500 Internal Server Error</span>
        </div>
        <div class="flex items-center justify-between">
          <span class="text-gray-600">Waktu:</span>
          <span class="text-gray-800" id="currentTime"></span>
        </div>
        <div class="flex items-center justify-between">
          <span class="text-gray-600">Status:</span>
          <span class="inline-flex items-center gap-1 px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">
            <span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
            Sedang Diperbaiki
          </span>
        </div>
      </div>
    </div>

    <!-- Contact Support -->
    <div class="mt-8 text-sm text-gray-500">
      Masalah berlanjut? Hubungi
      <a href="mailto:support@padangtour.com" class="text-red-600 hover:text-red-700 font-medium">
        support@padangtour.com
      </a>
    </div>
  </div>

  <script>
    // Display current time
    function updateTime() {
      const now = new Date();
      const timeString = now.toLocaleString('id-ID', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
      });
      document.getElementById('currentTime').textContent = timeString;
    }
    updateTime();
    setInterval(updateTime, 1000);
  </script>

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