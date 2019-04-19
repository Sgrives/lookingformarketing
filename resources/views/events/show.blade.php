@extends('layouts.app')

@section('meta_info')
    <title>LFM Events - {{ $event->name }}</title>
@endsection

@section('og')
    <meta property="og:title" content="{{ $event->name }} | lookingformarketing.com">
    <meta property="og:description" content="{{ ucfirst($event->location) }} - {{ $event->description }}">
    <meta property="og:url" content="https://lookingformarketing.com/jobs/{{ $event->slug }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center" style="padding-top:20px;">
		<div class="col-md-8" style="margin-bottom:20px;">
			<div class="row">
				<div class="col-md-12">
					<h1 style="color:#393E46;">{{ $event->name }}</h1>
					<i>
						<b>Location:</b> {{ $event->location }} | 
						<b>Date:</b> {{ $event->startdatetime->format('M d, Y @ ga') }} - {{ $event->enddatetime->format('M d, Y @ ga') }} | 
						<b>Cost:</b> {{ $event->cost === "Free" ? $event->cost : "$".$event->cost }}
					</i>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<h4>Description</h4>
					{!! $event->description !!}
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="float-left">
						<a class="btn btn-primary" href="{{ url($event->url) }}/?utm_source=lookingformarketing&utm_medium=events&utm_campaign=referral" target="_blank" role="button">Visit Event Website</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
