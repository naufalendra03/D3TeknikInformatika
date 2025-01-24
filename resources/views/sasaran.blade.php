<x-layout>
    <!-- Header Section -->
    <section class="">
        <div class="mb-12"><br><br>
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-700 text-center">Sasaran Program Studi</h2>
        </div>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            @foreach ($sasarans as $sasaran)
            <div class="mb-12 flex flex-wrap md:flex-nowrap items-start justify-between" style="margin-left: 180px">
                <!-- Text on the Left -->
                <div class="flex-1 mr-6 max-w-lg break-words text-justify"> <!-- max-w-lg untuk batas lebar teks, break-words untuk memecah teks panjang -->
                    {!! nl2br(preg_replace('/(\d+\.)/', "<br>$1", $sasaran->deskripsi)) !!}
                </div>
                <!-- Image on the Right -->
                <div class="flex-1 max-w-xs" style="margin-right: 180px">
                    <img src="{{ asset('storage/' . $sasaran->gambar) }}" alt="{{ $sasaran->judul }}" class="rounded-lg shadow-lg h-auto mx-auto">
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>
