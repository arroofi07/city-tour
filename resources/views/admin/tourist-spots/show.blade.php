@extends('admin.layout')

@section('title', 'Detail Tempat Wisata')

@section('content')
<div class="container mx-auto px-4 lg:px-6 py-4 lg:py-8">
  <div class="max-w-6xl mx-auto">
    <!-- Header -->
    <div class="mb-6 lg:mb-8">
      <div class="mb-4">
        <h1 class="text-2xl lg:text-3xl font-bold text-gray-800">Detail Tempat Wisata</h1>
        <p class="text-gray-600 mt-2">Informasi lengkap {{ $touristSpot->name }}</p>
      </div>

      <!-- Action Buttons - Responsive Layout -->
      <div class="flex flex-col sm:flex-row gap-3">
        <a href="{{ route('admin.tourist-spots.edit', $touristSpot) }}"
          class="flex-1 sm:flex-none px-4 lg:px-6 py-3 bg-blue-500 text-white rounded-xl hover:bg-blue-600 transition-colors font-medium flex items-center justify-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
          </svg>
          <span class="hidden sm:inline">Edit</span>
          <span class="sm:hidden">Edit Destinasi</span>
        </a>
        <a href="{{ route('spots.show', $touristSpot) }}"
          target="_blank"
          class="flex-1 sm:flex-none px-4 lg:px-6 py-3 bg-green-500 text-white rounded-xl hover:bg-green-600 transition-colors font-medium flex items-center justify-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
          </svg>
          <span class="hidden sm:inline">Lihat di Website</span>
          <span class="sm:hidden">Preview</span>
        </a>
        <a href="{{ route('admin.tourist-spots.index') }}"
          class="flex-1 sm:flex-none px-4 lg:px-6 py-3 bg-gray-200 text-gray-700 rounded-xl hover:bg-gray-300 transition-colors font-medium text-center">
          Kembali
        </a>
      </div>
    </div>

    <!-- Status Cards -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-6 lg:mb-8">
      <div class="bg-white rounded-2xl p-4 lg:p-6 shadow-lg">
        <div class="flex items-center justify-between mb-2 lg:mb-4">
          <div class="w-10 h-10 lg:w-12 lg:h-12 bg-blue-100 rounded-xl flex items-center justify-center">
            <span class="text-xl lg:text-2xl">📍</span>
          </div>
          <span class="text-xs lg:text-sm font-medium text-gray-500 capitalize">{{ $touristSpot->category }}</span>
        </div>
        <h3 class="text-sm lg:text-lg font-semibold text-gray-800">Kategori</h3>
      </div>

      <div class="bg-white rounded-2xl p-4 lg:p-6 shadow-lg">
        <div class="flex items-center justify-between mb-2 lg:mb-4">
          <div class="w-10 h-10 lg:w-12 lg:h-12 bg-green-100 rounded-xl flex items-center justify-center">
            <span class="text-xl lg:text-2xl">💰</span>
          </div>
          <span class="text-xs lg:text-sm font-medium text-gray-500">
            @if($touristSpot->price > 0)
            Rp {{ number_format($touristSpot->price, 0, ',', '.') }}
            @else
            Gratis
            @endif
          </span>
        </div>
        <h3 class="text-sm lg:text-lg font-semibold text-gray-800">Harga</h3>
      </div>

      <div class="bg-white rounded-2xl p-4 lg:p-6 shadow-lg">
        <div class="flex items-center justify-between mb-2 lg:mb-4">
          <div class="w-10 h-10 lg:w-12 lg:h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
            <span class="text-xl lg:text-2xl">⭐</span>
          </div>
          <span class="text-xs lg:text-sm font-medium text-gray-500">{{ number_format($touristSpot->rating, 1) }}/5.0</span>
        </div>
        <h3 class="text-sm lg:text-lg font-semibold text-gray-800">Rating</h3>
      </div>

      <div class="bg-white rounded-2xl p-4 lg:p-6 shadow-lg">
        <div class="flex items-center justify-between mb-2 lg:mb-4">
          <div class="w-10 h-10 lg:w-12 lg:h-12 {{ $touristSpot->is_active ? 'bg-green-100' : 'bg-red-100' }} rounded-xl flex items-center justify-center">
            <span class="text-xl lg:text-2xl">{{ $touristSpot->is_active ? '✅' : '❌' }}</span>
          </div>
          <span class="text-xs lg:text-sm font-medium {{ $touristSpot->is_active ? 'text-green-600' : 'text-red-600' }}">
            {{ $touristSpot->is_active ? 'Aktif' : 'Nonaktif' }}
          </span>
        </div>
        <h3 class="text-sm lg:text-lg font-semibold text-gray-800">Status</h3>
      </div>
    </div>

    <!-- Mobile Image (Only on mobile) -->
    <div class="lg:hidden mb-6">
      @if($touristSpot->image)
      <div class="aspect-video rounded-xl overflow-hidden">
        <img src="{{ asset('storage/' . $touristSpot->image) }}"
          alt="{{ $touristSpot->name }}"
          class="w-full h-full object-cover">
      </div>
      @else
      <div class="aspect-video rounded-xl bg-gray-100 flex items-center justify-center">
        <span class="text-6xl text-gray-400">🏝️</span>
      </div>
      @endif
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
      <!-- Main Content -->
      <div class="lg:col-span-2 space-y-6 lg:space-y-8">
        <!-- Basic Information -->
        <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg">
          <h2 class="text-xl lg:text-2xl font-bold text-gray-800 mb-4 lg:mb-6">Informasi Dasar</h2>

          <div class="space-y-4">
            <div>
              <h3 class="text-sm font-medium text-gray-500 mb-1">Nama Tempat Wisata</h3>
              <p class="text-lg text-gray-800 font-semibold">{{ $touristSpot->name }}</p>
            </div>

            <div>
              <h3 class="text-sm font-medium text-gray-500 mb-1">Lokasi</h3>
              <p class="text-gray-800">{{ $touristSpot->location }}</p>
            </div>

            <div>
              <h3 class="text-sm font-medium text-gray-500 mb-1">Deskripsi Singkat</h3>
              <p class="text-gray-800">{{ $touristSpot->short_description }}</p>
            </div>

            <div>
              <h3 class="text-sm font-medium text-gray-500 mb-1">Deskripsi Lengkap</h3>
              <div class="text-gray-800 prose max-w-none">
                {!! nl2br(e($touristSpot->description)) !!}
              </div>
            </div>
          </div>
        </div>

        <!-- Facilities -->
        @if($touristSpot->facilities && count($touristSpot->facilities) > 0)
        <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg">
          <h2 class="text-xl lg:text-2xl font-bold text-gray-800 mb-4 lg:mb-6">Fasilitas</h2>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            @foreach($touristSpot->facilities as $facility)
            <div class="flex items-center gap-2 bg-gray-50 px-4 py-3 rounded-xl">
              <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700 text-sm lg:text-base">{{ $facility }}</span>
            </div>
            @endforeach
          </div>
        </div>
        @endif

        <!-- Gallery -->
        @if($touristSpot->gallery && count($touristSpot->gallery) > 0)
        <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg">
          <h2 class="text-xl lg:text-2xl font-bold text-gray-800 mb-4 lg:mb-6">Galeri Foto</h2>

          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 lg:gap-4">
            @foreach($touristSpot->gallery as $image)
            <div class="aspect-square rounded-xl overflow-hidden cursor-pointer group">
              <img src="{{ asset('storage/' . $image) }}"
                alt="Gallery"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
            </div>
            @endforeach
          </div>
        </div>
        @endif

        <!-- Mobile Additional Info -->
        <div class="lg:hidden bg-white rounded-2xl p-6 shadow-lg">
          <h2 class="text-xl font-bold text-gray-800 mb-4">Informasi Tambahan</h2>

          <div class="space-y-4">
            @if($touristSpot->opening_hours)
            <div>
              <h3 class="text-sm font-medium text-gray-500 mb-1">Jam Operasional</h3>
              <p class="text-gray-800">{{ $touristSpot->opening_hours }}</p>
            </div>
            @endif

            @if($touristSpot->contact)
            <div>
              <h3 class="text-sm font-medium text-gray-500 mb-1">Kontak</h3>
              <p class="text-gray-800">{{ $touristSpot->contact }}</p>
            </div>
            @endif

            <div>
              <h3 class="text-sm font-medium text-gray-500 mb-1">Status Unggulan</h3>
              <p class="text-gray-800">
                @if($touristSpot->is_featured)
                <span class="inline-flex items-center gap-1 px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-sm font-medium">
                  <span>🔥</span> Destinasi Unggulan
                </span>
                @else
                <span class="inline-flex items-center gap-1 px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm font-medium">
                  Destinasi Regular
                </span>
                @endif
              </p>
            </div>
          </div>
        </div>

        <!-- Mobile Action Buttons -->
        <div class="lg:hidden space-y-3">
          <a href="{{ route('admin.tourist-spots.edit', $touristSpot) }}"
            class="w-full px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl hover:shadow-lg transition-all font-medium text-center block">
            Edit Destinasi
          </a>

          <form action="{{ route('admin.tourist-spots.destroy', $touristSpot) }}"
            method="POST"
            onsubmit="return confirm('Yakin ingin menghapus destinasi ini?')">
            @csrf
            @method('DELETE')
            <button type="submit"
              class="w-full px-6 py-3 bg-red-500 text-white rounded-xl hover:bg-red-600 transition-colors font-medium">
              Hapus Destinasi
            </button>
          </form>
        </div>
      </div>

      <!-- Desktop Sidebar (Hidden on mobile) -->
      <div class="hidden lg:block lg:col-span-1 space-y-8">
        <!-- Main Image -->
        <div class="bg-white rounded-2xl p-8 shadow-lg">
          <h2 class="text-xl font-bold text-gray-800 mb-4">Gambar Utama</h2>

          @if($touristSpot->image)
          <div class="aspect-video rounded-xl overflow-hidden">
            <img src="{{ asset('storage/' . $touristSpot->image) }}"
              alt="{{ $touristSpot->name }}"
              class="w-full h-full object-cover">
          </div>
          @else
          <div class="aspect-video rounded-xl bg-gray-100 flex items-center justify-center">
            <span class="text-6xl text-gray-400">🏝️</span>
          </div>
          @endif
        </div>

        <!-- Additional Info -->
        <div class="bg-white rounded-2xl p-8 shadow-lg">
          <h2 class="text-xl font-bold text-gray-800 mb-4">Informasi Tambahan</h2>

          <div class="space-y-4">
            @if($touristSpot->opening_hours)
            <div>
              <h3 class="text-sm font-medium text-gray-500 mb-1">Jam Operasional</h3>
              <p class="text-gray-800">{{ $touristSpot->opening_hours }}</p>
            </div>
            @endif

            @if($touristSpot->contact)
            <div>
              <h3 class="text-sm font-medium text-gray-500 mb-1">Kontak</h3>
              <p class="text-gray-800">{{ $touristSpot->contact }}</p>
            </div>
            @endif

            <div>
              <h3 class="text-sm font-medium text-gray-500 mb-1">Status Unggulan</h3>
              <p class="text-gray-800">
                @if($touristSpot->is_featured)
                <span class="inline-flex items-center gap-1 px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-sm font-medium">
                  <span>🔥</span> Destinasi Unggulan
                </span>
                @else
                <span class="inline-flex items-center gap-1 px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm font-medium">
                  Destinasi Regular
                </span>
                @endif
              </p>
            </div>
          </div>
        </div>

        <!-- Metadata -->
        <div class="bg-gray-50 rounded-2xl p-6">
          <h3 class="text-sm font-medium text-gray-500 mb-3">Metadata</h3>

          <div class="space-y-2 text-sm">
            <div class="flex justify-between">
              <span class="text-gray-500">ID</span>
              <span class="text-gray-800 font-mono">#{{ $touristSpot->id }}</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500">Dibuat</span>
              <span class="text-gray-800">{{ $touristSpot->created_at->format('d M Y, H:i') }}</span>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500">Terakhir Update</span>
              <span class="text-gray-800">{{ $touristSpot->updated_at->format('d M Y, H:i') }}</span>
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="space-y-3">
          <a href="{{ route('admin.tourist-spots.edit', $touristSpot) }}"
            class="w-full px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl hover:shadow-lg transition-all font-medium text-center block">
            Edit Destinasi
          </a>

          <form action="{{ route('admin.tourist-spots.destroy', $touristSpot) }}"
            method="POST"
            onsubmit="return confirm('Yakin ingin menghapus destinasi ini?')">
            @csrf
            @method('DELETE')
            <button type="submit"
              class="w-full px-6 py-3 bg-red-500 text-white rounded-xl hover:bg-red-600 transition-colors font-medium">
              Hapus Destinasi
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection