@extends('layouts.app')

@section('meta_info')
    <title>Admin - Guides - {{ $guide->title }}</title>
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center small">
			<strong class="d-inline-block mb-2 text-primary">
				Admin Preview - {{ $guide->category->name }}</strong> |  
				<em>Updated {{ $guide->updated_at->format('m-d-Y') }}</em>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<div class="row">
				<div class="col-md-8">
					<h1>{{ $guide->title }}</h1>
					<article>
						{!! $guide->body !!}
					</article>
				</div>
				<div class="offset-md-1 col-md-3">
					<aside>
						<div class="sticky-top">
							<div id="sidenav"></div>
						</div>
					</aside>
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