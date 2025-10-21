@section('title')
Dashboard
@endsection
<x-layout>
    <div class="flex flex-row min-h-screen px-8 py-10 gap-8 bg-gray-200">


        <x-sideBareDash></x-sideBareDash>


        <div class="flex-2 flex-row m-24">


            <div
                class="bg-white rounded-3xl shadow-xl p-6 flex items-center gap-4 hover:shadow-2xl transition duration-300 mb-5">
                <div class="bg-blue-100 text-blue-600 w-16 h-16 flex items-center justify-center rounded-full text-2xl">
                    🚗
                </div>
                <div>
                    <h3 class="text-gray-700 font-semibold text-lg">Totaal Auto’s</h3>
                    <p class="text-3xl font-bold text-gray-900">{{ $cars }}</p>
                </div>
            </div>

            <div
                class="bg-white rounded-3xl shadow-xl p-6 flex items-center gap-4 hover:shadow-2xl transition duration-300">
                <div
                    class="bg-green-100 text-green-600 w-16 h-16 flex items-center justify-center rounded-full text-2xl">
                    📅
                </div>
                <div>
                    <h3 class="text-gray-700 font-semibold text-lg">Totaal Afspreken</h3>
                    <p class="text-3xl font-bold text-gray-900">{{ $appointments }}</p>
                </div>
            </div>


        </div>
    </div>
</x-layout>