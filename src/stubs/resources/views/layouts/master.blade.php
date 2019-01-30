<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

        @if(config('app.env') !== 'production')
            <meta name="robots" content="noindex,nofollow">
        @endif

        <title>{{ __('meta.title') }}</title>

        {{--
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <meta name="theme-color" content=""/>
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="">
        <meta name="apple-mobile-web-app-title" content="">
        <meta name="application-name" content="">
        --}}

        <meta name="description" content="{{ __('meta.description') }}">
        <meta name="keywords" content="{{ __('meta.keywords') }}">

        <meta property="og:site_name" content="{{ __('meta.name') }}">
        <meta property="og:title" content="{{ __('meta.title') }}">
        <meta property="og:description" content="{{ __('meta.description') }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ __('meta.url') }}">
        <meta property="og:locale" content="{{ __('meta.locale') }}">
        <meta property="og:image" content="{{ asset(__('meta.image-url')) }}">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:creator" content="@elhebert">

        {{-- <link href="{{ mix('css/fonts.css') }}" rel="stylesheet" type="text/css" async> --}}
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body class="">
        @include('layouts._partials.navbar')

        <main class="">
            @yield('content')
        </main>

        @include('layouts._partials.footer')
    </body>
</html>
