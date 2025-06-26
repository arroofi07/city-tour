<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin') - PadangTour</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vite -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-outfit">
  <!-- Mobile menu overlay -->
  <div id="mobile-menu-overlay" class="fixed inset-0 z-40 bg-black bg-opacity-50 lg:hidden hidden"></div>

  <!-- Sidebar -->
  <div id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-xl border-r border-gray-200 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
    <div class="flex flex-col h-full">
      <!-- Logo -->
      <div class="flex items-center space-x-2 p-6 border-b border-gray-200">
        <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-pink-500 rounded-xl flex items-center justify-center">
          <span class="text-white font-bold text-xl">P</span>
        </div>
        <div>
          <h1 class="font-space-grotesk font-bold text-xl text-gray-900">PadangTour</h1>
          <p class="text-xs text-gray-500">Admin Panel</p>
        </div>
      </div>

      <!-- Navigation -->
      <nav class="flex-1 p-6">
        <div class="space-y-2">
          <a href="{{ route('admin.tourist-spots.index') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-700 rounded-xl hover:bg-orange-50 hover:text-orange-600 transition-colors @if(request()->routeIs('admin.tourist-spots.*')) bg-orange-50 text-orange-600 @endif">
            <span class="text-xl">🏖️</span>
            <span class="font-medium">Destinasi Wisata</span>
          </a>

          <a href="{{ route('home') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-700 rounded-xl hover:bg-gray-100 transition-colors">
            <span class="text-xl">🌐</span>
            <span class="font-medium">Lihat Website</span>
          </a>
        </div>
      </nav>

      <!-- Footer -->
      <div class="p-6 border-t border-gray-200">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-3">
            <div class="w-8 h-8 bg-gradient-to-r from-orange-400 to-pink-400 rounded-lg flex items-center justify-center">
              <span class="text-white text-sm font-bold">{{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}</span>
            </div>
            <div>
              <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name ?? 'Admin User' }}</p>
              <p class="text-xs text-gray-500">{{ Auth::user()->email ?? 'Administrator' }}</p>
            </div>
          </div>

          <!-- Logout Button -->
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-gray-500 hover:text-red-600 transition-colors" title="Logout">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
              </svg>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="lg:ml-64">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
      <div class="px-4 lg:px-6 py-4">
        <div class="flex items-center justify-between">
          <!-- Mobile menu button -->
          <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>

          <div class="flex-1 lg:flex-none">
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900">@yield('title', 'Dashboard')</h2>
            <p class="text-sm lg:text-base text-gray-600 hidden sm:block">@yield('subtitle', 'Kelola konten website PadangTour')</p>
          </div>

          <div class="flex items-center space-x-2 lg:space-x-4">
            <div class="hidden sm:flex items-center space-x-2 bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm">
              <span class="w-2 h-2 bg-green-400 rounded-full"></span>
              <span class="hidden md:inline">System Online</span>
              <span class="md:hidden">●</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Flash Messages -->
    @if(session('success'))
    <div class="m-6 mb-0 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl relative" role="alert">
      <div class="flex items-center">
        <span class="text-xl mr-2">✅</span>
        <span>{{ session('success') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
          <span class="sr-only">Dismiss</span>
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
    @endif

    @if(session('error'))
    <div class="m-6 mb-0 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl relative" role="alert">
      <div class="flex items-center">
        <span class="text-xl mr-2">❌</span>
        <span>{{ session('error') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
          <span class="sr-only">Dismiss</span>
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
    @endif

    @if($errors->has('file'))
    <div class="m-6 mb-0 bg-yellow-50 border border-yellow-200 text-yellow-700 px-4 py-3 rounded-xl relative" role="alert">
      <div class="flex items-center">
        <span class="text-xl mr-2">⚠️</span>
        <span>{{ $errors->first('file') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
          <span class="sr-only">Dismiss</span>
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
    @endif

    @if($errors->any() && !$errors->has('file'))
    <div class="m-6 mb-0 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl relative" role="alert">
      <div class="flex items-start">
        <span class="text-xl mr-2 mt-0.5">❌</span>
        <div class="flex-1">
          <p class="font-medium">Ada beberapa kesalahan dalam form:</p>
          <ul class="mt-2 list-disc list-inside text-sm">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        <button type="button" class="ml-4 px-2" onclick="this.parentElement.parentElement.style.display='none';">
          <span class="sr-only">Dismiss</span>
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
    @endif

    <!-- Page Content -->
    <main class="p-4 lg:p-6">
      @yield('content')
    </main>
  </div>

  <!-- JavaScript for mobile menu -->
  <script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('mobile-menu-overlay');

    function toggleMobileMenu() {
      sidebar.classList.toggle('-translate-x-full');
      overlay.classList.toggle('hidden');
    }

    mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    overlay.addEventListener('click', toggleMobileMenu);

    // Close mobile menu when clicking a navigation link
    sidebar.addEventListener('click', function(e) {
      if (e.target.tagName === 'A' && window.innerWidth < 1024) {
        toggleMobileMenu();
      }
    });
  </script>

  <style>
    .font-outfit {
      font-family: 'Outfit', sans-serif;
    }

    .font-space-grotesk {
      font-family: 'Space Grotesk', sans-serif;
    }
  </style>
</body>

</html>