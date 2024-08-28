<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            メディア編集
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 py-2 mx-auto">
                            <div class="flex flex-col text-center w-full">
                            </div>
                            <div class="">
                            <div class="text-center">
                                {{-- <x-error :errors=$errors /> --}}
                            </div>
                            <form method="post" action="{{route('media.update',['medium'=>$article->id])}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="p-2 w-2/3 m-auto">
                                    <button type="button" onclick="location=href='{{route('media.index')}}'" class="flex text-white bg-green-500 mb-8 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg mt-4">戻る</button>
                                <div class="relative">
                                    <label for="title" class="font-bold leading-7 text-sm text-gray-600">タイトル</label>
                                    <input value="{{$article->title}}" type="text" id="title" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-2/3 m-auto">
                                <div class="relative">
                                    <label for="image" class="font-bold leading-7 text-sm text-gray-600">サムネイル</label>
                                    <div>
                                        <img src="{{asset('storage/top/'.$article->image)}}" />
                                        <input type="file" name="image" accept="image/png,image/jpeg,image/jpg" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-5">
                                    </div>
                                </div>
                                </div>
                                <div class="p-2 w-2/3 m-auto">
                                <div class="relative">
                                    <label for="alt" class="font-bold leading-7 text-sm text-gray-600">Alt</label>
                                    <input value="{{$article->alt}}" type="text" id="alt" name="alt" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-2/3 m-auto">
                                <div class="relative">
                                    <label class=" font-bold leading-7 text-sm text-gray-600">投稿タイプ</label>
                                    <div>
                                        <input id="type1" type="radio" name="type" class="mr-2" value="1" @if($article->type === 1){ checked } @endif><label for="type1">インタビュー</label>
                                    </div>
                                    <div>
                                        <input id="type2" class="mr-2" type="radio" name="type" value="2" @if($article->type === 2){ checked } @endif><label for="type2">レポート</label>
                                    </div>
                                </div>
                                </div>
                                <div class="p-2 w-2/3 m-auto">
                                <div class="relative">
                                    <label class=" font-bold leading-7 text-sm text-gray-600">表示状況</label>
                                    <div>
                                        <input id="publish1" type="radio" name="is_publish" class="mr-2" value="0" @if($article->is_publish === 0){ checked } @endif><label for="publish1">非公開</label>
                                    </div>
                                    <div>
                                        <input id="publish2" class="mr-2" type="radio" name="is_publish" value="1" @if($article->is_publish === 1){ checked } @endif><label for="publish2">公開</label>
                                    </div>
                                </div>
                                </div>
                                @if($article->type === 2)
                                <div class="p-2 w-2/3 m-auto">
                                <div class="relative">
                                    <label for="information" class="leading-7 text-sm text-gray-600 font-bold">レポート情報</label>
                                    <textarea rows="10" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="information">{{$article->information}}</textarea>
                                </div>
                                </div>
                                @else
                                <div class="p-2 w-2/3 m-auto">
                                    <div class="relative">
                                        <div>
                                            <button onclick="location.href='{{route('chat.edit',['chat'=>$article->id])}}'" class="flex mx-auto text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg mt-4" type="button">チャット編集</button>
                                        </div>
                                    </div>
                                    </div>
                                @endif
                                <div class="p-2 w-2/3 m-auto">
                                <div class="relative">
                                    <label for="description" class="leading-7 text-sm text-gray-600 font-bold">メタディスクリプション</label>
                                    <input row="3" value="{{$article->description}}" type="text" id="description" name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-4">編集</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

