@section('title')
Contact
@endsection
<x-layout>
    <x-nav>
    </x-nav>
    <div class="max-w-7xl mx-auto py-12 px-4">

        <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Contacteer ons</h1>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <div class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Stuur ons een bericht</h2>

                <form action="{{route("contact-send")}}" method="POST" class="space-y-4">
                    @csrf

                    <div class="flex flex-col">
                        <label for="name" class="mb-1 font-semibold text-gray-700">Naam</label>
                        <input type="text" id="name" name="name" required
                            class="p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-600">
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="mb-1 font-semibold text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                            class="p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-600">
                    </div>
                    <div class="flex flex-col">
                        <label for="telefone_number" class="mb-1 font-semibold text-gray-700">Telefone nummer</label>
                        <input type="number" id="telefone_number" name="telefone_number" required
                            class="p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-600">
                    </div>

                    <div class="flex flex-col">
                        <label for="subject" class="mb-1 font-semibold text-gray-700">Onderwerp</label>
                        <select name="appointment_reason" id="appointment_reason" class=" border border-gray-300 p-2">
                            <option value="Auto kopen">Auto kopen</option>
                            <option value="Inruil">Inruil</option>
                            <option value="Prijs">Prijs</option>
                            <option value="Overige">Overige</option>
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <label for="bericht" class="mb-1 font-semibold text-gray-700">Bericht</label>
                        <textarea id="bericht" name="bericht" rows="5" required
                            class="p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-600"></textarea>
                    </div>

                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                        Verstuur bericht
                    </button>

                     @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </form>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 space-y-6">
                <h2 class="text-2xl font-semibold mb-2 text-gray-800">Onze gegevens</h2>

                <p class="text-gray-700"><span class="font-semibold">Adres:</span> Straatnaam 123, Stad, Land</p>
                <p class="text-gray-700"><span class="font-semibold">Telefoon:</span> +31 6 12345678</p>
                <p class="text-gray-700"><span class="font-semibold">Email:</span> info@automan.nl</p>

                <div class="mt-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.123456789!2d4.895168!3d52.370216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609bd1bb12345%3A0x123456789abcdef!2sAmsterdam!5e0!3m2!1sen!2snl!4v1600000000000!5m2!1sen!2snl"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        class="rounded-lg shadow-md"></iframe>
                </div>
            </div>

        </div>
    </div>
</x-layout>