<div class="px-4 my-10 pb-10 leading-9">
    {{-- 本文 --}}
    {{-- {!! $article->information !!} --}}
    <!--左の会話-->
    @foreach($article->chat as $chat)
    @if($chat->count % 2 == 1)
    <div class="talk-wrap">
        <div class="left-icon mb-12 " style="background-image: url('{{asset("storage/top/".$chat->speaker->image)}}');">
            <p class="text-center pt-[110%] text-xs sm:text-sm">{{$chat->speaker->name}}</p>
        </div>
        
        <div class="talk-left">
            <p>{{$chat->text}}</p>
        </div>
    </div>
    @else
    <!--左はここまで-->
    <!--右の会話-->
    <div class="talk-wrap">
        <div class="right-icon mb-12" style="background-image: url('{{asset("storage/top/".$chat->speaker->image)}}');">
            <p class="text-center pt-[110%] text-xs sm:text-sm">{{$chat->speaker->name}}</p>
        </div>
        <div class="talk-right">
            <p>{{$chat->text}}</p>
        </div>
    </div>
    @endif
    <!--右はここまで-->
    <!--↓会話部分の最後にこれを必ず付け加えて↓-->
    @endforeach
    <div class="talk-end"></div>
</div>