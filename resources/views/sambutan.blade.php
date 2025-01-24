<x-layout>
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 mb-6">
                    Sambutan Ketua Program Studi Teknik Informatika – D3
                </h1>
            </div>
            <div class="flex flex-col lg:flex-row items-start justify-center gap-8">
                <!-- Gambar -->
                <div class="w-64 flex-shrink-0">
                    <img 
                        src="{{ asset('storage/' . $data->gambar) }}" 
                        alt="{{ $data->nama }}" 
                        class="rounded-lg shadow-lg"
                    />
                </div>
                <!-- Deskripsi -->
                <div class="max-w-2xl text-gray-700">
                    <!-- Menampilkan deskripsi tanpa escapement -->
                    <div class="text-lg leading-relaxed mb-4 text-justify">
                        {!! $data->deskripsi !!}
                    </div>
                    <p class="text-xl font-semibold text-gray-800 mt-6">
                        {{ $data->nama }}
                    </p>
                    <p class="italic text-gray-600">{{ $data->jabatan }}</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
