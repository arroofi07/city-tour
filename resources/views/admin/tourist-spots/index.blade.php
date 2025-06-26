@extends('admin.layout')

@section('title', 'Manage Destinasi Wisata')

@section('content')
<div class="space-y-8">
  <!-- Header -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between">
    <div>
      <h1 class="text-3xl font-bold text-gray-900">Destinasi Wisata</h1>
      <p class="text-gray-600 mt-1">Kelola semua tempat wisata di Padang</p>
    </div>
    <div class="mt-4 md:mt-0 flex flex-col md:flex-row gap-3">
      <a href="{{ route('admin.air-manis-photos.index') }}" class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition-all transform hover:scale-105 text-center">
        📸 Kelola Foto Air Manis
      </a>
      <a href="{{ route('admin.tourist-spots.create') }}" class="bg-gradient-to-r from-orange-500 to-pink-500 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition-all transform hover:scale-105 text-center">
        ✨ Tambah Destinasi Baru
      </a>
    </div>
  </div>

  @if(session('success'))
  <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl">
    {{ session('success') }}
  </div>
  @endif

  <!-- Stats Cards -->
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
    <div class="bg-white rounded-2xl p-4 lg:p-6 shadow-lg border border-gray-100">
      <div class="flex items-center">
        <div class="w-10 h-10 lg:w-12 lg:h-12 bg-blue-100 rounded-xl flex items-center justify-center">
          <span class="text-xl lg:text-2xl">🏖️</span>
        </div>
        <div class="ml-3 lg:ml-4">
          <p class="text-xs lg:text-sm font-medium text-gray-600">Total Destinasi</p>
          <p class="text-lg lg:text-2xl font-bold text-gray-900">{{ $spots->total() }}</p>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-2xl p-4 lg:p-6 shadow-lg border border-gray-100">
      <div class="flex items-center">
        <div class="w-10 h-10 lg:w-12 lg:h-12 bg-green-100 rounded-xl flex items-center justify-center">
          <span class="text-xl lg:text-2xl">⭐</span>
        </div>
        <div class="ml-3 lg:ml-4">
          <p class="text-xs lg:text-sm font-medium text-gray-600">Featured</p>
          <p class="text-lg lg:text-2xl font-bold text-gray-900">{{ $spots->where('is_featured', true)->count() }}</p>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-2xl p-4 lg:p-6 shadow-lg border border-gray-100">
      <div class="flex items-center">
        <div class="w-10 h-10 lg:w-12 lg:h-12 bg-purple-100 rounded-xl flex items-center justify-center">
          <span class="text-xl lg:text-2xl">👁️</span>
        </div>
        <div class="ml-3 lg:ml-4">
          <p class="text-xs lg:text-sm font-medium text-gray-600">Aktif</p>
          <p class="text-lg lg:text-2xl font-bold text-gray-900">{{ $spots->where('is_active', true)->count() }}</p>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-2xl p-4 lg:p-6 shadow-lg border border-gray-100">
      <div class="flex items-center">
        <div class="w-10 h-10 lg:w-12 lg:h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
          <span class="text-xl lg:text-2xl">🎯</span>
        </div>
        <div class="ml-3 lg:ml-4">
          <p class="text-xs lg:text-sm font-medium text-gray-600">Rating Rata-rata</p>
          <p class="text-lg lg:text-2xl font-bold text-gray-900">{{ number_format($spots->avg('rating'), 1) }}</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Table Desktop / Cards Mobile -->
  <!-- Desktop Table -->
  <div class="hidden lg:block bg-white rounded-2xl shadow-lg overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Destinasi</th>
            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @forelse($spots as $spot)
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="flex-shrink-0 h-12 w-12">
                  @if($spot->image)
                  <img class="h-12 w-12 rounded-xl object-cover" src="{{ asset('storage/' . $spot->image) }}" alt="{{ $spot->name }}">
                  @else
                  <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-orange-400 to-pink-400 flex items-center justify-center">
                    <span class="text-white text-lg">📍</span>
                  </div>
                  @endif
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">{{ $spot->name }}</div>
                  <div class="text-sm text-gray-500">📍 {{ $spot->location }}</div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                {{ $spot->category }}
              </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
              @if($spot->price > 0)
              Rp {{ number_format($spot->price, 0, ',', '.') }}
              @else
              <span class="text-green-600 font-medium">GRATIS</span>
              @endif
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <span class="text-yellow-400">⭐</span>
                <span class="ml-1 text-sm text-gray-900">{{ $spot->rating }}</span>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex space-x-2">
                @if($spot->is_active)
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                  Aktif
                </span>
                @else
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                  Nonaktif
                </span>
                @endif

                @if($spot->is_featured)
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                  Featured
                </span>
                @endif
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
              <a href="{{ route('admin.tourist-spots.show', $spot) }}" class="text-blue-600 hover:text-blue-900 transition-colors">Lihat</a>
              <a href="{{ route('admin.tourist-spots.edit', $spot) }}" class="text-orange-600 hover:text-orange-900 transition-colors">Edit</a>
              <form action="{{ route('admin.tourist-spots.destroy', $spot) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:text-red-900 transition-colors" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="6" class="px-6 py-12 text-center">
              <div class="text-gray-400">
                <span class="text-4xl block mb-4">🏝️</span>
                <p class="text-lg font-medium">Belum ada destinasi wisata</p>
                <p class="text-sm">Mulai tambahkan destinasi pertama Anda!</p>
              </div>
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    @if($spots->hasPages())
    <div class="bg-white px-6 py-4 border-t border-gray-200">
      {{ $spots->links() }}
    </div>
    @endif
  </div>

  <!-- Mobile Cards -->
  <div class="lg:hidden space-y-4">
    @forelse($spots as $spot)
    <div class="bg-white rounded-2xl shadow-lg p-4 border border-gray-100">
      <div class="flex items-start space-x-4">
        <div class="flex-shrink-0">
          @if($spot->image)
          <img class="h-16 w-16 rounded-xl object-cover" src="{{ asset('storage/' . $spot->image) }}" alt="{{ $spot->name }}">
          @else
          <div class="h-16 w-16 rounded-xl bg-gradient-to-br from-orange-400 to-pink-400 flex items-center justify-center">
            <span class="text-white text-xl">📍</span>
          </div>
          @endif
        </div>

        <div class="flex-1 min-w-0">
          <div class="flex items-start justify-between">
            <div class="flex-1">
              <h3 class="text-lg font-semibold text-gray-900 truncate">{{ $spot->name }}</h3>
              <p class="text-sm text-gray-500 mt-1">📍 {{ $spot->location }}</p>

              <div class="mt-2 flex flex-wrap items-center gap-2">
                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                  {{ $spot->category }}
                </span>

                @if($spot->is_active)
                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                  Aktif
                </span>
                @else
                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                  Nonaktif
                </span>
                @endif

                @if($spot->is_featured)
                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                  Featured
                </span>
                @endif
              </div>

              <div class="mt-3 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                  <div class="text-sm">
                    @if($spot->price > 0)
                    <span class="font-medium text-gray-900">Rp {{ number_format($spot->price, 0, ',', '.') }}</span>
                    @else
                    <span class="text-green-600 font-medium">GRATIS</span>
                    @endif
                  </div>

                  <div class="flex items-center">
                    <span class="text-yellow-400">⭐</span>
                    <span class="ml-1 text-sm text-gray-900">{{ $spot->rating }}</span>
                  </div>
                </div>

                <div class="flex items-center space-x-3">
                  <a href="{{ route('admin.tourist-spots.show', $spot) }}" class="text-blue-600 hover:text-blue-900 text-sm font-medium">Lihat</a>
                  <a href="{{ route('admin.tourist-spots.edit', $spot) }}" class="text-orange-600 hover:text-orange-900 text-sm font-medium">Edit</a>
                  <form action="{{ route('admin.tourist-spots.destroy', $spot) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900 text-sm font-medium" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @empty
    <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
      <div class="text-gray-400">
        <span class="text-4xl block mb-4">🏝️</span>
        <p class="text-lg font-medium">Belum ada destinasi wisata</p>
        <p class="text-sm">Mulai tambahkan destinasi pertama Anda!</p>
      </div>
    </div>
    @endforelse

    @if($spots->hasPages())
    <div class="mt-6">
      {{ $spots->links() }}
    </div>
    @endif
  </div>
</div>
@endsection