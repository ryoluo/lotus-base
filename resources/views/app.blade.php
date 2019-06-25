<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# {{ $_SERVER["REQUEST_URI"] == '/' ? 'website: http://ogp.me/ns/website#' : 'article: http://ogp.me/ns/article#' }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lotus Base</title>
  <meta name="description" content="Here is Ryo Kobayashi official website! I am a university student and currently working as a web engineer." />
  <meta name="theme-color" content="#222222" />

  <meta name="csrf-token" content="{{ csrf_token() }}" />

  @include('favicon')

  <!-- OGP -->
  <meta property="og:title" content="{{ $title }}" />
  <meta property="og:url" content="https://lotus-base.com" />
  <meta property="og:image" content="https://lotus-base.com/storage/img/ogp/logo-fb.png" />
  <meta property="og:site_name" content="Lotus Base" />
  <meta property="og:description" content="Here is Ryo Kobayashi official website! I am a university student and currently working as a web engineer." />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@ryoluo" />

  <!-- Scripts -->
  <script src="{{ mix('storage/js/app.js') }}" defer></script>
  @if(app()->isLocal())
  <script src="https://kit.fontawesome.com/602d6808cb.js"></script>
  @endif

  @if(!app()->isLocal())
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142698829-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-142698829-1');
  </script>
  @endif

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
  <link href="{{ mix('storage/css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app"></div>
</body>
</html>