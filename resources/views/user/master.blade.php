<!DOCTYPE html>
<html lang="en">
@include('user.partial.header')
<body id="page1">
<div class="body1">
    <div class="main">
@include('user.partial.nave')
<!-- Left side column. contains the logo and sidebar -->


<!-- Content Wrapper. Contains page content -->
@include('user.partial.messages')
@yield('content')
<!-- /.content-wrapper -->

    </div>
</div>

<div class="body4">
    <div class="main">
        <!-- footer -->
    @include('user.partial.footer')


    </div>
</div>
<!-- ./wrapper -->

@include('user.partial.scripts')
</body>
</html>