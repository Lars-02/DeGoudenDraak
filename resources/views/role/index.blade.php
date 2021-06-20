<x-admin>
    <h1>{{ __('role.title') }}</h1>
    <div class="grid md:grid-cols-2 gap-4">
        @foreach($roles as $role)
            <div class="flex flex-col bg-white rounded-sm shadow p-4">
                <div class="flex flex-col">
                    <h2>{{ $role->name }}</h2>
                    <p>{{ $role->label }}</p>
                    @if(!$role->abilities->isEmpty())
                        <h3>{{ __('role.abilities') }}</h3>
                        @foreach($role->abilities as $ability)
                            <p>{{ $ability->name}}</p>
                        @endforeach
                    @endif
                </div>
                <div class="flex flex-row flex-grow items-end justify-between mt-4">
                    @can('update', $role)
                        <a href="{{ route('role.edit', $role) }}">
                            <x-button>{{ __('general.edit') }}</x-button>
                        </a>
                    @endcan
                </div>
            </div>
        @endforeach
    </div>
    <div class="p-12 mx-10">
        {{ $roles->links() }}
    </div>
</x-admin>
