<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    @include('fontend.layouts.inc.style')
</head>
<body>
    @include('fontend.layouts.inc.heder')
    <main id="main">
        @yield('content')
    </main>
    <!-- ======= Footer ======= -->
    @include('fontend.layouts.inc.footer')
    @include('fontend.layouts.inc.script')
</body>

</html>
