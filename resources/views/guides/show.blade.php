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
		<div class="col-md-8 align-self-center">
			@include('guides.partials.body')
		</div>
	</div>
@endsection