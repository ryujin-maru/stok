<!DOCTYPE html>
<html lang="ja">
<head>
    {!! SEO::generate() !!}

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    {{-- <title>{{$title}} | Stok</title> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,wght@1,300&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-main text-main-500">
    <x-header />
    {{$slot}}
    <x-top-script />
    <x-footer />
</body>
</html>