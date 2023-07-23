<x-layout title="Contact">
    <div class="text-center mb-10">
        <h1 class="mt-20 font-sub">Contact</h1>
        <h2 class="text-xl ii">お問い合わせ</h2>
    </div>

    <div class="bg-gray-100 w-full flex justify-center">
        <div class="w-10/12 bg-white mt-10 flex justify-center mb-8">
            <div class="w-11/12 text-left mt-8">
                <h1 class="border-l-4 border-black">　お問い合わせフォーム</h1>
                <p class="text-xs mt-2 border-b border-gray-200 pb-6">各種問い合わせは下記よりお願いたします。</p>

                <form method="POST" action="{{route('stok.send')}}">
                    @csrf
                    <div>
                        <div class="mt-6 pb-4 border-b border-gray-200">
                            <label class="text-sm">氏名</label><br>
                            <input class="w-full leading-loose bg-gray-100 rounded-sm pl-1 mt-2 focus:outline-red-200" type="text" name="name" placeholder="例: 山田 太郎" value="{{old('name')}}">
                            @error('name')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mt-4 pb-4 border-b border-gray-200">
                            <label class="text-sm">メールアドレス</label><br>
                            <input class="focus:outline-red-200 w-full leading-loose bg-gray-100 rounded-sm pl-1 mt-2" type="e-mail" name="mail" placeholder="例: email@xxx.com" value="{{old('mail')}}">
                            @error('mail')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mt-4 pb-4 border-b border-gray-200">
                            <label class="text-sm">電話番号</label><br>
                            <input class="focus:outline-red-200 w-full leading-loose bg-gray-100 rounded-sm pl-1 mt-2" type="number" name="phone" placeholder="例: 01023456789" value="{{old('phone')}}">
                            @error('phone')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mt-4 pb-4">
                            <label class="text-sm">お問合わせ内容</label><br>
                            <textarea class="focus:outline-red-200 w-full leading-loose bg-gray-100 rounded-sm pl-1 mt-2" rows="6" type="number" name="text">{{old('text')}}</textarea>
                            <p class="text-xs">お仕事の依頼や、その他お問い合わせなどご自由にご記入ください。</p>
                            @error('text')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-center w-full mb-8 mt-2">
                        <input class="text-gray-100 bg-black w-3/5 rounded-md py-2" type="submit" name="sub" value="送信">
                    </div>
                </form>

            </div>
        </div>

    </div>

</x-layout>