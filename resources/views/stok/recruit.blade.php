<x-layout title="Recruit">
    <x-elements.sub-main title="Recruit" enTitle="採用情報" />

    <div class="bg-gray-100">
        <img class="w-full object-cover" src="{{asset("images/fes1.jpg")}}" alt="空を背景にフェスを楽しむ人々" />
        <div class="flex justify-center">
            <div class="w-10/12 text-gray-500 text-left my-8 ">
                <div class="mt-8 border-b border-gray-500 pb-4">
                    <h3 class="font-bold text-xl">仕事内容</h3>
                    <p class="text-lg mt-3">イベント運営,営業代行,事務,経理
                    </p>
                </div>
                <div class="mt-8 border-b border-gray-500 pb-4">
                    <h3 class="font-bold text-xl">給与</h3>
                    <p class="text-lg mt-3">入社3ヶ月（研修時）</p>
                    <p class="text-lg mt-3">福岡18万円～,東京21万円～</p>
                    <p class="text-lg mt-3">研修後</p>
                    <p class="text-lg mt-3">福岡22万円～,東京25万円～</p>
                </div>
                <div class="mt-8 border-b border-gray-500 pb-4">
                    <h3 class="font-bold text-xl">勤務地</h3>
                    <p class="text-lg mt-3">本社またはクライアント先（一都三県、福岡）</p>
                </div>
                <div class="mt-8 border-b border-gray-500 pb-4">
                    <h3 class="font-bold text-xl">勤務要項</h3>
                    <p class="text-lg mt-3">09:00~19:00の間（8時間）</p>
                    <p class="text-lg mt-3">週休2日,1日8時間</p>
                </div>
                <div class="mt-8 border-b border-gray-500 pb-4">
                    <h3 class="font-bold text-xl">福利厚生</h3>
                    <p class="text-lg mt-3">社員寮,社会保険完備,交通費全額支給</p>
                </div>
                <div class="mt-8 border-b border-gray-500 pb-4">
                    <h3 class="font-bold text-xl">職場の雰囲気</h3>
                    <p class="text-lg mt-3">20・30代を中心とした会社の為、休みの日はみんなで出かけたりととても仲のいい会社です。</p>
                </div>

                <div class="mb-8 text-center relative z-10 mt-16">
                    <a href="{{route('stok.contact')}}" class="relative font-sub border px-8 py-2 sm:px-16 sm:py-4 border-gray-700 shadow-md cursor-pointer text-black bg-white">問い合わせ</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>