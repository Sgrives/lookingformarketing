@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Guides Dashboard</div>

                <div class="card-body">
                    <a href="{{ url('/admin/guides/create') }}">Create</a>
                    <ul>
                        @foreach ($guides as $guide)
                            <li>
                                <a href="{{ url('/admin/guides/'.$guide->slug.'/edit') }}">{{ $guide->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
