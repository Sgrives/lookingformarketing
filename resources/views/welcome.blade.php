@extends('layouts.app')

@section('meta_info')
    <title>Looking For Marketing...</title>
    <link rel="canonical" href="https://lookingformarketing.com" />
    <link rel="alternate" href="https://lookingformarketing.com" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="lookingformarketing.com">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://lookingformarketing.com">
    <meta property="og:type" content="website">
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container ">
        
            <div class="spinny-wrapper">
                <h1 class="display-4"><b>Looking for Marketing...</b>
                    <div class="d-none d-lg-inline-block">
                        <span class="spinny-words">
                            <span>events</span>
                            <span>communities</span>
                            <span>resources</span>
                            <span>guides</span>
                            <span>freelancers</span>
                            <span>jobs</span>
                        </span>
                    </div>
                </h1>
            </div>
       
      <p class="lead">A collection of <b><a href="/guides">guides</a></b>, <b><a href="/jobs">jobs</a></b>, and other <b>resources</b> to help you do better marketing.</p>
    </div>
  </div>
  <h2>Newest Guides</h2>
  <div class="row mb-2">

    @foreach ($guides as $guide)
        @foreach ($guide->tags as $tag)
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">{{ $tag->name }}</strong>
                        <h3 class="mb-0">{{ $guide->title }}</h3>
                        <div class="mb-1 text-muted">{{ date('m/d/Y', strtotime($guide->publish_date)) }}</div>
                        <p class="card-text">{{ str_limit($guide->excerpt, $limit = 75, $end = '... Read More') }}</p>
                        <a href="{{ url('/guides/'.$tag->slug.'/'.$guide->slug) }}" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block guide">
                        <img src="{{ $guide->featured_image }}" class="img-fluid" alt="Responsive image" height="250px"> 
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
      
  </div>
  <br>
  <h2>Newest Job Posts</h2>
  <div class="row">
	@foreach ($jobs as $job)
        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $job->title }}</h3>
                    <p class="card-text">{{ ucfirst($job->type->name) }}</p>
                    <a class="btn btn-primary stretched-link" href="{{ url('/jobs/'.$job->slug) }}">View Job</a>
                </div>
            </div>
        </div>
	@endforeach
</div>

<br>
<h2>Upcoming Events</h2>
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
