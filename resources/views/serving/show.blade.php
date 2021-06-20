<x-layout>
    <div class="flex flex-col gap-4 mt-12">
        <div class="bg-yellow-50 p-4 rounded shadow">
            <h1 class="text-yellow-300 text-4xl font-bold">{{ $serving->fullname . ' - ' . __('serving.euro', ['price' => $serving->price]) }}</h1>
            <p class="ml-2 text-gray-800">{{ $serving->description }}</p>
            <div>
                <h2 class="font-medium text-xl text-yellow-300">{{ __('serving.category') }}</h2>
                <a class="ml-2 text-gray-800" href="{{ route('category.index') }}">{{ $serving->category->name }}</a>
            </div>
            @if(!empty($serving->offer))
                <div>
                    <h2 class="font-medium text-xl text-yellow-300">{{ __('serving.offer') }}</h2>
                    <a class="ml-2 text-gray-800" href="{{ route('offer.index') }}">{{ $serving->offer->name }}</a>
                </div>
            @endif

            @if(!$serving->allergens->isEmpty())
                <div>
                    <h2 class="font-medium text-xl text-yellow-300">{{ __('serving.allergens') }}</h2>
                    @foreach($serving->allergens as $allergen)
                        <div>
                            <a class="ml-2 text-gray-800" href="{{ route('allergen.index') }}">{{ $allergen->name }}</a>
                        </div>
                    @endforeach
                </div>
            @endif

            @if($serving->spice > 0)
                <div class="flex">
                    <h2 class="font-medium text-xl text-yellow-300">{{ __('serving.spicy_title') }}</h2>
                    @for($i = 0; $i < $serving->spice; $i++)
                        <img src="{{asset('images/pepper.png')}}"
                             alt="A pepper"
                             class="object-scale-down lg:object-cover md:w-9 md:h-9 w-8 h-8 rounded-2xl">
                    @endfor
                </div>
            @endif
        </div>

        <div class="flex justify-between mt-4 bg-yellow-50 p-4 rounded shadow">
            <a href="{{ route('serving.edit', $serving) }}">
                <x-button>{{ __('auth.edit') }}</x-button>
            </a>
            <form action="{{ route('serving.destroy', $serving) }}" method="POST">
                @csrf
                @method('DELETE')
                <x-button type="submit" class="bg-red-600">{{ __('auth.delete') }}</x-button>
            </form>
        </div>
    </div>
</x-layout>
