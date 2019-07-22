<!DOCTYPE html>
<html lang="en-US">
	@include('includes.head')
	<body>
		<!-- Site Loading -->
		<div class="site-loading">
			<img src="{{ asset('img\loading.gif') }}" alt="Loading">
		</div>
		<!-- Site Loading End -->

		<!-- Site Back Top -->
		<div class="site-backtop" title="Back to top">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- Site Back Top End -->
		
		@include('includes.header')
		
		@yield('content')
		
		@include('includes.footer')

	</body>
</html>