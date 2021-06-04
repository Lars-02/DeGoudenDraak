<x-layout>
    {{--    TODO Workaround for styling, VERY BAD PRACTICE--}}
       <table class="hidden"></table>

    <div class="container justify-center mt-5r">
        <h1 class="text-3xl md:text-4xl font-semibold tracking-tight leading-7 md:leading-10 mb-1 truncate text-yellow-200 pb-1">Download het menu</h1>

            <a href="/menu/pdf" class="btn btn-success btn-lg w-64 mx-auto mb-4">Download <i class="fa fa-download" aria-hidden="true"></i></a>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <table class="table-auto bg-yellow-50 mx-auto">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Gerecht</th>
                    <th>Beschrijving</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($servings as $serving)
                    <tr>
                        <th>{{$serving->id}}</th>
                        <td>{{$serving->name}}</td>
                        <td>{{$serving->description}}</td>
                        <td><a href="/menu/{{ $serving->id }}"><i
                                    class="fas fa-info-circle text-blue-500 fa-2x md:fa-5x"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="w-full max-w-screen-xl mx-auto px-6">
                <div class="flex justify-center py-10">
                    <div class="w-full max-w-md">
                        <div class="bg-white shadow-md rounded-lg px-3 py-2 mb-4">
                            <div class="block text-gray-700 text-lg font-semibold py-2 px-2">
                                Menu
                            </div>
                            <div class="flex items-center bg-gray-200 rounded-md">
                                <div class="pl-2">
                                    <svg class="fill-current text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path class="heroicon-ui"
                                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                    </svg>
                                </div>
                                <input
                                    class="w-full rounded-md bg-gray-200 text-gray-700 leading-tight focus:outline-none py-2 px-2"
                                    id="search" type="text" placeholder="Zoek gerecht">
                            </div>
                            <div class="py-3 text-sm">
                                @foreach ($servings as $serving)
                                <a href="/menu/{{ $serving->id }}" class="flex justify-start cursor-pointer text-gray-700 hover:text-blue-400 hover:bg-blue-100 rounded-md px-2 py-2 my-2">
                                    <span class="bg-gray-400 h-2 w-2 m-2 rounded-full"></span>
                                    <div class="flex-grow font-medium px-2">{{$serving->name}}</div>
                                    <div class="text-sm font-normal text-gray-500 tracking-wide">Nummer: {{$serving->number}}</div>
                                </a>
                                @endforeach
                            </div>
                            <div class="block bg-gray-200 text-sm text-right py-2 px-3 -mx-3 -mb-2 rounded-b-lg">
                                <button class="hover:text-gray-600 text-gray-500 font-bold py-2 px-4">
                                    Cancel
                                </button>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Invite
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-layout>
