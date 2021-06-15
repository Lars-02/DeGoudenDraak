<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'De Gouden Draak') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="bg-red-700 min-h-screen flex flex-col">

    <div class="custom-border flex-grow bg-red-600">

        <div class="mb-5">
            {{--Page title--}}
            <div class="flex flex-nowrap items-center">
                <img src="{{asset("/images/dragon.png")}}"
                     class="object-contain h-48 w-48 mx-auto hidden lg:block">

                <div class="grid grid-cols-1 mx-auto">
                    <h3 class="" style="font-size:30px;font-weight:bold;color:yellow">De Gouden Draak</h3>
                    <h2 class="" style="font-size:40px;font-weight:bold;color:yellow">Menu</h2>
                </div>


                <img src="{{asset("/images/dragon.png")}}"
                     class="mirror object-contain h-48 w-48 mx-auto hidden lg:block">
            </div>


        </div>
    <div class="w-full max-w-screen-xl mx-auto px-6">
        <div class="flex justify-center py-10">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">


                    <form action="/menu" method="GET" class="justify-content-center">

                        <div class="block text-gray-700 text-lg font-semibold py-2 px-2 text-center">
                            Menukaart
                        </div>

                        <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                            Filter sectie
                        </div>

                        <div class="flex flex-column flex-wrap-reverse">
                            <input
                                class="w-75 rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none m-2 py-2 px-2"
                                id="searchDish" type="search" name="q" value="{{ $searchNameQuery }}"
                                placeholder="Zoek een gerecht">

                            <button id='submitQ' type="submit"
                                    class="appearance-none bg-red-500 block focus:border-red-700 font-medium h-11 hover:bg-red-600 leading-tight rounded-full text-gray-100 w-full md:w-11 mx-2">
                                <i class="fa fa-search"></i></button>

                        </div>

                        <input
                            class="w-75 rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none ml-2 py-2 px-2 my-2"
                            id="searchCategory" type="search" name="category" value="{{ $searchCategoryQuery }}"
                            placeholder="Zoek een category">

                    </form>
                    <div class="py-3 text-sm">
                        <div class="block text-gray-700 text-sm-center font-semibold py-2 px-2">
                            @if ($searchNameQuery || $searchCategoryQuery)
                                <h2>Zoekresultaten voor "
                                    @if($searchCategoryQuery){{ $searchCategoryQuery }}@endif
                                    @if($searchNameQuery &&  $searchCategoryQuery): @endif
                                    @if($searchNameQuery){{ $searchNameQuery }}@endif
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
                                    {{__('menu_index.menu_number')}}: {{$servings[$i]->number}}</div>
                            </a>
                        @endfor
                    </div>
                    <div class="block bg-gray-200 text-sm text-right py-2 px-3 -mx-3 -mb-2 rounded-b-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.layouts.footer')
</div>
</body>
</html>
