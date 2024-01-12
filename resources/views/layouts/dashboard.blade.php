<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
   <!-- Custom fonts for this template-->

 @include('includes.style')
    <title>SIMS web app</title>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
              <img src="/img/Handbag.png" alt="">
                <div class="sidebar-brand-text mx-3">SIMS web app</div>
            </a>

      <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                  <img src="/img/Package.png" alt="">
                    <span>Produk</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                  <img src="/img/User.png" alt="">
                    <span>Profile</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                  <img src="/img/SignOut.png" alt="">
                    <span>Logout</span></a>
            </li>
   
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            @yield('content')
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    @include('includes.script')


</body>

</html>