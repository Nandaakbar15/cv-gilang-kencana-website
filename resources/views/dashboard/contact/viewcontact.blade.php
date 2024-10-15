<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CV. Gilang Kencana</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset("images/favicon.ico") }}" />
        <!-- Bootstrap icons-->
        <link href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") }}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset("css/style2.css") }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('dashboard.partials.navbar')
            <!-- Team members section-->
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">Kontak kami</h2>
                    </div>
                    <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center mb-4">
                        @foreach ($contact as $item)
                            <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-3" src="{{ asset($item->gambar) }}" alt="..." style="width: 200px; height: 150px" />
                                <h5 class="fw-bolder">{{ $item->nama }}</h5>
                                <div class="fst-italic text-muted">{{ $item->email }}</div>
                                <div class="fst-italic text-muted">{{ $item->no_telp }}</div>
                                <div class="fst-italic text-muted">{{ $item->pekerjaan }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
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
