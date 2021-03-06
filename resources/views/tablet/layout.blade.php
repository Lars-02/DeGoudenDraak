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

                    {{--Redirect to other pages--}}
                    <div class="flex flex-nowrap items-center mt-3">
                        <table style="margin:auto;font-size:20px;color:white" border="1px solid white">
                            <tr background="{{asset("/images/menu_bg_gradient.png")}}">
                                <td valign="middle">
                                    <a href="/tablet/menu/{{$tablenumber}}"
                                       style="color:white;margin-left:1vw;margin-right:1vw;">
                                        Menu
                                    </a>
                                </td>
                                <td valign="middle">
                                    <a href="/tablet/cocktails/{{$tablenumber}}"
                                       style="color:white;margin-left:1vw;margin-right:1vw;">
                                        Cocktails
                                    </a>
                                </td>
                                <td valign="middle">
                                    <a href="/tablet/help/{{$tablenumber}}"
                                       style="color:white;margin-left:1vw;margin-right:1vw;">
                                        Help me
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>


                <img src="{{asset("/images/dragon.png")}}"
                     class="mirror object-contain h-48 w-48 mx-auto hidden lg:block">
            </div>
        </div>


        <div id="app" class="w-11/12 mx-auto">
            @yield('tablet_content')
        </div>


    </div>
</div>
</body>
</html>
