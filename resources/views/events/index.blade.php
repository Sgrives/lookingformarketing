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
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="row" style="margin-top:20px;">
				<div class="col-md-2 ml-auto float-right">
					<a class="btn btn-outline-primary" href="{{ url('/events/create') }}" role="button">Submit an Event</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">

					@foreach($eventgroups as $eventgroups=>$events)
						<br>
							@foreach($locations as $location)
								@if($eventgroups == $location->slug)
									<b>{{ $location->name }}</b>
								@endif
							@endforeach
							<ul class="list-group">
							@foreach ($events as $event)
								<li class="list-group-item" style="margin:1px 0;">
									{{ $event->url }} | {{ $event->cost === "Free" ? $event->cost : "$".$event->cost }}
									<h2>
										<a class="stretched-link" href="{{ url('events/'.$event->slug) }}">{{ $event->name }}</a>
										<span class="float-right">{{ $event->startdatetime->format('M, d') }} - {{ $event->enddatetime->format('M, d') }}</span>
										<div class="small text-muted">
											{{ str_limit($event->description, $limit = 75, $end = '... Read More') }}
										</div>
									</h2>
								</li>
							@endforeach
						</ul>
					@endforeach

				</div>
			</div>
		</div>
	</div>
@endsection
