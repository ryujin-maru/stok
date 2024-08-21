@props([
    'item' => '',
])

<div class="swiper-slide relative">
    <a href="{{route('stok.interview.page',['id' => $item->id])}}">
        <img src="{{asset('storage/top/'.$item->image)}}" alt="{{$item->alt}}" />
        <div class="absolute back-g inset-0 pt-[25%] pl-[5%]">
            <h3 class="text-white text-xl">{{$item->title}}</h3>
            <p class="text-gray-200 mt-8">{{$item->created_at->format('Y-m-d')}}</p>
        </div>
    </a>
    @if($item->type == 1)
        <p class="absolute top-0 left-0 text-white text-sm text-center font-sub bg-red-400 w-[20%] py-1 ">interview</p>
    @elseif($item->type == 2)
        <p class="absolute top-0 left-0 text-white text-sm text-center font-sub bg-green-400 w-[20%] py-1">report</p>
    @endif
</div>