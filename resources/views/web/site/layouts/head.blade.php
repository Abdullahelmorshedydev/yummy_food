<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>{{ settings()->get('site_name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset(settings()->get('favicon')) }}">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('web.site.layouts.style')
</head>
