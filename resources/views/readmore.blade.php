<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-lg lg:px-6">
        <div class="mb-8">
            <!-- Judul Program Kerja -->
            <h1 class="text-3xl font-extrabold text-gray-800 mb-4">{{ $programKerja->judul }}</h1>

            <!-- Gambar Program Kerja -->
            <img 
                src="{{ asset('storage/' . $programKerja->gambar) }}" 
                alt="{{ $programKerja->judul }}" 
                class="rounded-lg max-w-full lg:max-w-3xl mx-auto object-contain mb-6"
            />
        </div>

        <!-- Deskripsi Program Kerja -->
        <div class="break-words overflow-hidden whitespace-normal max-w-full mx-auto text-gray-700 leading-relaxed mb-6">
            {{ $programKerja->deskripsi }}
        </div>

        <!-- Tombol Kembali -->
        <div class="mt-8">
            <a 
                href="{{ route('himpunan') }}" 
                class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition"
            >
                Kembali ke Daftar Program Kerja
            </a>
        </div>
    </section>
</x-layout>
