<div class="bg-black text-white">
    <div class=" w-full flex justify-center">
        <div class="w-10/12 mt-4">
            <p class="font-sub mb-4">Sitemap</p>
            <nav class="mb-6">
                <ul class="grid grid-cols-2 font-thin gap-2">
                    {{-- <p>ホーム</p>
                    <li>事業紹介</li>
                    <li>代表挨拶</li>
                    <li>会社概要</li>
                    <li>お問い合わせ</li>
                    <li>採用情報</li> --}}

                    <a class="hover:opacity-50" href="{{route('stok.index')}}"><li>ホーム</li></a>
                    <a class="hover:opacity-50" href="{{route('stok.products')}}"><li>事業紹介</li></a>
                    <a class="hover:opacity-50" href="{{route('stok.greet')}}"><li>代表挨拶</li></a>
                    <a class="hover:opacity-50" href="{{route('stok.contact')}}"><li>お問い合わせ</li></a>
                    <a class="hover:opacity-50" href="{{route('stok.company')}}"><li>会社概要</li></a>
                    <a class="hover:opacity-50" href="{{route('stok.interview')}}"><li>記事一覧</li></a>
                    <a class="hover:opacity-50" href="{{route('stok.recruit')}}"><li>採用情報</li></a>
                </ul>
            </nav>
        </div>
    </div>
    <div class="border-t border-white text-xs py-2 text-center font-sub">
        <p>copyright© 2023 Stok All Rights Reserved</p>
    </div>
</div>
