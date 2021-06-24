<x-cashier>
    <nav class="flex justify-between p-3 border-b-4 border-blue-600 m-2">
        <img class="h-20" src="{{ asset('/images/goodpay.png') }}" alt="Good pay">
        <div class="flex mx-auto gap-4">
            <a href="{{ route('order.create') }}">
                <x-menubutton>{{ __('cashier.title') }}</x-menubutton>
            </a>
            <a href="{{ '' }}">
                <x-menubutton>{{ __('menu_index.title') }}</x-menubutton>
            </a>
            <a href="{{ route('order.index') }}">
                <x-menubutton>{{ __('cashier.overview') }}</x-menubutton>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <button type="submit" class="pl-8">
                    <x-menubutton>{{ __('general.logout') }}</x-menubutton>
                </button>
            </form>
        </div>
    </nav>
    <order-create v-bind:items="{{$items}}">

    </order-create>
</x-cashier>
