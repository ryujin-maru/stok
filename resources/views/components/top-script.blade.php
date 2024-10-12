<script>
    'use strict';
    // IntersectionObserver
    const targets = document.querySelectorAll('.target, .slide-r ,.slide-l');
    const options = {
        root:null,
        rootMargin:'0px',
        threshold: 0.8,
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

    // クリックメニュー
    $('.batu').click(function() {
        $('.menu').slideUp();

        $('.nav li').each(function(i) {
            $(this).removeClass('set');
        })
    });

    $('.hum').click(function() {
        $('.menu').slideDown();

    // herderのlist表示
    $('.nav li').each(function(i) {
        setTimeout(() => {
            $(this).addClass('set');
        }, 100 * i);
    });
    })
</script>