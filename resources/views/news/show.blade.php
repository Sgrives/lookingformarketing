@extends('layouts.app')

@section('content')
	<div class="row justify-content-center dark-bg" style="padding-top:20px;">
		<div class="col-md-8 white-bg" style="padding:50px;margin-bottom:20px;border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
			@include('partials.navsub')
		    <div class="row">
		        <div class="col-md-12">
					<img src="{{ $post->author->avatar }}" alt="..." class="img-thumbnail">
					
                    <h1 style="color:#393E46;">{{$post->title}}</h1>
                    {!!$post->body!!}
		        </div>
		    </div>
		</div>
	</div>
@endsection
