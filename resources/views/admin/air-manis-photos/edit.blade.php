@extends('admin.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
  <div class="max-w-3xl mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-2xl font-bold text-gray-900">Edit Foto Air Manis</h1>
      <a href="{{ route('admin.air-manis-photos.index') }}" class="text-cyan-600 hover:text-cyan-900">
        Kembali ke Daftar
      </a>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
      <form action="{{ route('admin.air-manis-photos.update', $photo) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
          <label for="title" class="block text-sm font-medium text-gray-700">Judul Foto</label>
          <input type="text" name="title" id="title" value="{{ old('title', $photo->title) }}" required
            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">
          @error('title')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
          <textarea name="description" id="description" rows="3"
            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">{{ old('description', $photo->description) }}</textarea>
          @error('description')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Foto Saat Ini</label>
          <div class="mt-2">
            <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}"
              class="w-48 h-48 object-cover rounded-lg">
          </div>
        </div>

        <div>
          <label for="image" class="block text-sm font-medium text-gray-700">Ganti Foto (Opsional)</label>
          <div class="mt-1 flex items-center">
            <div class="w-full">
              <label class="block">
                <span class="sr-only">Pilih foto</span>
                <input type="file" name="image" id="image" accept="image/*"
                  class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-cyan-50 file:text-cyan-700 hover:file:bg-cyan-100">
              </label>
            </div>
          </div>
          @error('image')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="order" class="block text-sm font-medium text-gray-700">Urutan</label>
          <input type="number" name="order" id="order" value="{{ old('order', $photo->order) }}" min="0" step="1"
            class="mt-1 block w-32 rounded-lg border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">
          @error('order')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex items-center">
          <input type="checkbox" name="is_active" id="is_active" value="1" {{ $photo->is_active ? 'checked' : '' }}
            class="h-4 w-4 text-cyan-600 focus:ring-cyan-500 border-gray-300 rounded">
          <label for="is_active" class="ml-2 block text-sm text-gray-700">
            Aktif
          </label>
        </div>

        <div class="flex justify-end">
          <button type="submit" class="bg-cyan-500 text-white px-6 py-2 rounded-lg hover:bg-cyan-600 transition-colors">
            Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection