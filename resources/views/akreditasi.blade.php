<x-layout>
    <!-- Header Section -->
    <section class="">
        <div class="mb-12"><br><br>
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-700 text-center">Akreditasi Program Studi</h2>
        </div>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <!-- Loop untuk Menampilkan Gambar Akreditasi -->
            @foreach ($akreditasi as $item)
                <div class="flex justify-center mb-8">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="Sertifikat Akreditasi" class="rounded-lg shadow-lg max-w-full h-auto">
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
