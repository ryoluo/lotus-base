<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# {{ $_SERVER["REQUEST_URI"] == '/' ? 'website: http://ogp.me/ns/website#' : 'article: http://ogp.me/ns/article#' }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lotus Base</title>
  <meta name="description" content="{{ $desc }}" />
  <meta name="theme-color" content="#222222" />

  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- OGP -->
  <meta property="og:type" content="{{ $type }}" />
  <meta property="og:title" content="{{ $title }}" />
  <meta property="og:url" content="{{ $url }}" />
  <meta property="og:image" content="{{ $image_path }}" />
  <meta property="og:site_name" content="Lotus Base" />
  <meta property="og:description" content="{{ $desc }}" />
  <meta name="twitter:site" content="@ryoluo" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="fb:app_id" content="313860199555739" />

  <!-- Scripts -->
  <script src="{{ mix('/js/app.js') }}" defer></script>
  @if(app()->isLocal())
  <script src="https://kit.fontawesome.com/602d6808cb.js"></script>
  @endif

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

  <!-- Favicons -->
  @include('favicon')
</head>
<body>
  <div id="app"></div>
</body>
</html>