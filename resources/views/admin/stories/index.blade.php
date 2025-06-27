@extends('admin.layout')

@section('title', 'Stories Management')

@section('content')
<div class="container mx-auto px-6 py-8">
  <div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Stories Management</h1>
    <a href="{{ route('admin.stories.create') }}"
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-colors">
      <i class="fas fa-plus mr-2"></i>Add New Story
    </a>
  </div>

  @if(session('success'))
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
    {{ session('success') }}
  </div>
  @endif

  <div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subtitle</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        @forelse($stories as $story)
        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{ $story->order }}
          </td>
          <td class="px-6 py-4 whitespace-nowrap">
            @if($story->image_path)
            <img src="{{ asset('storage/' . $story->image_path) }}"
              alt="{{ $story->title }}"
              class="h-16 w-16 object-cover rounded-lg">
            @else
            <div class="h-16 w-16 bg-gray-200 rounded-lg flex items-center justify-center">
              <i class="fas fa-image text-gray-400"></i>
            </div>
            @endif
          </td>
          <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm font-medium text-gray-900">{{ $story->title }}</div>
          </td>
          <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-500">
              {{ Str::limit($story->subtitle, 30) }}
            </div>
          </td>
          <td class="px-6 py-4 whitespace-nowrap">
            @if($story->is_active)
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
              Active
            </span>
            @else
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
              Inactive
            </span>
            @endif
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
            <div class="flex space-x-2">
              <a href="{{ route('admin.stories.show', $story) }}"
                class="text-blue-600 hover:text-blue-900 bg-blue-100 hover:bg-blue-200 px-3 py-1 rounded transition-colors">
                Lihat
              </a>
              <a href="{{ route('admin.stories.edit', $story) }}"
                class="text-yellow-600 hover:text-yellow-900 bg-yellow-100 hover:bg-yellow-200 px-3 py-1 rounded transition-colors">
               edit
              </a>
              <form action="{{ route('admin.stories.destroy', $story) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                  onclick="return confirm('Are you sure you want to delete this story?')"
                  class="text-red-600 hover:text-red-900 bg-red-100 hover:bg-red-200 px-3 py-1 rounded transition-colors">
                Hapus
                </button>
              </form>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="px-6 py-4 text-center text-gray-500">
            No stories found. <a href="{{ route('admin.stories.create') }}" class="text-blue-600 hover:underline">Create your first story</a>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection