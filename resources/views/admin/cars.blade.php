<x-layout>
    <div class="flex flex-row px-4 py-8 gap-8">
        <x-sideBareDash>


        </x-sideBareDash>
        <section class="py-10  min-h-screen w-full">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Onze Auto’s</h2>

            <div class="grid grid-cols-4  gap-8 max-w-8xl mx-auto px-4">
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
                        <h3 class="text-lg font-bold text-gray-800">{{ $car['title'] }}</h3>
                        <p class="text-gray-600">Merk: {{ $car['mark'] ?? 'Onbekend' }}</p>
                        <p class="text-gray-500 text-sm">Bouwjaar: {{ $car['year'] ?? '—' }}</p>
                        <p class="text-gray-500 text-sm">Km-stand: {{ number_format($car['km_riding'] ?? 0) }} km</p>
                    </div>

                    <div class="mt-4 flex">
                        <a href="edit-cars/{{$car["id"]}}"
                            class=" mr-4 text-center w-24 bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">
                            Bewerken
                        </a>
                        <form action="{{ route('admin.car.destroy', $car["id"])}}" method="POST">
                            @csrf
                            @method('DELETE')


                            <button type="submit"
                                class="inline-block w-24 text-center bg-red-600  text-white font-semibold py-2 rounded-lg hover:bg-red-700 transition">Verwijderen
                            </button>

                        </form>

                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

</x-layout>