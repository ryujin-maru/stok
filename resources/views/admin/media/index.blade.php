<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            メディア一覧
        </h2>
    </x-slot>
    <x-elements.flash />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-[repeat(2,minmax(165px,1fr))] md:grid-cols-[repeat(3,minmax(200px,1fr))] gap-3">
                        {{-- ここからループ --}}
                        @foreach ($articles as $item)
                        <a href="{{route('media.edit',['medium' => $item->id])}}">
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
        </div>
    </div>
</x-app-layout>
