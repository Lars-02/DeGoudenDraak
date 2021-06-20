<x-app>
    <div class="bg-red-700 min-h-screen flex flex-col">
        @include('components.layouts.header')

        <div class="custom-border flex-grow bg-red-600">
            <div class="mb-5">
                {{--Page title--}}
                <div class="flex flex-nowrap items-center">
                    <img src="{{asset("/images/dragon.png")}}"
                         class="object-contain h-48 w-48 mx-auto hidden lg:block">

                    <div class="grid grid-cols-1 mx-auto">
                        <h3 class="" style="font-size:30px;font-weight:bold;color:yellow">{{__('layout.subtitle')}}</h3>
                        <h2 class="" style="font-size:40px;font-weight:bold;color:yellow">De Gouden Draak</h2>

                        {{--Redirect to other pages--}}
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

                        @auth()
                            @if(auth()->user()->is_admin == true)
                                <div class="flex flex-nowrap items-center mt-3">
                                    <table style="margin:auto;font-size:20px;color:white" border="1px solid white">
                                        <tr background="{{asset("/images/menu_bg_gradient.png")}}">
                                            <td valign="middle">
                                                <a href="/"
                                                   style="color:white;margin-left:1vw;margin-right:1vw;">
                                                    {{ __('general.user') }}
                                                </a>
                                            </td>
                                            <td valign="middle">
                                                <a href="/"
                                                   style="color:white;margin-left:1vw;margin-right:1vw;">
                                                    {{ __('general.create.serving') }}
                                                </a>
                                            </td>
                                            <td valign="middle">
                                                <a href="/"
                                                   style="color:white;margin-left:1vw;margin-right:1vw;">
                                                    {{ __('general.request.help') }}
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            @endif
                        @endauth
                    </div>
                    <img src="{{asset("/images/dragon.png")}}"
                         class="mirror object-contain h-48 w-48 mx-auto hidden lg:block">
                </div>
            </div>
            <div id="app" class="w-11/12 mx-auto">
                {{ $slot }}
            </div>
        </div>

        @include('components.layouts.footer')
    </div>
</x-app>
