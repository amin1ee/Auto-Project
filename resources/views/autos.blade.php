@section('title')
Onze Auto's
@endsection

<x-layout>
    <x-nav></x-nav>

    <section class="flex flex-col md:flex-row px-4 py-8 gap-8 h-screen">


        <aside class="w-1/6 bg-gray-100 p-6 rounded-lg shadow-md">
            <h3 class="font-bold text-xl mb-4">Filters</h3>
            <form action="" method="post" class="flex flex-col gap-4">

                <div class="flex flex-col">
                    <label class="mb-1 font-semibold">Prijs</label>
                    <input type="text" class="p-2 border rounded" placeholder="€">
                </div>

                <div class="flex flex-col">
                    <label class="mb-1 font-semibold">Jaar</label>
                    <input type="text" class="p-2 border rounded" placeholder="Bijv. 2020">
                </div>

                <div class="flex flex-col">
                    <label class="mb-1 font-semibold">Km</label>
                    <input type="text" class="p-2 border rounded" placeholder="Bijv. 50000">
                </div>

                <div class="flex flex-col">
                    <label class="mb-1 font-semibold">Brandstof</label>
                    <input type="text" class="p-2 border rounded" placeholder="Bijv. Benzine">
                </div>

                <div class="flex flex-col">
                    <label class="mb-1 font-semibold">Merk</label>
                    <input type="text" class="p-2 border rounded" placeholder="Bijv. BMW">
                </div>

                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">
                    Filter
                </button>
            </form>
        </aside>
   
            <div class="w-full">
                <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Onze Auto’s</h2>
                <div class="grid grid-cols-4 gap-8 max-w-6xl mx-auto px-4">
                    @foreach ($cars as $car)
                    <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-4">
                        <div class="relative">
                            <div x-data="{ imageIndex: 0, images: {{ json_encode($car->image_urls) }} }"
                                class="relative">
                                <img :src="'/storage/' + images[imageIndex]" alt="{{ $car['title'] }}"
                                    class="w-full h-48 object-cover rounded-lg transition-all duration-500">

                                <button @click="imageIndex = (imageIndex - 1 + images.length) % images.length"
                                    class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white/70 text-black px-2 py-1 rounded-full">
                                    ‹
                                </button>
                                <button @click="imageIndex = (imageIndex + 1) % images.length"
                                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/70 text-black px-2 py-1 rounded-full">
                                    ›
                                </button>
                            </div>

                            <span class="absolute top-2 right-2 bg-amber-600 text-white text-sm px-3 py-1 rounded-full">
                                €{{ number_format($car['price'], 0, ',', '.') }}
                            </span>
                        </div>

                        <div class="mt-4">
                            <h3 class="text-lg font-bold text-gray-800 w-full truncate">{{ $car['title'] }}</h3>
                            <p class="text-gray-600  w-full truncate">Merk: {{ $car['mark'] ?? 'Onbekend' }}</p>
                            <p class="text-gray-500 text-sm">Bouwjaar: {{ $car['year'] ?? '—' }}</p>
                            <p class="text-gray-500 text-sm">Km-stand: {{ number_format($car['km_riding'] ?? 0) }} km
                            </p>
                        </div>

                      <a href="/car/{{$car['id']}}" class="mt-4 inline-block bg-amber-600 hover:bg-amber-700 px-6 text-white py-3 rounded-lg font-semibold">Bekijk Car</a>
                    </div>
                    @endforeach
                </div>
            </div>




    </section>
</x-layout>