<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-md space-y-4">
                <div class="border-b pb-3">
                    <h3 class="text-2xl font-bold text-gray-800">{{ $book->title }}</h3>
                    <span class="inline-block mt-1 px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold">
                        Kategori: {{ $book->category->name }}
                    </span>
                </div>
                <div class="space-y-2 text-gray-600">
                    <p><strong>Penulis:</strong> {{ $book->author }}</p>
                    <p><strong>Penerbit:</strong> {{ $book->publisher }}</p>
                    <p><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
                    <p><strong>Jumlah Stok:</strong> {{ $book->stock }} unit</p>
                    <p><strong>Deskripsi Kategori:</strong> {{ $book->category->description }}</p>
                </div>
                <div class="pt-4 border-t flex justify-end">
                    <a href="{{ route('books.index') }}" class="px-4 py-2 bg-gray-800 text-white rounded-md">Kembali ke Daftar Buku</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>