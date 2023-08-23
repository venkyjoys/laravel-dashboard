



<!DOCTYPE html>
<html lang="en">
  <head>
        @include("admin.admin_css");
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
            @include("admin.sideNavbar");
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
             @include("admin.mainNavigationBar");
        <!-- partial -->
        @include("admin.body");
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/template/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/template/assets/js/off-canvas.js"></script>
    <script src="admin/template/assets/js/hoverable-collapse.js"></script>
    <script src="admin/template/assets/js/misc.js"></script>
    <script src="admin/template/assets/js/settings.js"></script>
    <script src="admin/template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/template/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>