@section('title')
Onze Auto's
@endsection

<x-layout>
    <x-nav></x-nav>

    <section class="flex flex-col justify-between  px-4 py-8 gap-8 h-screen">

        <div class="w-full">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Onze Auto’s</h2>
            <div class="grid grid-cols-4 gap-8 max-w-6xl mx-auto px-4">
                @foreach ($cars as $car)
                <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-4">
                    <div class="relative">
                        <div x-data="{ imageIndex: 0, images: {{ json_encode($car->image_urls) }} }" class="relative">
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

                    <a href="/car/{{$car['id']}}"
                        class="mt-4 inline-block bg-amber-600 hover:bg-amber-700 px-6 text-white py-3 rounded-lg font-semibold">Bekijk
                        Car</a>
                </div>
                @endforeach

            </div>

        </div>

        <div class="flex justify-center mt-4">
            {{ $cars->links() }}
        </div>



    </section>
</x-layout>