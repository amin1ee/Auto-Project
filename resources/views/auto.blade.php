@section('title')
{{ $car->title }}
@endsection
<x-layout>
    <x-nav>
    </x-nav>
    <div class="max-w-7xl mx-auto py-12 px-4">

        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4 lg:mb-0">{{ $car->title }}</h1>
            <span class="text-3xl font-semibold text-red-600">€{{ number_format($car->price,0,',','.') }}</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div x-data="{ imageIndex: 0, images: {{ json_encode($car->image_urls) }} }">

                <div class="relative rounded-xl overflow-hidden shadow-lg">
                    <img :src="'/storage/' + images[imageIndex]" 
                         alt="{{ $car->title }}" 
                         class="w-full h-96 object-cover transition-all duration-500 rounded-lg">
                    <button @click="imageIndex = (imageIndex - 1 + images.length) % images.length"
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-white/80 text-gray-800 hover:bg-gray-200 px-3 py-1 rounded-full shadow">
                        ‹
                    </button>
                    <button @click="imageIndex = (imageIndex + 1) % images.length"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-white/80 text-gray-800 hover:bg-gray-200 px-3 py-1 rounded-full shadow">
                        ›
                    </button>
                </div>

                <div class="flex mt-4 space-x-2">
                    <template x-for="(img, i) in images" :key="i">
                        <img :src="'/storage/' + img" 
                             @click="imageIndex = i"
                             :class="{'ring-2 ring-red-600': i === imageIndex}" 
                             class="w-20 h-20 object-cover rounded-lg cursor-pointer hover:ring-2 hover:ring-red-600 transition">
                    </template>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 justify-between">
                <div class="space-y-4">
                    <p class="text-gray-700"><span class="font-semibold">Merk:</span> {{ $car->mark }}</p>
                    <p class="text-gray-700"><span class="font-semibold">Bouwjaar:</span> {{ $car->year }}</p>
                    <p class="text-gray-700"><span class="font-semibold">Km-stand:</span> {{ number_format($car->km_riding) }} km</p>
                    <p class="text-gray-700"><span class="font-semibold">Brandstof:</span> {{ ucfirst($car->fuel_type) }}</p>
                    <p class="text-gray-700"><span class="font-semibold">APK:</span> {{ \Carbon\Carbon::parse($car->apk)->format('d-m-Y') }}</p>
                    <p class="text-gray-700"><span class="font-semibold">Toegevoegd op:</span> {{ $car->created_at->format('d-m-Y') }}</p>
                </div>
                <a href="/contact" class="mt-24  inline-block text-amber-50 bg-amber-600 hover:bg-amber-700 px-6 py-3 rounded-lg font-semibold">Maak een Afspark</a>
               
            </div>
          
        </div>

       
    </div>
</x-layout>
