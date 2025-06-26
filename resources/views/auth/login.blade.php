<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Padang Tour</title>
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

  <!-- Login Container -->
  <div class="relative z-10 w-full max-w-md px-6">
    <!-- Logo -->
    <div class="text-center mb-8">
      <a href="/" class="inline-flex items-center justify-center mb-4">
        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-pink-500 rounded-2xl flex items-center justify-center">
          <span class="text-white font-bold text-3xl">P</span>
        </div>
      </a>
      <h1 class="text-3xl font-bold font-['Space_Grotesk'] text-gray-800">Admin Login</h1>
      <p class="text-gray-600 mt-2">Masuk untuk mengelola destinasi wisata Air Manis Tour</p>
    </div>

    <!-- Login Form -->
    <div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-2xl p-8">
      @if (session('error'))
      <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl">
        {{ session('error') }}
      </div>
      @endif

      @if (session('message'))
      <div class="mb-6 bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-xl">
        {{ session('message') }}
      </div>
      @endif

      <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
            Email Address
          </label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
              <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
              </svg>
            </div>
            <input type="email"
              name="email"
              id="email"
              value="{{ old('email') }}"
              class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('email') border-red-500 @enderror"
              placeholder="airmanis@gmail.com"
              required
              autofocus>
          </div>
          @error('email')
          <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
            Password
          </label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
              <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
              </svg>
            </div>
            <input type="password"
              name="password"
              id="password"
              class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('password') border-red-500 @enderror"
              placeholder="••••••••"
              required>
          </div>
          @error('password')
          <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
          <label class="flex items-center cursor-pointer group">
            <input type="checkbox"
              name="remember"
              class="w-5 h-5 text-orange-500 rounded focus:ring-2 focus:ring-orange-500 border-2 border-gray-300 mr-2">
            <span class="text-sm text-gray-700 group-hover:text-gray-900">
              <span class="mr-1">🔒</span>
              Ingat saya selama 30 hari
            </span>
          </label>

          <a href="/login" class="text-sm text-orange-600 hover:text-orange-700 font-medium">
            🔑 Reset Login
          </a>
        </div>

        <!-- Submit Button -->
        <button type="submit"
          id="loginBtn"
          class="w-full bg-gradient-to-r from-orange-500 to-pink-500 text-white py-4 rounded-xl font-semibold hover:shadow-xl hover:shadow-orange-500/25 transform hover:-translate-y-0.5 transition-all disabled:opacity-70 disabled:cursor-not-allowed">
          <span class="login-text">Masuk ke Dashboard</span>
          <span class="loading-text hidden">
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Memproses...
          </span>
        </button>
      </form>

      <div class="mt-8 text-center">
        <p class="text-sm text-gray-600">
          Kembali ke
          <a href="/" class="text-orange-600 hover:text-orange-700 font-medium">
            Homepage
          </a>
        </p>
      </div>
    </div>

    <!-- Demo Credentials -->
    <div class="mt-8 bg-white/60 backdrop-blur rounded-2xl p-6 text-center">
      <h3 class="text-sm font-semibold text-gray-700 mb-4">Air Manis Admin Credentials</h3>
      <div class="space-y-2 text-sm mb-4">
        <p class="text-gray-600">
          <span class="font-medium">Email:</span> airmanis@gmail.com
        </p>
        <p class="text-gray-600">
          <span class="font-medium">Password:</span> air-manis-tour234321
        </p>
      </div>
      <button type="button"
        class="demo-fill bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-xl text-sm font-medium hover:shadow-lg transition-all transform hover:scale-105">
        🚀 Auto Fill Credentials
      </button>
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

  <script>
    // Form submission handling
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      const loginBtn = document.getElementById('loginBtn');
      const loginText = document.querySelector('.login-text');
      const loadingText = document.querySelector('.loading-text');

      form.addEventListener('submit', function() {
        loginBtn.disabled = true;
        loginText.classList.add('hidden');
        loadingText.classList.remove('hidden');
      });

      // Auto-fill demo credentials when demo button is clicked
      document.addEventListener('click', function(e) {
        if (e.target.closest('.demo-fill')) {
          e.preventDefault();
          document.getElementById('email').value = 'airmanis@gmail.com';
          document.getElementById('password').value = 'air-manis-tour234321';
        }
      });
    });
  </script>
</body>

</html>