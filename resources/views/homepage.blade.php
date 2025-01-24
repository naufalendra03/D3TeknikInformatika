<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-8 lg:px-6">
            @if ($homepageContent)
                <div class="font-light text-gray-500 sm:text-lg">
                    <h1 class="mb-4 lg:text-5xl text-4xl tracking-tight font-extrabold text-primary-700 text-center lg:text-start">
                        {{ $homepageContent->title }}
                    </h1>
                    <p class="mb-4 text-justify">
                        {{ $homepageContent->description }}
                    </p>
                    <a href="https://pmb.dinus.ac.id/" target="_blank" class="inline-flex items-center justify-center text-white bg-primary-700 hover:bg-primary-900 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-7 py-3 text-center lg:inline-flex lg:w-auto w-full mb-2 lg:mb-0 transition">
                        Daftar Disini
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <img id="image1" class="w-full rounded-lg transition-opacity duration-1000" src="{{ asset('storage/' . $homepageContent->images[0] ?? '') }}" alt="Image 1">
                    <img id="image2" class="w-full rounded-lg transition-opacity duration-1000" src="{{ asset('storage/' . $homepageContent->images[1] ?? '') }}" alt="Image 2">
                </div>
            @endif
        </div>
    </section>

    <script>
        const images = @json($homepageContent->images);
        const image1 = document.getElementById('image1');
        const image2 = document.getElementById('image2');
        let currentIndexes = [0, 1]; // Indeks awal gambar yang ditampilkan

        // Fungsi untuk mengganti gambar
        const updateImages = () => {
            currentIndexes = currentIndexes.map(index => (index + 2) % images.length); // Perbarui indeks
            image1.style.opacity = 0; // Mulai transisi opacity untuk gambar 1
            image2.style.opacity = 0; // Mulai transisi opacity untuk gambar 2

            setTimeout(() => {
                image1.src = `/storage/${images[currentIndexes[0]]}`; // Perbarui src gambar 1
                image2.src = `/storage/${images[currentIndexes[1]]}`; // Perbarui src gambar 2
                image1.style.opacity = 1; // Kembalikan opacity gambar 1
                image2.style.opacity = 1; // Kembalikan opacity gambar 2
            }, 1000); // Tunggu transisi selesai sebelum mengganti gambar
        };

        // Jalankan fungsi setiap 5 detik
        setInterval(updateImages, 5000);
    </script>
    

    
    <section class="">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-12 lg:px-6">
            <h2 class="mb-8 lg:mb-14 text-3xl tracking-tight font-extrabold text-gray-700 text-center">Statistik Program Studi Teknik Informatika - D3</h2>
            <div class="grid max-w-screen-lg gap-8 mx-auto text-primary-700 sm:grid-cols-4">
                <div class="flex flex-col items-center justify-center">
                    <dt class="text-4xl mb-2 md:text-5xl  font-extrabold">Unggul</dt>
                    <dd class="font-light text-gray-500">Akreditasi</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="text-4xl mb-0 md:mb-2 md:text-5xl font-extrabold">130+</dt>
                    <dd class="font-light text-gray-500">Mahasiswa</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="text-4xl mb-0 md:mb-2 md:text-5xl  font-extrabold">6</dt>
                    <dd class="font-light text-gray-500">Tenaga Pengajar</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="text-4xl mb-0 md:mb-2 md:text-5xl  font-extrabold">200+</dt>
                    <dd class="font-light text-gray-500">Lulusan</dd>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class=" mb-8 lg:mb-16">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-700 text-center">Profil Lulusan Teknik Informatika  - D3</h2>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-6 md:space-y-0 bg-primary-600 p-8 rounded-lg">
                <div class="flex flex-col items-center justify-center text-center md:items-start md:justify-start md:text-start">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-8 lg:h-8"  xmlns="http://www.w3.org/2000/svg" width="192" height="192" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M19 4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zm0 6H5v7a1 1 0 0 0 .883.993L6 18h12a1 1 0 0 0 .993-.883L19 17zM6 6a1 1 0 1 0 0 2a1 1 0 0 0 0-2m3 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2m3 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2"/></g></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Web Developer</h3>
                    <p class="text-gray-300 text-justify">Profesional yang merancang, mengembangkan, dan memelihara situs web sesuai kebutuhan klien menggunakan teknologi web dan bahasa pemrograman.</p>
                </div>
                <div class="flex flex-col items-center justify-center text-center md:items-start md:justify-start md:text-start">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-8 lg:h-8" xmlns="http://www.w3.org/2000/svg" width="192" height="192" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M5 5a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v14a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3zm3-1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm1.5 2a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1m1 11.5a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0"/></g></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Mobile Apps Developer</h3>
                    <p class="text-gray-300 text-justify">Profesional yang merancang, mengembangkan, dan memelihara aplikasi untuk perangkat mobile seperti smartphone dan tablet.</p>
                </div>
                <div class="flex flex-col items-center justify-center text-center md:items-start md:justify-start md:text-start">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-7 lg:h-7" xmlns="http://www.w3.org/2000/svg" width="192" height="192" viewBox="0 0 20 20"><path fill="currentColor" d="M10 20a10 10 0 1 1 0-20a10 10 0 0 1 0 20m7.75-8a8 8 0 0 0 0-4h-3.82a29 29 0 0 1 0 4zm-.82 2h-3.22a14.4 14.4 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14m-8.85-2h3.84a24.6 24.6 0 0 0 0-4H8.08a24.6 24.6 0 0 0 0 4m.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4zm-6.08-2h3.82a29 29 0 0 1 0-4H2.25a8 8 0 0 0 0 4m.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6M3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6"/></svg>                 
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Network Engineer</h3>
                    <p class="text-gray-300 text-justify">Profesional yang merancang, mengelola, dan memelihara jaringan komputer, termasuk konfigurasi perangkat dan keamanan jaringan.</p>
                </div>
                <div class="flex flex-col items-center justify-center text-center md:items-start md:justify-start md:text-start">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-7 lg:h-7" xmlns="http://www.w3.org/2000/svg" width="192" height="192" viewBox="0 0 24 24"><path fill="currentColor" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5Zm0 3.9a3 3 0 1 1-3 3a3 3 0 0 1 3-3m0 7.9c2 0 6 1.09 6 3.08a7.2 7.2 0 0 1-12 0c0-1.99 4-3.08 6-3.08"/></svg>            
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Web Administator</h3>
                    <p class="text-gray-300 text-justify">Profesional yang mengelola infrastruktur teknis dan konten situs web, termasuk server, keamanan, dan manajemen konten.</p>
                </div>
                <div class="flex flex-col items-center justify-center text-center md:items-start md:justify-start md:text-start">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-8 lg:h-8" xmlns="http://www.w3.org/2000/svg" width="192" height="192" viewBox="0 0 24 24"><path fill="currentColor" d="M12.02 11.02q3.346 0 5.672-1.022q2.327-1.021 2.327-2.479T17.692 5.04T12.02 4.02T6.337 5.04T4 7.52t2.337 2.478t5.682 1.021M12 12.558q1.217 0 2.476-.194q1.259-.193 2.366-.572t1.95-.939t1.227-1.295v2.961q-.384.735-1.227 1.295q-.842.561-1.95.94q-1.107.379-2.366.572T12 15.519t-2.476-.193t-2.357-.572t-1.94-.94T4 12.52V9.558q.384.734 1.227 1.295q.842.56 1.94.94q1.098.378 2.357.572t2.476.193m0 4.5q1.217 0 2.476-.193q1.258-.194 2.366-.573t1.95-.939t1.227-1.295V17q-.384.735-1.227 1.295q-.842.56-1.95.94q-1.107.379-2.366.572T12 20t-2.476-.193t-2.357-.572t-1.94-.94T4 17v-2.942q.385.734 1.227 1.295t1.94.94t2.357.572t2.476.193"/></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Database Administator</h3>
                    <p class="text-gray-300 text-justify">Profesional IT yang mengelola dan memelihara database, mencakup desain, instalasi, dan keamanan data.</p>
                </div>
                <div class="flex flex-col items-center justify-center text-center md:items-start md:justify-start md:text-start">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-8 lg:h-8" xmlns="http://www.w3.org/2000/svg" width="192" height="192" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M2 4a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2v11a2 2 0 0 1-2 2h-5.055l2.293 2.293a1 1 0 0 1-1.414 1.414l-2.828-2.828l-2.829 2.828a1 1 0 0 1-1.414-1.414L10.046 18H5a2 2 0 0 1-2-2V5a1 1 0 0 1-1-1m14.243 3.172a1 1 0 0 1 1.414 1.414l-4.236 4.236a1.01 1.01 0 0 1-1.428 0L9.88 10.709l-2.121 2.12a1 1 0 0 1-1.415-1.413l2.822-2.822a1.01 1.01 0 0 1 1.428 0l2.113 2.113z"/></g></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Technopreneur</h3>
                    <p class="text-gray-300 text-justify">Pengusaha yang menggabungkan visi bisnis dengan teknologi untuk menciptakan produk atau layanan inovatif yang menghasilkan nilai di pasar.</p>
                </div>
            </div>
        </div>
      </section>
      <section class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Berita Terbaru</h2>
        </div>
        <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($berita_acara as $berita)
                <article
                    class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-lg hover:bg-gray-100 transition duration-200 h-full flex flex-col">
                    <!-- Menampilkan gambar dari koleksi media -->
                    <div class="bg-white rounded-lg overflow-hidden">
                        <img 
                            class="w-full h-full object-cover" 
                            src="{{ asset('storage/' . $berita->gambar) }}" 
                            alt="{{ $berita->judul }}">
                    </div>
                    
                    <div class="flex flex-col flex-grow mt-4">
                        <div class="flex justify-between items-center text-gray-500 mb-2">
                            <!-- Format tanggal -->
                            <span class="text-sm">{{ $berita->published_date->format('d M Y') }}</span>
                        </div>
        
                        <h3 class="mb-2 text-lg font-bold text-gray-900">{{ $berita->judul }}</h3>
        
                        <p class="mb-4 font-light text-gray-500 line-clamp-3 overflow-hidden text-ellipsis">
                            {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100) }}
                        </p>
        
                        <!-- Tombol Read More -->
                        <div class="mt-auto">
                            <a 
                                href="{{ route('berita.show', $berita->slug) }}" 
                                class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200">
                                Read More
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <section class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Program Kerja Himpunan</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($programKerjas as $programKerja)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <!-- Gambar -->
                        <img 
                            src="{{ asset('storage/' . $programKerja->gambar) }}" 
                            alt="{{ $programKerja->judul }}" 
                            class="w-full h-64 object-cover"
                        >
            
                        <!-- Konten -->
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-gray-800">{{ $programKerja->judul }}</h4>
                            <p class="text-gray-600 text-base mb-4 line-clamp-2">
                                {{ strip_tags($programKerja->deskripsi) }}
                            </p>
                            <a 
                                href="{{ route('programkerja.show', $programKerja->slug) }}" 
                                class="text-blue-500 text-base font-medium hover:underline"
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