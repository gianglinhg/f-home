<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
 
    <!-- Sidebar -->
    @include('admin.layouts.sidebar')
    <!-- End of Sidebar -->
 
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
 
      <!-- Main Content -->
      <div id="content">
 
        <!-- Topbar -->
        @include('admin.layouts.topbar')
        <!-- End of Topbar -->
 
        <!-- Begin Page Content -->
        <div class="container-fluid">
 
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>
 
          @yield('content')
 
          <!-- Content Row -->
 
 
        </div>
        <!-- /.container-fluid -->
 
      </div>
      <!-- End of Main Content -->
 
      <!-- Footer -->
      @include('admin.layouts.footer')
      <!-- End of Footer -->
 
    </div>
    <!-- End of Content Wrapper -->
 
  </div>
  <!-- End of Page Wrapper -->
 
  <!-- Scroll to Top Button-->

</body>
</html>