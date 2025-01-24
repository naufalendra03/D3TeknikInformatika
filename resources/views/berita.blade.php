<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Berita Acara</h2>
        </div>
        <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($berita_acara as $berita)
                <article class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-lg hover:bg-gray-100 transition duration-200 h-full flex flex-col">
                    <!-- Menampilkan gambar -->
                    <div class="bg-white rounded-lg overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                    </div>
                    
                    <div class="flex flex-col flex-grow mt-4">
                        <div class="flex justify-between items-center text-gray-500 mb-2">
                            <span class="text-sm">{{ $berita->published_date->format('d M Y') }}</span>
                        </div>
        
                        <h3 class="mb-2 text-lg font-bold text-gray-900">{{ $berita->judul }}</h3>
        
                        <p class="mb-4 font-light text-gray-500 line-clamp-3 overflow-hidden text-ellipsis">
                            {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100) }}
                        </p>
        
                        <!-- Menampilkan Nama Kontributor -->
                        <div class="text-gray-600 mb-4">
                            <span class="text-sm">Kontributor: {{ $berita->user->name }}</span>
                        </div>
        
                        <!-- Tombol Read More -->
                        <div class="mt-auto">
                            <a href="{{ route('berita.show', $berita->slug) }}" class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200">
                                Read More
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-layout>
