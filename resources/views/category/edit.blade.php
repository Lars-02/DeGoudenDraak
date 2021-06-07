<form action="{{ route('category.update', $category) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="select-none grid gap-1 sm:gap-2 md:gap-4 grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
        <x-input type="number" id="number" value="{{ $category->number }}">{{ __('category.number') }}</x-input>
        <x-input type="text" id="version" value="{{ $category->version }}">{{ __('category.version') }}</x-input>
        <x-input type="text" id="name" value="{{ $category->name }}">{{ __('category.name') }}</x-input>
    </div>
    <x-button type="submit">{{ __('auth.submit') }}</x-button>
</form>
