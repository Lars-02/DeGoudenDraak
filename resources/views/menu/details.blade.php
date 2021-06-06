<x-layout>
    <tr>
        <td>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="content">
                        <div class="flex items-center justify-between w-full my-4 pl-4 sm:pr-4">
                            <div class="mr-6">
                                <h2 class="text-3xl md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate text-yellow-200 pb-1">{{$serving->name}}
                                    informatie</h2>
                                <div
                                    class="font-base tracking-tight text-gray-600 text-yellow-200">{{$serving->description}}</div>
                            </div>
                        </div>
                        <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
                            <div class="flex flex-col">
                                <div class="bg-white shadow-md  rounded-3xl p-4">
                                    <div class="flex-none lg:flex">
                                        <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                                            <img src="{{asset('images/pepper.png')}}"
                                                 alt="A pepper"
                                                 class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
                                        </div>
                                        <div class="flex-auto ml-3 justify-evenly py-2">
                                            <div class="flex flex-wrap ">
                                                <h2 class="flex-auto text-lg font-medium">Pittigheid van gerecht</h2>
                                            </div>
                                            <p class="mt-3"></p>
                                            <div class="flex py-4  text-sm text-gray-600">
                                                <div class="flex-1 inline-flex items-center">
                                                    <p class="">Pittigheid:</p>
                                                </div>
                                                <div class="flex-1 inline-flex items-center">
                                                    @if($serving->spice == null)
                                                        <p>Onbekend</p>
                                                    @else
                                                        @for($i = 0; $i < 3; $i++)
                                                            @if($serving->spice >= $i)
                                                                <img src="{{asset('images/pepper.png')}}"
                                                                     alt="A pepper"
                                                                     class="object-scale-down lg:object-cover md:w-9 md:h-9 w-8 h-8 rounded-2xl">
                                                            @else
                                                                <img src="{{asset('images/peppergray.png')}}"
                                                                     alt="A gray pepper"
                                                                     class="object-scale-down lg:object-cover md:w-9 md:h-9 w-8 h-8 rounded-2xl">

                                                            @endif
                                                        @endfor
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col ">
                                <div class="bg-white shadow-md  rounded-3xl p-4">
                                    <div class="flex-none lg:flex">
                                        <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                                            <img src="{{asset('images/plate.png')}}"
                                                 alt="A plate"
                                                 class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
                                        </div>
                                        <div class="flex-auto ml-3 justify-evenly py-2">
                                            <div class="flex flex-wrap ">
                                                <h2 class="flex-auto text-lg font-medium">Gegevens</h2>
                                            </div>
                                            <p class="mt-3"></p>
                                            <div class="flex py-2  text-sm text-gray-600">
                                                <div class="flex-1 inline-flex items-center">
                                                    <p>Prijs:</p>
                                                </div>
                                                <div class="flex-1 inline-flex items-center">
                                                    <p class="">
                                                        &#8364;{{$serving->price}}</p>
                                                </div>
                                            </div>

                                            <div class="flex pb-4  text-sm text-gray-600">
                                                <div class="flex-1 inline-flex items-center">
                                                    <p>Category:</p>
                                                </div>
                                                <div class="flex-1 inline-flex items-center">
                                                    {{--                                            <p class="">{{$serving->categories}}</p>--}}
                                                </div>
                                            </div>
                                            <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--                    @for($i = 0; $i < count($serving->offers); $i++)--}}
                            @for($i = 0; $i < 1; $i++)
                                <div class="flex flex-col ">
                                    <div class="bg-white shadow-md  rounded-3xl p-4">
                                        <div class="flex-none lg:flex">
                                            <div class="flex-auto ml-3 justify-evenly py-2">
                                                <div class="flex flex-wrap ">
                                                    <h2 class="flex-auto text-lg font-medium">Aanbieding {{$i + 1}}</h2>
                                                </div>
                                                <p class="mt-3"></p>
                                                <div class="flex py-2  text-sm text-gray-600">
                                                    <div class="flex-1 inline-flex items-center">
                                                        <p>Prijs:</p>
                                                    </div>
                                                    <div class="flex-1 inline-flex items-center">
                                                        <p class="">
                                                        {{--                                                    &#8364;{{$serving->offers[$i]->price}}</p>--}}
                                                    </div>
                                                </div>

                                                <div class="flex text-sm text-gray-600">
                                                    <div class="flex-1 inline-flex items-center">
                                                        <p>Start aanbieding:</p>
                                                    </div>
                                                    <div class="flex-1 inline-flex items-center">
                                                        {{--                                                <p class="">{{$serving->offers[0]->start_at}}</p>--}}
                                                    </div>
                                                </div>

                                                <div class="flex pb-4  text-sm text-gray-600">
                                                    <div class="flex-1 inline-flex items-center">
                                                        <p>Einde aanbieding:</p>
                                                    </div>
                                                    <div class="flex-1 inline-flex items-center">
                                                        {{--                                                <p class="">{{$serving->offers[0]->ending_at}}</p>--}}
                                                    </div>
                                                </div>
                                                <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
</x-layout>
