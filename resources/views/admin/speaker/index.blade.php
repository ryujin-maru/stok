<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ユーザー一覧
        </h2>
    </x-slot>
    <x-elements.flash />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-16">
                        <x-adminElements.button bg="" href="{{route('speaker.create')}}">新規登録する</x-adminElements.button>
                    </div>
                    <div class="grid grid-cols-[repeat(2,minmax(165px,1fr))] md:grid-cols-[repeat(3,minmax(200px,1fr))] gap-3">
                        {{-- ここからループ --}}
                        @foreach ($speakers as $item)
                        <a href="{{route('speaker.edit',['speaker' => $item->id])}}">
                            <div class="bg-white relative shadow-md cursor-pointer hover:shadow-xl hover:mt-[-2px] duration-300 rounded-md">
                                <div class="relative w-36 h-36 mx-auto">
                                    <img class="object-cover rounded-full w-full h-full bg-center" src="{{asset("storage/speakers/".$item->image)}}"/>
                                </div>
                                <div class="h-36 p-2">
                                    <h2 class="pt-3">{{$item->name}}</h2>
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
