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
</div>