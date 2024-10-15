<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CV Gilang Kencana Website</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset("images/favicon.ico") }}" />
        <!-- Bootstrap icons-->
        <link href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") }}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset("css/style2.css") }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('dashboard.partials.navbar')
            <!-- Header-->
            @include('dashboard.partials.header')

            <section class="py-5" id="features">
                @yield('content')
            </section>

        </main>
        <!-- Footer-->
        @include('dashboard.partials.footer')
        <!-- Bootstrap core JS-->
        <script src="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js") }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset("js/scripts.js") }}"></script>
    </body>
</html>
