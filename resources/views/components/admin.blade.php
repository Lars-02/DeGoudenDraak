<x-app>
    <div class="bg-red-700 min-h-screen flex flex-col">
        @include('components.layouts.header')

        <div class="custom-border flex-grow bg-red-600">
            {{ $slot }}
        </div>
        @include('components.layouts.footer')
    </div>
</x-app>
