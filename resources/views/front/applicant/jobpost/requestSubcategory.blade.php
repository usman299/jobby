@extends('layouts.front')
@section('style')
    <style>
        .em__pkLink .nav__list.with_border li {
            margin-bottom: 0;
            width: 50%;
            float: left;
        }
        #content{
            background-color: white;
        }
    </style>
@endsection
@section('content')
    <section class="bg-white em__signTypeOne typeTwo np__account padding-t-70">
        <form id="regForm" class="loginformsubmit" method="POST" action="{{route('job.subcategory.submit', ['id' => $subcategory->id])}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="status" value="{{$status->id}}">
            <div class="em_titleSign" style="margin-bottom: 0px;">
                <h2>{{$subcategory->title}}</h2>
                <p>Informations sur le besoin</p>
            </div>

            @if($subcategory->id == 5 || $subcategory->id == 8)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Sélectionner la surface </h4>
                        <div class="group">
                            <input type="range" name="surface" class="form-control" value="10" min="10" max="5000" oninput="this.nextElementSibling.value = this.value">
                            <output>10</output>m<sup><b>2</b></sup>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il apporter son matériel?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="yes" value="OUI" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="yes">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="no" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="no">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il évacuer les déchets hors du domicile?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Juste cette fois" name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 6)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Sélectionner le nombre de mètre linéaire </h4>
                        <div class="group">
                            <input type="range" name="surface" class="form-control" value="24" min="10" max="100" oninput="this.nextElementSibling.value = this.value">
                            <output>10  </output>m<sup><b>2</b></sup>
                        </div>
                        <hr>
                        <div>
                            <h4>Choisissez hauteur de la haie</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="yes" value="Petite" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="yes">
                                            Petite </label>
                                        <p>(Entre 1 et 1,5m)</p>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="no" value="Moyenne" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="no">
                                            Moyenne
                                        </label>
                                        <p>(Entre 1,5 et 2m)</p>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="845456" value="Grande" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="845456">
                                            Grande
                                        </label>
                                        <p>(Entre 2 et 3m)</p>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="065" value="Très grande" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="065">
                                            Très grande
                                        </label>
                                        <p>(plus de 3m)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il apporter son matériel?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il évacuer les déchets hors du domicile?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="rere7788" value="OUI" name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="rere7788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="7f787" value="Non" name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="7f787">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 7)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Nombre d’arbres à couper</h4>
                        <hr>
                        <p>Petites </p>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="small" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p>Moyennes </p>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="medium" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p>Grandes </p>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="large" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group allign-left padding-20">
                        <hr>
                        <div>
                            <h4>Le jobber doit-il apporter son matériel?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il évacuer les déchets hors du domicile?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="rere7788" value="OUI" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="rere7788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="7f787" value="Non" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="7f787">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 9)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Sélectionner la surface </h4>
                        <div class="group">
                            <input type="range" class="form-control" name="surface" value="24" min="250" max="5000" oninput="this.nextElementSibling.value = this.value">
                            <output>5000</output>m<sup><b>2</b></sup>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il évacuer les déchets hors du domicile?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Juste cette fois" name="quetion1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="quetion1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="quetion1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="quetion1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 10 || $subcategory->id == 11 || $subcategory->id == 12 || $subcategory->id == 37 || $subcategory->id == 38 || $subcategory->id == 39 || $subcategory->id == 40 || $subcategory->id == 41 || $subcategory->id == 42 || $subcategory->id == 43 || $subcategory->id == 44)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Juste cette fois" name="quetion1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="quetion1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="quetion1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="quetion1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @elseif($subcategory->id == 14)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div class="form-group allign-left">
                            <label>Adresse de prise en charge </label>
                            <div class="input_group">
                                <input type="text" name="pickup_address" class="form-control" placeholder="Adresse de prise en charge">
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Adresse de destination  </label>
                            <div class="input_group">
                                <input type="text" name="destination_address" class="form-control" placeholder="Adresse de destination ">
                            </div>
                        </div>
                        <hr>
                        <h4>Sélectionner la surface </h4>
                        <div class="group">
                            <input type="range"  name="surface" class="form-control" value="500" min="250" max="500" oninput="this.nextElementSibling.value = this.value">
                            <output>10</output>m<sup><b>2</b></sup>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il venir avec son propre camion?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 15 || $subcategory->id == 16)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div class="form-group allign-left">
                            <label>Adresse de prise en charge </label>
                            <div class="input_group">
                                <input name="pickup_address" type="text" class="form-control" placeholder="Adresse de prise en charge">
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Adresse de destination  </label>
                            <div class="input_group">
                                <input type="text" name="destination_address" class="form-control" placeholder="Adresse de destination ">
                            </div>
                        </div>
                        <hr>
                        <h4>Nombre </h4>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="count" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il venir avec son propre camion?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 17)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Le jobber doit-il venir avec son propre camion?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 19 || $subcategory->id == 21)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div class="form-group allign-left">
                            <label>Adresse de prise en charge </label>
                            <div class="input_group">
                                <input type="text" name="pickup_address" class="form-control" placeholder="Adresse de prise en charge">
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Adresse de destination  </label>
                            <div class="input_group">
                                <input type="text" name="destination_address" class="form-control" placeholder="Adresse de destination ">
                            </div>
                        </div>
                        <div>
                            <h4>Faut-il monter les meubles?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4>Nombre d’étage à l’arrivé</h4>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="count" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 20)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div class="form-group allign-left">
                            <label>Adresse de prise en charge </label>
                            <div class="input_group">
                                <input name="pickup_address" type="text" class="form-control" placeholder="Adresse de prise en charge">
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Adresse de destination  </label>
                            <div class="input_group">
                                <input type="text" name="destination_address" class="form-control" placeholder="Adresse de destination ">
                            </div>
                        </div>
                        <div>
                            <h4>Faut-il installer l’électroménager?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4>Nombre d’étage à l’arrivé</h4>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text"  name="count" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 22)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div class="form-group allign-left">
                            <label>Adresse de prise en charge </label>
                            <div class="input_group">
                                <input type="text" name="pickup_address" class="form-control" placeholder="Adresse de prise en charge">
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Adresse de destination  </label>
                            <div class="input_group">
                                <input type="text" name="destination_address" class="form-control" placeholder="Adresse de destination ">
                            </div>
                        </div>
                        <div>
                            <h4>Produits frais et surgelés?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4>Nombre d’étage à l’arrivé</h4>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="count" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 23)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Sélectionner la surface </h4>
                        <div class="group">
                            <input name="surface" type="range" class="form-control" value="100" min="1" max="500" oninput="this.nextElementSibling.value = this.value">
                            <output>1  </output>m<sup><b>2</b></sup>
                        </div>
                        <hr>
                        <div>
                            <h4>Besoins supplémentaires</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="Nettoyage de l’électroménager" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            Nettoyage de l’électroménager</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="Nettoyage des fenêtres" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Nettoyage des fenêtres
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="Repassage" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="32145fg6">
                                            Repassage
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Juste cette fois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 24)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Nombre de vêtements: </h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="10 à 19" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            10 à 19 </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="20 à 29" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            20 à 29
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="32145fg6" value="30 à 39" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="32145fg6">
                                            30 à 39
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="32145fgd6" value="40 à 50" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="32145fgd6">
                                            40 à 50
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Juste cette fois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 25)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Nombre et type de véhicule : </h4>
                        </div>
                        <p>Citadine </p>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="small" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p>Berline </p>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="medium" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <p>SUV </p>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="large" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Juste cette fois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 26)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Sélectionner la surface </h4>
                        <div class="group">
                            <input type="range" name="surface" class="form-control" value="24" min="10" max="50" oninput="this.nextElementSibling.value = this.value">
                            <output>10</output>m<sup><b>2</b></sup>
                        </div>
                        <hr>
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Juste cette fois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 27)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Nombre de fenêtre</h4>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="count" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Juste cette fois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 29)
                <div class="tab">
                    <div class="form-group allign-left padding-20">

                        <div>
                            <h5>Qui souhaitez-vous farie garder?</h5>
                        </div>
                        <div class="form-group" style="margin-top: 20px;">
                            <a href="" data-toggle="modal"
                               data-target="#addnew" style=" height: 40px!important;" class="btn justify-content-center bg-primary rounded-10 btn__default full-width">
                                <span class="color-white">
                            <i class="tio-add"></i>Ajouter un enfant
                                </span>
                            </a>
                            <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="addnew"
                                 tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable height-full">
                                    <div class="modal-content rounded-0">
                                        <div class="modal-header padding-l-20 padding-r-20 justify-content-center">
                                            <div class="itemProduct_sm">
                                                <h1 class="size-18 weight-600 color-secondary m-0">Qui souhaitez-vous farie garder?</h1>
                                            </div>
                                            <div class="absolute right-0 padding-r-20">
                                                <button type="button" style="border-radius: 6px;" class="btn btn-primary btn-sm " data-dismiss="modal" onclick="counter()" aria-label="Close">
                                                    Fait
                                                </button>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="padding-t-30">
                                                <div class="em__pkLink bg-white border-t-0" id="addmorecolor">


                                                     <div class="roww">
                                                    <div class="" >
                                                        <h4 style="display: inline-block;">Fille ou garçon</h4>
                                                        <a style="float: right;" onclick="addmorecolor()" class="btn btn-primary btn-sm" ><i class="tio-add"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                                        <a style="float: right;" onclick="removecolor()" class="btn btn-danger btn-sm" ><i class="tio-clear"></i></a>

                                                    </div>
                                                    <div class="form-group">
                                                            <div class="bg-white ">
                                                                <div class="custom-control custom-radio margin-b-10">
                                                                    <select style="margin-top: 10px;" name="child_question[]" class="form-control custom-select">
                                                                        <option value="">Select Fille ou garçon</option>
                                                                        <option value="Fille">Fille</option>
                                                                        <option value="Garçon">Garçon</option>

                                                                    </select>
                                                                </div>


                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h4>Date de naissance</h4>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-group" style="text-align: left!important;">
                                                            <label>Date de naissance </label>
                                                            <input type="hidden" id="child2" name="count" value="">
                                                            <div class="input_group">
{{--                                                                id="datepicker"--}}
                                                                <input  name="child_dob[]"  type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="input_group " id="parent"style="display: none">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <h4 id="child">Nombre de enfant : 6</h4>
                                </div>
                            </div>
                        </div>
{{--                        <h4>Nombre de enfant</h4>--}}
{{--                        <div class="input_group">--}}
{{--                            <div class="item-link hoverNone">--}}
{{--                                <div class="group">--}}
{{--                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">--}}
{{--                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">--}}
{{--                                            <i class="tio-remove"></i>--}}
{{--                                        </a>--}}
{{--                                        <input type="text" name="count" class="form-control input_no color-secondary" value="1">--}}
{{--                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">--}}
{{--                                            <i class="tio-add color-white"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <hr>
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="fdfdf4654" value="Juste cette fois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="fdfdf4654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="dfdf788" value="2 fois par mois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="dfdf788">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 30 || $subcategory->id == 31)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Type de garde:</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Chez le jobber" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Chez le jobber</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="Chez le maître" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            Chez le maître
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Nombre de chien</h4>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="count" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 32)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Type de garde:</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Chez le jobber" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Chez le jobber</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="Chez le maître" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            Chez le maître
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 33)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Type de nettoyage</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654d" value="Libérer de l’espace disque" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            Libérer de l’espace disque</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="Ordinateur lent" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654f">
                                            ordinateur lent
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654r" value="Détection et éradication de virus" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654r">
                                            Détection et éradication de virus
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654a" value="Checkup complet" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654a">
                                            Checkup complet
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654c" value="Panne" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654c">
                                            Panne
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>Besoins complémentaires:</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654b" value="Installation de mise à jour" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654b">
                                            Installation de mise à jour</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654gg" value="Sauvegarde de données" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654gg">
                                            Sauvegarde de données
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 34)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Sélectionner la durée du cours</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654d" value="1 heure" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            1 heure</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="2 heure" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654f">
                                            2 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654r" value="3 heure" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654r">
                                            3 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654a" value="4 heure" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654a">
                                            4 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="ghgh" value="5 heure" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="ghgh">
                                            5 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sd7878" value="6 heure" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sd7878">
                                            6 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="dfd88778" value="7 heure" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="dfd88778">
                                            7 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="vgfg9898" value="8 heure" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="vgfg9898">
                                            8 heure
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 35)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Type d’installation</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654d" value="Filaire " name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            Filaire </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="Réseau" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654f">
                                            Réseau
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 46 || $subcategory->id == 47 || $subcategory->id == 48 || $subcategory->id == 49 || $subcategory->id == 50 || $subcategory->id == 51 || $subcategory->id == 52 || $subcategory->id == 53 || $subcategory->id == 54 || $subcategory->id == 55 || $subcategory->id == 56 || $subcategory->id == 57 || $subcategory->id == 58 || $subcategory->id == 59 || $subcategory->id == 60)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Quel est le niveau d’enseignement demandé pour le cours? </h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654d" value="Enseignement supérieur" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            Enseignement supérieur  </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="Lycée" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654f">
                                            Lycée
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71fg654f" value="Collège" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71fg654f">
                                            Collège
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="7er1654f" value="Primaire" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="7er1654f">
                                            Primaire
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>Quel format de cours souhaitez-vous? </h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="546ty54d" value="En ligne" name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="546ty54d">
                                            En ligne  </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="7165fg4f" value="À domicile" name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="7165fg4f">
                                            À domicile
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Juste cette fois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 61)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Retouche des photos?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654d" value="Retouche des photos" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            Retouche des photos? </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="Remise sur clé usb" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654f">
                                            Remise sur clé usb?
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 62)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Nombre d’invités</h4>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="count" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Mode de restauration</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654d" value="Repas assis" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            Repas assis </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="Buffet Cocktail" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654f">
                                            Buffet Cocktail
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="7165rt4f" value="Plateau repas" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="7165rt4f">
                                            Plateau repas
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il fournir la vaisselle?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654ddf" value="Oui" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654ddf">
                                            Oui </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716df54f" value="Non" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716df54f">
                                           Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit fournir les ustensiles?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54d654ddf" value="Oui" name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54d654ddf">
                                            Oui </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716dfdf54f" value="Non" name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716dfdf54f">
                                           Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il vider les poubelles?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="4ddf" value="Oui" name="question3" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="4ddf">
                                            Oui </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="fdf54f" value="Non" name="question3" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="fdf54f">
                                           Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 63)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Nombre d’invités</h4>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="count" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il fournir la vaisselle?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654ddf" value="Oui" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654ddf">
                                            Oui </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716df54f" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716df54f">
                                           Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit fournir les ustensiles?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54d654ddf" value="Oui" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54d654ddf">
                                            Oui </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716dfdf54f" value="Non" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716dfdf54f">
                                           Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il vider les poubelles?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="4ddf" value="Oui" name="question2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="4ddf">
                                            Oui </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="fdf54f" value="Non" name="question3" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="fdf54f">
                                           Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 64)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Nombre d’invités</h4>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" name="count" class="form-control input_no color-secondary" value="1">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Mode de restauration</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654d" value="Repas assis" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            Repas assis </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="Buffet Cocktail" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654f">
                                            Buffet Cocktail
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="7165rt4f" value="Plateau repas" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="7165rt4f">
                                            Plateau repas
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il vider les poubelles?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="4ddf" value="Oui" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="4ddf">
                                            Oui </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="fdf54f" value="Non" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="fdf54f">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 65)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Le jobber doit-il fournir la table de mixage?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654ddf" value="Oui" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654ddf">
                                            Oui </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716df54f" value="Non" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716df54f">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit fournir la sono?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54d654ddf" value="Oui" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54d654ddf">
                                            Oui </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716dfdf54f" value="Non" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716dfdf54f">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 67)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Nombre de flyers</h4>
                        <div class="group">
                            <input type="range" name="surface" class="form-control" value="24" min="100" max="5000" oninput="this.nextElementSibling.value = this.value">
                            <output>100</output>m<sup><b>2</b></sup>
                        </div>
                        <hr>
                        <div>
                            <h4>Type de distribution</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654ddf" value="Street marketing" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654ddf">
                                            Street marketing  </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716df54f" value="Boite aux lettres" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716df54f">
                                            Boite aux lettres
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716df5df4f" value="Pare-brise" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716df5df4f">
                                            Pare-brise
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 70)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Type d’entretien</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654ddf" value="Vidange" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654ddf">
                                            Vidange   </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716df54f" value="Pneus" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716df54f">
                                            Pneus
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="fddfd" value="Freinage" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="fddfd">
                                            Freinage
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="tyty" value="Essuie-glaces" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="tyty">
                                            Essuie-glaces
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="df4f" value="Bougies" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="df4f">
                                            Bougies
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71f4f" value="Batterie" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71f4f">
                                            Batterie
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716f4f" value="Climatisation" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716f4f">
                                            Climatisation
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 71)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Type de réparation:</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654ddf" value="Pièce moteur" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654ddf">
                                            Pièce moteur   </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716df54f" value="Pièce mécanique" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716df54f">
                                            Pièce mécanique
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="fddfd" value="Carrosserie " name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="fddfd">
                                            Carrosserie
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="tyty" value="Rétroviseur" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="tyty">
                                            Rétroviseur
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="df4f" value="Coffre" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="df4f">
                                            Coffre
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71f4f" value="Portière" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71f4f">
                                            Portière
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716wwf4f" value="Vitre" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716wwf4f">
                                            Vitre
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716ddf4f" value="Éclairage" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716ddf4f">
                                            Éclairage
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716fdf4f" value="Accessoires" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716fdf4f">
                                            Accessoires
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 72)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Type d’élément</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654ddf" value="Électroménager" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654ddf">
                                            Électroménager    </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716df54f" value="Véhicule" name="question" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716df54f">
                                            Véhicule
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>Matériel Type de réparation</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54ddf" value="Mécanique" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54ddf">
                                            Mécanique     </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="716d4f" value="Électrique" name="question1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="716d4f">
                                            Électrique
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="tab">
                <div class="form-group allign-left padding-20">
                    <div class="form-group" style="text-align: left!important;">
                        <label>Description </label>
                        <div class="input_group">
                            <textarea name="description" placeholder="Description" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
           @include('include.tabs')
            <div class="question_step" style="text-align:center;margin-top:40px; display: none">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>

            <div class="buttons__footer text-center">
                <div class="bg-white d-flex">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)"  class="btn bg-green rounded-10 btn__default mr-3">
                        <span class="color-white">Retourner</span>
                    </button>
                    <button type="button" id="nextBtn" style="color: white;margin-bottom: 30px;" onclick="nextPrev(1)" class="btn bg-blue rounded-10 btn__default">
                        <span class="color-white">Suivante</span>
                    </button>
                </div>
            </div>
        </form>

    </section>
