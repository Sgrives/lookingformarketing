@extends('layouts.app')

@section('meta_info')
    <title>Admin - Guides - {{ $guide->title }}</title>
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<strong class="d-inline-block mb-2 text-primary">
				Admin Preview - {{ $guide->category->name }}
			</strong>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<div class="row">
				<div class="col-md-8">
					<h1 style="color:#393E46;">{{ $guide->title }}</h1>
					{!! $guide->body !!}
				</div>
			</div>
		</div>
	</div>
	{{-- <div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<div class="jumbotron">
				
			</div>
		</div>
	</div> --}}
@endsection