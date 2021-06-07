<div class="select-none mb-4 xl:mb-6">
    <label class="select-none text-xs sm:text-sm md:text-base lg:text-lg mb-1.5 pl-1.5 py-0.5 float-left text-left text-white w-2/3 bg-gray-400 rounded font-medium" for="{{$id}}">{{$slot}}</label>
    <div class="relative">
        <input
            id="{{$id}}"
            placeholder="{{$slot}}..."
            name="{{$id}}"
            value="{{ old($id) }}"
            {{$attributes->class(['select-text text-xs sm:text-sm md:text-base lg:text-lg px-2.5 py-2.5 w-full rounded border-gray-400 focus:border-gray-400 text-gray-600 focus:ring-0'])}}
        />
    </div>
    @error($id)
    <span class="text-red-600">{{ $message }}</span>
    @enderror
</div>
