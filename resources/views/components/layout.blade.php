<x-app>
    <div class="mb-5">
        {{--Page title--}}
        <div class="flex flex-nowrap items-center">
            <img src="{{asset("/images/dragon.png")}}"
                 class="object-contain h-48 w-48 mx-auto hidden lg:block">

            <div class="grid grid-cols-1 mx-auto">
                <h3 class="" style="font-size:30px;font-weight:bold;color:yellow">{{__('layout.subtitle')}}</h3>
                <h2 class="" style="font-size:40px;font-weight:bold;color:yellow">De Gouden Draak</h2>

                {{--Redirect to other pages for user--}}
                    {{--TODO    @if (klant)--}}
                    <div class="flex flex-nowrap items-center mt-3">
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
                    </div>
                    {{--TODO    @endif--}}

                    {{--Redirect to other pages for cashdesk--}}
                    {{--TODO    @if (kassa)--}}
                    <div class="flex flex-nowrap items-center mt-3">
                        <table style="margin:auto;font-size:20px;color:white" border="1px solid white">
                            <tr background="{{asset("/images/menu_bg_gradient.png")}}">
                                <td valign="middle">
                                    <a href="/menu"
                                       style="color:white;margin-left:1vw;margin-right:1vw;">
                                        Menu
                                    </a>
                                </td>
                                <td valign="middle">
                                    <a href="{{route('offer.index')}}"
                                       style="color:white;margin-left:1vw;margin-right:1vw;">
                                        Aanbieding
                                    </a>
                                </td>
                                <td valign="middle">
                                    <a href="/messages"
                                       style="color:white;margin-left:1vw;margin-right:1vw;">
                                        Berichten
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                {{--TODO    @endif--}}
            </div>
            <img src="{{asset("/images/dragon.png")}}"
                 class="mirror object-contain h-48 w-48 mx-auto hidden lg:block">
        </div>
    </div>
    <div id="app" class="w-11/12 mx-auto">
        {{ $slot }}
    </div>
</x-app>
