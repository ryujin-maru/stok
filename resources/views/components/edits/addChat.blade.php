@php $id = Request::route('chat') @endphp
<div>
    <form method="post" action="{{route('chat.store')}}">
        @csrf
        @method('POST')
        <label>ユーザー</label><br>
        <select name="speaker" class="focus:bg-white focus:ring-2 focus:ring-indigo-200 bg-gray-100 bg-opacity-50 rounded border border-gray-300">>
            @foreach ($speakers as $speaker)
                <option value="{{$speaker->id}}">{{$speaker->name}}</option>
            @endforeach
        </select><br>
        <div class="mt-10">
            <label >カウント</label><br>
            <input required type="number" name="count" class="focus:bg-white focus:ring-2 focus:ring-indigo-200 bg-gray-100 bg-opacity-50 rounded border border-gray-300">
        </div>
        <div class="mt-10">
            <label>内容</label>
            <textarea required name="text" rows="5" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
        </div>

        <input type="hidden" value="{{$id}}" name="media_id">

        <div class="text-center mt-4">
            <button class="bg-blue-400 hover:cursor-pointer hover:bg-blue-500 rounded-md px-6 py-2 text-white">投稿</button>
        </div>
    </form>
</div>