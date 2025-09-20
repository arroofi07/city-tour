@extends('admin.layout')

@section('title', 'Edit Tempat Wisata')

@section('content')
<div class="container mx-auto px-4 lg:px-6 py-6 lg:py-8">
  <div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="mb-6 lg:mb-8">
      <h1 class="text-2xl lg:text-3xl font-bold text-gray-800">Edit Tempat Wisata</h1>
      <p class="text-gray-600 mt-1 lg:mt-2 text-sm lg:text-base">Perbarui informasi tempat wisata</p>
    </div>

    <!-- Form Card -->
    @if($errors->has('error'))
    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6">
      <div class="flex items-center">
        <span class="text-xl mr-2">⚠️</span>
        <span>{{ $errors->first('error') }}</span>
      </div>
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-lg p-6 lg:p-8">
      <form action="{{ route('admin.tourist-spots.update', $touristSpot) }}" method="POST" enctype="multipart/form-data" class="space-y-4 lg:space-y-6">
        @csrf
        @method('PUT')

        <!-- Basic Information -->
        <div class="space-y-4 lg:space-y-6">
          <h3 class="text-lg lg:text-xl font-semibold text-gray-800 pb-2 lg:pb-3 border-b border-gray-200">
            Informasi Dasar
          </h3>

          <!-- Name -->
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
              Nama Tempat Wisata <span class="text-red-500">*</span>
            </label>
            <input type="text"
              name="name"
              id="name"
              value="{{ old('name', $touristSpot->name) }}"
              class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('name') border-red-500 @enderror"
              required>
            @error('name')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <!-- Location -->
          <div>
            <label for="location" class="block text-sm font-medium text-gray-700 mb-2">
              Lokasi <span class="text-red-500">*</span>
            </label>
            <input type="text"
              name="location"
              id="location"
              value="{{ old('location', $touristSpot->location) }}"
              placeholder="Contoh: Pantai Padang, Sumatera Barat"
              class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('location') border-red-500 @enderror"
              required>
            @error('location')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <!-- Category & Price -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-6">
            <!-- Category -->
            <div>
              <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                Kategori <span class="text-red-500">*</span>
              </label>
              <select name="category"
                id="category"
                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('category') border-red-500 @enderror"
                required>
                <option value="">Pilih Kategori</option>
                <option value="pantai" {{ old('category', $touristSpot->category) == 'pantai' ? 'selected' : '' }}>🏖️ Pantai</option>
                <option value="gunung" {{ old('category', $touristSpot->category) == 'gunung' ? 'selected' : '' }}>🏔️ Gunung</option>
                <option value="kuliner" {{ old('category', $touristSpot->category) == 'kuliner' ? 'selected' : '' }}>🍜 Kuliner</option>
                <option value="budaya" {{ old('category', $touristSpot->category) == 'budaya' ? 'selected' : '' }}>🎭 Budaya</option>
                <option value="belanja" {{ old('category', $touristSpot->category) == 'belanja' ? 'selected' : '' }}>🛍️ Belanja</option>
                <option value="taman" {{ old('category', $touristSpot->category) == 'taman' ? 'selected' : '' }}>🌳 Taman</option>
                <option value="lainnya" {{ old('category', $touristSpot->category) == 'lainnya' ? 'selected' : '' }}>📍 Lainnya</option>
              </select>
              @error('category')
              <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <!-- Price -->
            <div>
              <label for="price" class="block text-sm font-medium text-gray-700 mb-2">
                Harga Tiket
              </label>
              <div class="relative">
                <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">Rp</span>
                <input type="number"
                  name="price"
                  id="price"
                  value="{{ old('price', $touristSpot->price) }}"
                  placeholder="0"
                  min="0"
                  class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('price') border-red-500 @enderror">
              </div>
              <p class="mt-1 text-sm text-gray-500">Kosongkan atau isi 0 jika gratis</p>
              @error('price')
              <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <!-- Short Description -->
          <div>
            <label for="short_description" class="block text-sm font-medium text-gray-700 mb-2">
              Deskripsi Singkat <span class="text-red-500">*</span>
            </label>
            <input type="text"
              name="short_description"
              id="short_description"
              value="{{ old('short_description', $touristSpot->short_description) }}"
              placeholder="Deskripsi singkat untuk preview (max 150 karakter)"
              maxlength="150"
              class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('short_description') border-red-500 @enderror"
              required>
            @error('short_description')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <!-- Description -->
          <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
              Deskripsi Lengkap <span class="text-red-500">*</span>
            </label>
            <textarea name="description"
              id="description"
              rows="6"
              placeholder="Jelaskan detail tentang tempat wisata ini..."
              class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('description') border-red-500 @enderror"
              required>{{ old('description', $touristSpot->description) }}</textarea>
            @error('description')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <!-- Additional Information -->
        <div class="space-y-4 lg:space-y-6 pt-4 lg:pt-6">
          <h3 class="text-lg lg:text-xl font-semibold text-gray-800 pb-2 lg:pb-3 border-b border-gray-200">
            Informasi Tambahan
          </h3>

          <!-- Opening Hours & Contact -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-6">
            <!-- Opening Hours -->
            <div>
              <label for="opening_hours" class="block text-sm font-medium text-gray-700 mb-2">
                Jam Operasional
              </label>
              <input type="text"
                name="opening_hours"
                id="opening_hours"
                value="{{ old('opening_hours', $touristSpot->opening_hours) }}"
                placeholder="Contoh: Setiap hari, 08:00 - 17:00"
                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
            </div>

            <!-- Contact -->
            <div>
              <label for="contact" class="block text-sm font-medium text-gray-700 mb-2">
                Kontak
              </label>
              <input type="text"
                name="contact"
                id="contact"
                value="{{ old('contact', $touristSpot->contact) }}"
                placeholder="No. HP atau email"
                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
            </div>
          </div>

          <!-- Rating -->
          <div>
            <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">
              Rating
            </label>
            <input type="number"
              name="rating"
              id="rating"
              value="{{ old('rating', $touristSpot->rating) }}"
              min="0"
              max="5"
              step="0.1"
              placeholder="0.0"
              class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('rating') border-red-500 @enderror">
            <p class="mt-1 text-sm text-gray-500">Rating dari 0 sampai 5</p>
            @error('rating')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <!-- Facilities -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
              Fasilitas
            </label>
            <div class="space-y-2" id="facilities-container">
              @if(old('facilities'))
              @foreach(old('facilities', []) as $facility)
              @if($facility)
              <div class="flex gap-2">
                <input type="text"
                  name="facilities[]"
                  value="{{ $facility }}"
                  placeholder="Nama fasilitas"
                  class="flex-1 px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
                <button type="button" onclick="removeFacility(this)" class="px-4 py-3 bg-red-100 text-red-600 rounded-xl hover:bg-red-200 transition-colors">
                  Hapus
                </button>
              </div>
              @endif
              @endforeach
              @elseif($touristSpot->facilities)
              @foreach($touristSpot->facilities as $facility)
              <div class="flex gap-2">
                <input type="text"
                  name="facilities[]"
                  value="{{ $facility }}"
                  placeholder="Nama fasilitas"
                  class="flex-1 px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
                <button type="button" onclick="removeFacility(this)" class="px-4 py-3 bg-red-100 text-red-600 rounded-xl hover:bg-red-200 transition-colors">
                  Hapus
                </button>
              </div>
              @endforeach
              @endif
            </div>
            <button type="button" onclick="addFacility()" class="mt-3 px-4 py-2 bg-gray-100 text-gray-700 rounded-xl hover:bg-gray-200 transition-colors">
              + Tambah Fasilitas
            </button>
          </div>
        </div>

        <!-- Images -->
        <div class="space-y-6 pt-6">
          <h3 class="text-xl font-semibold text-gray-800 pb-3 border-b border-gray-200">
            Gambar
          </h3>

          <!-- Main Image -->
          <div>
            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
              Gambar Utama
            </label>
            @if($touristSpot->image)
            <div class="mb-4 relative">
              <img src="{{ asset('storage/' . $touristSpot->image) }}" alt="Current image"
                class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200"
                onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCIgdmlld0JveD0iMCAwIDEyOCAxMjgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIxMjgiIGhlaWdodD0iMTI4IiBmaWxsPSIjRjNGNEY2Ii8+Cjx0ZXh0IHg9IjY0IiB5PSI1NCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZmlsbD0iIzlCOUI5QiIgZm9udC1zaXplPSIxMCI+RmlsZTwvdGV4dD4KPHRleHQgeD0iNjQiIHk9IjY4IiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjOUI5QjlCIiBmb250LXNpemU9IjEwIj5UaWRhayBEaXRlbXVrYW48L3RleHQ+Cjx0ZXh0IHg9IjY0IiB5PSI4MiIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZmlsbD0iIzlCOUI5QiIgZm9udC1zaXplPSI4Ij57eyAkdG91cmlzdFNwb3QtPmltYWdlIH19PC90ZXh0Pgo8L3N2Zz4='; this.parentElement.style.opacity='0.7'; this.nextElementSibling.innerHTML='<span class=\"text-red-500\">Gambar tidak dapat dimuat</span><br><span class=\"text-xs text-gray-400\">{{ $touristSpot->image }}</span>';">
              <p class="text-sm text-gray-500 mt-2">Gambar saat ini</p>
              <button type="button"
                onclick="deleteMainImage()"
                class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs hover:bg-red-600 transition-colors"
                title="Hapus gambar">
                ✕
              </button>
              <input type="hidden" name="delete_main_image" id="delete_main_image" value="0">
            </div>
            @endif
            <input type="file"
              name="image"
              id="image"
              accept="image/*"
              class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('image') border-red-500 @enderror">
            <p class="mt-1 text-sm text-gray-500">Biarkan kosong jika tidak ingin mengubah gambar (Max: 5MB)</p>
            <div id="image-info" class="mt-2 text-sm text-blue-600 hidden"></div>
            @error('image')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
          </div>

          <!-- Gallery -->
          <div>
            <label for="gallery" class="block text-sm font-medium text-gray-700 mb-2">
              Galeri Foto
            </label>
            @if($touristSpot->gallery && count($touristSpot->gallery) > 0)
            <div class="grid grid-cols-4 gap-4 mb-4" id="gallery-container">
              @foreach($touristSpot->gallery as $index => $galleryImage)
              <div class="relative gallery-item" data-index="{{ $index }}">
                <img src="{{ asset('storage/' . $galleryImage) }}" alt="Gallery"
                  class="w-full h-24 object-cover rounded-xl border border-gray-200"
                  onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTYiIGhlaWdodD0iOTYiIHZpZXdCb3g9IjAgMCA5NiA5NiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9Ijk2IiBoZWlnaHQ9Ijk2IiBmaWxsPSIjRjNGNEY2Ii8+Cjx0ZXh0IHg9IjQ4IiB5PSI0NCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZmlsbD0iIzlCOUI5QiIgZm9udC1zaXplPSI4Ij5HYW1iYXI8L3RleHQ+Cjx0ZXh0IHg9IjQ4IiB5PSI1NCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZmlsbD0iIzlCOUI5QiIgZm9udC1zaXplPSI4Ij5UaWRhayBEaXRlbXVrYW48L3RleHQ+Cjwvc3ZnPg=='; this.style.opacity='0.6';">
                <button type="button"
                  onclick="deleteGalleryImage('{{ $index }}')"
                  class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs hover:bg-red-600 transition-colors"
                  title="Hapus gambar">
                  ✕
                </button>
                <input type="hidden" name="delete_gallery[]" value="{{ $galleryImage }}">
              </div>
              @endforeach
            </div>
            <p class="text-sm text-gray-500 mb-2">Gambar galeri saat ini (klik ✕ untuk menghapus)</p>
            <input type="hidden" name="deleted_gallery_images" id="deleted_gallery_images" value="">
            @endif
            <input type="file"
              name="gallery[]"
              id="gallery"
              accept="image/*"
              multiple
              class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all @error('gallery') border-red-500 @enderror">
            <p class="mt-1 text-sm text-gray-500">Upload multiple gambar (Max 5MB per foto). Biarkan kosong jika tidak ingin mengubah</p>
            <div id="gallery-info" class="mt-2 text-sm text-blue-600 hidden"></div>
            @error('gallery')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <!-- Status -->
        <div class="space-y-4 pt-6">
          <h3 class="text-xl font-semibold text-gray-800 pb-3 border-b border-gray-200">
            Status
          </h3>

          <div class="space-y-4">
            <!-- Is Featured -->
            <label class="flex items-center space-x-3 cursor-pointer">
              <input type="checkbox"
                name="is_featured"
                value="1"
                {{ old('is_featured', $touristSpot->is_featured) ? 'checked' : '' }}
                class="w-5 h-5 text-orange-500 rounded focus:ring-2 focus:ring-orange-500">
              <span class="text-gray-700">
                <span class="font-medium">Destinasi Unggulan</span>
                <span class="block text-sm text-gray-500">Tampilkan di halaman utama sebagai destinasi unggulan</span>
              </span>
            </label>

            <!-- Is Active -->
            <label class="flex items-center space-x-3 cursor-pointer">
              <input type="checkbox"
                name="is_active"
                value="1"
                {{ old('is_active', $touristSpot->is_active) ? 'checked' : '' }}
                class="w-5 h-5 text-orange-500 rounded focus:ring-2 focus:ring-orange-500">
              <span class="text-gray-700">
                <span class="font-medium">Aktif</span>
                <span class="block text-sm text-gray-500">Tampilkan destinasi ini di website</span>
              </span>
            </label>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center justify-between pt-6 border-t border-gray-200">
          <a href="{{ route('admin.tourist-spots.index') }}"
            class="px-6 py-3 bg-gray-100 text-gray-700 rounded-xl hover:bg-gray-200 transition-colors font-medium">
            Batal
          </a>
          <button type="submit" id="submit-btn"
            class="px-8 py-3 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-xl hover:shadow-lg transition-all font-medium">
            <span class="submit-text">Simpan Perubahan</span>
            <span class="loading-text hidden">
              <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
              Menyimpan...
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  function addFacility() {
    const container = document.getElementById('facilities-container');
    const div = document.createElement('div');
    div.className = 'flex gap-2';
    div.innerHTML = `
        <input type="text" 
               name="facilities[]" 
               placeholder="Nama fasilitas"
               class="flex-1 px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
        <button type="button" onclick="removeFacility(this)" class="px-4 py-3 bg-red-100 text-red-600 rounded-xl hover:bg-red-200 transition-colors">
            Hapus
        </button>
    `;
    container.appendChild(div);
  }

  function removeFacility(button) {
    button.parentElement.remove();
  }

  function deleteMainImage() {
    if (confirm('Yakin ingin menghapus gambar utama? Gambar akan dihapus setelah menyimpan form.')) {
      document.getElementById('delete_main_image').value = '1';
      const imageContainer = document.querySelector('.mb-4.relative');
      imageContainer.style.opacity = '0.5';
      imageContainer.style.pointerEvents = 'none';

      const overlay = document.createElement('div');
      overlay.className = 'absolute inset-0 bg-red-500 bg-opacity-20 rounded-xl flex items-center justify-center';
      overlay.innerHTML = '<span class="text-red-600 font-bold text-sm">AKAN DIHAPUS</span>';
      imageContainer.appendChild(overlay);
    }
  }

  function deleteGalleryImage(index) {
    if (confirm('Yakin ingin menghapus gambar ini dari galeri?')) {
      const galleryItem = document.querySelector(`[data-index="${index}"]`);
      const hiddenInput = galleryItem.querySelector('input[name="delete_gallery[]"]');

      // Get current deleted images list
      const deletedImagesInput = document.getElementById('deleted_gallery_images');
      let deletedImages = deletedImagesInput.value ? deletedImagesInput.value.split(',') : [];
      deletedImages.push(hiddenInput.value);
      deletedImagesInput.value = deletedImages.join(',');

      // Mark item as deleted visually
      galleryItem.style.opacity = '0.5';
      galleryItem.style.pointerEvents = 'none';

      const overlay = document.createElement('div');
      overlay.className = 'absolute inset-0 bg-red-500 bg-opacity-20 rounded-xl flex items-center justify-center';
      overlay.innerHTML = '<span class="text-red-600 font-bold text-xs">DIHAPUS</span>';
      galleryItem.appendChild(overlay);
    }
  }

  // File size validation functions (same as create form)
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

    // Insert after the images section
    const imagesSection = document.querySelector('.space-y-6.pt-6');
    if (imagesSection && imagesSection.querySelector('h3').textContent.includes('Gambar')) {
      imagesSection.after(errorDiv);
    }
  }

  // Add file validation to image inputs
  document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.getElementById('image');
    const galleryInput = document.getElementById('gallery');

    if (imageInput) {
      imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        const infoDiv = document.getElementById('image-info');

        if (file) {
          const sizeInMB = (file.size / 1024 / 1024).toFixed(2);

          if (!validateFileSize(file, 5)) {
            showFileError(`Gambar utama "${file.name}" terlalu besar. Maksimal 5MB. Ukuran saat ini: ${sizeInMB}MB`);
            this.value = '';
            infoDiv.classList.add('hidden');
            return;
          }

          // Show file info
          infoDiv.innerHTML = `📷 File terpilih: ${file.name} (${sizeInMB}MB)`;
          infoDiv.classList.remove('hidden');

          // Remove error if file is valid
          const existingError = document.querySelector('.file-size-error');
          if (existingError) existingError.remove();
        } else {
          infoDiv.classList.add('hidden');
        }
      });
    }

    if (galleryInput) {
      galleryInput.addEventListener('change', function(e) {
        const files = Array.from(e.target.files);
        const infoDiv = document.getElementById('gallery-info');

        if (files.length > 0) {
          const invalidFiles = files.filter(file => !validateFileSize(file, 5));

          if (invalidFiles.length > 0) {
            const fileList = invalidFiles.map(f => `"${f.name}" (${(f.size / 1024 / 1024).toFixed(2)}MB)`).join(', ');
            showFileError(`File galeri terlalu besar: ${fileList}. Maksimal 5MB per file.`);
            this.value = '';
            infoDiv.classList.add('hidden');
            return;
          }

          if (files.length > 20) {
            showFileError(`Terlalu banyak file galeri. Maksimal 20 foto, Anda memilih ${files.length} foto.`);
            this.value = '';
            infoDiv.classList.add('hidden');
            return;
          }

          // Show files info
          const totalSize = files.reduce((sum, file) => sum + file.size, 0);
          const totalSizeInMB = (totalSize / 1024 / 1024).toFixed(2);
          infoDiv.innerHTML = `🖼️ ${files.length} file terpilih, Total: ${totalSizeInMB}MB`;
          infoDiv.classList.remove('hidden');

          // Remove error if files are valid
          const existingError = document.querySelector('.file-size-error');
          if (existingError) existingError.remove();
        } else {
          infoDiv.classList.add('hidden');
        }
      });
    }

    // Form submission validation
    const form = document.querySelector('form');
    if (form) {
      form.addEventListener('submit', function(e) {
        let totalSize = 0;
        let fileCount = 0;

        // Check main image
        if (imageInput && imageInput.files[0]) {
          const file = imageInput.files[0];
          if (!validateFileSize(file, 5)) {
            e.preventDefault();
            showFileError('Gambar utama terlalu besar. Maksimal 5MB.');
            return;
          }
          totalSize += file.size;
          fileCount++;
        }

        // Check gallery files
        if (galleryInput && galleryInput.files.length > 0) {
          const galleryFiles = Array.from(galleryInput.files);
          const invalidFiles = galleryFiles.filter(file => !validateFileSize(file, 5));

          if (invalidFiles.length > 0) {
            e.preventDefault();
            showFileError('Beberapa file galeri terlalu besar. Maksimal 5MB per file.');
            return;
          }

          if (galleryFiles.length > 20) {
            e.preventDefault();
            showFileError('Terlalu banyak file galeri. Maksimal 20 foto.');
            return;
          }

          totalSize += galleryFiles.reduce((sum, file) => sum + file.size, 0);
          fileCount += galleryFiles.length;
        }

        // Check total size (10MB limit)
        const maxTotalSize = 10 * 1024 * 1024; // 10MB
        if (totalSize > maxTotalSize) {
          e.preventDefault();
          showFileError(`Total ukuran file terlalu besar: ${(totalSize / 1024 / 1024).toFixed(2)}MB. Maksimal 10MB untuk semua file.`);
          return;
        }

        // Show loading state
        const submitBtn = document.getElementById('submit-btn');
        const submitText = submitBtn.querySelector('.submit-text');
        const loadingText = submitBtn.querySelector('.loading-text');

        submitText.classList.add('hidden');
        loadingText.classList.remove('hidden');
        submitBtn.disabled = true;
        submitBtn.style.opacity = '0.8';
      });
    }
  });
</script>
@endsection