<!-- resources/views/agenda.blade.php -->

<x-layout>
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 lg:py-16">
        <div class="mx-auto max-w-screen-md text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Agenda Kegiatan</h2>
            <p class="font-light text-gray-500 sm:text-xl">Agenda untuk bulan {{ \Carbon\Carbon::now()->translatedFormat('F Y') }}</p>
        </div>

        <!-- Agenda Table -->
        <div class="overflow-x-auto">
            <table id="agenda-table" class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Hari & Tanggal</th>
                        <th class="px-4 py-2">Kegiatan</th>
                        <th class="px-4 py-2">Jam</th>
                        <th class="px-4 py-2">Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agendas as $agenda)
                        <tr>
                            <td class="px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($agenda->tanggal)->translatedFormat('l, d F Y') }}</td>
                            <td class="px-4 py-2">{{ $agenda->kegiatan }}</td>
                            <td class="px-4 py-2">{{ \Carbon\Carbon::parse($agenda->jam)->format('H:i') }}</td>
                            <td class="px-4 py-2">{{ $agenda->tempat }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
