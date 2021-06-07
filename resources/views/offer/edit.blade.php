<form action="{{ route('offer.update', $offer) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="select-none grid gap-1 sm:gap-2 md:gap-4 grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
        <x-input type="number" id="price" value="{{$offer->price}}">{{ __('offer.price') }}</x-input>
        <x-input type="date" id="start_at" value="{{$offer->start_at}}">{{ __('offer.start_at') }}</x-input>
        <x-input type="date" id="ending_at" value="{{$offer->ending_at}}">{{ __('offer.ending_at') }}</x-input>
    </div>
    <x-button type="submit">{{ __('auth.submit') }}</x-button>
</form>
