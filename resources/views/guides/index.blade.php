@extends('layouts.app')

@section('meta_info')
    <title>Guides</title>
    <link rel="canonical" href="https://ineedmarketinghelp.com" />
    <link rel="alternate" href="https://ineedmarketinghelp.com" hreflang="en-us" />
@endsection

@section('og')

@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
            <h1>Guides</h1>
            
            @foreach ($guides as $guide)
                @foreach ($guide->tags as $tag)
                    <div class="card" style="width: 18rem;">
                        <img src="https://placeimg.com/1200/627/nature" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a style="padding-left:0px;" href="{{ url('/guides/'.$tag->slug.'/'.$guide->slug) }}">{{ucfirst($guide->title)}}</a>
                            </h5>
                            <p class="card-text">{{ $guide->excerpt }}</p>
                            <a href="{{ url('/guides/'.$tag->slug.'/'.$guide->slug) }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach
            @endforeach

        </div>
    </div>
	{{-- <div class="row justify-content-center dark-bg">
		<div class="col-md-8 align-self-center">
			<div class="card-columns">
			@foreach ($guides as $guide)
				<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/500x200" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{ucfirst($guide->title)}}</h5>
						<p class="card-text">{{$guide->body}}</p>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div> --}}
@endsection
