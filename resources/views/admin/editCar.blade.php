<x-layout>
    <div class="flex flex-row px-4 py-8 gap-8">
        <x-sideBareDash>


        </x-sideBareDash>
        <div class="flex-1 flex items-start justify-center">
        <form action="/admin/edit-cars/{{$car["id"]}}" method="POST" class="flex flex-col gap-4"
            enctype="multipart/form-data">
            @csrf
            @method("POST")

            <div class="flex flex-col">
                <label for="title" class="mb-1 font-semibold text-gray-700">Titel</label>
                <input type="text" id="title" name="title" placeholder="Type de naam van de auto" value="{{$car["title"]}}"
                    class="p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-600">
            </div>

            <div class="flex flex-col">
                <label for="mark" class="mb-1 font-semibold text-gray-700">Merk</label>
                <input type="text" id="mark" name="mark" placeholder="Audi..." value="{{$car["mark"]}}"
                    class="p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-600">
            </div>
            <div class="flex flex-col">
                <label for="km" class="mb-1 font-semibold text-gray-700">K.m</label>
                <input type="text" id="km" name="km" placeholder="200000" value="{{$car["km_riding"]}}"
                    class="p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-600">
            </div>

            <div class="flex flex-col">
                <label for="year" class="mb-1 font-semibold text-gray-700">Jaar</label>
                <input type="number" id="year" name="year" placeholder="2023" value="{{$car["year"]}}"
                    class="p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-600">
            </div>
            <div class="flex flex-col">
                <label for="apk" class="mb-1 font-semibold text-gray-700">Brandstof</label>
                <select name="fuel" id="fuel" class=" border border-gray-300 p-2">
                    <option value="diesel">diesel</option>
                    <option value="benzine">benzine</option>
                    <option value="electric">electric</option>
                    <option value="hybrid">hybrid</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="apk" class="mb-1 font-semibold text-gray-700">Apk</label>
                <input type="date" id="apk" name="apk"
                    class="p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-600"
                    value="{{$car["apk"]->format('Y-m-d')}}">
            </div>

            <div class="flex flex-col">
                <label for="price" class="mb-1 font-semibold text-gray-700">Prijs (€)</label>
                <input type="number" id="price" name="price" placeholder="9999.."
                    class="p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-600"
                    value="{{$car["price"]}}">
            </div>
            @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach


            <button type="submit"
                class="mt-4 bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded transition-colors">
                Auto bewerken
            </button>
        </form>
        </div>
</x-layout>