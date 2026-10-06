<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Buku Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Judul Buku</label>
                        <input type="text" name="title" required class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="category_id" required class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Penulis</label>
                        <input type="text" name="author" required class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Penerbit</label>
                        <input type="text" name="publisher" required class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tahun Terbit</label>
                        <input type="number" name="year" required class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Stok</label>
                        <input type="number" name="stock" required class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="flex justify-end gap-2 pt-4">
                        <a href="{{ route('books.index') }}" class="px-4 py-2 bg-gray-300 rounded-md">Batal</a>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>