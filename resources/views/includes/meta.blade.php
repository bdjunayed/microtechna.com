    <meta charset="utf-8" />
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/>

    <meta name="keywords" content="Web developments, Web design, Web application, IT training">
    <meta name="Author" content="MicrotechNA">
    <meta name="description" content="MicrotechNA">

    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="apple-touch-icon.png"/>    
    <link rel="icon" type="image/png" href="apple-touch-icon.png"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Web masters utilities -->
    @if (getenv('GOOGLE-WEBMASTER'))
        <meta name="google-site-verification" content="{{ getenv('GOOGLE-WEBMASTER') }}">
    @endif
    @if (getenv('BING-WEBMASTER'))
        <meta name="msvalidate.01" content="{{ getenv('BING-WEBMASTER') }}" />
    @endif

{{--<!--     {% if page.excerpt %}--}}
    {{--<meta name="description" content="{{ page.excerpt| strip_html }}" />--}}
    {{--<meta property="og:description" content="{{ page.excerpt| strip_html }}" />--}}
    {{--{% else %}--}}
    {{--<meta name="description" content="{{ site.description }}">--}}
    {{--<meta property="og:description" content="{{ site.description }}" />--}}

    {{--<meta name="author" content="{{ site.name }}" />--}}

    {{--{% if page.title %}--}}
    {{--<meta property="og:title" content="{{ page.title }}" />--}}
    {{--<meta property="twitter:title" content="{{ page.title }}" /> -->--}}


    <!-- Facebook and Twitter integration -->
    <!-- <meta property="og:title" content=""/> -->
<!--     <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/> -->
    <!-- <meta property="og:description" content=""/> -->
    <!-- <meta name="twitter:title" content="" /> -->
<!--     <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" /> -->