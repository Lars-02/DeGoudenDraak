<x-admin>
    <form id="edit" action="{{ route('role.update', $role) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="select-none grid gap-1 sm:gap-2 md:gap-4 grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 my-6">

            <x-select id="abilities" name="abilities[]" :options="$abilities" multi="true">{{ __('role.abilities') }}</x-select>

        </div>
    </form>
    <div class="flex justify-between">
        <x-button form="edit" type="submit">{{ __('general.submit') }}</x-button>
        @can('delete', $role)
            <form action="{{ route('role.destroy', $role) }}" method="POST">
                @csrf
                @method('DELETE')
                <x-button type="submit" class="bg-red-600">{{ __('general.destroy') }}</x-button>
            </form>
        @endcan
    </div>
    </div>
</x-admin>
