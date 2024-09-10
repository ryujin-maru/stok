<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            チャット編集
        </h2>
    </x-slot>

    <x-elements.flash :status="session('status')"/>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button type="button" onclick="location=href='{{route('media.edit',['medium' => $id])}}'" class="flex text-white bg-green-500 mb-20 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg mt-4">戻る</button>
                    <x-elements.chat-edit :articles="$articles"/>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 pb-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
            <div class="p-6 text-gray-900">
                <x-edits.addChat :speakers="$speakers"/>
            </div>
        </div>
    </div>
</x-app-layout>