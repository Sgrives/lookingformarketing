@extends('layouts.app')

@section('meta_info')
    <title>LFM Guides - {{ $guide->title }}</title>
    <link rel="canonical" href="https://lookingformarketing.com/guides/{{ $guide->slug }}" />
    <link rel="alternate" href="https://lookingformarketing.com/guides/{{ $guide->slug }}" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="LFM Guides - {{ $guide->title }}">
    <meta property="og:description" content="{{ $guide->description }}">
    <meta property="og:url" content="https://lookingformarketing.com/guides/{{ $guide->slug }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			@foreach ($guide->tags as $tag)
				<strong class="d-inline-block mb-2 text-primary"><a href="/guides/{{ $tag->slug }}">{{ $tag->name }}</a></strong>
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
