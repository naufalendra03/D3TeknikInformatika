<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Berita Acara</h2>
        </div>
        <div class="grid gap-8 lg:grid-cols-3">
            @foreach ($berita_acara as $berita)
                <a href="#" class="block">
                    <article
                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-lg hover:bg-gray-100 transition duration-200 h-full flex flex-col justify-between">
                        <div class="flex-1">
                            <!-- Menggunakan Spatie untuk mendapatkan URL gambar -->
                            <img class="h-auto max-w-full rounded-lg mb-6" src="{{ asset($berita->gambar) }}"
                                alt="image description">
                            <div class="flex justify-between items-center mb-5 text-gray-500">
                                <span class="text-sm">{{ $berita->published_date }}</span>
                            </div>
                            <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $berita->judul }}</h3>
                            <p class="mb-5 font-light text-gray-500 line-clamp-3 overflow-hidden text-ellipsis">
                                {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100) }}</p>
                        </div>
                    </article>
                </a>
            @endforeach
        </div>
    </section>
</x-layout>
