@extends('admin.layout')

@section('title', 'Edit Story')

@section('content')
<div class="container mx-auto px-6 py-8">
  <div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Edit Story</h1>
    <a href="{{ route('admin.stories.index') }}"
      class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition-colors">
      <i class="fas fa-arrow-left mr-2"></i>Back to Stories
    </a>
  </div>

  @if($errors->has('error'))
  <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6">
    <div class="flex items-center">
      <span class="text-xl mr-2">⚠️</span>
      <span>{{ $errors->first('error') }}</span>
    </div>
  </div>
  @endif

  <div class="bg-white shadow-lg rounded-lg p-6">
    <form action="{{ route('admin.stories.update', $story) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Title -->
        <div class="md:col-span-2">
          <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
          <input type="text"
            name="title"
            id="title"
            value="{{ old('title', $story->title) }}"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror"
            placeholder="Enter story title">
          @error('title')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <!-- Subtitle -->
        <div class="md:col-span-2">
          <label for="subtitle" class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
          <input type="text"
            name="subtitle"
            id="subtitle"
            value="{{ old('subtitle', $story->subtitle) }}"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('subtitle') border-red-500 @enderror"
            placeholder="Enter story subtitle (optional)">
          @error('subtitle')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <!-- Description -->
        <div class="md:col-span-2">
          <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
          <textarea name="description"
            id="description"
            rows="6"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('description') border-red-500 @enderror"
            placeholder="Enter story description">{{ old('description', $story->description) }}</textarea>
          @error('description')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <!-- Current Image -->
        @if($story->image_path)
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-2">Current Image</label>
          <img src="{{ asset('storage/' . $story->image_path) }}"
            alt="{{ $story->title }}"
            class="h-32 w-32 object-cover rounded-lg border-2 border-gray-200"
            onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCIgdmlld0JveD0iMCAwIDEyOCAxMjgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIxMjgiIGhlaWdodD0iMTI4IiBmaWxsPSIjRjNGNEY2Ii8+Cjx0ZXh0IHg9IjY0IiB5PSI1NCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZmlsbD0iIzlCOUI5QiIgZm9udC1zaXplPSIxMCI+R2FtYmFyPC90ZXh0Pgo8dGV4dCB4PSI2NCIgeT0iNjgiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGZpbGw9IiM5QjlCOUIiIGZvbnQtc2l6ZT0iMTAiPlRpZGFrIERpdGVtdWthbjwvdGV4dD4KPHRleHQgeD0iNjQiIHk9IjgyIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjOUI5QjlCIiBmb250LXNpemU9IjgiPnt7ICRzdG9yeS0+aW1hZ2VfcGF0aCB9fTwvdGV4dD4KPC9zdmc+'; this.parentElement.style.opacity='0.7';">
          <p class="text-sm text-gray-500 mt-2">{{ $story->image_path }}</p>
        </div>
        @endif

        <!-- Image -->
        <div>
          <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
            {{ $story->image_path ? 'Change Image' : 'Image' }}
          </label>
          <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition-colors">
            <input type="file" name="image" id="image" accept="image/*" class="hidden">
            <label for="image" class="cursor-pointer">
              <div id="story-edit-upload-prompt" class="space-y-2">
                <div class="text-4xl">🖼️</div>
                <p class="text-lg font-medium text-gray-900">Upload New Image</p>
                <p class="text-sm text-gray-500">JPG, PNG, GIF (Max: 2MB)</p>
              </div>
              <div id="story-edit-image-preview" class="hidden space-y-2">
                <img id="story-edit-preview-img" src="" alt="Preview" class="mx-auto h-32 w-auto rounded-lg object-cover">
                <p id="story-edit-file-name" class="text-lg font-medium text-gray-900"></p>
                <p class="text-sm text-gray-500">Klik untuk mengganti foto</p>
              </div>
            </label>
          </div>
          @error('image')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
          <p class="mt-1 text-sm text-gray-500">Leave empty to keep current image</p>
        </div>

        <!-- Order -->
        <div>
          <label for="order" class="block text-sm font-medium text-gray-700 mb-2">Order</label>
          <input type="number"
            name="order"
            id="order"
            value="{{ old('order', $story->order) }}"
            min="0"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('order') border-red-500 @enderror"
            placeholder="0">
          @error('order')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <!-- Status -->
        <div class="md:col-span-2">
          <label class="flex items-center">
            <input type="checkbox"
              name="is_active"
              value="1"
              {{ old('is_active', $story->is_active) ? 'checked' : '' }}
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
            <span class="ml-2 text-sm font-medium text-gray-700">Active</span>
          </label>
        </div>
      </div>

      <div class="flex justify-end mt-8 space-x-4">
        <a href="{{ route('admin.stories.index') }}"
          class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded-lg transition-colors">
          Cancel
        </a>
        <button type="submit"
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition-colors">
          Update Story
        </button>
      </div>
    </form>
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
        document.getElementById('story-edit-upload-prompt').classList.add('hidden');
        document.getElementById('story-edit-image-preview').classList.remove('hidden');
        document.getElementById('story-edit-preview-img').src = e.target.result;
        document.getElementById('story-edit-file-name').textContent = `${file.name} (${(file.size / 1024 / 1024).toFixed(2)}MB)`;
      };
      reader.readAsDataURL(file);
    } else {
      // Reset to upload prompt if no file selected
      document.getElementById('story-edit-upload-prompt').classList.remove('hidden');
      document.getElementById('story-edit-image-preview').classList.add('hidden');
    }
  });
</script>
@endsection