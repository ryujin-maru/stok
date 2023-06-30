<style>
    .bstok {
        margin: 0 calc(50% - 50vw);
        position: relative;
        z-index: 11;
    }

    .bstok::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #E41B15;
        transform: skewY(10deg);
        z-index: -1;
    }
</style>
<div  class="h-80 w-screen bstok">
    {{$slot}}
</div>