@props(['type' => 'button'])

<button
    {{ $attributes->class(["text-xs sm:text-sm md:text-base lg:text-lg py-2 px-3 sm:px-4 md:px-5 xl:px-6 bg-gray-400 hover:bg-gray-600 text-white font-bold rounded focus:outline-none"]) }} type="{{ $type }}">
    {{ $slot }}
</button>
