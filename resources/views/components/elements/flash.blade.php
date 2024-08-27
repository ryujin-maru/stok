@if(session('message'))
<div class="mt-12 text-center ">
    <p class="text-white bg-blue-400 rounded-sm py-2 w-1/6 m-auto">{{session('message')}}</p>
</div>
@endif