
<!DOCTYPE html>
<html>
<head>
    @include('admin.partials.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    @include('admin.partials.header')

  <!-- =============================================== -->

    @include('admin.partials.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
    @yield('content')
  <!-- /.content-wrapper -->

    @include('admin.partials.footer')
</div>
<!-- ./wrapper -->

    @include('admin.partials.scripts')
</body>
</html>
