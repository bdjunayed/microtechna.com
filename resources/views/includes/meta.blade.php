    <meta charset="utf-8" />
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/>

    <meta name="keywords" content="Web developments, Web design, Web application, IT trainings">
    <meta name="Author" content="MicrotechNA">
    <meta name="description" content="One goal above all others: In-house team of web designers, developers and SEO experts uphold the highest standards for project planning and execution. Dedicated to building the perfect website for client’s company on-time and on budget.">

    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="apple-touch-icon.png"/>    
    <link rel="icon" type="image/png" href="apple-touch-icon.png"/>
    
    <!-- Web masters utilities -->
    @if (getenv('GOOGLE-WEBMASTER'))
        <meta name="google-site-verification" content="{{ getenv('GOOGLE-WEBMASTER') }}">
    @endif
    @if (getenv('BING-WEBMASTER'))
        <meta name="msvalidate.01" content="{{ getenv('BING-WEBMASTER') }}" />
    @endif