<x-layout>
    <section class="">
        <div class="mb-12"><br><br>
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-700 text-center">Tujuan Program Studi</h2>
        </div>
    <!-- Content Section -->
    <section class="py-16 bg-white">
        <!-- Content Section -->
        <div class="container mx-auto px-4">
            @foreach ($tujuans as $tujuan)
            <div class="mb-12 ml-44 flex items-start justify-between"> <!-- Gunakan items-start agar isi sejajar ke atas -->
                <!-- Text on the Left -->
                <div class="flex-1 mr-6">
                    {!! nl2br(preg_replace('/(\d+\.)/', "<br>$1", $tujuan->deskripsi)) !!}
                </div>
                <!-- Image on the Right -->
                <div class="flex-1">
                    <img src="{{ asset('storage/' . $tujuan->gambar) }}" alt="{{ $tujuan->judul }}" class="rounded-lg shadow-lg max-w-xs h-auto mx-auto">
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>