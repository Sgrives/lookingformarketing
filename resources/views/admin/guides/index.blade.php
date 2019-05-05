@extends('layouts.app')

@section('meta_info')
    <title>Admin - Guides</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('home') }}">back</a> |
                    <a href="{{ url('/admin/guides/create') }}">create</a>
                    <h1>Guides Dashboard</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <ul>
                        @foreach ($guides as $guide)
                            <li>
                                <a href="{{ url('/admin/guides/'.$guide->slug) }}" target="_blank">{{ $guide->title }}</a> |
                                <a href="{{ url('/admin/guides/'.$guide->slug.'/edit') }}">Edit</a> |
                                <a href="#" data-toggle="modal" data-target="#{{ $guide->slug }}" class="">Delete</a>
                            </li>
                            
                            <div class="modal fade" id="{{ $guide->slug }}" tabindex="-1" role="dialog" aria-labelledby="{{ $guide->slug }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="{{ $guide->slug }}">Please confirm</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete <b>{{$guide->title}}</b>?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form method="POST" action="{{route('guides.destroy', $guide->slug)}}">
                                            {{method_field('DELETE')}}
                                            @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
