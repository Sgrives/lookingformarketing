@extends('layouts.app')

@section('meta_info')
    <title>News</title>
    <link rel="canonical" href="https://ineedmarketinghelp.com" />
    <link rel="alternate" href="https://ineedmarketinghelp.com" hreflang="en-us" />
@endsection

@section('og')

@endsection

@section('content')
	<div class="row justify-content-center dark-bg">
		<div class="col-md-8">
			@include('partials.navsub')
			<div class="row">
				<div class="col-md-12">

					@foreach($groups as $category=>$jobs)
						<br>
							@foreach($categories as $singlecategory)
								@if($category == $singlecategory->id)
									<a style="color:#ffffff;font-size:36px;font-weight:bold;" href="{{url('/category/'.$singlecategory->slug)}}">{{$singlecategory->name}}</a>
								@endif
							@endforeach

							<ul class="list-group">
							@foreach ($jobs as $job)
								<li class="list-group-item" style="margin:1px 0;">
									<a style="color:#546E7A" href="{{url('/type/'.$job->type->slug)}}">{{ucfirst($job->type->name)}}</a> |
									<a style="color:#546E7A" href="{{url('/desk/'.$job->desk->slug)}}">{{ucfirst($job->desk->name)}}</a> |
									<a style="color:#546E7A" href="{{url('/location/'.$job->location_slug)}}">{{ucfirst($job->location)}}</a>
									<h2>
										<a style="color:#546E7A" href="{{url('/company/'.$job->company->slug)}}">{{$job->company->name}}</a>
										<a class="job-title" href="{{url('/jobs/'.$job->slug)}}">{{$job->title}}</a>
										<span class="float-right" style="color:#546E7A">{{$job->updated_at->format('M, d')}}</span>
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
