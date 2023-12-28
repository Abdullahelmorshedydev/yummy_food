<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('admin.layouts.preload')

        @include('admin.layouts.navbar')

        @include('admin.layouts.main_sidebar')

        @include('admin.layouts.content')

        @include('admin.layouts.control_sidebar')
    </div>
    <!-- ./wrapper -->

    @include('admin.layouts.scripts')
</body>

</html>
