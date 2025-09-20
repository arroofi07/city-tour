@extends('admin.layout')

@section('title', 'Tambah Destinasi Baru')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
  <!-- Header -->
  <div class="flex items-center space-x-4">
    <a href="{{ route('admin.tourist-spots.index') }}" class="w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center hover:bg-gray-200 transition-colors">
      <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
      </svg>
    </a>
    <div>
      <h1 class="text-3xl font-bold text-gray-900">Tambah Destinasi Baru</h1>
      <p class="text-gray-600">Buat destinasi wisata yang amazing! ✨</p>
    </div>
  </div>

  @if($errors->has('error'))
  <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6">
    <div class="flex items-center">
      <span class="text-xl mr-2">⚠️</span>
      <span>{{ $errors->first('error') }}</span>
    </div>
  </div>
  @endif

  <form action="{{ route('admin.tourist-spots.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 lg:space-y-8">
    @csrf

    <!-- Basic Info Card -->
    <div class="bg-white rounded-2xl shadow-lg p-6 lg:p-8">
      <h2 class="text-lg lg:text-xl font-bold text-gray-900 mb-4 lg:mb-6 flex items-center">
        <span class="w-7 h-7 lg:w-8 lg:h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
          <span class="text-base lg:text-lg">📝</span>
        </span>
        Informasi Dasar
      </h2>

      <div class="grid lg:grid-cols-2 gap-4 lg:gap-6">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Destinasi *</label>
          <input type="text" name="name" id="name" value="{{ old('name') }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
            placeholder="Pantai Padang, Masjid Raya, dll." required>
          @error('name')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Lokasi *</label>
          <input type="text" name="location" id="location" value="{{ old('location') }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
            placeholder="Jl. Veteran No. 1, Padang" required>
          @error('location')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori *</label>
          <select name="category" id="category"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" required>
            <option value="">Pilih Kategori</option>
            <option value="Pantai" {{ old('category') == 'Pantai' ? 'selected' : '' }}>🏖️ Pantai</option>
            <option value="Wisata Budaya" {{ old('category') == 'Wisata Budaya' ? 'selected' : '' }}>🏛️ Wisata Budaya</option>
            <option value="Kuliner" {{ old('category') == 'Kuliner' ? 'selected' : '' }}>🍽️ Kuliner</option>
            <option value="Alam" {{ old('category') == 'Alam' ? 'selected' : '' }}>🌿 Alam</option>
            <option value="Religi" {{ old('category') == 'Religi' ? 'selected' : '' }}>🕌 Religi</option>
            <option value="Hiburan" {{ old('category') == 'Hiburan' ? 'selected' : '' }}>🎡 Hiburan</option>
          </select>
          @error('category')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Harga Tiket (Rp)</label>
          <input type="number" name="price" id="price" value="{{ old('price', 0) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
            placeholder="0 (kosongkan jika gratis)" min="0">
          @error('price')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="mt-6">
        <label for="short_description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat *</label>
        <textarea name="short_description" id="short_description" rows="3"
          class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
          placeholder="Deskripsi menarik dalam 200 karakter..." maxlength="200" required>{{ old('short_description') }}</textarea>
        @error('short_description')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mt-6">
        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Lengkap *</label>
        <textarea name="description" id="description" rows="6"
          class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
          placeholder="Ceritakan secara detail tentang destinasi ini..." required>{{ old('description') }}</textarea>
        @error('description')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <!-- Images Card -->
    <div class="bg-white rounded-2xl shadow-lg p-6 lg:p-8">
      <h2 class="text-lg lg:text-xl font-bold text-gray-900 mb-4 lg:mb-6 flex items-center">
        <span class="w-7 h-7 lg:w-8 lg:h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
          <span class="text-base lg:text-lg">📸</span>
        </span>
        Foto Destinasi
      </h2>

      <div class="space-y-4 lg:space-y-6">
        <div>
          <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Foto Utama *</label>
          <div class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-orange-400 transition-colors">
            <input type="file" name="image" id="image" accept="image/*" class="hidden" required>
            <label for="image" class="cursor-pointer">
              <div id="main-upload-prompt" class="space-y-2">
                <div class="text-4xl">📷</div>
                <p class="text-lg font-medium text-gray-900">Upload Foto Utama</p>
                <p class="text-sm text-gray-500">PNG, JPG, JPEG, WEBP (Max: 5MB)</p>
              </div>
              <div id="main-image-preview" class="hidden space-y-2">
                <img id="main-preview-img" src="" alt="Preview" class="mx-auto h-32 w-auto rounded-lg object-cover">
                <p id="main-file-name" class="text-lg font-medium text-gray-900"></p>
                <p class="text-sm text-gray-500">Klik untuk mengganti foto</p>
              </div>
            </label>
          </div>
          @error('image')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="gallery" class="block text-sm font-medium text-gray-700 mb-2">Galeri Foto (Opsional)</label>
          <div class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-orange-400 transition-colors">
            <input type="file" name="gallery[]" id="gallery" accept="image/*" multiple class="hidden">
            <label for="gallery" class="cursor-pointer">
              <div class="space-y-2">
                <div class="text-4xl">🖼️</div>
                <p class="text-lg font-medium text-gray-900">Upload Galeri Foto</p>
                <p class="text-sm text-gray-500">Pilih beberapa foto sekaligus (Max 5MB per foto)</p>
              </div>
            </label>
          </div>
          @error('gallery.*')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>

    <!-- Additional Info Card -->
    <div class="bg-white rounded-2xl shadow-lg p-6 lg:p-8">
      <h2 class="text-lg lg:text-xl font-bold text-gray-900 mb-4 lg:mb-6 flex items-center">
        <span class="w-7 h-7 lg:w-8 lg:h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
          <span class="text-base lg:text-lg">⚙️</span>
        </span>
        Informasi Tambahan
      </h2>

      <div class="grid lg:grid-cols-2 gap-4 lg:gap-6">
        <div>
          <label for="contact" class="block text-sm font-medium text-gray-700 mb-2">Kontak</label>
          <input type="text" name="contact" id="contact" value="{{ old('contact') }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
            placeholder="08123456789 atau email@domain.com">
          @error('contact')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="opening_hours" class="block text-sm font-medium text-gray-700 mb-2">Jam Buka</label>
          <input type="text" name="opening_hours" id="opening_hours" value="{{ old('opening_hours') }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
            placeholder="08:00 - 17:00 WIB">
          @error('opening_hours')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
      </div>

      <div class="mt-4 lg:mt-6">
        <label for="facilities" class="block text-sm font-medium text-gray-700 mb-2">Fasilitas</label>
        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3">
          <label class="flex items-center space-x-2 cursor-pointer">
            <input type="checkbox" name="facilities[]" value="Toilet" class="rounded text-orange-500 focus:ring-orange-500">
            <span class="text-sm">🚻 Toilet</span>
          </label>
          <label class="flex items-center space-x-2 cursor-pointer">
            <input type="checkbox" name="facilities[]" value="Parkir" class="rounded text-orange-500 focus:ring-orange-500">
            <span class="text-sm">🅿️ Parkir</span>
          </label>
          <label class="flex items-center space-x-2 cursor-pointer">
            <input type="checkbox" name="facilities[]" value="WiFi" class="rounded text-orange-500 focus:ring-orange-500">
            <span class="text-sm">📶 WiFi</span>
          </label>
          <label class="flex items-center space-x-2 cursor-pointer">
            <input type="checkbox" name="facilities[]" value="Musholla" class="rounded text-orange-500 focus:ring-orange-500">
            <span class="text-sm">🕌 Musholla</span>
          </label>
          <label class="flex items-center space-x-2 cursor-pointer">
            <input type="checkbox" name="facilities[]" value="Restoran" class="rounded text-orange-500 focus:ring-orange-500">
            <span class="text-sm">🍽️ Restoran</span>
          </label>
          <label class="flex items-center space-x-2 cursor-pointer">
            <input type="checkbox" name="facilities[]" value="Souvenir Shop" class="rounded text-orange-500 focus:ring-orange-500">
            <span class="text-sm">🛍️ Souvenir</span>
          </label>
          <label class="flex items-center space-x-2 cursor-pointer">
            <input type="checkbox" name="facilities[]" value="ATM" class="rounded text-orange-500 focus:ring-orange-500">
            <span class="text-sm">🏧 ATM</span>
          </label>
          <label class="flex items-center space-x-2 cursor-pointer">
            <input type="checkbox" name="facilities[]" value="Pemandu Wisata" class="rounded text-orange-500 focus:ring-orange-500">
            <span class="text-sm">👨‍🏫 Tour Guide</span>
          </label>
        </div>
        @error('facilities')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mt-4 lg:mt-6 grid lg:grid-cols-2 gap-4 lg:gap-6">
        <div class="flex items-center space-x-3">
          <input type="checkbox" name="is_featured" id="is_featured" value="1"
            class="rounded text-orange-500 focus:ring-orange-500" {{ old('is_featured') ? 'checked' : '' }}>
          <label for="is_featured" class="text-sm font-medium text-gray-700">
            ⭐ Jadikan destinasi unggulan
          </label>
        </div>

        <div class="flex items-center space-x-3">
          <input type="checkbox" name="is_active" id="is_active" value="1"
            class="rounded text-orange-500 focus:ring-orange-500" {{ old('is_active', true) ? 'checked' : '' }}>
          <label for="is_active" class="text-sm font-medium text-gray-700">
            👁️ Publikasikan destinasi
          </label>
        </div>
      </div>
    </div>

    <!-- Submit Buttons -->
    <div class="flex flex-col sm:flex-row gap-3 lg:gap-4 justify-end">
      <a href="{{ route('admin.tourist-spots.index') }}"
        class="px-6 py-3 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 transition-colors text-center">
        Batal
      </a>
      <button type="submit"
        class="bg-gradient-to-r from-orange-500 to-pink-500 text-white px-8 py-3 rounded-xl font-semibold hover:shadow-lg transition-all transform hover:scale-105">
        🚀 Publikasikan Destinasi
      </button>
    </div>
  </form>
