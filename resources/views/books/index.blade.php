<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Buku Perpustakaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            @if(session('success'))
                <div class="p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="p-6 bg-white rounded-lg shadow-md flex flex-wrap justify-between items-center gap-4">
                <!-- Tombol Tambah Buku Baru (Dikunci dengan CSS Inline agar Pasti Berwarna) -->
                <a href="{{ route('books.create') }}" class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 transition" style="background-color: #4f46e5 !important; color: #ffffff !important; padding: 8px 16px; border-radius: 6px; font-weight: 600; font-size: 14px; text-decoration: none; display: inline-block; white-space: nowrap;">
                    + Tambah Buku Baru
                </a>

                <!-- Form Pencarian & Filter -->
                <form method="GET" action="{{ route('books.index') }}" class="flex flex-wrap gap-2 items-center">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul/penulis..." class="px-3 py-2 border border-gray-300 rounded-md text-sm">
                    
                    <select name="category_id" class="px-3 py-2 border border-gray-300 rounded-md text-sm">
                        <option value="">-- Semua Kategori --</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>

                    <button type="submit" class="px-4 py-2 bg-gray-800 text-white rounded-md text-sm hover:bg-gray-700">Filter</button>
                    <a href="{{ route('books.index') }}" class="px-3 py-2 bg-gray-200 text-gray-700 rounded-md text-sm">Reset</a>
                </form>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b bg-gray-100">
                                <th class="p-3">Judul</th>
                                <th class="p-3">Kategori</th>
                                <th class="p-3">Penulis</th>
                                <th class="p-3">Penerbit</th>
                                <th class="p-3">Tahun</th>
                                <th class="p-3">Stok</th>
                                <th class="p-3 text-center" style="white-space: nowrap;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="p-3 font-semibold">{{ $book->title }}</td>
                                    <td class="p-3"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded text-xs">{{ $book->category->name }}</span></td>
                                    <td class="p-3">{{ $book->author }}</td>
                                    <td class="p-3">{{ $book->publisher }}</td>
                                    <td class="p-3">{{ $book->year }}</td>
                                    <td class="p-3">{{ $book->stock }}</td>
                                    <!-- Bagian Aksi Dirapikan Sejajar Menyamping -->
                                    <td class="p-3 text-center" style="white-space: nowrap;">
                                        <div style="display: inline-flex; align-items: center; justify-content: center; gap: 12px; white-space: nowrap;">
                                            <a href="{{ route('books.show', $book->id) }}" class="text-blue-600 hover:underline text-sm">Detail</a>
                                            <a href="{{ route('books.edit', $book->id) }}" class="text-yellow-600 hover:underline text-sm">Edit</a>
                                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline" style="display: inline; margin: 0;" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:underline text-sm">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="p-4 text-center text-gray-500">Tidak ada data buku ditemukan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>