@endsection
@section('script')
    <script>
        setInterval(function(){
            var durationplus = $(".durationplus").val();
            var rateperhour = $(".rateperhour").val();
            var budget = (parseFloat(durationplus) * parseFloat(rateperhour));
            var percentage = budget * (10/100);
            $(".estimate_budget").html(budget + "€");
            $(".total").html(budget + parseFloat(percentage.toFixed(2)) + "€");
            $(".percentage").html(percentage.toFixed(2)+ "€");
            $(".estimate_budgetval").val(budget);
        }, 200);
        function showpopuploaction(){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }
        function showPosition(position) {
            $(".lat").val(position.coords.latitude);
            $(".long").val(position.coords.longitude);
        }
        showpopuploaction();
    </script>

    <script>

        function addmorecolor(){
            let v1 = Math.random() *400;
            let v2 = Math.random() * 500;
            let value1 = 'radio'+v1;
            let value2 = 'radio'+v2;

            $('#addmorecolor').append(' <div class="roww"><div >\n' +
                '                                                <h4 style="display: inline-block;">Fille ou garçon</h4>\n' +
                '                                                    <a style="float: right;" onclick="addmorecolor()" class="btn btn-primary btn-sm" ><i class="tio-add"></i></a>' +
                ' <a style="float: right;" onclick="removecolor()" class="btn btn-danger btn-sm" ><i class="tio-clear"></i></a></div>\n' +
                '                                                <div class="form-group"> <div class="bg-white "><div class="custom-control custom-radio margin-b-10"><select style="margin-top: 10px;" name="child_question[]" class="form-control custom-select"></div>\n' +
                '                                              <option value="">Select Fille ou garçon</option>  <option value="Fille">Fille</option> <option value="Garçon">Garçon</option> \n' +
                '                                                  </select>   \n' +
                '                                                  </div></div></div><h4>Date de naissance</h4><div>\n' +
                '                                             <div class="form-group"><div class="form-group" style="text-align: left!important;"> <label>Date de naissance </label><div class="input_group"><input name="child_dob[]"  type="date" class="form-control"></div></div></div></div>');
        }
        function removecolor(){
            if($('#addmorecolor .roww').length>1) {//remove all except one
                $('#addmorecolor .roww:last').remove();
            }

        }
        function counter(){
            var count = $('#addmorecolor .roww').length;
            $('#parent').show();
            $('#child').html('<h5>Nombre de enfant: ' +count + '</h5>');
            $('#child2').val(count);
        }
    </script>

@endsection
