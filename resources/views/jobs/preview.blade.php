@extends('layouts.app')

@section('meta_title')
    | Preview Job Ad
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>STEP 2: PREVIEW YOUR JOB AD</h2>
        </div>
        <div class="col-md-4 ml-auto">
            <button type="button" class="btn btn-outline-secondary" style="margin-right:5px;"disabled>1. Create</button>
            <button type="button" class="btn btn-outline-success" style="margin-right:5px;"disabled>2. Preview</button>
            {{-- <button type="button" class="btn btn-outline-secondary" style="margin-right:5px;"disabled>3. Purchase</button> --}}
        </div>
    </div>
    <hr>
    <div class="row" style="margin-bottom:40px;">
        <div class="col-md-12">
            <a class="btn btn-success btn-lg" href="{{route('job.purchase', Request::segment(4))}}" role="button">Looks great! Submit for review</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>{{$job->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            Compamy: {{$job->company->name}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            Location: {{$job->location}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{$job->company->url}}">{{$job->company->url}}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <h3>About Us:</h3>
            {{$job->company->description}}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <h3>Job Description:</h3>
            <p>{{$job->description}}</p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-secondary" role="alert">
                <h3>Apply for this position</h3>
                {{$job->apply}}
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom:40px;">
        <div class="col-md-12">
            <a class="btn btn-success btn-lg" href="{{route('job.purchase', Request::segment(4))}}" role="button">Looks great! Submit for review</a>
        </div>
    </div>

@endsection
