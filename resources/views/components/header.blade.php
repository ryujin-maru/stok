
<header class="w-full fixed top-0 flex justify-between items-center py-4 px-4 z-50 sm:items-end hd">
    <div class="w-28 cursor-pointer sm:ml-8" onclick="location.href='{{route('stok.index')}}'">
        <img src="{{asset('images/logoname.png')}}" alt="株式会社Stok" />
    </div>

    <div class="w-6 cursor-pointer sm:mr-8 hum md:hidden">
        <img src="{{asset('icon/menu.png')}}" alt="ハンバーガーメニュー" />
    </div>

    <div class="hidden md:block">
        <div>
            <nav class="w-full flex justify-center">
                <ul class="font-sub text-black flex nav">
                    <a href="{{route('stok.index')}}"><li class="pr-4">ホーム</li></a>
                    <a href="{{route('stok.products')}}"><li class="pr-4">事業紹介</li></a>
                    <a href="{{route('stok.greet')}}"><li class="pr-4">代表挨拶</li></a>
                    <a href="{{route('stok.contact')}}"><li class="pr-4">お問い合わせ</li></a>
                    <a href="{{route('stok.company')}}"><li class="pr-4">会社概要</li></a>
                    <a href="{{route('stok.interview')}}"><li class="pr-4">インタビュー</li></a>
                    <a href="{{route('stok.recruit')}}"><li class="pr-4">採用情報</li></a>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="fixed top-0 w-full bg-black z-50 hidden menu">
    <div class="w-5 float-right mt-4 mr-6 batu">
        <img src="{{asset('icon/batu.png')}}" alt="閉じるボタン" />
    </div>
    <nav class="w-full flex justify-center">
        <ul class="font-sub text-white inline-block nav">
            <a href="{{route('stok.index')}}"><li class="mb-4 mt-2 opacity-0 translate-x-1.5 transition-all duration-1000">HOME　　　　--ホーム</li></a>
            <a href="{{route('stok.products')}}"><li class="mb-4 opacity-0 translate-x-1.5 transition-all duration-1000">PRODUCTS　　--事業紹介</li></a>
            <a href="{{route('stok.greet')}}"><li class="mb-4 opacity-0 translate-x-1.5 transition-all duration-1000">GREET　　　　--代表挨拶</li></a>
            <a href="{{route('stok.contact')}}"><li class="mb-4 opacity-0 translate-x-1.5 transition-all duration-1000">CONTACT　　--お問い合わせ</li></a>
            <a href="{{route('stok.company')}}"><li class="mb-6 opacity-0 translate-x-1.5 transition-all duration-1000">COMPANY　　--会社概要</li></a>
            <a href="{{route('stok.interview')}}"><li class="mb-6 opacity-0 translate-x-1.5 transition-all duration-1000">INTERVIEW　--インタビュー</li></a>
            <a href="{{route('stok.recruit')}}"><li class="mb-6 opacity-0 translate-x-1.5 transition-all duration-1000">COMPANY　　--採用情報</li></a>
        </ul>
    </nav>
</div> 
