<aside class="w-1/6 bg-gray-100 p-6 rounded-lg shadow-md h-screen flex flex-col justify-between">
    <div>
        <h3 class="font-bold text-xl mb-6 text-gray-800">Welkom {{Auth::user()->name }}</h3>
        <nav class="flex flex-col space-y-2">
            <a href="/admin/dashboard" class="m-2 text-gray-700 hover:text-blue-600 transition">Dashboard</a>
            <a href="/admin/cars" class="m-2 text-gray-700 hover:text-blue-600 transition">Auto’s</a>
            <a href="/admin/create-cars" class="m-2 text-gray-700 hover:text-blue-600 transition">Auto toevoegen</a>
            <a href="/admin/appointmenets" class="m-2 text-gray-700 hover:text-blue-600 transition">Afspreken</a>
        </nav>
    </div>

    <form action="/admin/logout" method="POST" class="mt-auto">
        @csrf
        <button type="submit"
            class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition duration-200">
            Log out
        </button>
    </form>
</aside>