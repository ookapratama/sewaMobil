<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> Admin | {{ $title }}</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets_admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_admin/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets_admin/css/boxicons.min.css" rel="stylesheet">
    <link href="assets_admin/css/quill.snow.css" rel="stylesheet">
    <link href="assets_admin/css/quill.bubble.css" rel="stylesheet">
    <link href="assets_admin/css/remixicon.css" rel="stylesheet">
    <link href="assets_admin/css/simple-datatables.css" rel="stylesheet">
    <link href="assets_admin/css/style.css" rel="stylesheet">

  </head>

  <body>
    {{-- Directive Blade --}}
    @include('partials.navbar_admin')

    @include('partials.siderbar')

    {{-- BREAD CRUMBS --}}
    <main id="main">
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">{{ $title}}</li>
            </ol>
        </nav>
    </div>
        @yield('adminpage')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="assets_admin/js/apexcharts.min.js"></script>
    <script src="assets_admin/js/bootstrap.bundle.min.js"></script>
    <script src="assets_admin/js/chart.min.js"></script>
    <script src="assets_admin/js/echarts.min.js"></script>
    <script src="assets_admin/js/quill.min.js"></script>
    <script src="assets_admin/js/simple-datatables.js"></script>
    <script src="assets_admin/js/tinymce.min.js"></script>
    <script src="assets_admin/js/validate.js"></script>
    <script src="assets_admin/js/main.js"></script>
  </body>
</html>
