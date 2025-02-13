<script>
    $(function () {
        // スクロールを開始したら
          $(window).on("scroll", function () {
          // ファーストビューの高さを取得
          mvHeight = $("#sub-main").height();
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