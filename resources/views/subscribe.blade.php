@extends('layouts.app')

@section('meta_info')
    <title>INeedMarketingHelp! Marketing Job Board</title>
    <link rel="canonical" href="https://ineedmarketinghelp.com" />
    <link rel="alternate" href="https://ineedmarketinghelp.com" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="INeedMarketingHelp! Marketing Job Board">
    <meta property="og:description" content="The largest professional job board for marketers, digital marketers, graphic designers, web developers, and more.">
    <meta property="og:url" content="https://ineedmarketinghelp.com">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<div class="row">
				<div class="col-md-12">
					<p style="font-size:60px;font-weight:bold;text-align:center;color:white;">Sign up for our email newsletter</p>
				</div>
			</div>
			@include('partials.subscribe')
		</div>
	</div>
@endsection
