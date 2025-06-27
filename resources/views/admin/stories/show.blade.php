@extends('admin.layout')

@section('title', 'View Story')

@section('content')
<div class="container mx-auto px-6 py-8">
  <div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-gray-800">View Story</h1>
    <div class="space-x-4">
      <a href="{{ route('admin.stories.edit', $story) }}"
        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg transition-colors">
        <i class="fas fa-edit mr-2"></i>Edit Story
      </a>
      <a href="{{ route('admin.stories.index') }}"
        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition-colors">
        <i class="fas fa-arrow-left mr-2"></i>Back to Stories
      </a>
    </div>
  </div>

  <div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <!-- Image Section -->
    @if($story->image_path)
    <div class="w-full h-64 bg-gray-200">
      <img src="{{ asset('storage/' . $story->image_path) }}"
        alt="{{ $story->title }}"
        class="w-full h-full object-cover">
    </div>
    @endif

    <div class="p-6">
      <!-- Status Badge -->
      <div class="mb-4">
        @if($story->is_active)
        <span class="px-3 py-1 text-sm font-semibold rounded-full bg-green-100 text-green-800">
          Active
        </span>
        @else
        <span class="px-3 py-1 text-sm font-semibold rounded-full bg-red-100 text-red-800">
          Inactive
        </span>
        @endif
        <span class="ml-3 text-sm text-gray-500">Order: {{ $story->order }}</span>
      </div>

      <!-- Title -->
      <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $story->title }}</h2>

      <!-- Subtitle -->
      @if($story->subtitle)
      <h3 class="text-xl text-gray-600 mb-6">{{ $story->subtitle }}</h3>
      @endif

      <!-- Description -->
      <div class="prose max-w-none">
        <h4 class="text-lg font-semibold text-gray-800 mb-3">Description</h4>
        <div class="text-gray-700 leading-relaxed whitespace-pre-wrap bg-gray-50 p-4 rounded-lg">{{ $story->description }}</div>
      </div>

      <!-- Meta Information -->
      <div class="mt-8 pt-6 border-t border-gray-200">
        <h4 class="text-lg font-semibold text-gray-800 mb-4">Meta Information</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
          <div>
            <span class="font-medium text-gray-600">Created:</span>
            <span class="text-gray-800">{{ $story->created_at->format('d M Y, H:i') }}</span>
          </div>
          <div>
            <span class="font-medium text-gray-600">Last Updated:</span>
            <span class="text-gray-800">{{ $story->updated_at->format('d M Y, H:i') }}</span>
          </div>
          <div>
            <span class="font-medium text-gray-600">Status:</span>
            <span class="text-gray-800">{{ $story->is_active ? 'Active' : 'Inactive' }}</span>
          </div>
          <div>
            <span class="font-medium text-gray-600">Display Order:</span>
            <span class="text-gray-800">{{ $story->order }}</span>
          </div>
        </div>
      </div>

      <!-- Actions -->
      <div class="mt-8 pt-6 border-t border-gray-200 flex justify-between">
        <form action="{{ route('admin.stories.destroy', $story) }}" method="POST" class="inline">
          @csrf
          @method('DELETE')
          <button type="submit"
            onclick="return confirm('Are you sure you want to delete this story?')"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg transition-colors">
            <i class="fas fa-trash mr-2"></i>Delete Story
          </button>
        </form>

        <div class="space-x-4">
          <a href="{{ route('admin.stories.edit', $story) }}"
            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg transition-colors">
            <i class="fas fa-edit mr-2"></i>Edit Story
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection