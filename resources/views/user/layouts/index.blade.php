<!DOCTYPE html>
<html lang="en">
<head>
	@include('user.libraries.metaCode')

	@yield('title')
	
	@include('user.libraries.cssCode')

</head>
<body>
	<section class="header">
		@include('user.core.header')
	</section>

	<section class="quang-cao-top">
		@include('user.core.quang_cao_top')
	</section>
	
	<div class="clearfix"></div>

		@yield('content')

	<div class="clearfix"></div>

	<section class="more-info">
		@include('user.core.more-info')
	</section>

	<section class="quang-cao-bottom">
		
	</section>

	<section class="footer">
		@include('user.core.footer')
	 </section>	
	
	@include('user.core.backToTop')

	@include('user.libraries.jsCode')

	<script>


	</script>


</body>
</html>