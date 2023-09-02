<x-layout title="Home">
    <div id="header">
        <div id="top" style="z-index:-1;" class="h-screen w-full fixed top-0">
        </div>

        <div class="h-screen relative">
            <div class="absolute bottom-1/3 left-8 pr-4 target opacity-0 translate-y-5 transition-all duration-1000 sm:left-40 xl:left-60">
                <h1 class="tracking-widest mb-4 text-xl sm:text-4xl text-shadow">Second Life</h1>
                <p class="tracking-wide text-shadow text-xl sm:text-xl">~新たな自分への挑戦~</p>
            </div>
            <div class="scrolldown2 font-sub"><span>scroll</span></div>
        </div>
    </div>


    <div id="container" class="flex justify-center bg-white">

        <div class="w-10/12 sm:w-8/12 mt-14">

            <section>
                <x-section titleEn="Products" title="事業紹介"/>

                <div class="mt-8 relative sm:flex">
                    <img class="object-cover w-full shadow-md h-36 sm:h-auto sm:w-1/2" src="{{asset("images/audience.jpg")}}"/>
                    <div class="sec1 w-full bg-white top-14 left-10 p-5 shadow-md target opacity-0 translate-y-5 transition-all duration-1000 sm:p-8 sm:shadow-none h-44 sm:text-center">
                        <p class="text-sm pt-4">01.人材サービス</p>
                        <h3 class="font-black text-2xl mb-2 tracking-wide text-gray-900 mt-2 tt">Human Resource</h3>
                    </div>
                </div>

                <div class="mt-10 sm:flex sm:justify-center">
                    <div class="w-full sm:flex sm:flex-row-reverse sm:w-full">
                        <img class="w-full h-36 sm:h-auto object-cover sm:w-1/2" src="{{asset("images/business.jpg")}}"/>
                        <div class="sec1 w-full shadow-md bg-white top-14 right-10  p-4 target opacity-0 translate-y-5 transition-all duration-1000 sm:p-6 sm:shadow-none h-44 sm:text-center">
                            <p class="text-sm pt-8">02.ライフラインサポート</p>
                        <h3 class="font-black text-2xl mb-2 tracking-wide text-gray-900 mt-2 tt">Life Line</h3>
                        
                        </div>
                    </div>
                </div>

                <div class="mt-10 sm:flex ites-center">
                    <img class="w-full h-36 sm:h-auto object-cover shadow-md sm:w-1/2" src="{{asset("images/suit.jpg")}}"/>
                    <div class="sec1 bg-white top-14 left-10 w-full p-5 shadow-md target opacity-0 translate-y-5 transition-all duration-1000 sm:p-4 sm:shadow-none h-44 sm:text-center">
                        <p class="text-sm pt-8">03.オーダースーツ事業</p>
                        <h3 class="font-black text-2xl mb-2 tracking-wide text-gray-900 mt-2 tt">Order Suit</h3>
                    </div>
                </div>

                <x-elements.button class="mt-20" href="{{route('stok.products')}}"/>
            </section>

            <section>
                <x-section titleEn="Greeting" title="代表挨拶"/>

                <div class="mt-4 transition-all duration-1000  target opacity-0 text-center">
                    <img style="margin:0 auto;" class="shadow-xl" src="{{asset('/images/peaple.jpg')}}" alt="">
                </div>

                <x-elements.button class="mt-10"/>
            </section>

            <section class="mb-16 mt-32">
                <x-css.back-red>
                    <div class="flex justify-center sm:pt-8">
                        <div class="w-10/12 sm:w-8/12 sm text-white mt-8">
                            <h2 class="text-sm">お問い合わせ</h2>
                            <div class="flex justify-between items-center">
                                <h2 class="font-sub text-xl">Contact</h2>
                                <div class="w-3/4 border-t border-white">
                                </div>
                            </div>
                            <p class="mt-8"><br></p>
                            <div class="mb-8 text-center relative z-10 mt-10">
                                <a href="{{route('stok.contact')}}" class="relative font-sub border px-8 py-2 sm:px-16 sm:py-4 border-gray-700 shadow-md cursor-pointer text-black bg-white">See more</a>
                            </div>
                        </div>
                    </div>
                </x-css.back-red>
            </section>

            <section class="mb-20 sm:pt-20 comp transition-all duration-1000  target">
                <x-section titleEn="Company" title="会社概要"/>
                <p class="mt-8"><br></p>
                <x-elements.button class="mt-10" href="{{route('stok.company')}}"/>
            </section>

            <div class="info sm:flex">
                <section class="bg-gray-50 pt-10 pb-6 flex justify-center flex-1">
                    <div class="w-10/12 sm:w-8/12">
                        <div class="">
                            <h2>採用情報</h2>
                            <h2 class="font-sub text-xl">Recruit</h2>
                        </div>
                        <div class="mt-5">
                            <img class="w-4/5 mx-auto flex-1 sm:hidden" src="{{asset('images/bother2.jpg')}}" alt="">
                            <p class="mt-6 flex-1"><br></p>
                        </div>
                        <x-elements.button class="mt-8" href="{{route('stok.recruit')}}"/>
                    </div>
                </section>

                <section class="bg-gray-100 h-auto pt-10 pb-6 flex justify-center flex-1">
                    <div class="w-10/12 sm:w-8/12">
                        <div class="">
                            <h2>新着情報</h2>
                            <h2 class="font-sub text-xl">Information</h2>
                            <div class="my-8">
                                <p class="text-sm border-t border-white py-4"><span class="mr-4">2023年08月27日</span>webサイトを開設しました。</p>
                                <p class="text-sm border-y border-white py-4"><span class="mr-4">2023年08月26日</span>会社を設立しました。ﾔﾀｰ</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
    {{-- <x-footer /> --}}
<script>
$(function () {
  // スクロールを開始したら
    $(window).on("scroll", function () {
    // ファーストビューの高さを取得
    mvHeight = $("#header").height();
    if ($(window).scrollTop() > mvHeight) {
      // スクロールの位置がファーストビューより下の場合にclassを付与
        $(".hd").css('background-color','white');
    } else {
      // スクロールの位置がファーストビューより上の場合にclassを外す
      $(".hd").css('background-color','initial');
    }
    });
});
</script>
</x-layout>