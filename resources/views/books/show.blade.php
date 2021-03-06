@extends('layouts.app')

@section('meta_info')
    <title>LFM Books - {{ $book->title }}</title>
@endsection

@section('og')
    <meta property="og:title" content="{{ $book->title }} | lookingformarketing.com">
    <meta property="og:description" content="{{ $book->description }}">
    <meta property="og:url" content="https://lookingformarketing.com/books/{{ $book->slug }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center" style="padding-top:20px;margin-bottom:100px;">
		<div class="col-md-8" style="margin-bottom:20px;">
			<div class="row">
				<div class="col-md-4" style="margin-bottom:20px;">
					<img src="{{ $book->image ? "$book->image" : "/default_thumbnail.svg" }}" class="img-fluid" alt="Book Title - {{ $book->title }}">
				</div>
				<div class="col-md-8">
					<strong class="d-inline-block text-primary">{{ $book->category->name }}</strong>
					<h1 style="color:#393E46;">{{ $book->title }}</h1>
					<h4 style="color:#546E7A"></h4>
					@empty (!$book->description)
						<h3>Description</h3>
						{!! $book->description !!}
					@endempty
				</div>
		    </div>
		</div>
	</div>
@endsection
