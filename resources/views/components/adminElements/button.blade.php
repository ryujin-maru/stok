@props([
    'href' => "",
    'bg' => '',
])

<div>
    {{-- <button onclick="location.href='{{$href}}'" class="relative bg-white font-sub border px-8 py-2 sm:px-16 sm:py-4 border-gray-700 shadow-md cursor-pointer text-black" id="btn">See more</button> --}}
    <a href="{{$href}}" class="{{$bg}} relative font-sub border px-14 py-4 sm:px-16 border-gray-500 sm:py-4 shadow-md cursor-pointer text-black">
        {{$slot}}
    </a>
</div>