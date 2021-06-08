<x-layout>
    <div class="container justify-center mt-5r">
        <h1 class="text-3xl md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate text-yellow-200 pb-1">
            {{__('menu_index.download_title')}}</h1>

        <a href="/menu/pdf" class="btn btn-success btn-lg w-64 mx-auto mb-4">{{__('menu_index.download_text')}} <i
                class="fa fa-download" aria-hidden="true"></i></a>
    </div>

    <div class="w-full max-w-screen-xl mx-auto px-6">
        <div class="flex justify-center py-10">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">

                    <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                        {{__('menu_index.menu_title')}}
                    </div>
                    <div class="block text-gray-700 text-sm-center font-semibold py-2 px-2">
                        @if ($query)
                            <h2>{{__('menu_index.search_found')}} "{{ $query }}"</h2>
                        @endif
                    </div>
                    <form action="/menu" method="GET" class="flex flex-row justify-content-center">

                        <button id='submitQ' type="submit"
                                class="appearance-none bg-red-500 block focus:border-red-700 font-medium h-11 hover:bg-red-600 leading-tight rounded-full text-gray-100 w-full md:w-11">
                            <i class="fa fa-search"></i></button>
                        <input
                            class="w-75 rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none ml-2 py-2 px-2"
                            id="search" type="search" name="q" value="{{ $query }}"
                            placeholder="{{__('menu_index.search')}}">

                    </form>
                    <div class="py-3 text-sm">
                        @foreach ($servings as $serving)
                            <a href="/menu/{{ $serving->id }}"
                               class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                                <span class="bg-gray-400 h-2 w-2 m-2 rounded-full"></span>
                                <div class="flex-grow font-medium px-2">{{$serving->name}}</div>
                                <div class="text-sm font-normal text-gray-500 tracking-wide">
                                    {{__('menu_index.menu_number')}}: {{$serving->number}}</div>
                            </a>
                        @endforeach
                    </div>
                    <div class="block bg-gray-200 text-sm text-right py-2 px-3 -mx-3 -mb-2 rounded-b-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
