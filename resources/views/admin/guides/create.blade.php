@extends('layouts.app')

@section('head_styles')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('head_scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>ADD GUIDE</h1>
        </div>
    </div>
    <hr>
    <form method="POST" action="{{route('guides.store')}}">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="title" value="{{ old('title') }}" placeholder="e.g. The next great guide">
                @if ($errors->has('title'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">
                <label for="preface">Preface</label>
                <textarea rows="10" id="preface" class="editable medium-editor-textarea" name="preface">{{ old('preface') }}</textarea>
                @if ($errors->has('preface'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('preface') }}</strong>
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
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                <label for="publish_date">Publish Date</label>
                <input id="publish_date" type="text" class="form-control" name="publish_date" value="{{ old('publish_date') }}">
                @if ($errors->has('publish_date'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('publish_date') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group">
                <label for="body">Body</label>
                <textarea rows="10" id="body" class="editable medium-editor-textarea" name="body">
                    {{ old('body') }}
                </textarea>
                @if ($errors->has('body'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top:300px;">
        <div class="col-md-8">
            <button type="submit" class="btn btn-secondary btn-sm">Save</button>
        </div>
    </div>
    </form>
    <div style="margin-bottom:50px;"></div>
@endsection

@section('foot_scripts')
    <script type="text/javascript">
        flatpickr("#publish_date", {
            altInput: true,
            enableTime: false,
            dateFormat: 'Y-m-d'
        });
    </script>

    <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
    <script>
        var editor = new MediumEditor('.editable', {
            toolbar: {
                buttons: ['h2', 'h3', 'h4', 'h5', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'quote', 'underline', 'anchor', 'unorderedlist','orderedlist', 'pre', 'indent', 'outdent', 'removeFormat', 'html']
            },
            anchor: {
                customClassOption: 'button',
                customClassOptionText: 'Button',
                linkValidation: false,
                placeholderText: 'Paste or type a link',
                targetCheckbox: true,
                targetCheckboxText: 'Open in new window'
            }
        });
    </script>
@endsection