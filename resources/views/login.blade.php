<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CV Gilang Kencana</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset("vendors/feather/feather.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/mdi/css/materialdesignicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/ti-icons/css/themify-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/font-awesome/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/typicons/typicons.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/simple-line-icons/css/simple-line-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/css/vendor.bundle.base.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/bootstrap-datepicker/bootstrap-datepicker.min.css") }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset("images/favicon.png") }}" />
  </head>
  <body>
    @include('flash-message')
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="{{ asset("images/logo.svg") }}" alt="logo">
                </div>
                <h4>Halo! Selamat datang</h4>
                <h6 class="fw-light">Sign in untuk melanjutkan.</h6>
                <form action="/login" method="POST" enctype="multipart/form-data" class="pt-3">
                  @csrf
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg @error ('email') is-invalid @enderror" id="email" name="email" placeholder="email" required="old('email')">
                    @error('email')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg @error ('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required="old('password')">
                    @error('password')
                        <div class="is-invalid">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="mt-3 d-grid gap-2">
                    <button class="btn btn-primary">LOGIN!</button>
                  </div>
                  <div class="text-center mt-4 fw-light"> Belum punya akun? <a href="/register" class="text-primary">Buat akun</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset("vendors/js/vendor.bundle.base.js") }}"></script>
    <script src="{{ asset("vendors/bootstrap-datepicker/bootstrap-datepicker.min.js") }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset("js/off-canvas.js") }}"></script>
    <script src="{{ asset("js/template.js") }}"></script>
    <script src="{{ asset("js/settings.js") }}"></script>
    <script src="{{ asset("js/hoverable-collapse.js") }}"></script>
    <script src="{{ asset("js/todolist.js") }}"></script>
    <!-- endinject -->
  </body>
</html>
