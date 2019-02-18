@extends('layouts.app')

@section('meta_info')
    <title>LFM Jobs - {{ $type->name }}</title>
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
		            <h1>{{ $type->name }}</h1>
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

@endsection
