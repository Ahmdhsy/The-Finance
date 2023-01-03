<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- Custom fonts for this template-->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!-- Favicons -->
  <link rel="stylesheet" href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link rel="stylesheet" href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/quill/quill.snow.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/quill/quill.bubble.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/remixicon/remixicon.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/simple-datatables/style.css')}}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
  <div class="sidebar-menu">
    @include('layout/sidebar')
  </div>

  <div class="main-content">
    <div class="header-area">
      @include('layout/header')
    </div>

    <div class="main-content-inner">
      @yield('content')
    </div>
    <!-- main content area end -->

    <!-- footer area start-->
    <footer>
      <div class="footer-area d-flex flex-column align-items-center justify-content-center">
        <p>PPPPTK TK & PLB THE FINANCE | Copyright©2022.</p>
      </div>
    </footer>
  </div>
  
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>