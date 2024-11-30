<x-layout title="Home">
    <div id="header">
        <div id="top" style="z-index:-1;" class="h-screen w-full fixed top-0">
        </div>

        <div class="h-screen relative">
            <div class="absolute bottom-1/3 left-8 pr-4 target opacity-0 translate-y-5 transition-all duration-1000 sm:left-40 xl:left-60 text-white">
                <p class="tracking-widest mb-4 text-xl sm:text-4xl text-shadow">Second Life</p>
                <p class="tracking-wide text-shadow text-xl sm:text-xl">~新たな自分への挑戦~</p>
            </div>
            <div class="scrolldown2 font-sub"><span>scroll</span></div>
        </div>
    </div>


    <div id="container" class="flex justify-center bg-white">

        <div class="w-10/12 sm:w-8/12 mt-14">

            <section>
                <x-section titleEn="Products" title="事業紹介"/>

                <div class="mt-8 relative sm:flex items-center slide-r">
                    <img class="object-cover w-full shadow-md h-36 sm:h-auto sm:w-1/2" src="{{asset("images/laptop.jpg")}}" alt="営業代行" />
                    <div class="sec1 w-full bg-white top-14 left-10 p-5 shadow-md sm:p-4 sm:shadow-none h-36 sm:h-auto text-center">
                        <p class="text-sm pt-4">01.営業代行</p>
                        <h3 class="font-black text-2xl mb-2 tracking-wide text-gray-900 mt-2 tt">Sales Agent</h3>
                        {{-- <p class="text-sm text-left">営業代行、イベント企画、イベント運営等をお手伝いさせて頂いています。</p> --}}
                    </div>
                </div>

                <div class="mt-10 sm:flex sm:justify-center items-center slide-l">
                    <div class="w-full sm:flex sm:flex-row-reverse sm:w-full">
                        <img class="w-full h-36 sm:h-auto object-cover sm:w-1/2" src="{{asset("images/business.jpg")}}" alt="ネットワークを使用してライフラインを形成"/>
                        <div class="sec1 w-full shadow-md bg-white top-14 right-10  p-4 sm:p-6 sm:shadow-none h-36 text-center sm:h-auto">
                            <p class="text-sm pt-4">02.ライフラインサポート</p>
                        <h3 class="font-black text-2xl mb-2 tracking-wide text-gray-900 mt-2 tt">Life Line</h3>
                        {{-- <p class="text-sm text-left">お客様に向け各種ライフラインのサポートを行なっております。
                            各社と業務提携を行う事で、顧客満足度向上に努めております。</p> --}}
                        </div>
                    </div>
                </div>

                <x-elements.button class="mt-20" href="{{route('stok.products')}}"/>
            </section>

            <section>
                <x-section titleEn="Greetings" title="代表挨拶"/>

                <div class="mt-4 transition-all duration-1000  target opacity-0 text-center">
                    <img style="margin:0 auto;" class="shadow-xl" src="{{asset('/images/peaple.jpg')}}" alt="肩を組んで空を見る若い人々">
                </div>

                <x-elements.button class="mt-14" href="{{route('stok.greet')}}"/>
            </section>

            <section class="mb-16 mt-32">
                <x-css.back-red>
                    <div class="flex justify-center pt-12 sm:pt-10">
                        <div class="w-10/12 sm:w-8/12 sm text-white mt-8">
                            <h2 class="text-sm">お問い合わせ</h2>
                            <div class="flex justify-between items-center">
                                <p class="font-sub text-xl">Contact</p>
                                <div class="w-3/4 border-t border-white">
                                </div>
                            </div>
                            {{-- <p class="mt-8">ここに問い合わせをお願いします。働ける人募集しています。奴隷のように働けるような熱量を持った人がいいな。</p> --}}
                            <div class="mb-8 text-center relative z-10 mt-20 sm:mt-24">
                                <a href="{{route('stok.contact')}}" class="relative font-sub border px-14 py-4 sm:px-16 sm:py-4 border-gray-700 shadow-md cursor-pointer text-black bg-white">See more</a>
                            </div>
                        </div>
                    </div>
                </x-css.back-red>
            </section>

            <section class="mb-40 sm:pt-20 comp transition-all duration-1000  target">
                <x-section titleEn="Company" title="会社概要"/>
                {{-- <p class="mt-8">ここに適当な株式会社Stokの会社概要を書きます。書くことがないから何か文字打ってまーす。英語もかいとこi wana be expensive</p> --}}
                <x-elements.button class="mt-16" href="{{route('stok.company')}}"/>
            </section>

            <section class="">
                <div class="mb-4">
                    <p class="text-sm text-right">インタビュー</p>
                    <h3 class="font-sub text-xl text-right">Interview<span class="border-b border-black w-8"></span></h3>
                    
                    <div class="button006 w-full flex justify-end">
                        <div class="mr-10">
                            <a class="font-sub border-b border-gray-300" href="{{route('stok.interview')}}">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="swiper infinite-slider relative">
                    {{-- <div class="background absolute inset-0 z-auto"></div> --}}
                    <div class="swiper-wrapper">
                        @foreach ($articles as $item)
                        <x-elements.slider-img :item=$item />
                        @endforeach

                        @if(count($articles) < 6)
                        @foreach ($articles as $item)
                        <x-elements.slider-img :item=$item />
                        @endforeach
                        @endif
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <div class="info sm:flex">
                <section class="bg-gray-50 pt-10 pb-6 flex justify-center flex-1">
                    <div class="w-10/12 sm:w-8/12">
                        <div class="自然の中に株式会社Stokのロゴ">
                            <h2>採用情報</h2>
                            <p class="font-sub text-xl">Recruit</p>
                        </div>
                        <div class="mt-5">
                            <img class="w-4/5 mx-auto flex-1 sm:hidden" src="{{asset('images/bother2.jpg')}}" alt="株式会社STOKのイメージ画像">
                            <p class="mt-6 flex-1"><br></p>
                        </div>
                        <x-elements.button class="mt-8" href="{{route('stok.recruit')}}"/>
                    </div>
                </section>

                <section class="bg-gray-100 h-auto pt-10 pb-6 flex justify-center flex-1">
                    <div class="w-10/12 sm:w-10/12">
                        <div class="">
                            <h2>新着情報</h2>
                            <p class="font-sub text-xl">Information</p>
                            <div class="my-8 h-[150px] overflow-scroll overflow-x-hidden">
                                <p class="text-sm border-t border-white py-4"><span class="mr-4">2024年04月01日</span>取締役を１名４月より追加しました。</p>
                                <p class="text-sm border-t border-white py-4"><span class="mr-4">2024年04月01日</span>事務所の移転、支店を出しました。</p>
                                <p class="text-sm border-t border-white py-4"><span class="mr-4">2024年01月30日</span>webサイトを開設しました。</p>
                                <p class="text-sm border-y border-white py-4"><span class="mr-4">2023年01月31日</span>株式会社Stokを設立しました。</p>
                            </div>
                            {{-- <x-elements.button class="mt-8" href="{{route('stok.recruit')}}"/> --}}
                        </div>
                    </div>
                </section>
            </div>

            

        </div>
    </div>
    {{-- <x-footer /> --}}
<x-elements.top-js />
</x-layout>