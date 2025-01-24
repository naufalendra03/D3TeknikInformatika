<x-layout>
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">Dosen & Tenaga Pengajar</h2>
            </div> 
            <div class="grid gap-8 lg:gap-16 grid-cols-2 lg:grid-cols-3">
                @foreach ($dosens as $dosen)
                <div class="text-center text-gray-500">
                    <img class="mx-auto mb-4 w-48 h-48 rounded-full" img src="{{ Storage::url($dosen->photo) }}" alt="{{ $dosen->name }}">
                    <h3 class="mb-1 text-md font-bold tracking-tight text-gray-900">
                        <a href="#">{{ $dosen->name }}</a>
                    </h3>
                    <p>{{ $dosen->nip }}</p>
                </div>
                @endforeach
            </div>  
        </div>
    </section>
</x-layout>
