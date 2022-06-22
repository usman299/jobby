@extends('layouts.front')
@section('content')

    <!-- Start emPageAbout -->
    <section class="emPageAbout padding-t-10">
        <div class="em__signTypeOne padding-30 bg-white">

            <div class="em__body px-0">
                <form method="POST" action="{{ route('subscription.checkout',['id'=>$sub->id]) }}" id="payment-form" class="paymentformsubmit" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="total" value="{{$total}}">

                    <div class="form-group input-lined">
                        <label for="price" class="margin-t-20" style="font-size: 15px;"> <strong>Prix</strong> <strong style="color: red;">: {{$total}} €</strong> </label>

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
                        <label for="description" class="margin-t-20" style="font-size: 15px;"> <strong>Card number</strong> <strong style="color: red;">*</strong></label>
                    </div>

                    <div class="form-group input-lined margin-t-20">
                        <input id="card-button" class="btn w-100 bg-primary  m-0 color-white h-55 d-flex align-items-center rounded-10 justify-content-center" value="Payer" type="submit" data-secret="{{ $intent }}">

                    </div>


                </form>
            </div>

        </div>
    </section>
    <!-- End. emPageAbout -->


@endsection
@section('script')

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripeKey = "{{ env('STRIPE_PUBLISHABLE_KEY') }}";
    </script>
    <script src="{{asset('js/stripe.js')}}"  loading="lazy" ></script>
    <script>
        $(".paymentformsubmit").submit(function(){
            $(this).find(':input[type=submit]').prop('disabled', true);
            $(this).find(':input[type=submit]').val("Chargement..");
        });
    </script>
@endsection
