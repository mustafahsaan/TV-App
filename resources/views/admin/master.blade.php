@include('admin.partials.heder')


  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
  
        @include('admin.partials.siedbar')

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          
          @include('admin.partials.nav')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">


                @yield('content')
                
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.partials.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    @include('admin.partials.script')
   
  </body>
</html>
