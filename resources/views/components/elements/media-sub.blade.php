<div class="text-center mt-28 md:w-10/12 xl:w-[1000px] w-full">
    <div class="flex justify-between">
        <div class=" p-3 rounded-sm w-full cursor-pointer hover:bg-gray-50 duration-300 @if(\Request::get('sort') == '') bg-gray-50 opacity-100 @else opacity-50 @endif" onclick="location.href='{{route('stok.interview')}}'">
            <p class="font-sub">All</p>
            <h1 class="text-md ii pb-3 border-b border-gray-500 md:w-[120px] m-auto">全て</h1>
        </div>
        <div class="p-3 rounded-md w-full cursor-pointer hover:bg-gray-100 duration-300 @if(\Request::get('sort') == 'interview') bg-gray-50 opacity-100 @else opacity-50 @endif" onclick="location.href='{{route('stok.interview',['sort' => 'interview'])}}'">
            <p class="font-sub">Interview</p>
            <h1 class="text-md ii pb-3 border-b border-gray-500 md:w-[120px] m-auto">インタビュー</h1>
        </div>
        <div class=" p-3 rounded-md w-full cursor-pointer hover:bg-gray-100 duration-300 @if(\Request::get('sort') == 'report') bg-gray-50 opacity-100 @else opacity-50 @endif" onclick="location.href='{{route('stok.interview',['sort' => 'report'])}}'">
            <p class="font-sub">Report</p>
            <h1 class="text-md ii pb-3 border-b border-gray-500 md:w-[120px] m-auto">レポート</h1>
        </div>
    </div>
</div>