@extends('layouts.app')

@section('meta_info')
	<title>LFM News</title>
	<link rel="canonical" href="https://lookingformarketing.com/news" />
	<link rel="alternate" href="https://lookingformarketing.com/news" hreflang="en-us" />
	<meta name="description" content="A RSS collection of popular marketing blogs." />
	<meta http-equiv="refresh" content="14400">		
@endsection

@section('og')
	<meta property="og:title" content="LFM News">
	<meta property="og:image" content="https://placeimg.com/1200/627/nature"/>
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="627">
	<meta property="og:description" content="A RSS collection of popular marketing blogs.">
	<meta property="og:url" content="https://lookingformarketing.com/news">
	<meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row d-flex justify-content-end mr-3">
		<em style="font-size:10px;">Auto refresh in <span id="countdowntimer">14400 </span> Seconds</em>
	</div>
	<div class="row">
		<div class="bricklayer">

		@foreach ($items as $item)

			@if (str_contains($item->get_link(), ['fb.com', 'facebook.com']))
				<div class="card" style="background:#3b5998;">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fab fa-facebook-f" style="color:white;"></i>
							<a href="{{ $item->get_permalink() }}" target="_blank" class="stretched-link" style="color:white;">{{ $item->get_title() }}</a>
						</h5>
						<p class="card-text" style="color:white;">
							{!! str_limit(strip_tags($item->get_description()), $limit = 300, $end = '...') !!} <b>{!! parse_url($item->get_permalink(), PHP_URL_HOST) !!}</b>
						</p>
						@if (!$item->get_date() == Null)
							<p><small>Posted on {{ $item->get_date('j F Y') }}</small></p>
						@endif
					</div>
				</div>
				
			@elseif (str_contains($item->get_link(), 'googleblog.com'))
				<div class="card" style="background:#dc4e41;">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fab fa-google" style="color:white;"></i>
							<a href="{{ $item->get_permalink() }}" target="_blank" class="stretched-link" style="color:white;">{{ $item->get_title() }}</a>
						</h5>
						<p class="card-text" style="color:white;">
							{!! str_limit(strip_tags($item->get_description()), $limit = 300, $end = '...') !!} <b>{!! parse_url($item->get_link(), PHP_URL_HOST) !!}</b>
						</p>
						@if (!$item->get_date() == Null)
							<p><small>Posted on {{ $item->get_date('j F Y') }}</small></p>
						@endif
					</div>
				</div>

			@elseif (str_contains($item->get_link(), 'pinterest.com'))
				<div class="card" style="background:#bd081c;">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fab fa-pinterest-p" style="color:white;"></i>
							<a href="{{ $item->get_permalink() }}" target="_blank" class="stretched-link" style="color:white;">{{ $item->get_title() }}</a>
						</h5>
						<p class="card-text" style="color:white;">
							{!! str_limit(strip_tags($item->get_description()), $limit = 300, $end = '...') !!} <b>{!! parse_url($item->get_link(), PHP_URL_HOST) !!}</b>
						</p>
						@if (!$item->get_date() == Null)
							<p><small>Posted on {{ $item->get_date('j F Y') }}</small></p>
						@endif
					</div>
				</div>

			@elseif (str_contains($item->get_link(), 'linkedin.com'))
				<div class="card" style="background:#0077b5;">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fab fa-linkedin-in" style="color:white;"></i>
							<a href="{{ $item->get_permalink() }}" target="_blank" class="stretched-link" style="color:white;">{{ $item->get_title() }}</a>
						</h5>
						<p class="card-text" style="color:white;">
							{!! str_limit(strip_tags($item->get_description()), $limit = 300, $end = '...') !!} <b>{!! parse_url($item->get_link(), PHP_URL_HOST) !!}</b>
						</p>
						@if (!$item->get_date() == Null)
							<p><small>Posted on {{ $item->get_date('j F Y') }}</small></p>
						@endif
					</div>
				</div>
				
			@elseif (str_contains($item->get_link(), 'theverge.com'))
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">
							<img src="https://cdn.vox-cdn.com/uploads/chorus_asset/file/7395367/favicon-16x16.0.png" alt="">
							<a href="{{ $item->get_permalink() }}" target="_blank" class="stretched-link">{{ $item->get_title() }}</a>
						</h5>
						<p class="card-text">
							{!! str_limit(strip_tags($item->get_description()), $limit = 300, $end = '...') !!} <b>{!! parse_url($item->get_link(), PHP_URL_HOST) !!}</b>
						</p>
						@if (!$item->get_date() == Null)
							<p><small>Posted on {{ $item->get_date('j F Y') }}</small></p>
						@endif
					</div>
				</div>

			@else
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fas fa-rss"></i>
							<a href="{{ $item->get_permalink() }}" target="_blank" class="stretched-link">{{ htmlspecialchars_decode($item->get_title()) }}</a>
						</h5>
						<p class="card-text">
							{!! str_limit(strip_tags($item->get_description()), $limit = 300, $end = '...') !!} <b>{!! parse_url($item->get_link(), PHP_URL_HOST) !!}</b>
						</p>
						@if (!$item->get_date() == Null)
							<p><small>Posted on {{ $item->get_date('j F Y') }}</small></p>
						@endif
					</div>
				</div>
			@endif

		@endforeach

		</div>
	</div>
@endsection

@section('foot_scripts')
	<script type="text/javascript">
		var timeleft = 14400;
		var downloadTimer = setInterval(function(){
		timeleft--;
		document.getElementById("countdowntimer").textContent = timeleft;
		if(timeleft <= 0)
			clearInterval(downloadTimer);
		},1000);
	</script>
@endsection