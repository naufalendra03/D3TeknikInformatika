<x-layout>

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Kategori: {{ $kategori->judul }}</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($kategori->galeris as $galeri)
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">{{ $galeri->judul }}</h2>
                <p class="text-gray-700">{{ $galeri->deskripsi }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>


</x-layout>
