@extends('layouts.app')

@section('meta_info')
    <title>Admin - Guides - {{ $guide->title }}</title>
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			@include('guides.partials.body')
		</div>
	</div>
	{{-- <div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<div class="jumbotron">
				
			</div>
		</div>
	</div> --}}
@endsection