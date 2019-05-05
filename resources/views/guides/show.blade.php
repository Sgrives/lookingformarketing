@extends('layouts.app')

@section('meta_info')
    <title>LFM Guides - {{ $guide->title }}</title>
    <link rel="canonical" href="https://lookingformarketing.com/guide/on/{{ $guide->slug }}" />
    <link rel="alternate" href="https://lookingformarketing.com/guide/on/{{ $guide->slug }}" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="LFM Guides - {{ $guide->title }}">
    <meta property="og:description" content="{{ $guide->preface }}">
    <meta property="og:url" content="https://lookingformarketing.com/guide/on/{{ $guide->slug }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<strong class="d-inline-block mb-2 text-primary">
				{{ $guide->category->name }}
			</strong>
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
	{{-- <div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<div class="jumbotron">
				
			</div>
		</div>
	</div> --}}
@endsection