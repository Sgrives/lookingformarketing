@extends('layouts.app')

@section('meta_info')
    <title>{{ $guide->title }} | INeedMarketingHelp! Marketing Job Board</title>
    <link rel="canonical" href="https://ineedmarketinghelp.com/guides/{{ $guide->slug }}" />
    <link rel="alternate" href="https://ineedmarketinghelp.com/guides/{{ $guide->slug }}" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="{{ $guide->title }} | INeedMarketingHelp.com Job Board">
    <meta property="og:description" content="{{ $guide->description }}">
    <meta property="og:url" content="https://ineedmarketinghelp.com/guides/{{ $guide->slug }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			@foreach ($guide->tags as $tag)
				<strong class="d-inline-block mb-2 text-primary">{{ $tag->name }}</strong>
			@endforeach
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
		    <div class="row">
		        <div class="col-md-8">
                    <h1 style="color:#393E46;">{{ $guide->title }}</h1>
                    {!! $guide->body !!}
		        </div>
			</div>
		</div>
	</div>
@endsection
