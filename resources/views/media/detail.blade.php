<x-layout title="Detail">
    <div class="flex justify-center mt-[45px] bg-gray-50">
        <div class="mt-[45px]">
            <div class="mb-[15px]">
                <p class="text-sm text-gray-500 cursor-pointer ml-2 "><span onclick="location.href='{{route('stok.index')}}'" class="hover:underline">ホーム</span> > <span onclick="location.href='{{route('stok.media')}}'"class="hover:underline">記事一覧</span> > <span class="hover:underline">egegwe</span></p>
            </div>
            <div class="ml-2 my-8">
                <h1 class="text-3xl text-gray-700">確認テスト！オフィス紹介します！</h1>
            </div>
            <p class="text-gray-500 ml-2">2024/07/27</p>
            {{-- メイン記事 --}}
            <div class="max-w-7xl w-full h-[1000px] md:flex justify-between mb-10">
                <div class="flex-auto bg-white main-article">
                    <div>
                        <img width="100%" src="{{asset("images/animal.jpg")}}" alt=""/>
                    </div>
                    <div class="px-4 my-10 pb-10 leading-9">
                        {{-- 本文 --}}
                        <h2>記事を紹介しまう記事を紹介しまう</h2>
                        <p>記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう記事を紹介しまう</p><br>
                        <p>記事を紹介しまう記事を紹介しまう記事を紹介しまう</p>
                        <p>記事を紹介しまう記事を紹介しまう記事を紹介しまう</p>
                    </div>
                </div>
    
                <div class="md:min-w-[350px] md:pl-[10px]">
                    <div class="">
                        <div class="">
                            <div class="flex justify-between bg-red-400 text-white px-3 py-4">
                                <h3 class="hover:cursor-pointer" onclick="location.href='{{route('stok.media')}}'">記事一覧</h3>
                                <p class="hover:cursor-pointer" onclick="location.href='{{route('stok.media')}}'">media</p>
                            </div>
                            <div>
                                <ul>
                                    {{-- ここからループ --}}
                                    <li class="hover:cursor-pointer hover:bg-slate-700 hover:text-white text-gray-700 px-3 py-4 bg-white duration-500">確認テスト！オフィス紹介します！</li>
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