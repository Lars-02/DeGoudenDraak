<x-layout>
    <tr>
        <td>
            <div class="grid mt-8  gap-8 grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
                @foreach($offers as $index => $offer)
                    <a class="cursor-pointer text-gray-800" href="{{route('offer.edit', $offer)}}">
                        <div class="flex flex-col">
                            <div class="bg-yellow-50 shadow-md  rounded-3xl p-4 shadow-lg">
                                <div class="flex-none lg:flex justify-content-center">
                                    <div class="flex-auto ml-3 justify-evenly py-2">
                                        <div class="flex flex-wrap ">
                                            <h2 class="flex-auto text-lg font-medium">{{ __('offer.title', ['index' =>  $index + 1]) }}</h2>
                                        </div>
                                        <p class="mt-3"></p>
                                        <div class="flex py-2  text-sm text-gray-600">
                                            <div class="flex-1 inline-flex items-center">
                                                <p>{{ __('offer.price') }}</p>
                                            </div>
                                            <div class="flex-1 inline-flex items-center">
                                                <p class="">&#8364;{{$offer->price}}</p>
                                            </div>
                                        </div>

                                        <div class="flex text-sm text-gray-600">
                                            <div class="flex-1 inline-flex items-center">
                                                <p>{{ __('offer.start_at') }}</p>
                                            </div>
                                            <div class="flex-1 inline-flex items-center">
                                                <p class="">{{$offer->start_at}}</p>
                                            </div>
                                        </div>

                                        <div class="flex pb-4  text-sm text-gray-600">
                                            <div class="flex-1 inline-flex items-center">
                                                <p>{{ __('offer.ending_at') }}</p>
                                            </div>
                                            <div class="flex-1 inline-flex items-center">
                                                <p class="">{{$offer->ending_at}}</p>
                                            </div>
                                        </div>
                                        <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </td>
    </tr>
</x-layout>
