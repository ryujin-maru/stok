<x-layout title="Detail">
    <div class="flex justify-center mt-[45px] bg-gray-50">
        <div class="mt-[45px]">
            <div class="mb-[15px]">
                <p class="text-sm text-gray-500 cursor-pointer ml-2 "><span onclick="location.href='{{route('stok.index')}}'" class="hover:underline">ホーム</span> > <span onclick="location.href='{{route('stok.interview')}}'"class="hover:underline">記事一覧</span> > <span onclick="location.href='{{route('stok.interview.page', ['id' => $article->id])}}'"class="hover:underline">{{$article->title}}</span></p>
            </div>
            <div class="ml-2 my-8">
                <h1 class="text-3xl text-gray-700">{{$article->title}}</h1>
            </div>
            <p class="text-gray-500 ml-2">{{$article->updated_at->format('Y-m-d')}}</p>
            {{-- メイン記事 --}}
            <div class="max-w-7xl w-full md:flex justify-between mb-10">
                <div class="flex-auto bg-white main-article">
                    <div>
                        <img width="100%" src="{{asset("storage/top/".$article->image)}}" alt="{{$article->alt}}"/>
                    </div>
                    <div class="px-4 my-10 pb-10 leading-9">
                        {{-- 本文 --}}
                        {!! $article->information !!}
                    </div>
                </div>
    
                <div class="md:min-w-[350px] md:pl-[10px]">
                    <div class="">
                        <div class="">
                            <div class="flex justify-between bg-red-400 text-white px-3 py-4">
                                <h3 class="hover:cursor-pointer" onclick="location.href='{{route('stok.interview')}}'">記事一覧</h3>
                                <p class="hover:cursor-pointer" onclick="location.href='{{route('stok.interview')}}'">interview</p>
                            </div>
                            <div>
                                <ul>
                                    {{-- ここからループ --}}
                                    @foreach ($articles as $item)
                                    <a href="{{route('stok.interview.page', ['id' => $item->id])}}">
                                    <li class="hover:cursor-pointer hover:bg-slate-700 hover:text-white text-gray-700 px-3 py-4 bg-white duration-500 border-b border-gray-200">{{$item->title}}</li></a>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    $(function () {
        $(".hd").css('background-color','white');
    });
    </script>
</x-layout>