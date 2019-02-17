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
	<div class="row justify-content-center dark-bg">
		<div class="col-md-8 align-self-center white-bg">
		    <div class="row">
		        <div class="col-md-8">
					<img src="{{ $guide->featured_image }}" class="img-fluid" alt="Responsive image">
		            <img src="{{ $guide->author->avatar }}" alt="..." class="img-thumbnail">
                    <h1 style="color:#393E46;">{{ $guide->title }}</h1>
                    {!! $guide->body !!}
		        </div>
		    </div>
		</div>
	</div>
@endsection
