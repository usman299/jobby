@extends('layouts.front')
@section('content')
    @if($user->euorpion)
        <section class="background_header bg-green" style="height: 40%">
            <div class="npPage_SuccessPkg">
                <div class="txt">
                    <div class="icon">
                        <i class="ri-check-fill"></i>
                    </div>
                    <h3>Vos documents sont soumis</h3>
                    <p>
                        Nous avons votre pièce d'identité. nous vérifierons et s'il y a des personnes non autorisées, nous désactiverons votre compte de façon permanente
                    </p>
                </div>
            </div>
        </section>
    @else
        <section class="bg-white em__signTypeOne typeTwo np__account padding-t-70">
            <form id="regForm" class="loginformsubmit" method="POST" action="{{route('identity.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="tab">
                    <div class="em_titleSign">
                        <h1>Etes-vous un citoyen de nationalite europeenne ?</h1>
                    </div>
                    <div class="em__body">
                        <div class="form-group" style="text-align: left!important;">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="nationality1" value="OUI" name="euorpion" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="nationality1">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="nationality2" value="NON" name="euorpion" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="nationality2">
                                            NON
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="em_titleSign">
                        <h1>Selectionnez un dype de document a envoyer</h1>
                    </div>
                    <div class="em__body">
                        <div class="form-group" style="text-align: left!important;">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="type1" value="Carte Vital" name="identity_type" class="custom-control-input carte">
                                        <label class="custom-control-label padding-l-10" for="type1">
                                            Carte Vital</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="type2" value="Certificat de securite social" name="identity_type" class="custom-control-input certificate">
                                        <label class="custom-control-label padding-l-10" for="type2">
                                            Certificat de securite social
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Ces documents sont nécessaires pour valider votre identité, votre âge, et votre éligibilité à travailler sur le territoire. Ils ne seront jamais rendus publics.
                        </p>
                    </div>
                </div>
                <div class="newtabs">

                </div>


                <div class="question_step" style="text-align:center;margin-top:40px; display: none">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

                <div class="buttons__footer text-center">
                    <div class="bg-white d-flex">
                        <a id="nextBtn" onclick="nextPrev(-1)" class="btn bg-green rounded-10 btn__default">
                            <div class="icon rounded-10">
                                <i class="tio-chevron_left"></i>
                            </div>
                            <span class="color-white">Retourner</span>
                        </a>
                        <a id="nextBtn" onclick="nextPrev(1)" class="btn bg-blue rounded-10 btn__default ml-3">
                            <span class="color-white">Suivante</span>
                            <div class="icon rounded-10">
                                <i class="tio-chevron_right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </form>

        </section>
    @endif
@endsection
@section('script')
    <script>
        $(".carte").click(function(){
            $(".newtabs").html('');
           $(".newtabs").append('<div class="tab"><div class="em_titleSign"><h1>Carte vitale</h1></div><div class="em__body"><div class="form-group" style="text-align: left!important;"><label>Carte vitale</label><div class="input_group"><input type="file" id="file" name="identity_document" class="form-control"></div></div><div class="form-group" style="text-align: left!important;"><label>Numéro de sécurité sociale</label><div class="input_group"><input type="text" id="file" name="security_no" class="form-control"></div></div><p>Votre numéro de sécurité sociale permet à vos clients de vous déclarer directement sur Yoojo. Il est confidentiel et sécurisé.</p></div></div>');
        });
        $(".certificate").click(function(){
            $(".newtabs").html('');
            $(".newtabs").append('<div class="tab"><div class="em_titleSign"><h1>Certificat de securite social</h1></div><div class="em__body"><div class="form-group" style="text-align: left!important;"><label>Certificat de securite social</label><div class="input_group"><input type="file" id="file" name="identity_document" class="form-control"></div></div><div class="form-group" style="text-align: left!important;"><label>Numéro de sécurité sociale</label><div class="input_group"><input type="text" id="file" name="security_no" class="form-control"></div></div><p>Votre numéro de sécurité sociale permet à vos clients de vous déclarer directement sur Yoojo. Il est confidentiel et sécurisé.</p></div></div>');
        });
    </script>
@endsection
