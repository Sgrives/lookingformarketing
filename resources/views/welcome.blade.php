@extends('layouts.app')

@section('meta_info')
    <title>Looking For Marketing...</title>
    <link rel="canonical" href="https://lookingformarketing.com" />
    <link rel="alternate" href="https://lookingformarketing.com" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="lookingformarketing.com">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://lookingformarketing.com">
    <meta property="og:type" content="website">
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container ">
            <div class="spinny-wrapper">
                <h1 class="display-4"><b>Looking for Marketing...</b>
                    <div class="d-none d-lg-inline-block">
                        <span class="spinny-words">
                            <span>events</span>
                            <span>communities</span>
                            <span>resources</span>
                            <span>guides</span>
                            <span>books</span>
                            <span>jobs</span>
                        </span>
                    </div>
                </h1>
            </div>
        <p class="lead">A collection of <b><a href="/jobs">jobs</a></b>, <b><a href="/events">events</a></b>, <b><a href="/books">books</a></b>, and other resources to help you do better marketing.</p>
        </div>
    </div>
@endsection
