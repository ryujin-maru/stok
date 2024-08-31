<div class="px-4 my-10 pb-10 leading-9">
    {{-- {!! $article->information !!} --}}
    <!--左の会話-->
    @foreach($articles as $chat)
    @if($chat->count % 2 == 1)
    {{-- <button class="float-right bg-red-400 hover:cursor-pointer hover:bg-red-500 rounded-md px-4 text-white">削除</button> --}}
    <form method="post" action="{{route('chat.update',['chat'=>$chat->id])}}">
        @csrf
        @method('PUT')
        <div class="talk-wrap">
            <div class="flex justify-center w-24">
                <button class="bg-blue-400 hover:cursor-pointer hover:bg-blue-500 rounded-md px-4 text-white">編集</button>
            </div>
            <div class="left-icon mb-12 " style="background-image: url('{{asset("storage/top/".$chat->speaker->image)}}');">
                <p class="text-center pt-[110%] text-xs sm:text-sm">{{$chat->speaker->name}}</p>
                <div class="flex justify-center">
                    <input name="count" class="w-3/4 h-6" type="number" value="{{$chat->count}}"/>
                </div>
            </div>
            
            <div class="talk-left mb-[50px]">
                {{-- <p>{{$chat->text}}</p> --}}
                <textarea name="text" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{!!$chat->text!!}</textarea>
            </div>
        </div>
    </form>
    {{-- チャット削除 --}}
    <form id="delete_{{$chat->id}}" method="post" action="{{route('chat.destroy',['chat'=>$chat->id])}}">
        @csrf
        @method('DELETE')
        <a onClick="deletePost({{$chat->id}})" class="text-md float-right px-1 border border-red-500 leading-none hover:cursor-pointer">×</a>
    </form>
    @else
    <!--左はここまで-->
    <!--右の会話-->
    <form method="post" action="{{route('chat.update',['chat'=>$chat->id])}}">
        @csrf
        @method('PUT')
        <div class="talk-wrap">
            <div class="flex justify-end">
                <div class="flex justify-center w-24">
                    <button class="bg-blue-400 hover:cursor-pointer hover:bg-blue-500 rounded-md px-4 text-white">編集</button>
                    {{-- <button class="bg-red-400 hover:cursor-pointer hover:bg-red-500 rounded-md px-4 text-white">削除</button> --}}
                </div>
            </div>
            <div class="right-icon mb-12" style="background-image: url('{{asset("storage/top/".$chat->speaker->image)}}');">
                <p class="text-center pt-[110%] text-xs sm:text-sm">{{$chat->speaker->name}}</p>
                <div class="flex justify-center">
                    <input name="count" class="w-3/4 h-6" type="number" value="{{$chat->count}}"/>
                </div>
            </div>
            <div class="talk-right mb-[50px]">
                {{-- <p>{{$chat->text}}</p> --}}
                <textarea name="text" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{!!$chat->text!!}</textarea>
            </div>
        </div>
    </form>
    <form id="delete_{{$chat->id}}" method="post" action="{{route('chat.destroy',['chat'=>$chat->id])}}">
        @csrf
        @method('DELETE')
        <a onClick="deletePost({{$chat->id}})" class="text-md float-left px-1 border border-red-500 leading-none hover:cursor-pointer">×</a>
    </form>
    @endif
    <!--右はここまで-->
    <!--↓会話部分の最後にこれを必ず付け加えて↓-->
    @endforeach
    <div class="talk-end"></div>
</div>

<script>
    'use strict'
    function deletePost(key) {
        if(confirm('本当に削除しますか？')) {
            document.getElementById('delete_'+key).submit();
        }
    }
</script>