<x-layout>
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
    </table>

    <div class="py-5 bg-yellow-50 border-2 border-black">
        <h3>{{__('homepage.content_1')}}</h3>
        <h3>{{__('homepage.content_2')}}</h3>
    </div>
</x-layout>
