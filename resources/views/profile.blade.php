<x-layout >
    <section>
        <div class="gap-8 items-start py-8 px-4 mx-auto max-w-screen-xl xl:gap-12 md:grid md:grid-cols-2 sm:py-16 align-top">
            <div class="mt-4 md:mt-0">
                <h2 class="text-center mb-4 text-2xl tracking-tight font-extrabold text-gray-700">Visi</h2>
                <div class="text-justify mb-6 text-gray-500">{!! str_replace('<p><br></p>', '', $visiMisi->visi) !!}</div>
            </div>
            <div class="mt-4 md:mt-0">
                <h2 class="text-center mb-4 text-2xl tracking-tight font-extrabold text-gray-700">Misi</h2>
                <div class="text-justify mb-6 text-gray-500">{!! str_replace('<p><br></p>', '', $visiMisi->misi) !!}</div>
            </div>
        </div>
    </section>      

    
</x-layout>