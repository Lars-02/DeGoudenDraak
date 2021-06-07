<x-layout>
    <tr>
        <td>
            <div class="grid mt-8  gap-8 grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
                @for($i = 0; $i < count($discounts); $i++)
                    <div class="flex flex-col">
                        <div class="bg-yellow-50 shadow-md  rounded-3xl p-4 shadow-lg">
                            <div class="flex-none lg:flex justify-content-center">
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
                                            <p class="">&#8364;{{$discounts[$i]->price}}</p>
                                        </div>
                                    </div>

                                    <div class="flex text-sm text-gray-600">
                                        <div class="flex-1 inline-flex items-center">
                                            <p>Start aanbieding:</p>
                                        </div>
                                        <div class="flex-1 inline-flex items-center">
                                            <p class="">{{$discounts[$i]->start_at}}</p>
                                        </div>
                                    </div>

                                    <div class="flex pb-4  text-sm text-gray-600">
                                        <div class="flex-1 inline-flex items-center">
                                            <p>Einde aanbieding:</p>
                                        </div>
                                        <div class="flex-1 inline-flex items-center">
                                            <p class="">{{$discounts[$i]->ending_at}}</p>
                                        </div>
                                    </div>
                                    <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </td>
    </tr>
</x-layout>
