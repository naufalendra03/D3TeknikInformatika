<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 lg:py-16">
        <!-- Header -->
        <div class="mx-auto max-w-screen-md text-center lg:mb-16 mb-8">
            <h2 class="text-3xl font-extrabold text-gray-700 mb-4">Karya Mahasiswa</h2>
            <p class="text-gray-500">Berbagai prestasi dan karya yang telah dihasilkan oleh mahasiswa.</p>
        </div>

        <!-- Daftar Card -->
        <div class="space-y-8">
            @foreach ($karyaMahasiswa as $karya)
                <a href="{{ $karya->link }}" target="_blank" 
                   class="card block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-50 transition duration-200 p-4 opacity-0 scale-75">
                    <div class="flex items-center">
                        <!-- Gambar Mahasiswa -->
                        <img 
                            src="{{ Storage::url($karya->foto) }}" 
                            alt="Foto {{ $karya->nama }}" 
                            class="w-24 h-24 rounded-full object-cover"
                        />        
                        <!-- Garis Vertikal -->
                        <div class="w-[2px] h-16 bg-gray-300 mx-4"></div>

                        <!-- Detail Karya -->
                        <div class="space-y-1">
                            <h3 class="text-lg font-semibold text-blue-700">{{ $karya->judul }}</h3>
                            <p class="text-sm font-bold text-gray-600">{{ $karya->nama }}</p>
                            <p class="text-sm text-gray-500">{{ $karya->deskripsi }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    <!-- Tambahkan Script di bawah -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll('.card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-card');
                        observer.unobserve(entry.target); // Berhenti memantau setelah animasi selesai
                    }
                });
            }, { threshold: 0.2 });

            cards.forEach(card => observer.observe(card));
        });
    </script>

    <style>
        .card {
            transform-origin: center; /* Animasi dimulai dari tengah */
            transform: scale(0.75); /* Awalnya lebih kecil */
            opacity: 0; /* Tidak terlihat di awal */
            transition: transform 0.8s ease-out, opacity 0.8s ease-out;
        }
        .animate-card {
            transform: scale(1); /* Membesar hingga ukuran normal */
            opacity: 1; /* Menjadi terlihat */
        }
    </style>
</x-layout>
