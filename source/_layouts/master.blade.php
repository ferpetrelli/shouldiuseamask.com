<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <meta name="description" content="{{ $page->description }}">
        <meta property="og:site_name"  content="{{ $page->title }}" />
        <meta property="og:title"      content="{{ $page->title }}" />
        <meta name="twitter:title"     content="{{ $page->title }}" />
        <meta name="description"         content="{{ $page->description }}" />
        <meta property="og:description"  content="{{ $page->description }}" />
        <meta name="twitter:description" content="{{ $page->description }}" />
        <meta itemprop="description"     content="{{ $page->description }}" />
        <link rel="canonical"    href="{{ $page->getUrl() }}" />
        <meta property="og:url"  content="{{ $page->getUrl() }}" />
        <meta name="twitter:url" content="{{ $page->getUrl() }}" />

        <meta property="og:image" content="/assets/images/social.png" />
        <meta name="twitter:image" content="/assets/images/social.png" />
        <meta itemprop="image" content="/assets/images/social.png" />

        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="bg-custom-background">
        @yield('body')

        <script data-goatcounter="https://shouldiuseamask.goatcounter.com/count"
        async src="//gc.zgo.at/count.js"></script>
    </body>

</html>
