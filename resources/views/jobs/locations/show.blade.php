@extends('layouts.app')

@section('meta_info')
    <title>LFM Jobs - {{ $location->location }}</title>
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="row" style="margin-top:20px;">
				<div class="col-md-10">
					<a href="/jobs"><- back to all jobs</a>
				</div>
				<div class="col-md-2 ml-auto float-right">
					<a class="btn btn-outline-primary" href="{{ url('/jobs/create') }}" role="button">Add a Job</a>
				</div>
			</div>
		    <div class="row justify-content-center">
		        <div class="col-md-12">
		            <h1>{{ $location->location }}</h1>
		        </div>
		    </div>
		    <div class="row justify-content-center">
		        <div class="col-md-12">
		            <ul class="list-group">
		                @foreach ($jobs as $job)
		                    @include('partials.jobs')
		                @endforeach
		            </ul>
		        </div>
		    </div>
        </div>
	</div>
	<br>
	<h2>Upcoming Events in {{ ucfirst($location->location) }}</h2>
	<div class="row">
			@foreach ($events as $event)
				<div class="col-sm-6 col-md-4 col-lg-2">
					<div class="card">
						<div class="card-body">
								<h3 class="card-title">{{ $event->name }}</h3>
								<span class="">{{ $event->startdatetime->format('M, d') }} - {{ $event->enddatetime->format('M, d') }}</span>
								<p class="card-text">{{ ucfirst($event->location) }} | {{ $event->cost === "Free" ? $event->cost : "$".$event->cost }}</p>
								<a class="btn btn-primary stretched-link" href="{{ url('/events/'.$event->slug) }}">View Event</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
@endsection
