@props([
    'href' => "",
])

<div {{$attributes->merge(['class'=>"mb-8 text-center relative"])}} >
    <button onclick="location.href='{{$href}}'" class="font-sub border px-8 py-2 border-gray-700 shadow-md cursor-pointer">See more</button>
</div>