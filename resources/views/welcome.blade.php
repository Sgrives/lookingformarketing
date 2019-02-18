@extends('layouts.app')

@section('meta_info')
    <title>Looking For Marketing...</title>
    <link rel="canonical" href="https://lookingformarketing.com" />
    <link rel="alternate" href="https://lookingformarketing.com" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="lookingformarketing.com">
    <meta property="og:description" content="The largest professional job board for marketers, digital marketers, graphic designers, web developers, and more.">
    <meta property="og:url" content="https://lookingformarketing.com">
    <meta property="og:type" content="website">
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Welcome to <b>Looking for Marketing...</b></h1>
      <p class="lead">A collection of <b>guides</b>, <b>jobs</b>, and other <b>resources</b> to help you do better marketing.</p>
    </div>
  </div>
  <h2>Newest Guides</h2>
  <div class="row mb-2">

    @foreach ($guides as $guide)
        @foreach ($guide->tags as $tag)
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">{{ $tag->name }}</strong>
                        <h3 class="mb-0">{{ $guide->title }}</h3>
                        <div class="mb-1 text-muted">{{ date('m/d/Y', strtotime($guide->publish_date)) }}</div>
                        <p class="card-text mb-auto">{{ $guide->excerpt }}</p>
                        <a href="{{ url('/guides/'.$tag->slug.'/'.$guide->slug) }}" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block guide">
                        <img src="{{ $guide->featured_image }}" class="img-fluid" alt="Responsive image" height="250px"> 
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
      
  </div>
  <br>
  <h2>Newest Job Posts</h2>
  <div class="row">
        @foreach ($jobs as $job)
        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a style="padding-left:0px;" href="{{ url('/jobs/'.$job->slug) }}">{{ $job->title }}</a>
                    </h5>
                    <p class="card-text">{{ ucfirst($job->type->name) }}</p>
                    <a href="{{ url('/jobs/'.$job->slug) }}" class="btn btn-primary">View Job</a>
                </div>
            </div>
        </div>
        @endforeach
</div>
@endsection
