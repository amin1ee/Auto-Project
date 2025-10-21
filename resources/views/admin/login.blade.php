<x-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <form action="{{ route('login') }}" method="POST" class="bg-white p-8 rounded-2xl shadow-md w-full max-w-sm">
            @csrf
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Admin Login</h2>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                Login
            </button>
        </form>
    </div>
</x-layout>