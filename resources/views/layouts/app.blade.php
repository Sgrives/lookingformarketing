<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@if (App::environment('production'))
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-TJ5V28R');</script>
		@endif

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		@yield('meta_info')
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@yield('og')
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		@yield('head_styles')
		@yield('head_scripts')
	</head>
	<body class="d-flex flex-column h-100">
		@if (App::environment('production'))
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJ5V28R"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		@endif
		<div class="wrapper">
			<main role="main" class="flex-shrink-0">
				<div id="content" class="container-fluid">
					@include('partials.nav')
					@yield('content')
				</div>
			</main>
			<br>
		</div>
		@include('partials.footer')
		<script src="{{ mix('js/app.js') }}"></script>
		@yield('foot_scripts')
	</body>
</html>
