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
            class="h-32 w-32 object-cover rounded-lg border">
        </div>
        @endif

        <!-- Image -->
        <div>
          <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
            {{ $story->image_path ? 'Change Image' : 'Image' }}
          </label>
          <input type="file"
            name="image"
            id="image"
            accept="image/*"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('image') border-red-500 @enderror">
          @error('image')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
          <p class="mt-1 text-sm text-gray-500">Accepted formats: JPG, PNG, GIF. Max size: 2MB</p>
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
@endsection