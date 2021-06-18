<x-admin>
    <h1>{{ __('user.title') }}</h1>
    <div class="grid md:grid-cols-2 gap-4">
        @foreach($users as $user)
            <div class="flex flex-col bg-white rounded-sm shadow p-4">
                <div class="flex flex-col">
                    <h2>{{ $user->fullname }}</h2>
                    <p>{{ $user->email }}</p>
                    @if(!$user->roles->isEmpty())
                        <h3>{{ __('user.roles') }}</h3>
                        @foreach($user->roles as $role)
                            <p>{{ $role->name}}</p>
                        @endforeach
                    @endif
                </div>
                <div class="flex flex-row flex-grow items-end justify-between mt-4">
                    @can('update', $user)
                        <a href="{{ route('user.edit', $user) }}">
                            <x-button>{{ __('general.edit') }}</x-button>
                        </a>
                    @endcan
                </div>
            </div>
        @endforeach
    </div>
    <div class="p-12 mx-10">
        {{ $users->links() }}
    </div>
</x-admin>
