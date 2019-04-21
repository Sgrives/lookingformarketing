@extends('layouts.app')

@section('meta_info')
    <title>LFM - Events</title>
    <link rel="canonical" href="https://lookingformarketing.com/events" />
    <link rel="alternate" href="https://lookingformarketing.com/events" hreflang="en-us" />
@endsection

@section('og')

@endsection

@section('content')
	@include('partials.alerts')
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Looking for Marketing <b>Events</b></h1>
            <p class="lead">A collection of <b>events</b> to go somewhere new.</p>
            <div class="float-right">
                <a class="btn btn-outline-primary d-none d-sm-block" href="{{ url('/events/create') }}" role="button">Submit an Event</a>
            </div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<h3>Upcoming Events</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					@foreach($eventgroups as $eventgroups=>$events)
						<br>
						<b>{{ $eventgroups }}</b>
						<ul class="list-group">
						@foreach ($events as $event)
							<li class="list-group-item" style="margin:1px 0;">
								Price: <b>{{ $event->cost === "Free" ? $event->cost : "$".$event->cost }}</b>
										<h2>
											<a class="stretched-link" href="{{ url('events/'.$event->slug) }}">{{ $event->name }}</a>
											{{ $event->startdatetime->format('d') === $event->enddatetime->format('d') ? $event->startdatetime->format('M, d') : $event->startdatetime->format('M, d')." - ".$event->enddatetime->format('M, d') }}
										</h2>
								
								<div class="text-muted">
									{{ str_limit($event->description, $limit = 100, $end = '... Read More') }}
								</div>
							</li>
						@endforeach
						</ul>
					@endforeach

				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8" style="margin: 10px 0px;">
			<hr>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<h3>Missed Events</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					@foreach($pasteventgroups as $eventgroups=>$events)
						<br>
						<b>{{ $eventgroups }}</b>
						<ul class="list-group">
						@foreach ($events as $event)
							<li class="list-group-item" style="margin:1px 0;">
								Price: <b>{{ $event->cost === "Free" ? $event->cost : "$".$event->cost }}</b>
										<h2>
											<a class="stretched-link" href="{{ url('events/'.$event->slug) }}">{{ $event->name }}</a>
											{{ $event->startdatetime->format('d') === $event->enddatetime->format('d') ? $event->startdatetime->format('M, d') : $event->startdatetime->format('M, d')." - ".$event->enddatetime->format('M, d') }}
										</h2>
								
								<div class="text-muted">
									{{ str_limit($event->description, $limit = 100, $end = '... Read More') }}
								</div>
							</li>
						@endforeach
						</ul>
					@endforeach

				</div>
			</div>
		</div>
	</div>
@endsection
