<x-layout>
    <div class="container">
        <div class="row ">
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
                {{--        <tr class="bg-emerald-200">--}}
                {{--          <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>--}}
                {{--          <td>Adam</td>--}}
                {{--          <td>112</td>--}}
                {{--        </tr>--}}
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
