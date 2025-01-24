<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 lg:py-16">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-gray-800">Kategori Kegiatan</h2>
            <p class="text-gray-600">Pilih kategori untuk melihat dokumentasi.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($kategoris as $kategori)
                <a href="{{ route('kategori.detail', $kategori) }}" class="bg-white rounded-lg shadow hover:shadow-lg transition">
                    <img 
                        class="rounded-t-lg w-full h-48 object-cover" 
                        src="{{ asset('storage/' . $kategori->gambar) }}" 
                        alt="{{ $kategori->judul }}"
                    >
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">{{ $kategori->judul }}</h3>
                        <p class="text-sm text-gray-600">{{ $kategori->galeris_count }} Gambar</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
</x-layout>
