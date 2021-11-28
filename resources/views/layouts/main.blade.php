<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-sans antialiased">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#ffffff">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Merriweather" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.13.1/build/styles/sunburst.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>
    <body>
        <header class="py-5 mb-10">
            <div class="container mx-auto px-5 lg:max-w-screen">
                <div class="flex items-center flex-col lg:flex-row">
                    <a href="/" class="flex items-center no-underline text-brand">
                        <img src="{{ asset('img/logomark.svg') }}" class="w-10">

                        <img class="text-xl ml-3 w-24" src="{{ asset('img/logo.svg') }}" alt="">
                    </a>

                    <div class="lg:ml-auto mt-10 lg:mt-0 flex items-center">
                        <a href="/" class="ml-5 no-underline hover:underline uppercase">HOME</a>

                        @foreach ($categories as $category)
                            
                        <a href="{{ route('category.index', $category->slug) }}" class="ml-5 no-underline hover:underline uppercase">{{ $category->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="border-t border-lighter mt-20">
            <div class="container mx-auto px-5 lg:max-w-screen">
                <div class="text-muted py-10 text-center">
                    Follow the <a href="/feed">RSS Feed</a>.
                </div>
            </div>
        </div>        
    </body>
</html>
