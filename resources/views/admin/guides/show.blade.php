@extends('layouts.app')

@section('meta_info')
    <title>Admin - Guides - {{ $guide->title }}</title>
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center small">
			<strong class="d-inline-block mb-2 text-primary">
				Admin Preview - {{ $guide->category->name }}</strong> |  <em>Updated {{ $guide->updated_at->format('m-d-Y') }}</em>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<div class="row">
				<div class="col-md-8">
					<h1 style="color:#393E46;">{{ $guide->title }}</h1>
					{!! $guide->body !!}
				</div>
				<div class="offset-md-1 col-md-3">
					<div class="sticky-top">
						<div id="sidenav"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- <div class="row justify-content-center">
		<div class="col-md-8 align-self-center">
			<div class="jumbotron">
				
			</div>
		</div>
	</div> --}}
@endsection

@section('foot_scripts')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/vendor/dynamicscrollspy.min.js"></script>
	<script>
	$('#sidenav').DynamicScrollspy({
		affix: false, //affix by default, doesn't work on Bootstrap 4
		tH: 2, //lowest-level header to be included (H2)
		bH: 2, //highest-level header to be included (H6)
		exclude: false, //exclude from the tree/outline any H tags matching this jquery selector
		genIDs: true, //generate random IDs for headers?
		offset: 100, //offset from viewport top for scrollspy
		ulClassNames: 'flex-column', //add this class to top-most UL
		activeClass: '', //active class (besides .active) to add to LI
		testing: false //if testing, append heading tagName and ID to each heading
	})
	</script>
@endsection