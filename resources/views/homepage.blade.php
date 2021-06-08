<x-layout>
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
    <table id="main_table" style="padding:5px;width:100%;border-collapse: collapse">
        <tr style="height:7px;background-color:red">
            <td colspan="9">
            </td>
        <tr>
        <tr style="height:25px;background-color:red">
            <td width="7px">
            </td>
            <td style="width:25px;border-left:4px solid #ffff00;border-top:4px solid #ffff00"></td>
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
                                    style="font-size:40px;font-weight:bold;color:yellow">{{__('layout.subtitle')}}</span><br>
                                <span style="font-size:50px;font-weight:bold;color:yellow">De Gouden Draak</span><br>

                            {{--Redirect to other pages--}}
                            <table style="margin:auto;font-size:20px;color:white" border="1px solid white">
                                <tr background="{{asset("/images/menu_bg_gradient.png")}}">
                                    <td valign="middle">
                                        <a href="/menu"
                                           style="color:white;margin-left:1vw;margin-right:1vw;">
                                            {{__('layout.menu')}}
                                        </a>
                                    </td>
                                    <td valign="middle">
                                        <a href="/news"
                                           style="color:white;margin-left:1vw;margin-right:1vw;">
                                            {{__('layout.news')}}
                                        </a>
                                    </td>
                                    <td valign="middle">
                                        <a href="/contact"
                                           style="color:white;margin-left:1vw;margin-right:1vw;">
                                            {{__('layout.contact')}}
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr style="padding-top:50px">
                        <td colspan="3" height="50px">
                        </td>
                    </tr>

{{--                    {{$slot}}--}}
                    <div class="py-5 bg-yellow-50 border-2 border-black">
                        <h3>{{__('homepage.content_1')}}</h3>
                        <h3>{{__('homepage.content_2')}}</h3>
                    </div>

                </table>

                <br>

                {{--Page end with yellow swiggly lines--}}
                <div text-align="center"><a href="/contact">{{__('layout.footer')}}</a></div>


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
</x-layout>
