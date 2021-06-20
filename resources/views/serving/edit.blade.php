<x-layout>
    <form action="{{ route('serving.update', $serving) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="select-none grid gap-1 sm:gap-2 md:gap-4 grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
            <x-input type="number" id="number" value="{{$serving->number}}">{{ __('serving.number') }}</x-input>
            <x-input type="text" id="version" value="{{$serving->version}}">{{ __('serving.version') }}</x-input>
            <x-select id="category_id" :options="$categories" required>{{ __('serving.category') }}</x-select>

            <x-input type="text" id="name" value="{{$serving->name}}">{{ __('serving.name') }}</x-input>
            <x-input type="text" id="description" value="{{$serving->description}}">{{ __('serving.description') }}</x-input>
            <x-input type="number" id="spice" value="{{$serving->spice}}">{{ __('serving.spice') }}</x-input>

            <x-input type="number" id="price" value="{{$serving->price}}">{{ __('serving.price') }}</x-input>
            <x-select id="offer_id" :options="$offers">{{ __('serving.offer') }}</x-select>
            <x-select id="allergens" name="allergens[]" :options="$allergens" multi="true">{{ __('serving.allergens') }}</x-select>
        </div>
        <x-button type="submit">{{ __('auth.submit') }}</x-button>
    </form>
</x-layout>
