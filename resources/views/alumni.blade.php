<x-layout>
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 lg:py-16">
            <div class="mx-auto max-w-screen-md text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Profil Lulusan Teknik Informatika - D3</h2>
            </div> 
            <div class="">
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <label for="entries" class="text-sm text-gray-700">Show</label>
                        <select id="entries" class="text-sm border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>
                        <span class="text-sm text-gray-700">entries</span>
                    </div>
                </div>
                <table id="alumni-table" class="min-w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Nama Lengkap</th>
                            <th class="px-4 py-2">NIM</th>
                            <th class="px-4 py-2">IPK</th>
                            <th class="px-4 py-2">Tahun Lulus</th>
                            <th class="px-4 py-2">Wisuda</th>
                            <th class="px-4 py-2">Pekerjaan</th>
                            <th class="px-4 py-2">Nama Instansi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($alumni as $index => $item)
                            <tr>
                                <td class="px-4 py-2">{{ $index + 1 }}</td>
                                <td class="px-4 py-2">{{ $item->nama }}</td>
                                <td class="px-4 py-2">{{ $item->nim }}</td>
                                <td class="px-4 py-2">{{ $item->ipk }}</td>
                                <td class="px-4 py-2">{{ $item->tahun_lulus }}</td>
                                <td class="px-4 py-2">{{ $item->wisuda }}</td>
                                <td class="px-4 py-2">{{ $item->pekerjaan }}</td>
                                <td class="px-4 py-2">{{ $item->nama_instansi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>  
        </div>
    </section>
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 lg:py-16">
            <div class="mx-auto max-w-screen-md text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-700">Form Input Alumni</h2>
            </div> 
            <form id="alumni-form" method="POST" action="{{ route('alumni.store') }}" class="space-y-4">
                @csrf
                <div class="grid gap-6 lg:grid-cols-2">
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-700">NIM</label>
                        <input type="text" id="nim" name="nim" placeholder="Mohon gunakan format tanpa titik, contoh: A22000000000" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="ipk" class="block mb-2 text-sm font-medium text-gray-700">IPK</label>
                        <input type="number" step="0.01" id="ipk" name="ipk" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="tahun_lulus" class="block mb-2 text-sm font-medium text-gray-700">Tahun Lulus</label>
                        <input type="number" id="tahun_lulus" name="tahun_lulus" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="wisuda" class="block mb-2 text-sm font-medium text-gray-700">Wisuda</label>
                        <input type="number" id="wisuda" name="wisuda" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-700">Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="nama_instansi" class="block mb-2 text-sm font-medium text-gray-700">Nama Instansi</label>
                        <input type="text" id="nama_instansi" name="nama_instansi" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>
                </div>
                <button type="submit" class="mt-4 w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Submit</button>
            </form>
        </div> 
    </section>
</x-layout>
