<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._head')
</head>


<body class="animsition">
<div class="page-wrapper">

@include('partials._nav')

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
    @include('partials._top')
        @include('partials._messages')
             @yield('content')
    @include('partials._footer')
        <!-- END PAGE CONTAINER-->
    </div>

</div>

@include('partials._javascript')

</body>

</html>
<!-- end document
