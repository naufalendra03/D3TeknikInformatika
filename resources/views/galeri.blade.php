<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 lg:py-16">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-gray-800">Galeri Kegiatan</h2>
            <p class="text-gray-600">Lihat berbagai dokumentasi kegiatan kami.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($galeris as $galeri)
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                    <img 
                        class="rounded-t-lg w-full h-48 object-cover" 
                        src="{{ asset('storage/' . $galeri->gambar) }}" 
                        alt="{{ $galeri->judul }}"
                    >
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">{{ $galeri->judul }}</h3>
                        <p class="text-sm text-gray-600">{{ Str::limit($galeri->deskripsi, 100) }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $galeris->links() }}
        </div>
    </section>
</x-layout>