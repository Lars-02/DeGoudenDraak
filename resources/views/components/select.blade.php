@props(['id', 'options', 'name' => null, 'multi' => false, 'required' => false])

<div class="mb-8">
    <label
        class="select-none text-xs sm:text-sm md:text-base lg:text-lg mb-1.5 pl-1.5 py-0.5 float-left text-left text-white w-2/3 bg-gray-400 rounded font-medium"
        for="{{$id}}">{{$slot}}</label>
    <select
        id="{{$id}}"
        name="{{ empty($name) ? $id : $name }}"
        @if($multi)
        multiple
        @endif
        {{$attributes->class(['text-xs sm:text-sm md:text-base lg:text-lg px-2.5 py-2.5 pl-4 w-full rounded border-gray-400 focus:border-gray-400 text-gray-600 focus:ring-0'])}}
    >
        <option disabled>{{ __('general.choose', ['item' => $slot]) }}</option>
        @if(!$required)
            <option value>{{ __('general.none') }}</option>
        @endif
        @foreach($options as $option => $value)
            <option
                value="{{ $option }}"
                @if(is_array($value) && is_bool($value[0]) && $value[0])
                selected
                @endif
            >
                {{ is_array($value) ? $value[1] : $value }}
            </option>
        @endforeach
    </select>
    @error($id)
    <span class="text-white-600">{{ $message }}</span>
    @enderror
</div>
