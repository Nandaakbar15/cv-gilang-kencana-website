<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CV Gilang Kenaca Mulya</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset("images/logo CV Ginaya.jpg") }}" />
        <!-- Bootstrap icons-->
        <link href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") }}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset("css/style2.css") }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('dashboard.partials.navbar')
            <!-- Page Content-->
            <section class="py-5">
                        <div class="container px-5 my-5">
                            @foreach ($paginated as $item)
                                <div class="text-center mb-4 mt-5">
                            <h3 class="fw-bold">{{ $item['judul'] }}</h3>
                        </div>

                        <div class="row gx-5 gy-4">
                            @if(is_array($item['gambar']))
                                @foreach($item['gambar'] as $gambar)
                                    <div class="col-lg-4 col-md-6">
                                        <img class="img-fluid rounded-3 shadow-sm" src="{{ asset($gambar) }}" alt="{{ $item['judul'] }}" style="height: 250px;">
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-4 col-md-6 offset-lg-4">
                                    <img class="img-fluid rounded-3 shadow-sm" src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}" style="height: 250px;">
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </section>
            <div class="container my-4 d-flex justify-content-center">
                {{ $paginated->links('pagination::bootstrap-5') }}
            </div>
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                    <a class="btn btn-lg btn-primary" href="/user/contact">Contact us</a>
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
