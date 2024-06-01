<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
	<head>
		@include('front.layouts.head')
	</head>
	<body>
		@include('front.layouts.main-header')
		
		@yield('content')
		
		@include('front.layouts.footer')
		@include('front.layouts.footer-scripts')
  </body>
</html>