<x-layout title="Media">
    <x-elements.sub-main title="Article" enTitle="記事一覧" />
    <div class="w-full flex justify-center">
        <x-elements.media-sub/>
    </div>
    <div class="bg-white w-full flex justify-center">
        <div class="cov md:w-10/12 mt-5 rounded-xl  bg-gray-50 flex justify-center mb-8 xl:w-[1000px] p-3 md:p-5 py-10 min-h-[500px]">
            <div class="grid grid-cols-[repeat(2,minmax(165px,1fr))] md:grid-cols-[repeat(3,minmax(200px,1fr))] gap-3">
                {{-- ここからループ --}}
                @foreach ($articles as $item)
                <a href="{{route('stok.interview.page',['id' => $item->id])}}">
                    <div class="bg-white relative shadow-md cursor-pointer hover:shadow-xl hover:mt-[-2px] duration-300 rounded-md">
                        <div class="relative">
                            <img class="object-contain rounded-t-md" src="{{asset("storage/top/".$item->image)}}" alt="{{$item->alt}}"/>
                            @if($item->type == 1)
                                <p class="absolute top-0 left-0 text-white text-sm text-center font-sub bg-red-400 w-[40%] rounded-tl-md rounded-br-md md:py-1">interview</p>
                            @elseif($item->type == 2)
                                <p class="absolute top-0 left-0 text-white text-sm text-center font-sub bg-green-400 w-[40%] rounded-tl-md rounded-br-md md:py-1">report</p>
                            @endif
                        </div>
                        <div class="h-36 p-2">
                            <h2 class="pt-3">{{$item->title}}</h2>
                            <div class="absolute bottom-0">
                                <p class="pb-2 text-gray-400 text-sm">{{$item->created_at->format('Y-m-d')}}</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mb-8">
        {{$articles->links()}}
    </div>
<x-elements.sub-js />
</x-layout>