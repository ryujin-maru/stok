<x-layout title="Media">
    <x-elements.sub-main title="Interview" enTitle="インタビュー" />
    <div class="bg-white w-full flex justify-center">
        <div class="cov md:w-10/12  bg-gray-50 mt-10 flex justify-center mb-8 xl:w-[1000px] p-3 md:p-5 py-10">
            <div class="grid grid-cols-[repeat(2,minmax(165px,1fr))] md:grid-cols-[repeat(3,minmax(200px,1fr))] gap-3">
                {{-- ここからループ --}}
                <a>
                    <div class="bg-white relative">
                        <img class="object-contain" src="{{asset("storage/top/animal.jpg")}}" alt=""/>
                        <div class="h-36 p-2">
                            <h2 class="pt-3">タイトルです</h2>
                            <div class="absolute bottom-0">
                                <p class="pb-2 text-gray-400 text-sm">2022/05/02</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-layout>