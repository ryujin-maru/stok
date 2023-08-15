
<header class="w-full fixed top-0 flex justify-between items-center py-4 px-4 z-50 sm:items-end hd">
    <div class="w-28 cursor-pointer sm:ml-8">
        <img src="{{asset('images/logoname.png')}}" alt="logo" />
    </div>

    <div class="w-6 cursor-pointer sm:mr-8 hum sm:hidden">
        <img src="{{asset('icon/menu.png')}}" alt="menu" />
    </div>

    <div class="hidden sm:block">
        <div>
            <nav class="w-full flex justify-center">
                <ul class="font-sub text-black flex nav">
                    <li class="pr-4  translate-x-1.5 transition-all duration-1000">HOME</li>
                    <li class="pr-4  translate-x-1.5 transition-all duration-1000">PRODUCTS</li>
                    <li class="pr-4  translate-x-1.5 transition-all duration-1000">MEMBERS</li>
                    <li class="pr-4  translate-x-1.5 transition-all duration-1000">CONTACT</li>
                    <li class="pr-4  translate-x-1.5 transition-all duration-1000">COMPANY</li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="fixed top-0 w-full bg-black z-50 hidden menu">
    <div class="w-5 float-right mt-4 mr-6 batu">
        <img src="{{asset('icon/batu.png')}}" alt="close" />
    </div>
    <nav class="w-full flex justify-center">
        <ul class="font-sub text-white inline-block nav">
            <li class="mb-4 mt-2 opacity-0 translate-x-1.5 transition-all duration-1000">HOME　　　　--トップ</li>
            <li class="mb-4 opacity-0 translate-x-1.5 transition-all duration-1000">PRODUCTS　　--事業紹介</li>
            <li class="mb-4 opacity-0 translate-x-1.5 transition-all duration-1000">MEMBERS　　--メンバー</li>
            <li class="mb-4 opacity-0 translate-x-1.5 transition-all duration-1000">CONTACT　　--お問い合わせ</li>
            <li class="mb-6 opacity-0 translate-x-1.5 transition-all duration-1000">COMPANY　　--会社概要</li>
        </ul>
    </nav>
</div> 
