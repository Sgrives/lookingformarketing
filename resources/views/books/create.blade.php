@extends('layouts.app')

@section('meta_info')
    <title>Book Submission</title>
@endsection

@section('content')
	<div class="row justify-content-center">
        <div class="col-md-8">
            <h1>SUBMIT A BOOK RECOMMENDATION</h1>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top:20px;margin-bottom:40px;">
        <div class="col-md-8">
            <div style="font-style: italic;"><span class="badge badge-secondary" style="padding:5px;">Note:</span> Each submission will be reviewed for approval.</div>
        </div>
    </div>
    <form method="POST" action="{{route('books.store')}}">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Tell us about the book</h3>
            <p>All fields are required.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">
                <label for="title">Book Title</label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="title" value="{{ old('title') }}" placeholder="e.g. 2019 Marketing Book">
                @if ($errors->has('title'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" id="category" name="category">
                    <option value="">Select</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('category'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('category') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="url">Amazon URL</label>
                <input type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" id="url" value="{{ old('url') }}" placeholder="www.amazon.com/2019_marketing_book/dp/B0123">
                @if ($errors->has('url'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('url') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <button type="submit" class="btn btn-primary btn-lg">Submit Book Recommendation</button>
        </div>
    </div>
    </form>
    <div style="margin-bottom:50px;"></div>

@endsection
