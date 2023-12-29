<!DOCTYPE html>
<html lang="en">

@include('web.admin.layouts.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('web.admin.layouts.preload')

        @include('web.admin.layouts.navbar')

        @include('web.admin.layouts.sidebar')

        @include('web.admin.layouts.content')
    </div>
    <!-- ./wrapper -->

    @include('web.admin.layouts.scripts')
</body>

</html>
