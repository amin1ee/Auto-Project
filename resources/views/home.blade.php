@section('title')
Home
@endsection
<x-layout>
    <x-nav>

    </x-nav>
    <section class="flex  items-center justify-around p-8 bg-gray-800 text-white">
        <div class="text-center mb-6">
            <h1 class="text-5xl font-bold mb-4">Jouw droom auto</h1>
            <p class="text-gray-300">Vind de auto van je dromen met ons uitgebreide aanbod.</p>
            <a href="/onze-auto"
                class="mt-4 inline-block bg-red-600 hover:bg-red-700 px-6 py-3 rounded-lg font-semibold">Bekijk
                auto's</a>
        </div>
        <img src="{{ asset('assets/heroPic.jpg') }}" alt="Hero Image" class="w-1/2 rounded-lg shadow-lg">
    </section>
    <section class=" min-h-[70vh] bg-gradient-to-r from-gray-200 to-gray-100 py-12">
        <h2 class="font-bold text-3xl text-center mb-12 text-gray-800">3 redenen waarom je aan Auto Man moet kiezen</h2>
        <div class="flex flex-col md:flex-row justify-center gap-8 px-4 md:px-0">

            <div
                class="flex flex-col items-center p-6 bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-shadow duration-300 max-w-sm text-center">
                <img src="{{ asset('assets/trustCar.jpg') }}" class="w-32 h-32 object-cover rounded-full mb-4">
                <p class="text-xl font-bold text-gray-800 mb-2">Betrouwbaarheid</p>
                <p class="text-gray-600">Wij leveren betrouwbare auto's met garantie</p>
            </div>

            <div
                class="flex flex-col items-center p-6 bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-shadow duration-300 max-w-sm text-center">
                <img src="{{ asset('assets/cars.jpg') }}" class="w-32 h-32 object-cover rounded-full mb-4">
                <p class="text-xl font-bold text-gray-800 mb-2">Grote selectie</p>
                <p class="text-gray-600">Kies uit een breed aanbod van nieuwe en tweedehands auto's</p>
            </div>

            <div
                class="flex flex-col items-center p-6 bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-shadow duration-300 max-w-sm text-center">
                <img src="{{ asset('assets/serviceCars.jpg') }}" class="w-32 h-32 object-cover rounded-full mb-4">
                <p class="text-xl font-bold text-gray-800 mb-2">Uitstekende service</p>
                <p class="text-gray-600">Ons team helpt je bij elke stap, van advies tot aflevering</p>
            </div>

        </div>
    </section>

    <section class="flex  items-center justify-around p-8 bg-gray-800 h-screen">
        <img src="{{ asset('assets/automan.jpg') }}" alt="" class="w-1/2 rounded-lg shadow-lg">
        <div>
            <div class="">
                <h3 class="text-white font-bold text-center ">Auto Man in cijfers</h3>
                <p class="text-white mb-4">Sinds 2020 heeft AutoMan een snelle ontwikkeling doorgemaakt. En dat zie je
                    ook
                    terug
                    in de cijfers.</p>
            </div>
            <div class="flex flex-row gap-6 justify-center mb-30 ">
                <div class="text-center">
                    <p class="text-3xl font-bold text-red-600">500+</p>
                    <p class="text-gray-300">Verkochte auto's</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold text-red-600">1200+</p>
                    <p class="text-gray-300">Tevreden klanten</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-bold text-red-600">50+</p>
                    <p class="text-gray-300">Medewerkers</p>
                </div>
            </div>
        </div>


    </section>
    <section class=" bg-gray-900 text-white text-center py-16">
        <h2 class="text-3xl font-bold mb-4">Neem contact met ons op</h2>
        <p class="text-gray-300 mb-6">Onze experts staan klaar om je te helpen de perfecte auto te vinden.</p>
        <a href="/contact" class="bg-red-600 hover:bg-red-700 px-6 py-3 rounded-lg font-semibold">Contact</a>
    </section>
    <x-footer>

    </x-footer>


</x-layout>