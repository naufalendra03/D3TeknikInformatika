<!-- resources/views/berita-acara/show.blade.php -->
<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-lg lg:px-6">
        <div class="mb-8">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-4">{{ $berita->judul }}</h1>
            <p class="text-gray-500 text-sm mb-6">Dipublikasikan pada {{ $berita->published_date->format('d M Y') }}</p>
            <img 
                src="{{ asset('storage/' . $berita->gambar) }}" 
                alt="{{ $berita->judul }}" 
                class="rounded-lg max-w-full lg:max-w-3xl mx-auto object-contain mb-6"
            >
        </div>
        <div class="text-gray-700 leading-relaxed">
            {!! nl2br(e($berita->isi)) !!}
        </div>
        <div class="mt-8">
            <a 
                href="{{ url()->previous() }}" 
                class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition"
            >
                Kembali
            </a>
        </div>
    </section>
</x-layout>

