@extends('layouts.app')

@section('meta_info')
    <title>LFM - Guides</title>
    <link rel="canonical" href="https://lookingformarketing.com/guides" />
    <link rel="alternate" href="https://lookingformarketing.com/guides" hreflang="en-us" />
@endsection

@section('og')

@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Looking for Marketing <b>Guides</b></h1>
			<p class="lead">A collection of <b>how-tos</b> to help you learn something new.</p>
		</div>
	</div>
    <div class="row">
        <div class="col-md-12">
            <h1>Guides</h1>
            
            @foreach ($guides as $guide)
                @foreach ($guide->tags as $tag)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $guide->featured_image }}" class="img-fluid" alt="Responsive image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <strong class="d-inline-block text-primary">{{ $tag->name }}</strong>
                                <h3 class="mb-0">{{ $guide->title }}</h3>
                            </h5>
                            <p class="card-text">{{ str_limit($guide->excerpt, $limit = 40, $end = '... Read More') }}</p>
                            <a href="{{ url('/guides/'.$tag->slug.'/'.$guide->slug) }}" class="stretched-link btn btn-primary">Read More</a>
                        </div>
                    </div>
                @endforeach
            @endforeach

        </div>
    </div>
@endsection
