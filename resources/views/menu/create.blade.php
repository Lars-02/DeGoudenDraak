<x-layout>
    <form action="{{ route('menu.store') }}" method="POST">
        @csrf
        <div class="select-none grid gap-1 sm:gap-2 md:gap-4 grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
            <x-input type="number" id="number">Number</x-input>
            <x-input type="number" id="version">Version</x-input>
            <x-select id="category" :options="$categories">Category</x-select>

            <x-input type="text" id="name">Name</x-input>
            <x-input type="text" id="description">Description</x-input>
            <x-input type="number" id="spice">Spice</x-input>

            <x-input type="number" id="price">Price</x-input>
            <x-select id="offer" :options="$offers" multiple>Offers</x-select>
        </div>
    </form>
</x-layout>
