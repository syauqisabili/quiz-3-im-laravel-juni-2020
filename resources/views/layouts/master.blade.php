<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Quiz Week 3 - Laravel">
  <meta name="author" content="SyauqiSabili">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href=" {{asset('/sbadmin2/vendor/fontawesome-free/css/all.min.css')}} " rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

  <!-- Custom styles for this template-->
  <link href=" {{asset('/sbadmin2/css/sb-admin-2.min.css')}} " rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        @include('layouts.partials.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          @yield('content')
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('layouts.partials.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  @include('layouts.partials.logout')

  <!-- Bootstrap core JavaScript-->
  <script src=" {{asset('/sbadmin2/vendor/jquery/jquery.min.js')}}"></script>
  <script src=" {{asset('/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>

  <!-- Core plugin JavaScript-->
  <script src=" {{asset('/sbadmin2/vendor/jquery-easing/jquery.easing.min.js')}} "></script>

  <!-- Custom scripts for all pages-->
  <script src=" {{asset('/sbadmin2/js/sb-admin-2.min.js')}} "></script>


  <script src=" {{asset('/sbadmin2/js/swal.min.js')}}"></script>
  @stack('scripts')
</body>

</html>
