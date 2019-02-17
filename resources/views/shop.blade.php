@extends('layouts.app')

@section('meta_info')
    <title>INeedMarketingHelp! Marketing Job Board</title>
    <link rel="canonical" href="https://ineedmarketinghelp.com" />
    <link rel="alternate" href="https://ineedmarketinghelp.com" hreflang="en-us" />
@endsection

@section('og')
    <meta property="og:title" content="INeedMarketingHelp! Marketing Job Board">
    <meta property="og:description" content="The largest professional job board for marketers, digital marketers, graphic designers, web developers, and more.">
    <meta property="og:url" content="https://ineedmarketinghelp.com">
    <meta property="og:type" content="website">
@endsection

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-12 col-lg-8 align-self-center">
		    <div class="row">
		        <div class="col-md-6 col-lg-8" style="">
					<img src="/shirt_front.jpg" class="img-fluid" alt="Front side of the shirt">
		        </div>
				<div class="col-md-6 col-lg-4">
					<h2>Welcome to the shop</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate urna sed consequat placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam semper luctus sem nec ornare. Aenean vel rutrum nisl, id auctor sem. Nulla eget eleifend diam. Vivamus vitae est vitae est fermentum maximus sed quis massa. Maecenas lobortis egestas purus, at gravida sapien. Suspendisse vulputate feugiat ornare. Nulla facilisi. Vestibulum tincidunt ligula a ipsum accumsan volutpat. Nam et pulvinar nulla. Phasellus at lacus mollis, eleifend massa scelerisque, sollicitudin tortor. Quisque scelerisque lacus at magna faucibus gravida.</p>
					<form action="your-server-side-code" method="POST">
						<script
							src="https://checkout.stripe.com/checkout.js" class="stripe-button"
							data-key="pk_test_TYooMQauvdEDq54NiTphI7jx"
							data-amount="999"
							data-name="Stripe.com"
							data-description="Example charge"
							data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
							data-locale="auto"
							data-zip-code="true">
						</script>
					</form>
				</div>
		    </div>
		</div>
	</div>
@endsection
