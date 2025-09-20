@extends('admin.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
  <div class="max-w-3xl mx-auto">
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-2xl font-bold text-gray-900">Tambah Foto Air Manis</h1>
      <a href="{{ route('admin.air-manis-photos.index') }}" class="text-cyan-600 hover:text-cyan-900">
        Kembali ke Daftar
      </a>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden p-6">
      <form action="{{ route('admin.air-manis-photos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
          <label for="title" class="block text-sm font-medium text-gray-700">Judul Foto</label>
          <input type="text" name="title" id="title" value="{{ old('title') }}" required
            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">
          @error('title')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
          <textarea name="description" id="description" rows="3"
            class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">{{ old('description') }}</textarea>
          @error('description')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="image" class="block text-sm font-medium text-gray-700">Foto</label>
          <div class="mt-1">
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-cyan-400 transition-colors" id="image-upload-area">
              <input type="file" name="image" id="image" required accept="image/*" class="hidden">
              <label for="image" class="cursor-pointer">
                <div id="upload-prompt">
                  <div class="text-4xl mb-2">📷</div>
                  <p class="text-lg font-medium text-gray-900">Upload Foto</p>
                  <p class="text-sm text-gray-500">PNG, JPG, JPEG (Max: 2MB)</p>
                </div>
                <div id="image-preview" class="hidden">
                  <img id="preview-img" src="" alt="Preview" class="mx-auto h-32 w-auto rounded-lg object-cover">
                  <p id="file-name" class="text-lg font-medium text-gray-900 mt-2"></p>
                  <p class="text-sm text-gray-500">Klik untuk mengganti foto</p>
                </div>
              </label>
            </div>
          </div>
          @error('image')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="order" class="block text-sm font-medium text-gray-700">Urutan</label>
          <input type="number" name="order" id="order" value="{{ old('order', 0) }}" min="0" step="1"
            class="mt-1 block w-32 rounded-lg border-gray-300 shadow-sm focus:border-cyan-500 focus:ring-cyan-500">
          @error('order')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex items-center">
          <input type="checkbox" name="is_active" id="is_active" value="1" checked
            class="h-4 w-4 text-cyan-600 focus:ring-cyan-500 border-gray-300 rounded">
          <label for="is_active" class="ml-2 block text-sm text-gray-700">
            Aktif
          </label>
        </div>

        <div class="flex justify-end">
          <button type="submit" class="bg-cyan-500 text-white px-6 py-2 rounded-lg hover:bg-cyan-600 transition-colors">
            Simpan Foto
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  document.getElementById('image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
      // Validate file size (2MB = 2048KB)
      if (file.size > 2048 * 1024) {
        alert('Ukuran file terlalu besar. Maksimal 2MB.');
        this.value = '';
        return;
      }

      // Show preview
      const reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('upload-prompt').classList.add('hidden');
        document.getElementById('image-preview').classList.remove('hidden');
        document.getElementById('preview-img').src = e.target.result;
        document.getElementById('file-name').textContent = file.name;
      };
      reader.readAsDataURL(file);
    }
  });
</script>
@endsection