<x-admin>
        <form id="edit" action="{{ route('user.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="select-none grid gap-1 sm:gap-2 md:gap-4 grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 my-6">

                <x-select id="roles" name="roles[]" :options="$roles" multi="true">{{ __('user.roles') }}</x-select>

            </div>
        </form>
        <div class="flex justify-between">
            <x-button form="edit" type="submit">{{ __('general.submit') }}</x-button>
            @can('delete', $user)
                <form action="{{ route('user.destroy', $user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-button type="submit" class="bg-red-600">{{ __('general.destroy') }}</x-button>
                </form>
            @endcan
        </div>
    </div>
</x-admin>
