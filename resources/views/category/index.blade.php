<h1 class="my-8 text-yellow-300 text-5xl font-bold">{{ __('category.title') }}</h1>
<div class="grid mt-8 gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5">
    @foreach($categories as $category)
        <a class="cursor-pointer text-gray-800" href="{{route('category.edit', $category)}}">
            <div class="bg-white rounded shadow-sm p-4 m-2">
                <h2 class="font-medium text-md">{{ $category->number . $category->version . ' ' . $category->name }}</h2>
            </div>
        </a>
    @endforeach
</div>
<h1 class="my-8 text-yellow-300 text-5xl font-bold">{{ __('category.create') }}</h1>
<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class="select-none grid gap-1 sm:gap-2 md:gap-4 grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
        <x-input type="number" id="number">{{ __('category.number') }}</x-input>
        <x-input type="text" id="version">{{ __('category.version') }}</x-input>
        <x-input type="text" id="name">{{ __('category.name') }}</x-input>
    </div>
    <x-button type="submit">{{ __('auth.submit') }}</x-button>
</form>
