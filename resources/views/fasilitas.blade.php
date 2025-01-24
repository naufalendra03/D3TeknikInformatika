<x-layout>
    <!-- Header Section -->
    <section class="">
        <div class="mb-12"><br><br>
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-700 text-center">Fasilitas Program Studi</h2>
        </div>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <!-- Grid untuk Gambar -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($fasilitas as $item)
                    <!-- Card Item -->
                    <div class="bg-white shadow-md rounded-lg p-3 max-w-sm mx-auto"> <!-- Ukuran card diperbesar -->
                        <!-- Image -->
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="rounded-lg shadow-lg w-full h-56 object-cover mx-auto"> <!-- Ukuran gambar diperbesar -->
                        </div>
                        <!-- Text -->
                        <div class="text-center">
                            <h2 class="text-lg font-bold text-black mb-2">{{ $item->judul }}</h2> <!-- Judul tetap ditampilkan -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
