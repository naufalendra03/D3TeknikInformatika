<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="https://dinus.ac.id/" target="_blank" class="flex items-center">
                <img src="{{asset('img/logodti.png')}}" class="mr-3 h-12 sm:h-16" alt="D3-TI Logo" />
            </a>
            <div class="flex items-center lg:order-2">
                <a href="/login_admin" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2">Log in</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <!-- Main Navigation Links -->
                    <li>
                        <a href="/" class="block py-2 pr-4 pl-3 rounded {{ Request::is('/') ? 'text-primary-700 font-bold' : 'text-gray-700 hover:text-primary-700 hover:font-bold' }} lg:p-0 transition">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <button 
                            id="dropdownProfileButton" 
                            data-dropdown-toggle="dropdownProfile" 
                            class="block py-2 pr-4 pl-3 rounded lg:p-0 transition font-medium {{ Request::is('profile/*') ? 'text-primary-700 font-bold' : 'text-gray-700 hover:text-primary-700 hover:font-bold' }}">
                            Profil
                            <svg class="w-4 h-4 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="dropdownProfile" class="hidden z-10 w-44 bg-white rounded-lg shadow">
                            <ul class="py-1 text-sm text-gray-700">
                                <li><a href="/profile/sambutan" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profile/sambutan') ? 'font-bold text-primary-700' : '' }}">Sambutan Ketua Progdi</a></li>
                                <li><a href="/profile/visi_misi" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profile/visi_misi') ? 'font-bold text-primary-700' : '' }}">Visi dan Misi</a></li>
                                <li><a href="/profile/tujuan" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profile/tujuan') ? 'font-bold text-primary-700' : '' }}">Tujuan</a></li>
                                <li><a href="/profile/sasaran" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profile/sasaran') ? 'font-bold text-primary-700' : '' }}">Sasaran</a></li>
                                <li><a href="/profile/fasilitas" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('profile/fasilitas') ? 'font-bold text-primary-700' : '' }}">Fasilitas</a></li>
                            </ul>
                        </div>
                    </li>                    
                    <li>
                        <button 
                            id="dropdownAkademikButton" 
                            data-dropdown-toggle="dropdownAkademik" 
                            class="block py-2 pr-4 pl-3 rounded lg:p-0 transition font-medium {{ Request::is('akademik/*') ? 'text-primary-700 font-bold' : 'text-gray-700 hover:text-primary-700 hover:font-bold' }}">
                            Akademik
                            <svg class="w-4 h-4 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="dropdownAkademik" class="hidden z-10 w-44 bg-white rounded-lg shadow">
                            <ul class="py-1 text-sm text-gray-700">
                                <li><a href="/akademik/kurikulum" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('akademik/kurikulum') ? 'font-bold text-primary-700' : '' }}">Kurikulum</a></li>
                                <li><a href="/akademik/suasana" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('akademik/suasana') ? 'font-bold text-primary-700' : '' }}">Suasana Akademik</a></li>
                                <li><a href="/akademik/dosen" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('akademik/dosen') ? 'font-bold text-primary-700' : '' }}">Dosen</a></li>
                                <li><a href="/akademik/sistem_monitoring" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('akademik/sistem_monitoring') ? 'font-bold text-primary-700' : '' }}">Sistem Monitoring</a></li>
                            </ul>
                        </div>
                    </li>                    
                    <li>
                        <button 
                            id="dropdownPublikasiButton" 
                            data-dropdown-toggle="dropdownPublikasi" 
                            class="block py-2 pr-4 pl-3 rounded lg:p-0 transition font-medium {{ Request::is('publikasi/*') ? 'text-primary-700 font-bold' : 'text-gray-700 hover:text-primary-700 hover:font-bold' }}">
                            Publikasi
                            <svg class="w-4 h-4 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="dropdownPublikasi" class="hidden z-10 w-44 bg-white rounded-lg shadow">
                            <ul class="py-1 text-sm text-gray-700">
                                <li><a href="/publikasi/berita" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('publikasi/berita') ? 'font-bold text-primary-700' : '' }}">Berita</a></li>
                                <li><a href="/agenda" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('agenda') ? 'font-bold text-primary-700' : '' }}">Agenda</a></li>
                                <li><a href="/galeri" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('galeri') ? 'font-bold text-primary-700' : '' }}">Galeri</a></li>
                                <li><a href="/publikasi/karya" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('publikasi/karya') ? 'font-bold text-primary-700' : '' }}">Karya</a></li>
                            </ul>
                        </div>
                    </li>                    
                    <li>
                        <button 
                            id="dropdownKemahasiswaanButton" 
                            data-dropdown-toggle="dropdownKemahasiswaan" 
                            class="block py-2 pr-4 pl-3 rounded lg:p-0 transition font-medium {{ Request::is('kemahasiswaan/*') ? 'text-primary-700 font-bold' : 'text-gray-700 hover:text-primary-700 hover:font-bold' }}">
                            Kemahasiswaan
                            <svg class="w-4 h-4 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="dropdownKemahasiswaan" class="hidden z-10 w-44 bg-white rounded-lg shadow">
                            <ul class="py-1 text-sm text-gray-700">
                            <li><span class="block px-4 py-2 text-gray-700 cursor-default hover:bg-gray-100">HM DTI</span></li>
                                <ul class="pl-4">
                                <li><a href="/himpunan/2024" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('himpunan/2024') ? 'font-bold text-primary-700' : '' }}">HM DTI 2024</a></li>
                                <li><a href="/himpunan/2023" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('himpunan/2023') ? 'font-bold text-primary-700' : '' }}">HM DTI 2023</a></li>
                                </ul>
                                <li><a href="/kemahasiswaan/alumni" class="block px-4 py-2 hover:bg-gray-100 {{ Request::is('kemahasiswaan/alumni') ? 'font-bold text-primary-700' : '' }}">Alumni</a></li>
                            </ul>
                        </div>
                    </li>                    
                    <!-- Fitur Search -->
                    <li class="relative">
                        <form action="{{ route('berita-acara.search') }}" method="GET" class="flex items-center">
                            <input 
                                type="text" 
                                name="q" 
                                placeholder="Search..." 
                                class="px-4 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-300"
                                value="{{ request('q') }}" {{-- Menampilkan kata kunci saat kembali ke form --}}
                            >
                            <button type="submit" class="ml-2 px-3 py-2 text-sm bg-primary-500 text-white rounded-lg hover:bg-primary-600">
                                Cari
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
