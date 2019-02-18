@extends('layouts.app')

@section('meta_info')
    <title>LFM - Jobs</title>
    <link rel="canonical" href="https://lookingformarketing.com/jobs" />
    <link rel="alternate" href="https://lookingformarketing.com/jobs" hreflang="en-us" />
@endsection

@section('og')

@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="row" style="margin-top:20px;">
				<div class="col-md-2 ml-auto float-right">
					<a class="btn btn-outline-primary" href="{{ url('/jobs/create') }}" role="button">Add a Job</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">

					@foreach($groups as $category=>$jobs)
						<br>
							@foreach($categories as $singlecategory)
								@if($category == $singlecategory->id)
									<a href="{{ url('jobs/category/'.$singlecategory->slug) }}">{{ $singlecategory->name }}</a>
								@endif
							@endforeach

							<ul class="list-group">
							@foreach ($jobs as $job)
								<li class="list-group-item" style="margin:1px 0;">
									<a style="color:#546E7A" href="{{ url('jobs/type/'.$job->type->slug) }}">{{ ucfirst($job->type->name) }}</a> |
									<a style="color:#546E7A" href="{{ url('jobs/desk/'.$job->desk->slug) }}">{{ ucfirst($job->desk->name) }}</a> |
									<a style="color:#546E7A" href="{{ url('jobs/location/'.$job->location_slug) }}">{{ ucfirst($job->location) }}</a>
									<h2>
										<a style="color:#546E7A" href="{{ url('jobs/company/'.$job->company->slug) }}">{{ $job->company->name }}</a>
										<a class="job-title" href="{{ url('/jobs/'.$job->slug) }}">{{ $job->title }}</a>
										<span class="float-right" style="color:#546E7A">{{ $job->updated_at->format('M, d') }}</span>
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
