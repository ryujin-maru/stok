<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ユーザー新規作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-center">
                        <x-error :errors=$errors />
                    </div>
                    <form method="post" action="{{route('speaker.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="p-2 w-2/3 m-auto">
                            <button type="button" onclick="location=href='{{route('speaker.index')}}'" class="flex text-white bg-green-500 mb-8 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg mt-4">戻る</button>

                            <div>
                                <label for="title" class="font-bold leading-7 text-sm text-gray-600">名前</label>
                                <input value="{{old('name')}}" type="text" id="title" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            <div class="mt-10">
                                <label for="image" class="font-bold leading-7 text-sm text-gray-600">サムネイル</label>
                                <div>
                                    {{-- <img src="{{asset('storage/speakers/'.$speaker->image)}}" /> --}}
                                    <input type="file" name="image" accept="image/png,image/jpeg,image/jpg" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-5">
                                </div>
                            </div>

                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-20">編集する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
