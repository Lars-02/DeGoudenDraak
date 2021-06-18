<x-layout>
    <div class="mx-auto p-12
            px-6 py-10 sm:px-10 sm:py-6
            bg-white rounded-lg shadow-md lg:shadow-lg my-10">

        <!-- Card Title -->
        <h2 class="text-center font-semibold text-2xl lg:text-3xl text-gray-800 my-4">Register Account</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="grid md:grid-cols-2 gap-x-4 mt-3">
                <!-- Input -->
                <x-input
                    type="email"
                    id="email"
                    autocomplete="email"
                    required autofocus
                >Email
                </x-input>
                <x-input
                    id="firstname"
                    autocomplete="given-name"
                    required
                >Firstname
                </x-input>
                <x-input
                    id="lastname"
                    autocomplete="family-name"
                    required
                >Lastname
                </x-input>
                <x-input
                    type="password"
                    id="password"
                    autocomplete="new-password"
                    required
                >Password
                </x-input>
                <div class="md:col-span-2">
                    <x-input
                        type="password"
                        id="password_confirmation"
                        autocomplete="new-password"
                        required
                    >Confirm Password
                    </x-input>
                </div>
            </div>

            <!-- Auth Buttton -->
            <button type="submit"
                    class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                    font-medium text-white uppercase
                    focus:outline-none hover:bg-gray-700 hover:shadow-none">
                Create Account
            </button>

            <!-- Another Auth Routes -->
            <div class="sm:flex sm:flex-wrap mt-8 sm:mb-4 text-sm text-center">
                <a href="{{ route('login') }}" class="flex-2 underline">
                    Go back to Login
                </a>
            </div>
        </form>
    </div>
</x-layout>
