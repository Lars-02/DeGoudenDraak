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
                    <h2 class="" style="font-size:40px;font-weight:bold;color:yellow">Inloggen</h2>
                </div>

                <img src="{{asset("/images/dragon.png")}}"
                     class="mirror object-contain h-48 w-48 mx-auto hidden lg:block">
            </div>
        </div>

        <form action="/tablet/menu" method="POST">
            @csrf
            <div class="select-none grid gap-1 sm:gap-2 md:gap-4 grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
                <x-input type="number" id="number" min="0">Tafelnummer</x-input>
            </div>
            <x-button type="submit">{{ __('auth.submit') }}</x-button>
        </form>

        @include('components.layouts.footer')
    </div>
</body>
</html>

