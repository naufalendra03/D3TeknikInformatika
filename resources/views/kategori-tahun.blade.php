<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-lg lg:px-8 lg:py-16">
        <!-- Judul Kategori -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-800">{{ $kategori->judul }}</h2>
            <p class="text-gray-600 text-lg">Detail dokumentasi untuk kategori ini:</p>
        </div>

        <!-- Konten Himpunan -->
        @forelse ($himpunans as $himpunan)
            <div class="mb-16">
                <!-- Gambar -->
                <div class="text-center mb-10">
                    <img 
                        class="mx-auto w-72 h-auto object-contain" 
                        src="{{ asset('storage/' . $himpunan->logo) }}" 
                        alt="{{ $himpunan->ketua }}"
                    >
                </div>

                <!-- Visi dan Misi -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
                <!-- Visi -->
                <div>
                     <h4 class="text-2xl font-bold text-gray-800 mb-4">Visi</h4>
                    <p class="text-gray-600 text-lg leading-relaxed">{!! nl2br(e($himpunan->visi)) !!}</p>
                </div>

                <!-- Misi -->
                <div>
                    <h4 class="text-2xl font-bold text-gray-800 mb-4">Misi</h4>
                    <p class="text-gray-600 text-lg leading-relaxed">{!! nl2br(e($himpunan->misi)) !!}</p>
                </div>
            </div>


                <!-- Struktur Organisasi -->
                <div class="text-center">
                    <h4 class="text-2xl font-bold text-gray-800 mb-6">Struktur Organisasi</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Ketua -->
                        <div>
                            <p class="text-gray-600 text-lg font-semibold mb-2">Ketua</p>
                            <p class="text-gray-800 text-lg">{{ $himpunan->ketua }}</p>
                        </div>
                    <!-- Sekretaris -->
                        <div>
                            <p class="text-gray-600 text-lg font-semibold mb-2">Sekretaris</p>
                            <p class="text-gray-800 text-lg">{{ $himpunan->sekretaris }}</p>
                        </div>
                    <!-- Bendahara -->
                        <div>
                            <p class="text-gray-600 text-lg font-semibold mb-2">Bendahara</p>
                            <p class="text-gray-800 text-lg">{{ $himpunan->bendahara }}</p>
                        </div>
                        </div>
                        </div>
            </div>
        @empty
            <!-- Jika Tidak Ada Data -->
            <p class="text-center text-gray-600 text-lg">
                Belum ada dokumentasi untuk kategori ini.
            </p>
        @endforelse

        <!-- Card Program Kerja -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($programKerjas as $programKerja)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <!-- Gambar -->
                    <img 
                        src="{{ asset('storage/' . $programKerja->gambar) }}" 
                        alt="{{ $programKerja->judul }}" 
                        class="w-full h-40 object-cover"
                    >
        
                    <!-- Konten -->
                    <div class="p-4">
                        <h4 class="text-lg font-bold text-gray-800">{{ $programKerja->judul }}</h4>
                        <p class="text-gray-600 text-sm mb-4">
                            {{ Str::limit($programKerja->deskripsi, 80, '...') }}
                        </p>
                        <a 
                            href="{{ route('readmore', $programKerja->slug) }}" 
                            class="text-blue-500 text-sm font-medium hover:underline"
                        >
                            Selengkapnya
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-600 text-lg">
                    Belum ada program kerja untuk kategori ini.
                </p>
            @endforelse
        </div>
        
    </section>
</x-layout>
