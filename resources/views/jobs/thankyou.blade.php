@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" style="padding:6px;margin-bottom:0px;">
                    {{session('status')}}
                </div>
            @endif
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Thank you for your submission!</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-secondary" role="alert">
                <p>Your job ad is in review. Please allow up to 12 hours for approval. If not approved, you will be notified by email at <b>{{$job->company->email}}</b>.</p>
                <p>If you have questions or to cancel your job ad, please email jon@verticalorbit.com referencing record number <b>{{$job->record}}</b></p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/"><- back to all jobs</a>
        </div>
    </div>

@endsection
