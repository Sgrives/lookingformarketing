@extends('layouts.app')

@section('meta_info')
    <title>LFM Guides - {{ $guide->title }}</title>
    <link rel="canonical" href="https://lookingformarketing.com/guides/on/{{ $guide->slug }}" />
	<link rel="alternate" href="https://lookingformarketing.com/guides/on/{{ $guide->slug }}" hreflang="en-us" />
	<meta name="description" content="{{ $guide->preface }}" />
@endsection

@section('og')
    <meta property="og:title" content="LFM Guides - {{ $guide->title }}">
    <meta property="og:description" content="{{ $guide->preface }}">
    <meta property="og:url" content="https://lookingformarketing.com/guides/on/{{ $guide->slug }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center small">
			<strong class="d-inline-block mb-2 text-primary">
				{{ $guide->category->name }}</strong> |  
				<em>Updated {{ $guide->updated_at->format('m-d-Y') }}</em>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<div class="row">
				<div class="col-md-8">
					<h1>{{ $guide->title }}</h1>
					<article>
						{!! $guide->body !!}
					</article>
				</div>
				<div class="offset-md-1 col-md-3">
					<aside>
						<div class="sticky-top">
							<div id="sidenav"></div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
@endsection