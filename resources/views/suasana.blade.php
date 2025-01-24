<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Suasana Akademik</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .konten-suasana-akademik img {
                display: block;
                margin: 0 auto;
                max-width: 100%; /* Gambar mengikuti lebar kontainer */
                height: auto; /* Rasio gambar tetap */
            }
        </style>
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto py-10 px-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Suasana Akademik</h1>
            <!-- Kontainer Utama -->
            <div class="bg-white p-8 shadow-lg rounded-lg overflow-hidden">
                <div class="konten-suasana-akademik prose max-w-none">
                    {!! $suasana->konten !!}
                </div>
            </div>
        </div>
    </body>
    </html>
</x-layout>
