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
        <form id="regForm" class="loginformsubmit" method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="em_titleSign" style="margin-bottom: 0px;">
                <h2>{{$subcategory->title}}</h2>
                <p>Informations sur le besoin</p>
            </div>
            @if($subcategory->id == 5 || $subcategory->id == 8)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Sélectionner la surface </h4>
                        <div class="group">
                            <input type="range" class="form-control" value="24" min="250" max="5000" oninput="this.nextElementSibling.value = this.value">
                            <output>5000</output>m
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il apporter son matériel?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="yes" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="yes">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="no" value="Non" name="diploma" class="custom-control-input">
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
                                        <input type="radio" id="sds788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="diploma" class="custom-control-input">
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
                                        <input type="radio" id="54654" value="Juste cette fois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="diploma" class="custom-control-input">
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
                            <input type="range" class="form-control" value="24" min="10" max="100" oninput="this.nextElementSibling.value = this.value">
                            <output>10  </output>m
                        </div>
                        <hr>
                        <div>
                            <h4>Choisissez hauteur de la haie</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="yes" value="Petite" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="yes">
                                            Petite </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="no" value="Moyenne" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="no">
                                            Moyenne
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="845456" value="Grande" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="845456">
                                            Grande
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="065" value="Très grande" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="065">
                                            Très grande
                                        </label>
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
                                        <input type="radio" id="sds788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="diploma" class="custom-control-input">
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
                                        <input type="radio" id="rere7788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="rere7788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="7f787" value="Non" name="diploma" class="custom-control-input">
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
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                                        <input type="radio" id="sds788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="diploma" class="custom-control-input">
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
                                        <input type="radio" id="rere7788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="rere7788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="7f787" value="Non" name="diploma" class="custom-control-input">
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
                            <input type="range" class="form-control" value="24" min="250" max="5000" oninput="this.nextElementSibling.value = this.value">
                            <output>5000</output>m
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il évacuer les déchets hors du domicile?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="diploma" class="custom-control-input">
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
                                        <input type="radio" id="54654" value="Juste cette fois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="diploma" class="custom-control-input">
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
                                        <input type="radio" id="54654" value="Juste cette fois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 13 || $subcategory->id == 18 || $subcategory->id == 28 || $subcategory->id == 36 || $subcategory->id == 45)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div class="form-group" style="text-align: left!important;">
                            <label>Description </label>
                            <div class="input_group">
                                <textarea name="" placeholder="Description" class="form-control" id="" cols="30" rows="5"></textarea>
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
                                <input type="text" class="form-control" placeholder="Adresse de prise en charge">
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Adresse de destination  </label>
                            <div class="input_group">
                                <input type="text" class="form-control" placeholder="Adresse de destination ">
                            </div>
                        </div>
                        <hr>
                        <h4>Sélectionner la surface </h4>
                        <div class="group">
                            <input type="range" class="form-control" value="500" min="250" max="5000" oninput="this.nextElementSibling.value = this.value">
                            <output>500</output>m
                        </div>
                        <hr>
                        <div>
                            <h4>Le jobber doit-il venir avec son propre camion?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="diploma" class="custom-control-input">
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
                                <input type="text" class="form-control" placeholder="Adresse de prise en charge">
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Adresse de destination  </label>
                            <div class="input_group">
                                <input type="text" class="form-control" placeholder="Adresse de destination ">
                            </div>
                        </div>
                        <hr>
                        <h4>Nombre et type </h4>
                        <p>Petites </p>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                                        <input type="radio" id="sds788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="diploma" class="custom-control-input">
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
                                        <input type="radio" id="sds788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="diploma" class="custom-control-input">
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
                                <input type="text" class="form-control" placeholder="Adresse de prise en charge">
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Adresse de destination  </label>
                            <div class="input_group">
                                <input type="text" class="form-control" placeholder="Adresse de destination ">
                            </div>
                        </div>
                        <div>
                            <h4>Faut-il monter les meubles?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="diploma" class="custom-control-input">
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
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                                <input type="text" class="form-control" placeholder="Adresse de prise en charge">
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Adresse de destination  </label>
                            <div class="input_group">
                                <input type="text" class="form-control" placeholder="Adresse de destination ">
                            </div>
                        </div>
                        <div>
                            <h4>Faut-il installer l’électroménager?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="diploma" class="custom-control-input">
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
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                                <input type="text" class="form-control" placeholder="Adresse de prise en charge">
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Adresse de destination  </label>
                            <div class="input_group">
                                <input type="text" class="form-control" placeholder="Adresse de destination ">
                            </div>
                        </div>
                        <div>
                            <h4>Produits frais et surgelés?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="OUI" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Non" name="diploma" class="custom-control-input">
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
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                            <input type="range" class="form-control" value="100" min="100" max="5000" oninput="this.nextElementSibling.value = this.value">
                            <output>100  </output>m
                        </div>
                        <hr>
                        <div>
                            <h4>Besoins supplémentaire</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="Nettoyage de l’électroménager" name="service1" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            Nettoyage de l’électroménager</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Nettoyage des fenêtres" name="service2" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Nettoyage des fenêtres
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="32145fg6" value="Repassage" name="service3" class="custom-control-input">
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
                                        <input type="radio" id="54654" value="Juste cette fois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="diploma" class="custom-control-input">
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
                                        <input type="radio" id="sds788" value="10 à 19" name="clothes" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            10 à 19 </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="20 à 29" name="clothes" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            20 à 29
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="32145fg6" value="30 à 39" name="clothes" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="32145fg6">
                                            30 à 39
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="32145fgd6" value="40 à 50" name="clothes" class="custom-control-input">
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
                                        <input type="radio" id="54654" value="Juste cette fois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="diploma" class="custom-control-input">
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
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sds788" value="Citadine" name="clothes" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sds788">
                                            Citadine </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="321456" value="Berline" name="clothes" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="321456">
                                            Berline
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="32145fg6" value="SUV" name="clothes" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="32145fg6">
                                            SUV
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
                                        <input type="radio" id="54654" value="Juste cette fois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="diploma" class="custom-control-input">
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
                            <input type="range" class="form-control" value="24" min="250" max="5000" oninput="this.nextElementSibling.value = this.value">
                            <output>5000</output>m
                        </div>
                        <hr>
                        <div>
                            <h4>A quelle fréquence souhaitez-vous que ce job soit effectué?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Juste cette fois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="diploma" class="custom-control-input">
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
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                                        <input type="radio" id="54654" value="Juste cette fois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="diploma" class="custom-control-input">
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
                            <h4>Fille ou garçon</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Fille" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Fille</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="Garçon" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            Garçon
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>Date de naissance</h4>
                        </div>
                        <div class="form-group">
                            <div class="form-group" style="text-align: left!important;">
                                <label>Date de naissance </label>
                                <div class="input_group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <h4>Nombre de enfant</h4>
                        <div class="input_group">
                            <div class="item-link hoverNone">
                                <div class="group">
                                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                                            <i class="tio-remove"></i>
                                        </a>
                                        <input type="text" class="form-control input_no color-secondary" value="3">
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
                                        <input type="radio" id="fdfdf4654" value="Juste cette fois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="fdfdf4654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="dfdf788" value="2 fois par mois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="dfdf788">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($subcategory->id == 30 || $subcategory->id == 31 || $subcategory->id == 32)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <div>
                            <h4>Type de garde:</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="54654" value="Chez le jobber" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Chez le jobber</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="Chez le maître" name="diploma" class="custom-control-input">
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
                                        <input type="text" class="form-control input_no color-secondary" value="3">
                                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                                            <i class="tio-add color-white"></i>
                                        </a>
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
                                        <input type="radio" id="54654d" value="Libérer de l’espace disque" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            Libérer de l’espace disque</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="Ordinateur lent" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654f">
                                            ordinateur lent
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654r" value="Détection et éradication de virus" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654r">
                                            Détection et éradication de virus
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654a" value="Checkup complet" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654a">
                                            Checkup complet
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654c" value="Panne" name="diploma" class="custom-control-input">
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
                                        <input type="radio" id="54654b" value="Installation de mise à jour" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654b">
                                            Installation de mise à jour</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654gg" value="Sauvegarde de données" name="diploma" class="custom-control-input">
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
                                        <input type="radio" id="54654d" value="1 heure" name="hour" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            1 heure</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="2 heure" name="hour" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654f">
                                            2 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654r" value="3 heure" name="hour" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654r">
                                            3 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654a" value="4 heure" name="hour" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654a">
                                            4 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="ghgh" value="5 heure" name="hour" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="ghgh">
                                            5 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="sd7878" value="6 heure" name="hour" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="sd7878">
                                            6 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="dfd88778" value="7 heure" name="hour" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="dfd88778">
                                            7 heure
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="vgfg9898" value="8 heure" name="hour" class="custom-control-input">
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
                                        <input type="radio" id="54654d" value="Filaire " name="hour" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            Filaire </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="Réseau" name="hour" class="custom-control-input">
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
                                        <input type="radio" id="54654d" value="Enseignement supérieur" name="education" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654d">
                                            Enseignement supérieur  </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654f" value="Lycée" name="education" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654f">
                                            Lycée
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71fg654f" value="Collège" name="education" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71fg654f">
                                            Collège
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="7er1654f" value="Primaire" name="education" class="custom-control-input">
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
                                        <input type="radio" id="546ty54d" value="En ligne" name="education" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="546ty54d">
                                            En ligne  </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="7165fg4f" value="À domicile" name="education" class="custom-control-input">
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
                                        <input type="radio" id="54654" value="Juste cette fois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="54654">
                                            Juste cette fois</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="71654" value="2 fois par mois" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="71654">
                                            2 fois par mois
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222" value="1 fois par semaine " name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222">
                                            1 fois par semaine
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="12222454" value="plusieurs fois par semaine" name="diploma" class="custom-control-input">
                                        <label class="custom-control-label padding-l-10" for="12222454">
                                            plusieurs fois par semaine
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="question_step" style="text-align:center;margin-top:40px; display: none">
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
@endsection
