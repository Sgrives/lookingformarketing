@extends('layouts.app')

@section('meta_info')
    <title>Event Submission</title>
@endsection

@section('head_styles')
    <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
@endsection

@section('head_scripts')
    <script src="https://unpkg.com/flatpickr@4.5.4/dist/flatpickr.js"></script>
@endsection

@section('content')
	<div class="row justify-content-center">
        <div class="col-md-8">
            <h1>SUBMIT AN EVENT</h1>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top:20px;margin-bottom:40px;">
        <div class="col-md-8">
            <div style="font-style: italic;"><span class="badge badge-secondary" style="padding:5px;">Note:</span> All events are reviewed for completion and spam. Please allow 24-hours for approval.</div>
        </div>
    </div>
    <form method="POST" action="{{route('events.store')}}">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p>All fields are required.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Event Name</label>
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}" placeholder="">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="url">Event URL</label>
                    <input type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" id="url" value="{{ old('url') }}" placeholder="">
                    @if ($errors->has('url'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="startdatetime" class="control-label">Event Start Date & Time</label>
                    <input id="startdatetime" type="text" class="form-control" name="startdatetime">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="enddatetime" class="control-label">Event End Date & Time</label>
                    <input id="enddatetime" type="text" class="form-control" name="enddatetime">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cost">Event Cost</label>
                    <input type="text" class="form-control{{ $errors->has('cost') ? ' is-invalid' : '' }}" name="cost" id="cost" value="{{ old('cost') }}" placeholder="">
                    @if ($errors->has('cost'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('cost') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="location">Event Location</label>
                    <input type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" id="location" value="{{ old('location') }}" placeholder="">
                    @if ($errors->has('location'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="description">Event Description</label>
                    <textarea name="description" name="description" id="description" rows="5" class="form-control{{$errors->has('description') ? ' is-invalid' : ''}}" placeholder="Tell us about the event.">{{old('description')}}</textarea>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('description')}}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary btn-lg">Submit event</button>
            </div>
        </div>
    </form>
    <div style="margin-bottom:50px;"></div>
@endsection

@section('foot_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript">
        flatpickr("#startdatetime", {
            defaultDate: 'today',
            altInput: true,
            enableTime: true,
            dateFormat: 'Y-m-d H:i:s'
        });
        flatpickr("#enddatetime", {
            defaultDate: 'today',
            altInput: true,
            enableTime: true,
            dateFormat: 'Y-m-d H:i:s'
        });
    </script>
@endsection