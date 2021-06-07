<div class="mb-8">
    <label class="select-none text-xs sm:text-sm md:text-base lg:text-lg mb-1.5 pl-1.5 py-0.5 float-left text-left text-white w-2/3 bg-gray-400 rounded font-medium" for="{{$id}}">{{$slot}}</label>
    <select
        id="{{$id}}"
        name="{{$id}}"
        {{$attributes->class(['text-xs sm:text-sm md:text-base lg:text-lg px-2.5 py-2.5 pl-4 w-full rounded border-gray-400 focus:border-gray-400 text-gray-600 focus:ring-0'])}}
    >
        <option disabled>Kies uw {{$slot}}</option>
        @foreach($options as $option => $value)
            <option
                value="{{ $option }}"
            >{{ $value }}</option>
        @endforeach
    </select>
</div>
