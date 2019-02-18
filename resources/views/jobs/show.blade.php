@extends('layouts.app')

@section('meta_info')
    <title>LFM Jobs - {{ $job->title }}</title>
@endsection

@section('og')
    <meta property="og:title" content="{{ $job->title }} | lookingformarketing.com Job Board">
    <meta property="og:description" content="{{ ucfirst($job->location) }} - {{ $job->description }}">
    <meta property="og:url" content="https://lookingformarketing.com/jobs/{{ $job->slug }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center" style="padding-top:20px;">
		<div class="col-md-8" style="margin-bottom:20px;">
		<div class="row" style="margin-top:20px;">
			<div class="col-md-10">
				<a href="/jobs"><- back to all jobs</a>
			</div>
			<div class="col-md-2 ml-auto float-right">
				<a class="btn btn-outline-primary" href="{{ url('/jobs/create') }}" role="button">Add a Job</a>
			</div>
		</div>
		    <div class="row">
		        <div class="col-md-12">
		            <i>Posted: {{ $job->updated_at->format('M d') }} | {{ $job->type->name }} {{ $job->category->name }}</i>
		            <h1 style="color:#393E46;">{{ $job->title }}</h1>
		            <h4 style="color:#546E7A"></h4>
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-md-12">
		            Company: <a style="color:#546E7A" href="{{ url('jobs/company/'.$job->company->slug) }}">{{ $job->company->name }}</a>
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-md-12">
		            Job Location: <a style="color:#546E7A" href="{{ url('jobs/location/'.$job->location_slug) }}">{{ ucfirst($job->location) }}</a> - {{ $job->desk->name }}
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-md-12">
		            <a href="{{ $job->company->url }}" target="_blank">{{ $job->company->url }}</a>
		        </div>
		    </div>
		    <br>
		    <div class="row">
		        <div class="col-md-12">
		            <h3>About Us:</h3>
		            {{ $job->company->description }}
		        </div>
		    </div>
		    <br>
		    <div class="row">
		        <div class="col-md-12">
		            <h3>Job Description:</h3>
		            {!! nl2br(e($job->description)) !!}
		        </div>
		    </div>
		    <br>
		    <div class="row">
		        <div class="col-md-12">
		            <div class="alert alert-secondary" role="alert">
		                <h3>Apply for this position</h3>
		                {{ $job->apply }}
		            </div>
		        </div>
		    </div>
		</div>
	</div>
@endsection
