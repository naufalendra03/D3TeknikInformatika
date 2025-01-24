<x-layout>
    <!-- Header Section -->
    <section class="">
        <div class="mb-12"><br><br>
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-700 text-center">Mitra</h2>
        </div>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <!-- Grid untuk Mitra -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($mitra as $item)
                    <div class="text-center">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" class="w-full max-w-xs mx-auto rounded-lg shadow-md">
                        <p class="mt-4 text-lg font-semibold text-gray-700">{{ $item->nama }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
