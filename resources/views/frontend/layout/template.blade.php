<!doctype html>
<html lang="en">
<head>

@include('includes.header')

@include('includes.css')

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">
@include('includes.topbar')


@yield('body-content')
@include('includes.footer')
</div>
<!-- Wrapper / End -->
@include('includes.script')



</body>
</html>