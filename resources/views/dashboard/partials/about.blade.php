<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CV. Gilang Kencana Mulya</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset("images/logo CV Ginaya.jpg") }}" />
        <!-- Bootstrap icons-->
        <link href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css") }}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset("css/style2.css") }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('dashboard.partials.navbar')
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">Tentang CV. Gilang Kencana Mulya</h1>
                                <p class="lead fw-normal text-muted mb-4">Perusahaan arsitektur dan interior yang menghadirkan solusi desain dan bangun secara menyeluruh – dari konsep hingga realisasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About section one-->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset("images/screenshot2.png") }}" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Awal berdirinya CV Gilang Kencana Mulya</h2>
                            <p class="lead fw-normal text-muted mb-0">CV. Gilang Kencana Mulya (GINAYA) lahir dari visi untuk menghadirkan karya arsitektur yang tidak hanya indah dipandang, tapi juga nyaman dan fungsional. Berbasis di Bandung – Cimahi, kami memulai perjalanan dari proyek-proyek kecil hingga kini dipercaya menangani desain dan pembangunan rumah tinggal, bangunan komersial, serta interior custom.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset("images/screenshot1.png") }}" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Bertumbuh bersama kualitas</h2>
                            <p class="lead fw-normal text-muted mb-0">Dengan tim profesional di bidang arsitektur dan konstruksi, kami terus berkembang sambil mempertahankan standar kualitas tinggi, kejujuran, dan komunikasi terbuka dengan klien. Setiap proyek kami rancang secara personal dan efisien, menjadikannya solusi terbaik untuk kebutuhan ruang yang estetik dan fungsional.</p>
                        </div>
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
