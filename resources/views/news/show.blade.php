@extends('layouts.app')

@section('head_styles')
	<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bricklayer/0.4.2/bricklayer.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/bricklayer/0.4.2/bricklayer.min.js"></script>
	<style>
		@media screen and (min-width: 768px) {
			.bricklayer-column-sizer {
				/* divide by 2. */
				width: 25%;
			}
		}
		.card {
			margin: 10px 0px;
		}
	</style>
@endsection

@section('content')
<div class="row">
		<div class="bricklayer">

		@foreach ($items as $item)

			@if (str_contains($item->get_link(), ['fb.com', 'facebook.com']))
				<div class="card" style="background:#3b5998;">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fab fa-facebook-f"></i>
							<a href="{{ $item->get_permalink() }}" target="_blank" class="stretched-link" style="color:white;">{{ $item->get_title() }}</a>
						</h5>
						@if (!$item->get_date() == Null)
							<p><small>Posted on {{ $item->get_date('j F Y') }}</small></p>
						@else
							<p><small>Posted on {{ Carbon\Carbon::now()->format('j F Y') }}</small></p>
						@endif
					</div>
				</div>
				
			@elseif (str_contains($item->get_link(), 'googleblog.com'))
				<div class="card" style="background:#dc4e41;">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fab fa-google"></i>
							<a href="{{ $item->get_permalink() }}" target="_blank" class="stretched-link" style="color:white;">{{ $item->get_title() }}</a>
						</h5>
						@if (!$item->get_date() == Null)
							<p><small>Posted on {{ $item->get_date('j F Y') }}</small></p>
						@else
							<p><small>Posted on {{ Carbon\Carbon::now()->format('j F Y') }}</small></p>
						@endif
					</div>
				</div>

			@elseif (str_contains($item->get_link(), 'linkedin.com'))
				<div class="card" style="background:#0077b5;">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fab fa-linkedin-in"></i>
							<a href="{{ $item->get_permalink() }}" target="_blank" class="stretched-link" style="color:white;">{{ $item->get_title() }}</a>
						</h5>
						@if (!$item->get_date() == Null)
							<p><small>Posted on {{ $item->get_date('j F Y') }}</small></p>
						@else
							<p><small>Posted on {{ Carbon\Carbon::now()->format('j F Y') }}</small></p>
						@endif
					</div>
				</div>

			@else
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">
							<i class="fas fa-rss"></i>
							<a href="{{ $item->get_permalink() }}" target="_blank" class="stretched-link">{{ $item->get_title() }}</a>
						</h5>
						@if (!$item->get_date() == Null)
							<p><small>Posted on {{ $item->get_date('j F Y') }}</small></p>
						@else
							<p><small>Posted on {{ Carbon\Carbon::now()->format('j F Y') }}</small></p>
						@endif
					</div>
				</div>
			@endif

		@endforeach

		</div>
	</div>
@endsection

@section('foot_scripts')
		<script>
		var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
</script>
@endsection
