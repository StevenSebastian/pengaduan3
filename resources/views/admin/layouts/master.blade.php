@include('admin.layouts.sidebar')
@include('admin.layouts.navbar')
    <div class="container-fluid">
        @yield('content')
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Scroll to Top Button-->
<div class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</div   >
@include('admin.layouts.footer')
