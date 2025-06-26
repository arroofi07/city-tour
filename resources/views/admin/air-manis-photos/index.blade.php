@extends('admin.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Kelola Foto Air Manis</h1>
    <a href="{{ route('admin.air-manis-photos.create') }}" class="bg-cyan-500 text-white px-4 py-2 rounded-lg hover:bg-cyan-600 transition-colors">
      Tambah Foto
    </a>
  </div>

  @if(session('success'))
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
    <span class="block sm:inline">{{ session('success') }}</span>
  </div>
  @endif

  <div class="bg-white rounded-xl shadow-md overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full text-left">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
            <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
            <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
            <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Urutan</th>
            <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200" id="photos-table">
          @foreach($photos as $photo)
          <tr data-id="{{ $photo->id }}" class="hover:bg-gray-50">
            <td class="px-6 py-4 whitespace-nowrap">
              <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}" class="w-20 h-20 object-cover rounded-lg">
            </td>
            <td class="px-6 py-4">{{ $photo->title }}</td>
            <td class="px-6 py-4">{{ $photo->description }}</td>
            <td class="px-6 py-4">
              <input type="number" value="{{ $photo->order }}"
                class="order-input w-20 px-2 py-1 border rounded-lg"
                min="0" step="1">
            </td>
            <td class="px-6 py-4">
              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $photo->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                {{ $photo->is_active ? 'Aktif' : 'Nonaktif' }}
              </span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
              <a href="{{ route('admin.air-manis-photos.edit', $photo) }}" class="text-cyan-600 hover:text-cyan-900">Edit</a>
              <form action="{{ route('admin.air-manis-photos.destroy', $photo) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?')">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const table = document.getElementById('photos-table');
    new Sortable(table, {
      animation: 150,
      handle: 'tr',
      onEnd: function() {
        updateOrder();
      }
    });

    const orderInputs = document.querySelectorAll('.order-input');
    orderInputs.forEach(input => {
      input.addEventListener('change', updateOrder);
    });

    function updateOrder() {
      const rows = document.querySelectorAll('#photos-table tr');
      const photos = [];

      rows.forEach((row, index) => {
        const id = row.dataset.id;
        const orderInput = row.querySelector('.order-input');
        if (id && orderInput) {
          photos.push({
            id: id,
            order: parseInt(orderInput.value)
          });
        }
      });

      fetch('{{ route("admin.air-manis-photos.update-order") }}', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify({
            photos
          })
        })
        .then(response => response.json())
        .then(data => {
          console.log('Order updated:', data);
        })
        .catch(error => {
          console.error('Error updating order:', error);
        });
    }
  });
</script>
@endpush