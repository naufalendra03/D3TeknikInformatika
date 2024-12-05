<x-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search Results</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-800">
    
<!-- Header -->
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="/" class="text-xl font-bold text-primary-600">Prodi D3 Teknik Informatika</a>
        <form action="{{ route('berita-acara.search') }}" method="GET" class="flex">
            <input 
                type="text" 
                name="q" 
                placeholder="Search..." 
                value="{{ request('q') }}" 
                class="px-4 py-2 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary-300"
            >
            <button 
                type="submit" 
                class="px-4 bg-primary-500 text-white font-semibold rounded-r-lg hover:bg-primary-600"
            >
                Search
            </button>
        </form>
    </div>
</header>

    
        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8">
            <h1 class="text-2xl font-semibold mb-6">Search Results for: <span class="text-primary-500">{{ $query ?? '...' }}</span></h1>
    
            <!-- Posts Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($results as $result)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ $result->getFirstMediaUrl('gambar') }}" alt="Thumbnail" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold text-gray-800">{{ $result->judul }}</h2>
                        <p class="text-sm text-gray-600 mb-4">{{ Str::limit($result->isi, 100) }}</p>
                        <a href="{{ route('berita-acara.search', $result->id) }}" class="text-primary-500 font-semibold hover:underline">Read more</a>
                    </div>
                </div>
                @endforeach
            </div>
    
            <!-- Pagination -->
            <div class="mt-8">
                {{ $results->links() }}
            </div>
        </main>
    
        <!-- Footer -->
    </body>
    </html>
    
    </x-layout>
    