<x-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Galeri</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($kategoris as $kategori)
                <a href="{{ route('kategori.show', $kategori->id) }}" class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('storage/' . $kategori->gambar) }}" alt="{{ $kategori->judul }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2">{{ $kategori->judul }}</h2>
                        <p class="text-gray-600">Jumlah Foto: {{ $kategori->galerinya->count() }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>
