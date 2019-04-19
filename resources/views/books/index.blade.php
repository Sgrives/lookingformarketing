@extends('layouts.app')

@section('meta_info')
    <title>LFM Books</title>
    <link rel="canonical" href="https://lookingformarketing.com/books" />
    <link rel="alternate" href="https://lookingformarketing.com/books" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="lookingformarketing.com">
    <meta property="og:description" content="You voted on them, here are the books you recommend.">
    <meta property="og:url" content="https://lookingformarketing.com/books">
    <meta property="og:type" content="website">
@endsection

@section('content')
    @include('partials.alerts')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Looking for Marketing <b>Books</b></h1>
            <p class="lead">A collection of <b>books</b> to help you do better marketing.</p>
            <div class="float-right">
                <a class="btn btn-outline-primary d-none d-sm-block" href="{{ url('/books/create') }}" role="button">Submit a Book</a>
            </div>
        </div>
    </div>
    <div class="card-columns">
        @foreach ($books as $book)
            <div class="card">
                <img src="{{ $book->image ? "$book->image" : "/default_thumbnail.svg" }}" class="card-img-top" alt="Book Title - {{ $book->title }}">
                <div class="card-body">
                    <span class="card-title">
                        <strong class="d-inline-block text-primary">{{ $book->category->name }}</strong>
                        <h4 class="card-title mb-0">{{ $book->title }}</h4>
                    </span>
                    <p class="card-text">{{ str_limit($book->description, $limit = 40, $end = '... Read More') }}</p>
                    <a href="{{ url('/books/'.$book->slug) }}" class="stretched-link btn btn-primary">Learn More</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