</div>

<script>
  // File size validation function
  function validateFileSize(file, maxSizeMB = 5) {
    const maxSizeBytes = maxSizeMB * 1024 * 1024;
    return file.size <= maxSizeBytes;
  }

  function showFileError(message) {
    // Remove existing error
    const existingError = document.querySelector('.file-size-error');
    if (existingError) existingError.remove();

    // Create new error message
    const errorDiv = document.createElement('div');
    errorDiv.className = 'file-size-error bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mt-4';
    errorDiv.innerHTML = `
      <div class="flex items-center">
        <span class="text-xl mr-2">⚠️</span>
        <span>${message}</span>
        <button type="button" class="ml-auto" onclick="this.parentElement.parentElement.remove();">
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    `;

    // Insert after the images card
    const imagesCard = document.querySelector('.bg-white.rounded-2xl.shadow-lg.p-8');
    if (imagesCard && imagesCard.querySelector('h2').textContent.includes('Foto Destinasi')) {
      imagesCard.after(errorDiv);
    }
  }

  // Main image validation and preview
  document.getElementById('image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
      // Validate file size
      if (!validateFileSize(file, 5)) {
        showFileError(`Gambar utama "${file.name}" terlalu besar. Maksimal 5MB. Ukuran saat ini: ${(file.size / 1024 / 1024).toFixed(2)}MB`);
        this.value = ''; // Clear the input
        return;
      }

      // Remove any existing error
      const existingError = document.querySelector('.file-size-error');
      if (existingError) existingError.remove();

      const reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('main-upload-prompt').classList.add('hidden');
        document.getElementById('main-image-preview').classList.remove('hidden');
        document.getElementById('main-preview-img').src = e.target.result;
        document.getElementById('main-file-name').textContent = `${file.name} (${(file.size / 1024 / 1024).toFixed(2)}MB)`;
      };
      reader.readAsDataURL(file);
    }
  });

  // Gallery validation and preview
  document.getElementById('gallery').addEventListener('change', function(e) {
    const files = Array.from(e.target.files);
    if (files.length > 0) {
      // Validate each file
      const invalidFiles = files.filter(file => !validateFileSize(file, 5));

      if (invalidFiles.length > 0) {
        const fileList = invalidFiles.map(f => `"${f.name}" (${(f.size / 1024 / 1024).toFixed(2)}MB)`).join(', ');
        showFileError(`File galeri terlalu besar: ${fileList}. Maksimal 5MB per file.`);
        this.value = ''; // Clear the input
        return;
      }

      // Check total files count
      if (files.length > 20) {
        showFileError(`Terlalu banyak file galeri. Maksimal 20 foto, Anda memilih ${files.length} foto.`);
        this.value = '';
        return;
      }

      // Remove any existing error
      const existingError = document.querySelector('.file-size-error');
      if (existingError) existingError.remove();

      const totalSize = files.reduce((sum, file) => sum + file.size, 0);
      const label = document.querySelector('label[for="gallery"]');
      label.innerHTML = `
            <div class="space-y-2">
                <div class="text-4xl">✅</div>
                <p class="text-lg font-medium text-gray-900">${files.length} foto terpilih</p>
                <p class="text-sm text-gray-500">Total: ${(totalSize / 1024 / 1024).toFixed(2)}MB - Klik untuk mengganti</p>
            </div>
        `;
    }
  });

  // Form submission validation
  document.querySelector('form').addEventListener('submit', function(e) {
    console.log('Form submit event triggered');
    const imageInput = document.getElementById('image');
    const galleryInput = document.getElementById('gallery');

    // Remove any existing errors
    const existingError = document.querySelector('.file-size-error');
    if (existingError) existingError.remove();

    // Check main image (only if a file is selected)
    if (imageInput.files[0] && !validateFileSize(imageInput.files[0], 5)) {
      e.preventDefault();
      showFileError('Gambar utama terlalu besar. Silakan pilih file yang lebih kecil dari 5MB.');
      return;
    }

    // Check gallery files (only if files are selected)
    const galleryFiles = Array.from(galleryInput.files);
    if (galleryFiles.length > 0) {
      const invalidGalleryFiles = galleryFiles.filter(file => !validateFileSize(file, 5));

      if (invalidGalleryFiles.length > 0) {
        e.preventDefault();
        showFileError('Beberapa file galeri terlalu besar. Maksimal 5MB per file.');
        return;
      }

      // Check total file count
      if (galleryFiles.length > 20) {
        e.preventDefault();
        showFileError('Terlalu banyak file galeri. Maksimal 20 foto.');
        return;
      }
    }

    // Let Laravel validation handle required image check
    // JavaScript validation only checks file size, not requirement

    // Show loading state on submit button
    const submitBtn = this.querySelector('button[type="submit"]');
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = '⏳ Menyimpan...';

      // Re-enable button after 10 seconds in case of error
      setTimeout(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '🚀 Publikasikan Destinasi';
      }, 10000);
    }

    console.log('Form validation passed, submitting...');
  });
</script>
@endsection