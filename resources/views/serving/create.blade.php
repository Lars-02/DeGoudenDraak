<x-layout>
    <form action="{{ route('serving.store') }}" method="POST">
        @csrf
        @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
        <div class="select-none grid gap-1 sm:gap-2 md:gap-4 grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
            <x-input type="number" id="number">{{ __('serving.number') }}</x-input>
            <x-input type="text" id="version">{{ __('serving.version') }}</x-input>
            <x-select id="category_id" :options="$categories">{{ __('serving.category') }}</x-select>

            <x-input type="text" id="name">{{ __('serving.name') }}</x-input>
            <x-input type="text" id="description">{{ __('serving.description') }}</x-input>
            <x-input type="number" id="spice">{{ __('serving.spice') }}</x-input>

            <x-input type="number" id="price">{{ __('serving.price') }}</x-input>
            <x-select id="offer_id" :options="$offers">{{ __('serving.offer') }}</x-select>
            <x-select id="allergens" name="allergens[]" :options="$allergens" multi="true">{{ __('serving.allergens') }}</x-select>
        </div>
        <x-button type="submit">{{ __('auth.submit') }}</x-button>
    </form>
</x-layout>
