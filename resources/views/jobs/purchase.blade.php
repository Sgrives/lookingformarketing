@extends('layouts.app')

@section('meta_title')
    | Purchase Job Ad
@endsection

@section('head_scripts')
    <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('styles')
    <style media="screen">
        .StripeElement {
            background-color: white;
            height: 40px;
            padding: 10px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2>STEP 3: PURCHASE</h2>
        </div>
        <div class="col-md-4 ml-auto">
            <button type="button" class="btn btn-outline-secondary" style="margin-right:5px;"disabled>1. Create</button>
            <button type="button" class="btn btn-outline-secondary" style="margin-right:5px;"disabled>2. Preview</button>
            <button type="button" class="btn btn-outline-success" style="margin-right:5px;"disabled>3. Purchase</button>
        </div>
    </div>
    <hr>
    <form method="POST" action="{{route('job.purchased', Request::segment(4))}}" id="payment-form">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="card-element">
                        Enter your billing information — SECURE
                    </label>
                    <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-secondary" role="alert">
                    <h4>Your ad is $149 and will renew every 30 days, starting today.</h4>
                    <p>Your ad will be posted to the main page once you've successfully placed your order. We review job postings and reserve the right to remove ads at our discretion. We will refund your money if we remove your ad.</p>
                    <button  type="submit" class="btn btn-success btn-lg">Place your order</button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('foot_scripts')
    <script type="text/javascript">
        // Create a Stripe client.
        var stripe = Stripe('{{config('services.stripe.key')}}');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
@endsection
