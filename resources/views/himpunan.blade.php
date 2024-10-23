<x-layout>
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
            <div class="mx-auto max-w-screen-lg text-center mb-6">
                <h2 class="text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700 ">Himpunan Mahasiswa Diploma Teknik Informatika</h2>
                <img class="mx-auto w-56 h-56 rounded-full" src="{{asset('img/hmdti.png') }}" alt="Logo HMDTI">
            </div> 
            <div class="gap-8 items-start pb-8 lg:pb-16 px-4 mx-auto max-w-screen-xl xl:gap-12 md:grid md:grid-cols-2 align-top">
                <div class="mt-4 md:mt-0">
                    <h2 class="text-center mb-4 text-2xl tracking-tight font-extrabold text-gray-700 ">Visi</h2>
                    <p class="text-justify mb-6 text-gray-500">“Menjadikan HMDTI sebagai organisasi yang bertakwa, kompeten, berintegritas, dan peduli sosial, serta sebagai wadah aspirasi mahasiswa yang kekeluargaan, profesional, solid, sinergis, dan kreatif.”</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <h2 class="text-center mb-4 text-2xl tracking-tight font-extrabold text-gray-700">Misi</h2>
                    <ul class="space-y-1 text-gray-500 list-disc text-justify px-4 lg:px-0">
                        <li>
                            Menjadikan HMDTI tempat terdekat bagi mahasiswa DTI untuk mengembangkan potensinya.
                        </li>
                        <li>
                            Menciptakan lingkungan yang harmonis antara anggota ormawa dengan mahasiswa lain.
                        </li>
                        <li>
                            Memajukan HMDTI secara akademik dan non-akademik dengan langkah dinamis dan konsisten.
                        </li>
                        <li>
                            Meningkatkan partisipasi dan keterlibatan anggota dengan Mengadakan kegiatan rutin dan menarik yang mengajak semua anggota untuk aktif berpartisipasi.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid max-w-screen-xl gap-8 mx-auto text-white sm:grid-cols-3 bg-primary-600 p-8 rounded-lg">
                <div class="flex flex-col items-center justify-center">
                    <dd class="font-semibold text-gray-300 mb-3">Sekretaris</dd>
                    <dt class=" text-2xl font-bold text-center">Daviena Dearestya Mahadewi</dt> 
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dd class="font-semibold text-gray-300 mb-3">Ketua Umum</dd>
                    <dt class=" text-2xl font-bold text-center">Umar Maulana</dt> 
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dd class="font-semibold text-gray-300 mb-3">Bendahara</dd>
                    <dt class=" text-2xl font-bold text-center">Zikry Dwi Maulana</dt> 
                    {{-- <dt class="text-4xl mb-2 md:text-2xl font-extrabold">Fisco Maulana</dt>  --}}
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
            <div class="mx-auto max-w-screen-xl text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700 ">Program Kerja Himpunan Mahasiswa Diploma Teknik Informatika</h2>
            </div> 
            <div class="grid gap-8 lg:grid-cols-3">
                <a href="#" class="block">
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-lg hover:bg-gray-100 transition duration-200">
                        <img class="h-auto max-w-full rounded-lg mb-6" src="{{asset('img/WLP.jpg')}}" alt="image description">
                        {{-- <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                Tutorial
                            </span>
                            <span class="text-sm">14 days ago</span>
                        </div> --}}
                        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">How to quickly deploy a static website</h3>
                        {{-- <p class="mb-5 font-light text-gray-500">Static websites are now used to bootstrap lots of websites and are becoming the basis</p> --}}
                    </article>
                </a>
                <a href="#" class="block">
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-lg hover:bg-gray-100 transition duration-200">
                        <img class="h-auto max-w-full rounded-lg mb-6" src="{{asset('img/uiux.jpg')}}" alt="image description">
                        {{-- <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                Tutorial
                            </span>
                            <span class="text-sm">14 days ago</span>
                        </div> --}}
                        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">How to quickly deploy a static website</h3>
                        {{-- <p class="mb-5 font-light text-gray-500">Static websites are now used to bootstrap lots of websites and are becoming the basis</p> --}}
                    </article>
                </a>
            </div>  
        </div>
    </section>
</x-layout>