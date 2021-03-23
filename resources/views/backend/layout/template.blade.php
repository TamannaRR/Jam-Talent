<!doctype html>
<html lang="en">
<head>
@include('includes.header')
@include('includes.css')

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">
@include('includes.topbar')

<!-- Header Container / End -->
<!-- Dashboard Container -->
	<div class="dashboard-container">

	@include('includes.sidebar')

	@yield('body-content')
	</div>
	<!-- Dashboard Container / End -->
</div>
<!-- Wrapper / End -->


<!-- Apply for a job popup
================================================== -->

<!-- Apply for a job popup / End -->

@include('includes.script')


</body>
</html>