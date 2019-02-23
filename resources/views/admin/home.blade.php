@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <h3>To-do:</h3>
                        <ol>
                            <li>Admin - Approve Events</li>
                            <li>Admin - Approve Jobs</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
