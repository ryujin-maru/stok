<x-layout title="Home">
    <x-css.top-image />
    <div id="header">
        <div id="top" style="z-index:-1;" class="h-screen w-full fixed top-0">
        </div>

        <div class="h-screen relative">
            <div class="absolute bottom-1/4 left-8 pr-4">
                <h1 class="tracking-wide mb-4 text-lg text-shadow">そこに愛はあるんか</h1>
                <p class="tracking-wide text-shadow">ここに説明文を追加します。長くてもいいようにレイアウトを設定します。</p>
            </div>
        </div>
    </div>


    <div id="container" class="flex justify-center pt-20 bg-white mb-40">
        <div class="w-10/12">
            <section>
                <x-section titleEn="Products" title="事業紹介"/>

                <div class="mt-8 relative">
                    <img class="w-3/4" src="{{asset("images/test.jpg")}}"/>
                    <div class="absolute border-t border-b bg-white top-14 left-10 w-11/12  p-2">
                        <h3 class="font-bold mb-2">なんか事業</h3>
                        <p class="leading-7 font-medium">ここに事業紹介の一つ目を書きます。何書こうかなマヨマヨ。あと少しなんか書かないと練習にならないからなーなんかない？</p>
                    </div>
                </div>

                <div class="mt-32 relative flex justify-end">
                    <div class="w-3/4">
                        <img class="" src="{{asset("images/test.jpg")}}"/>
                        <div class="absolute border-t border-b bg-white top-14 right-10 w-11/12 p-2">
                            <h3 class="font-bold mb-2">なんか事業</h3>
                            <p>ここに事業紹介の一つ目を書きます。何書こうかなマヨマヨ。あと少しなんか書かないと練習にならないからなーなんかない？</p>
                        </div>
                    </div>
                </div>

                <x-elements.button class="mt-40"/>
            </section>

            <section>
                <x-section titleEn="Members" title="メンバー"/>
            </section>

        </div>
    </div>

<script>
    $(function() {
        // var winHeight = $(window).height();
        // $('#container').css('margin-top',`${winHeight}px`);
    })
</script>
</x-layout>