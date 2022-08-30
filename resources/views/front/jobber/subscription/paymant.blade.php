@extends('layouts.front')
@section('content')

    <!-- Start emPageAbout -->
    <section class="emPageAbout padding-t-10">
        <div class="em__signTypeOne padding-30 bg-white">
            <label for="description" class="margin-t-20" style="font-size: 15px;"> <strong>Assistant functionality</strong></label>
             <pre ><strong>
Intelligent agenda with automatic addition of
jobs and manu  al additions of jobs or off
platform events

Access to job details from the calendar Alerts
/Notification for appointment reminders 24
hours and 2 hours before Appointment reminders

Send confirmation request to requester
           </strong> </pre>

            <div class="em__body px-0">
                <form method="POST" action="{{ route('subscription.checkout',['id'=>$sub->id]) }}" id="payment-form" data-secret="{{$intent->client_secret}}" class="paymentformsubmit" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="total" value="{{$total}}">

                    <div class="input_group">
                        <label for="description" class="margin-t-20" style="font-size: 15px;"> <strong>Abonnement</strong> <strong style="color: red;">*</strong></label>
                        <div class="bg-white ">
                            <div class="custom-control custom-radio margin-b-10">
                                <input type="radio" {{ $total == 9.99 ? 'checked' : 'disabled' }} id="nationality1" value="price_1LFAdxD7gIuku9edjs6ddJwp" name="plan" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="nationality1">
                                    9.99€ /mois</label>
                            </div>
                            <div class="custom-control custom-radio margin-b-10">
                                <input {{ $total == 29.99 ? 'checked' : 'disabled' }} type="radio" id="nationality2" value="price_1LGdjeD7gIuku9edq0zBSd6Y"name="plan" class="custom-control-input">
                                <label class="custom-control-label padding-l-10" for="nationality2">
                                    29.99€ /mois
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="input_group">
                        <label for="card-holder-name" class="margin-t-20" style="font-size: 15px;"> <strong>Nom du titulaire</strong> <strong style="color: red;">*</strong></label>
                        <input type="text" id="card-holder-name" name="card_holder_name" class="form-control"  placeholder="Nom du titulaire">

                    </div>

                    <div class="form-group input-lined">
                        <textarea class="form-control"  name="message" rows="4" id="description" placeholder="Entrez la  Description"></textarea>
                        <label for="description" class="margin-t-20" style="font-size: 15px;"> <strong>La Description</strong> <strong style="color: red;">*</strong></label>
                    </div>
                    <input type="hidden" id="pay" value="complete">

                    <div class="form-group input-lined">
                        <div class="form-group stripe-payment-method-div">
                            <div id="card-element"></div>
                            <div id="card-errors" class="text-danger" role="alert"></div>
                        </div>
                        <label for="description" class="margin-t-20" style="font-size: 15px;"> <strong>Card number</strong> <strong style="color: red;">*</strong></label><br>
                    </div>

                    <div class="form-group input-lined margin-t-20">
                        <button id="card-button" class="btn w-100 bg-primary  m-0 color-white h-55 d-flex align-items-center rounded-10 justify-content-center">Payer</button>

                    </div>


                </form>
            </div>

        </div>
    </section>
    <!-- End. emPageAbout -->


@endsection
@section('script')
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script>
        // Create a Stripe client.
        var stripe =Stripe ('pk_test_51IZ8jfD7gIuku9edlByPjJwtRcWSL1qCI8ehxGa5xSz8SPZl6khh3Kll9fJVzyP2a6k9nK7xLtvOtI8ujl9B5MQC00eyBZQwgu');
        // Create an instance of Elements.
        var elements = stripe.elements();
        // Custom styling can be passed to options when creating an Element // (Note that this demo uses a wider set of styles than the guide below.)
        var style= {
            base: {
                color: "#32325d",
                fontFamily: "'Helvetica Neue', Helvetica, sans-serif",
                fontSmoothing: "antialiased",
                fontSize: "16px",
                '::placeholder': {
                    color: "#aab7c4",
                }
            },
            invalid: {
                color: "#fa755a",
                iconColor: '#fa755a',
            }
        };

        // Create an instance of the card Element.

        var card = elements.create("card", {
            style: style
        });
        // Add an instance of the card Element into the card-element <div

        card.mount('#card-element');
        // Handle real time validation errors from the card Element. var displayError document.getElementById("card-errors")
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');

            if(displayError) {
                displayError.textContent = event.error.message;
            }
            else{
                displayError.textContent ="";
            }

        });
        var form = document.getElementById('payment-form');

        var clientSecret = form.dataset.secret;
        const cardHolderName = document.getElementById('card-holder-name');
        form.addEventListener('submit', async function(event) {
            event.preventDefault();
            const {
                setupIntent,
                error,

            }= await  stripe.confirmCardSetup(

                clientSecret, {
                    payment_method: {
                        card: card,
                        billing_details: {
                            name: cardHolderName.value
                        }

                    }
                }
            );
            if (error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById("card-errors");
                errorElement.textContent = error.message;

            } else {
                // The card has been verified successfully...
                stripeTokenHandler (setupIntent.payment_method);
            }
        });

        function stripeTokenHandler(payment_method) {

            //Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById("payment-form");
            console.log(form);
            var hiddenInput = document.createElement('input');

            hiddenInput.setAttribute('type','hidden');
            hiddenInput.setAttribute('name', 'paymentMethodId');
            hiddenInput.setAttribute('value', payment_method)
            form.appendChild(hiddenInput);
            console.log(form.appendChild(hiddenInput));
            // Submit the form
            form.submit();
        }

    </script>

{{--    <script src="https://js.stripe.com/v3/"></script>--}}
{{--    <script>--}}
{{--        const stripeKey = "{{ env('STRIPE_PUBLISHABLE_KEY') }}";--}}
{{--    </script>--}}
{{--    <script src="{{asset('js/stripe.js')}}"  loading="lazy" ></script>--}}
{{--    <script>--}}
{{--        $(".paymentformsubmit").submit(function(){--}}
{{--            $(this).find(':input[type=submit]').prop('disabled', true);--}}
{{--            $(this).find(':input[type=submit]').val("Chargement..");--}}
{{--        });--}}
{{--    </script>--}}
@endsection
