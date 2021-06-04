<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        td {
            padding: 0px;
        }

        @font-face {
            font-family: 'chinese_takeawayregular';
            src: url('./public/fonts/chinesetakeaway-webfont.woff2') format('woff2'),
            url('./public/fonts/chinesetakeaway-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        a {
            text-decoration: none;
            color: yellow;
        }
    </style>
</head>
<body class="bg-red-700 mx-4 my-2">
<div id="app" class="min-h-screen flex flex-col">

    @include('components.layouts.nav')

    <table id="main_table" style="padding:5px;width:100%;border-collapse: collapse">
        <tr style="height:7px;background-color:red">
            <td colspan="9">
            </td>
        <tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            </td>
            <td style="width:25px;border-left:4px solid yellow;border-top:4px solid #ffff00"></td>
            <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="border-top:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-left:4px solid yellow;border-top:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px"></td>
            <td></td>
            <td style="width:25px"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border-bottom:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:50px;background-color:red">
            <td width="7px">
            <td style="width:25px;border-right:4px solid yellow;border-left:4px solid yellow"></td>
            <td style="width:25px;"></td>
            <td style="width:25px;"></td>
            <td style="text-align:center">

                {{--Depth 3: Card title--}}
                <table width=100%>
                    <tr>
                        <td colspan='3'>
                            <p>
                                <img src="{{asset("/images/dragon-small.png")}}" style="float:left;height:200px"
                                     alt="Golden Dragon">
                                <img src="{{asset("/images/dragon-small-flipped.png")}}"
                                     style="float:right;height:200px" alt="Golden Dragon">
                                <span
                                    style="font-size:40px;font-weight:bold;color:yellow">Chinees Indische Specialiteiten</span><br>
                                <span style="font-size:50px;font-weight:bold;color:yellow">De Gouden Draak</span><br>
                            </p>
                            <p>

                            {{--Redirect to other pages--}}
                            <table style="margin:auto;font-size:20px;color:white" border="1px solid white">
                                <tr background="{{asset("/images/menu_bg_gradient.png")}}">
                                    <td valign="middle">
                                        <a href="/menu"
                                           style="color:white;margin-left:1vw;margin-right:1vw;">
                                            Menukaart
                                        </a>
                                    </td>
                                    <td valign="middle">
                                        <a href="/news"
                                           style="color:white;margin-left:1vw;margin-right:1vw;">
                                            Nieuws
                                        </a>
                                    </td>
                                    <td valign="middle">
                                        <a href="/contact"
                                           style="color:white;margin-left:1vw;margin-right:1vw;">
                                            Contact
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            </p>
                        </td>
                    </tr>
                    <tr style="padding-top:50px">
                        <td colspan="3" height="50px">
                        </td>
                    </tr>

                    {{--Page content goes here--}}
                    {{ $slot }}

                </table>

                <br>

                {{--Page end with yellow swiggly lines--}}
                <div text-align="center"><a href="/contact">Naar Contact</a></div>


            <td style="width:25px;"></td>
            <td style="width:25px;"></td>
            <td style="width:25px;border-right:4px solid yellow;border-left:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px"></td>
            <td></td>
            <td style="width:25px"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border-top:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            <td style="width:25px;border-left:4px solid yellow;border-top:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-top:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            </td>
            <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow"></td>
            <td style="border-top:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-left:4px solid yellow;"></td>
            <td style="width:25px;border-left:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td style="width:25px;border-right:4px solid yellow;border-bottom:4px solid yellow"></td>
            <td width="7px">
        </tr>
        <tr style="height:7px;background-color:red">
            <td colspan="9">
            </td>
        <tr>
    </table>

    @include('components.layouts.footer')
</div>
</body>
</html>
