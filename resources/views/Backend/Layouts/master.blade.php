<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/datatable/jquery.dataTables.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Backend/assets/jquary/bootstrap-tagsinput.css') }}" rel="stylesheet">
<link href="{{ asset('fontend/assets/css/toastr.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('Backend/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('change-password') }}">
                <i class="bi bi-gear"></i>
                <span>Changes Password</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>

                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

@include('Backend.Layouts.inc.menu')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card"style="height:100rem;">
            <div class="card-body">
           @yield('content')
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Backend/assets/datatable/jquery-3.6.1.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('Backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('Backend/assets/jquary/bootstrap-tagsinput.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Backend/assets/js/main.js') }}"></script>
<script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script src="{{ asset('fontend/assets/js/toastr.js') }}"></script>
<script>
  @if(Session::has('message'))
    var type ="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info(" {{Session::get('message')}} ");
            break;

        case 'success':
            toastr.success(" {{Session::get('message')}} ");
            break;

        case 'warning':
            toastr.warning(" {{Session::get('message')}} ");
            break;

        case 'error':
            toastr.error(" {{Session::get('message')}} ");
            break;
    }
@endif
</script>
</body>

</html>
