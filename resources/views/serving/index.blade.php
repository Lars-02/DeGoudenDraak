<x-layout>
    <div class="flex flex-col container justify-center content-center mt-5r mx-auto">
        <h1 class="text-3xl md:text-4xl font-semibold leading-7 md:leading-10 mb-1 text-yellow-300 pb-1 mx-auto">
            {{__('menu_index.download_title')}}</h1>

        <a href="/menu/pdf"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mx-auto mb-4">{{__('menu_index.download_text')}}
            <i
                class="fa fa-download" aria-hidden="true"></i></a>
    </div>

    <div class="w-full max-w-screen-xl mx-auto px-6">
        <div class="flex justify-center py-10">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">


                    <form action="/menu" method="GET" class="justify-content-center">

                        <div class="block text-gray-700 text-lg font-semibold py-2 px-2 text-center">
                            {{__('menu_index.menu_title')}}
                        </div>

                        <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                            {{__('menu_index.filter_title')}}
                        </div>

                        <div class="flex flex-column flex-wrap-reverse">
                            <input
                                class="w-75 rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none m-2 py-2 px-2"
                                id="searchDish" type="search" name="q" value="{{ $searchNameQuery }}"
                                placeholder="{{__('menu_index.search_name')}}">

                            <button id='submitQ' type="submit"
                                    class="appearance-none bg-red-500 block focus:border-red-700 font-medium h-11 hover:bg-red-600 leading-tight rounded-full text-gray-100 w-full md:w-11 mx-2">
                                <i class="fa fa-search"></i></button>

                        </div>

                        <input
                            class="w-75 rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none ml-2 py-2 px-2 my-2"
                            id="searchCategory" type="search" name="category" value="{{ $searchCategoryQuery }}"
                            placeholder="{{__('menu_index.search_category')}}">

                        <input
                            class="w-16 rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none ml-2 py-2 px-2 my-2"
                            placeholder="ID" id="searchId" type="number" name="dishID" value="{{ $searchIDQuery }}">

                    </form>
                    <div class="py-3 text-sm">
                        <div class="block text-gray-700 text-sm-center font-semibold py-2 px-2">
                            @if ($searchNameQuery || $searchCategoryQuery || $searchIDQuery)
                                <h2>{{__('menu_index.search_found')}}: "
                                    @if($searchCategoryQuery){{ $searchCategoryQuery }}@endif
                                    @if($searchNameQuery &&  $searchCategoryQuery): @endif
                                    @if($searchNameQuery){{ $searchNameQuery }}@endif
                                    @if(($searchNameQuery || $searchCategoryQuery) && $searchIDQuery)
                                        (ID {{ $searchIDQuery }})
                                    @else ID {{ $searchIDQuery }} @endif
                                    "</h2>
                            @endif
                        </div>

                        @for ($i = 0; $i < count($servings); $i++)
                            @if ($i == 0 || $servings[$i-1]->category->name != $servings[$i]->category->name)
                                <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                                    {{$servings[$i]->category->name}}
                                </div>
                            @endif
                            <a href="/menu/{{ $servings[$i]->id }}"
                               class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                                <span class="bg-gray-400 h-2 w-2 m-2 rounded-full"></span>
                                <div class="flex-grow font-medium px-2">{{$servings[$i]->name}}</div>
                                <div class="text-sm font-normal text-gray-500 tracking-wide">
                                    {{__('menu_index.menu_number')}}: {{$servings[$i]->number}}{{$servings[$i]->version}}</div>
                            </a>
                        @endfor
                    </div>
                    <div class="block bg-gray-200 text-sm text-right py-2 px-3 -mx-3 -mb-2 rounded-b-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
