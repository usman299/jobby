@extends('layouts.front')
@section('content')
    <!-- End.main_haeder -->

    <section class="cover__imgMockup">

        <div class="image">
            <img src="{{asset($card->photo)}}" alt="">
        </div>
    </section>

    <!-- Start npAbout_sections -->
    <section class="npAbout_sections emBlock__border border-t-none">
        <div class="np__description">

            <h1>
               {{$card->title}}
            </h1>
            <p>Code du bon cadeau <b>{{$card->sku}}</b></p>
           <p>Prix : <b class="priceenter">50 </b><b>€</b> </p>
        </div>
    </section>
    <!-- End. npAbout_sections -->

    <!-- Start em__pkLink -->
    <form action="{{route('app.card.pay', ['id' => $card->id])}}" method="POST">
        @csrf
    <section class="em__pkLink">

        <div class="padding-20 d-flex align-items-center justify-content-between">
            <div>
                <p>Sélectionnez un montant :
                    <select name="price"  class="form-control custom-select" style="margin-left: 33px;width: 125px;" onchange="amount(this)" id="">
                        <option value="50">50€</option>
                        <option value="100">100€</option>
                        <option value="150">150€</option>
                        <option value="200">200€</option>
                        <option value="250">250€</option>
                        <option value="300">300€</option>
                    </select></p>
            </div>

        </div>


    </section>

    <section
        class="emSimple_main_footer margin-t-10 border-t border-t-solid border-snow bg-white d-flex justify-content-center padding-20">
        <div class="card-body">

            <div class="mb-3">
                <div class="title mb-2"><i class="lni lni-user"></i><span>Nom du destinataire</span></div>
                <input class="form-control" type="text" name="name" required>
            </div>
            <div class="mb-3">
                <div class="title mb-2"><i class="lni lni-envelope"></i><span>Destinataire E-mail </span></div>
                <input class="form-control" type="email" name="email"required >
            </div>
            <div class="mb-3">
                <div class="title mb-2"><i class="lni lni-user"></i><span>Votre nom </span></div>
                <input class="form-control" type="text" name="sendername" required>
            </div>

            <div class="mb-3">
                <div class="title mb-2"><i class="lni lni-phone"></i><span>Votre Telephone</span></div>
                <input class="form-control" name="senderphone" type="text" >
            </div>


{{--            <div class="mb-3">--}}
{{--                <div class="title mb-2"><i class="lni lni-user"></i><span>Message</span></div>--}}
{{--                <textarea class="form-control mb-3" id="message" name="message"cols="8" rows="10" placeholder="Écris quelque chose..."></textarea>--}}
{{--            </div>--}}
            <button class="btn btn-primary w-100" type="submit">Ajouter au panier
            </button>
        </div>
    </section>
    </form>
    <section
        class="emSimple_main_footer margin-t-10 border-t border-t-solid border-snow bg-white d-flex justify-content-center padding-20">
    </section>
    <!-- End. em__pkLink  -->
@endsection
<script>
    function amount(elem) {

        $('.priceenter').html(elem.value);
    }
</script>
