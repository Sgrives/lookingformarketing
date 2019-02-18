@extends('layouts.app')

@section('meta_info')
    <title>Looking For Marketing - Help</title>
    <link rel="canonical" href="https://lookingformarketing.com" />
    <link rel="alternate" href="https://lookingformarketing.com" hreflang="en-us" />
@endsection

@section('content')
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Looking for Marketing... <b>Help!</b></h1>
		</div>
	</div>

	<div class="card-deck mb-3 text-center">
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal">Post a Job</h4>
			</div>
			<div class="card-body">
				<h1 class="card-title pricing-card-title">Free</h1>
				<ul class="list-unstyled mt-3 mb-4">
					<li>No payment info needed, this is free</li>
					<li>No account creation</li>
					<li>Applicants contact you directly</li>
					<li>3 month listing</li>
				</ul>
				<a class="btn btn-lg btn-block btn-primary" href="/jobs/create" role="button">Make a Post</a>
			</div>
		</div>
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal">Find a Agency</h4>
			</div>
			<div class="card-body">
				<h1 class="card-title pricing-card-title">Coming Soon</h1>
			</div>
		</div>
		<div class="card mb-4 shadow-sm">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal">Find a Freelancer</h4>
			</div>
			<div class="card-body">
				<div class="card-body">
					<h1 class="card-title pricing-card-title">Coming Soon</h1>
				</div>
			</div>
		</div>
	</div>
@endsection
