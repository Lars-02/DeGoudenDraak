<x-layout>
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
</x-layout>
