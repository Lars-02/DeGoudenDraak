@extends('tablet.layout')

@section('tablet_content')
        <div class="flex flex-wrap justify-center max-w-screen-xl mx-auto px-6 gap-4 py-4">
            @foreach ($data as $item)
                @foreach ($item as $drink)
                    <div
                        class="bg-yellow-100 p-2 w-80 max-w-3xl md:w-full sm:p-4 h-auto md:h-auto rounded-2xl shadow-lg flex flex-col md:flex-row gap-5 select-none">
                        <img
                            src="{{ $drink['strDrinkThumb'] }}"
                            class="h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover"
                        >
                        <div class="flex sm:flex-1 flex-col gap-2 p-1">
                            <h1 class="text-lg sm:text-xl font-semibold  text-gray-600">
                                {{ $drink['strDrink'] }}
                            </h1>
                            <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                                {{ $drink['strInstructions'] }}
                            </p>
                            <div class="flex gap-4 mt-auto">
                                <div
                                    class='ml-auto flex items-center gap-1 sm:text-lg px-3 py-1 rounded-full'
                                >
                                    <h3>{{ $drink['strCategory'] }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
@endsection
