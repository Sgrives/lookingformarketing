@extends('layouts.app')

@section('meta_title')
    | {{$type->name}}
@endsection

@section('content')
	<div class="row justify-content-center dark-bg">
		<div class="col-md-8">
		    @include('partials.navsub')
		    <div class="row justify-content-center">
		        <div class="col-md-12">
		            <h1>{{$type->name}}</h1>
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
