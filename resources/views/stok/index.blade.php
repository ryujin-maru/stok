<x-layout title="Home">
    <div id="header">
        <div id="top" style="z-index:-1;" class="h-screen w-full fixed top-0">
        </div>

        <div class="h-screen relative">
            <div class="absolute bottom-1/4 left-8 pr-4 target opacity-0 translate-y-5 transition-all duration-1000">
                <h1 class="tracking-wide mb-4 text-lg text-shadow">そこに愛はあるんか</h1>
                <p class="tracking-wide text-shadow">ここに説明文を追加します。長くてもいいようにレイアウトを設定します。</p>
            </div>
        </div>
    </div>


    <div id="container" class="flex justify-center pt-20 bg-white">
        <div class="w-10/12">
            <section>
                <x-section titleEn="Products" title="事業紹介"/>

                <div class="mt-8 relative">
                    <img class="w-3/4 shado-md" src="{{asset("images/audience.jpg")}}"/>
                    <div class="absolute bg-white top-14 left-10 w-11/12 p-2 shadow-md target opacity-0 translate-y-5 transition-all duration-1000">
                        <h3 class="font-bold mb-2 mt-2 text-shadow-sm">なんか事業</h3>
                        <p class="text-shadow-sm">ここに事業紹介の一つ目を書きます。何書こうかなマヨマヨ。あと少しなんか書かないと練習にならないからなーなんかない？</p>
                    </div>
                </div>

                <div class="mt-32 relative flex justify-end">
                    <div class="w-3/4">
                        <img class="" src="{{asset("images/business.jpg")}}"/>
                        <div class="absolute shadow-md bg-white top-14 right-10 w-11/12 p-2 target opacity-0 translate-y-5 transition-all duration-1000">
                            <h3 class="font-bold mb-2 mt-2 text-shadow-sm">なんか事業</h3>
                            <p class="text-shadow-sm">ここに事業紹介の一つ目を書きます。何書こうかなマヨマヨ。あと少しなんか書かないと練習にならないからなーなんかない？</p>
                        </div>
                    </div>
                </div>

                <x-elements.button class="mt-40"/>
            </section>

            <section>
                <x-section titleEn="Members" title="メンバー"/>

                <div class="mt-4">
                    <img src="{{asset('/images/peaple.jpg')}}" alt="">
                </div>

                <x-elements.button class="mt-6"/>
            </section>

            <section class="mb-16 mt-32">
                <x-css.back-red>
                    <div class="flex justify-center">
                        <div class="w-10/12 text-white mt-8">
                            <h2 class="text-sm">お問い合わせ</h2>
                            <div class="flex justify-between items-center">
                                <h2 class="font-sub text-xl">Contact</h2>
                                <div class="w-3/4 border-t border-white">
                                </div>
                            </div>
                            <p class="mt-8">ここに問い合わせをお願いします。働ける人募集しています。奴隷のように働けるような熱量を持った人がいいな。</p>
                            <x-elements.button class="mt-10"/>
                        </div>
                    </div>
                </x-css.back-red>
            </section>

            <section class="mb-20">
                <x-section titleEn="Company" title="会社概要"/>
                <p class="mt-8">ここに適当な会社概要を書きます。書くことがないから何か文字打ってまーす。英語もかいとこi wana be expensive</p>
                <x-elements.button class="mt-10"/>
            </section>

        </div>
    </div>
    <x-footer />


<script>
    const targets = document.querySelectorAll('.target');
    const options = {
        root:null,
        rootMargin:'0px',
        threshold: '0.8',
    }
    const observer = new IntersectionObserver(intersect,options);
    targets.forEach(target =>  {
        observer.observe(target);
    })
    function intersect(entries) {
        entries.forEach(entry => { 
            if(entry.isIntersecting) {
                $(entry.target).addClass('action');
                observer.unobserve(entry.target);
            }
        });
    }
</script>
</x-layout>