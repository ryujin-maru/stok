@props([
    'status' => 'blue',
])

@php
if($status == 'blue') {
    $bg = 'bg-blue-400';
}elseif($status == 'red') {
    $bg = 'bg-red-400';
}
@endphp

@if(session('message'))
<div class="mt-12 text-center ">
    <p class="text-white {{$bg}} rounded-sm py-2 w-1/6 m-auto">{{session('message')}}</p>
</div>
@endif