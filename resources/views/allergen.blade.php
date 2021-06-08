<x-layout>
    <h1 class="my-8 text-yellow-300 text-5xl font-bold">{{ __('allergen.title') }}</h1>
    <div class="grid mt-8 gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5">
        @foreach($allergens as $index => $allergen)
            <div class="bg-white rounded shadow-sm p-4 m-2">
                <h2 class="font-medium text-md">{{ $index + 1 . ' ' . $allergen->name }}</h2>
                <form action="{{ route('allergen.destroy', $allergen) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-button type="submit" class="bg-red-600">{{ __('auth.delete') }}</x-button>
                </form>
            </div>
        @endforeach
    </div>
    <h1 class="my-8 text-yellow-300 text-5xl font-bold">{{ __('allergen.create') }}</h1>
    <form action="{{ route('allergen.store') }}" method="POST">
        @csrf
        <div class="select-none grid gap-1 sm:gap-2 md:gap-4 grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
            <x-input type="text" id="name">{{ __('allergen.name') }}</x-input>
        </div>
        <x-button type="submit">{{ __('auth.submit') }}</x-button>
    </form>
</x-layout>
