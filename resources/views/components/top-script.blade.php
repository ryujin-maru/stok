<script>
    'use strict';
    // IntersectionObserver
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

    // herderのlist表示
    $('.nav li').each(function(i) {
        setTimeout(() => {
            $(this).addClass('set');
        }, 100 * i);
    });


</script>