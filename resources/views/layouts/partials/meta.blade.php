{{-- SEO & Meta Tags Partial --}}
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta name="csrf-token" content="{{ csrf_token() }}" />

{{-- SEO Meta Tags --}}
<meta name="description" content="@yield('meta_description', config('app.name') . ' - Modern web application')" />
<meta name="keywords" content="@yield('meta_keywords', '')" />
<meta name="author" content="@yield('meta_author', config('app.name'))" />

{{-- Open Graph / Facebook --}}
<meta property="og:type" content="@yield('og_type', 'website')" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="@yield('og_title', config('app.name'))" />
<meta property="og:description" content="@yield('og_description', config('app.name') . ' - Modern web application')" />
<meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))" />

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:url" content="{{ url()->current() }}" />
<meta name="twitter:title" content="@yield('twitter_title', config('app.name'))" />
<meta name="twitter:description" content="@yield('twitter_description', config('app.name') . ' - Modern web application')" />
<meta name="twitter:image" content="@yield('twitter_image', asset('images/twitter-image.jpg'))" />

{{-- Favicon --}}
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />

{{-- Title --}}
<title>@yield('title', config('app.name'))</title>
