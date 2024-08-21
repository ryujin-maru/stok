
@if($article->type == 1)
<div class="">
    <div class="">
        <div class="flex justify-between bg-red-400 text-white px-3 py-4">
            <h3 class="hover:cursor-pointer" onclick="location.href='{{route('stok.interview')}}'">記事一覧</h3>
            @if($article->type == 1)
                <p class="hover:cursor-pointer" onclick="location.href='{{route('stok.interview',['sort'=>'interview'])}}'">interview</p>
            @elseif($article->type == 2)
                <p class="hover:cursor-pointer" onclick="location.href='{{route('stok.interview',['sort'=>'report'])}}'">report</p>
            @endif
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
@elseif($article->type == 2)
{!! $article->information !!}
@endif