<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Berita Acara</h2>
        </div>
        <div class="grid gap-8 lg:grid-cols-3">
            @foreach ($berita_acara as $berita)
                <a href="/publikasi/berita/{{ $berita->slug }}" class="block">
                    <article
                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-lg hover:bg-gray-100 transition duration-200 h-full flex flex-col justify-between">
                        <div class="flex-1">
                            <!-- Menampilkan gambar dari koleksi media -->
                            <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                                <img 
                                    class="rounded-t-lg w-full h-38 object-cover" 
                                    src="{{ asset('storage/' . $berita->gambar) }}" 
                                    alt="{{ $berita->judul }}"
                                >

                            <div class="flex justify-between items-center mb-5 text-gray-500">
                                <!-- Format tanggal -->
                                <span class="text-sm">{{ $berita->published_date->format('d M Y') }}</span>
                            </div>

                            <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $berita->judul }}</h3>
                            
                            <p class="mb-5 font-light text-gray-500 line-clamp-3 overflow-hidden text-ellipsis">
                                {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100) }}
                            </p>
                        </div>
                        <!-- Tombol Read More -->
                        <div class="mt-4">
                            <a 
                                href="{{ route('berita.show', $berita->slug) }}" 
                                class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200"
                            >
                                Read More
                            </a>
                        </div>
                    </article>
                </a>
            @endforeach
        </div>
    </section>
</x-layout>

