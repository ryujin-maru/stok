@props([
    'href' => "",
    'bg' => '',
])

<div {{$attributes->merge(['class'=>"mb-8 text-center relative z-10"])}}>
    {{-- <button onclick="location.href='{{$href}}'" class="relative bg-white font-sub border px-8 py-2 sm:px-16 sm:py-4 border-gray-700 shadow-md cursor-pointer text-black" id="btn">See more</button> --}}
    <a href="{{$href}}" class="relative font-sub border px-14 py-4 sm:px-16 sm:py-4 border-gray-700 shadow-md cursor-pointer text-black" id="btn">See more</a>
</div>