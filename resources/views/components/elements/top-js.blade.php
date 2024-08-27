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

    window.addEventListener("load", () => {
        const infiniteSlider = new Swiper(".infinite-slider", {
            loop: true,
            loopedSlides: 2,
            slidesPerView: "auto",
            speed: 8000,
            autoplay: {
            delay: 0,
            disableOnInteraction: false,
            },
        });
    });
</script>