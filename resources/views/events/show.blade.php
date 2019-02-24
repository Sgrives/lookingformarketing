@extends('layouts.app')

@section('meta_info')
    <title>LFM Events - {{ $event->name }}</title>
@endsection

@section('og')
    <meta property="og:title" content="{{ $event->name }} | lookingformarketing.com Job Board">
    <meta property="og:description" content="{{ ucfirst($event->location) }} - {{ $event->description }}">
    <meta property="og:url" content="https://lookingformarketing.com/jobs/{{ $event->slug }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center" style="padding-top:20px;">
		<div class="col-md-8" style="margin-bottom:20px;">
		<div class="row" style="margin-top:20px;">
			<div class="col-md-10">
				<a href="/events"><- back to all events</a>
			</div>
			<div class="col-md-2 ml-auto float-right">
				<a class="btn btn-outline-primary" href="{{ url('/events/create') }}" role="button">Submit an Event</a>
			</div>
		</div>
		    <div class="row">
		        <div class="col-md-12">
		            <i><b>Location:</b> {{ $event->location }} | {{ $event->startdatetime->format('M d, Y @ ga') }} - {{ $event->enddatetime->format('M d, Y @ ga') }} | <b>Cost:</b> {{ $event->cost === "Free" ? $event->cost : "$".$event->cost }}</i>
		            <h1 style="color:#393E46;">{{ $event->name }}</h1>
		            <h4 style="color:#546E7A"></h4>
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-md-12">
		            <h3>Description</h3>
		            {{ $event->description }}
		        </div>
		    </div>
		</div>
	</div>
@endsection
