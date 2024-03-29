@extends('layouts.front')
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<style>
    .emCategorie_itemJobs {
        padding: 10px 20px 5px 20px;
    }
    .emCategorie_itemJobs .icon {

        background-color: white;
        width: 50px;
        height: 50px;
        margin-bottom: 15px;

    }


    .itemCountr_manual1.itemButtons.-lg .btn_counter1 {
        width: 50px!important;
        height: 33px!important;
    }
    .form-control {


        font-weight: 600!important;
    }
    .em_owl_swipe .em_item .em_cover_img::before {

        background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0));
    }

</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""/>
@section('content')

    <section class="bg-white emPage__detailsBlog">
        <div class="col-12" style="padding: 0px">
            <div id="map" style="width: 100%; height: 200px"></div>
            <br>
            @php $user = Auth::user(); @endphp
            <a href="https://www.google.es/maps/dir/'{{$jobrequest->lat}},{{$jobrequest->long}}'/'{{$user->latitude}},{{$user->longitude}}'/"><p style="text-align: center">Trouver l'itinéraire sur la carte >></p></a>
            <hr>
        </div>
        <div class="emheader_cover">
            <div class="title">
                <div class="row" style="padding-top: 20px">

                    <div class="col-8">
                        <h1 class="head_art">{{$jobrequest->title}}</h1>
                    </div>
                    <div class="col-4" style="text-align: right">
<!--                        <div class="icon">
                            <svg id="Iconly_Curved_Show" data-name="Iconly/Curved/Show" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                <g id="Show" transform="translate(1.719 2.969)">
                                    <path id="Stroke_1" data-name="Stroke 1" d="M3.952,1.976A1.976,1.976,0,1,1,1.976,0,1.977,1.977,0,0,1,3.952,1.976Z" transform="translate(3.806 2.588)" fill="none" stroke="#cbcdd8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    <path id="Stroke_3" data-name="Stroke 3" d="M0,4.564c0,2.05,2.589,4.564,5.782,4.564s5.782-2.512,5.782-4.564S8.976,0,5.782,0,0,2.514,0,4.564Z" fill="none" stroke="#cbcdd8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                </g>
                            </svg>
                            295
                        </div>-->
                        <h1 class="head_art">{{$jobrequest->estimate_budget}} €</h1>
                    </div>
                </div>
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <img src="{{asset($jobrequest->applicant->image)}}" alt="">
                        <h2>{{$jobrequest->applicant->firstName}} {{$jobrequest->applicant->lastName}}</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <div class="icon">
                                <svg id="Iconly_Curved_Time_Square" data-name="Iconly/Curved/Time Square" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                    <g id="Time_Square" data-name="Time Square" transform="translate(1.719 1.719)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M0,5.781c0,4.336,1.446,5.781,5.781,5.781s5.781-1.446,5.781-5.781S10.117,0,5.781,0,0,1.446,0,5.781Z" fill="none" stroke="#cbcdd8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_3" data-name="Stroke 3" d="M2.119,3.99,0,2.726V0" transform="translate(5.781 3.053)" fill="none" stroke="#cbcdd8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </div>
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($jobrequest->created_at);
                            ?>
                            <span>Poster {{$date->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Estimation du budget</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$jobrequest->estimate_budget}} €</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Date d’intervention</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$jobrequest->service_date->format('d-m-y')}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Région</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$jobrequest->country->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="item__auther emBlock__border">
                    <div class="item_person">
                        <h2>Appartient à</h2>
                    </div>
                    <div class="sideRight">
                        <div class="time">
                            <span>{{$jobrequest->category->title}} / {{$jobrequest->subcategory->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @if(Auth::user()->role == 1)
                <div class="title">
                    <div class="item__auther emBlock__border">
                        <div class="item_person">
                            <h2>Heure de début du service</h2>
                        </div>
                        <div class="sideRight">
                            <div class="time">
                                <span>{{$jobrequest->start_time}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <div class="item__auther emBlock__border">
                        <div class="item_person">
                            <h2>Durée</h2>
                        </div>
                        <div class="sideRight">
                            <div class="time">
                                <span>{{$jobrequest->duration}} h</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <div class="item__auther emBlock__border">
                        <div class="item_person">
                            <h2>Tarif par heure</h2>
                        </div>
                        <div class="sideRight">
                            <div class="time">
                                <span>{{$jobrequest->hours}} €</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h1 class="head_art">Détails du service</h1>
                </div>
                @if($jobrequest->childcategory)
                    @if($jobrequest->childcategory->id == 1)
                    <div class="title">
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Nombre et type de meubles</h2>
                            </div>
                        </div>
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Petit(s)</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->small}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Moyen(s)</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->medium}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Grand(s)</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->large}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Très grand(s)</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->verylarge}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Débarrasser les cartons</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->question}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($jobrequest->childcategory->id == 2)
                    <div class="title">
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Nombre de meubles à démonter</h2>
                            </div>
                        </div>
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Petit(s)</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->small}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Moyen(s)</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->medium}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Grand(s)</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->large}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Très grand(s)</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->verylarge}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Le jobber doit-il évacuer les déchets hors de votre domicile ?</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->question}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($jobrequest->childcategory->id == 3)
                    <div class="title">
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Tringles a rideaux a fixer</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->surface}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($jobrequest->childcategory->id == 4)
                    <div class="title">
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>Nombre detageres a fixer</h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->count}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($jobrequest->childcategory->id == 5 || $jobrequest->childcategory->id == 6 || $jobrequest->childcategory->id == 7 ||$jobrequest->childcategory->id == 8)
                    <div class="title">
                        <div class="item__auther emBlock__border">
                            <div class="item_person">
                                <h2>
                                    @if($jobrequest->childcategory->id == 5)
                                        Nombre de TV à fixer
                                    @elseif($jobrequest->childcategory->id == 6)
                                        Nombre de pare-douche
                                    @elseif($jobrequest->childcategory->id == 7)
                                        Nombre de tableau
                                    @elseif($jobrequest->childcategory->id == 8)
                                        Nombre de miroir
                                    @endif
                                </h2>
                            </div>
                            <div class="sideRight">
                                <div class="time">
                                    <span>{{$jobrequest->count}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($jobrequest->childcategory->id == 9)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de meubles</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Type de meubles</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->input}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 10)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Autres détails du service</h2>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                               <p>{{$jobrequest->description}}</p>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 11)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Surface</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->surface}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Type de clôture</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->input}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 12)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de hotte</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 13)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de prises électriques</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 14)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de prises électriques</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 15)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre d’ampoule</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 16)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de luminaire</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 17)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de cameras</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->small}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Box</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->medium}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Equipement</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->large}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 18)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de climatiseurs</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 19 || $jobrequest->childcategory->id == 23)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de pièces</h2>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Petit(s)</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->small}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Moyen(s)</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->medium}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Grand(s)</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->large}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 20)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Sélectionner la surface</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->surface}} m</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Besoin de poser des plinthes?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 21 || $jobrequest->childcategory->id == 22 || $jobrequest->childcategory->id == 24)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Sélectionner la surface</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->surface}} m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 25)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de fuites d’eau</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 26)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de chasse d’eau</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 27)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de robinet</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 28)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre d’évier</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 29)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de machine : Lave-linge / Lave vaisselle</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 30)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de chasse d’eau</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->childcategory->id == 31)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de bonde</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    @if($jobrequest->subcategory->id == 5 || $jobrequest->subcategory->id == 8)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Sélectionner la surface</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->surface}} m</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il apporter son matériel?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il évacuer les déchets hors du domicile?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>A quelle fréquence souhaitez-vous que ce job soit effectué?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question2}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 6)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Sélectionner le nombre de mètre linéaire</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->surface}} m</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Choisissez hauteur de la haie</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il apporter son matériel?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il évacuer les déchets hors du domicile?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question2}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 7)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre d’arbres à couper</h2>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Petites</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->small}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Moyennes</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->medium}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Grandes</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->large}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il apporter son matériel?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il évacuer les déchets hors du domicile?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 9)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Sélectionner la surface </h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->surface}} m</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il évacuer les déchets hors du domicile?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>A quelle fréquence souhaitez-vous que ce job soit effectué?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->quetion1}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 10 || $jobrequest->subcategory->id == 11 || $jobrequest->subcategory->id == 12 || $jobrequest->subcategory->id == 37 || $jobrequest->subcategory->id == 38 || $jobrequest->subcategory->id == 39 || $jobrequest->subcategory->id == 40 || $jobrequest->subcategory->id == 41 || $jobrequest->subcategory->id == 42 || $jobrequest->subcategory->id == 43 || $jobrequest->subcategory->id == 44)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>A quelle fréquence souhaitez-vous que ce job soit effectué?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->quetion1}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 13 || $jobrequest->subcategory->id == 18 || $jobrequest->subcategory->id == 28 || $jobrequest->subcategory->id == 36 || $jobrequest->subcategory->id == 45 || $jobrequest->subcategory->id == 66 || $jobrequest->subcategory->id == 68 || $jobrequest->subcategory->id == 69)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Autre Description du poste</h2>
                                </div>
                            </div>
                            <div class="item__auther    emBlock__border">
                               <p>{{$jobrequest->description}}</p>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 14)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Adresse de prise en charge</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->pickup_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Adresse de destination</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->destination_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Sélectionner la surface</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->surface}} m</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il venir avec son propre camion?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 15 || $jobrequest->subcategory->id == 16)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Adresse de prise en charge</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->pickup_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Adresse de destination</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->destination_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="title">
                                <div class="item__auther emBlock__border">
                                    <div class="item_person">
                                        <h2>Nombre</h2>
                                    </div>
                                    <div class="sideRight">
                                        <div class="time">
                                            <span>{{$jobrequest->count}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il venir avec son propre camion?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 17)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il venir avec son propre camion?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 19 || $jobrequest->subcategory->id == 21)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Adresse de prise en charge</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->pickup_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Adresse de destination</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->destination_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Faut-il monter les meubles?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre d’étage à l’arrivé</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 20)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Adresse de prise en charge</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->pickup_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Adresse de destination</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->destination_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Faut-il installer l’électroménager?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre d’étage à l’arrivé</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 22)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Adresse de prise en charge</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->pickup_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Adresse de destination</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->destination_address}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Produits frais et surgelés?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre d’étage à l’arrivé</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 23)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Sélectionner la surface</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->surface}} m</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Besoins supplémentaire</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>A quelle fréquence souhaitez-vous que ce job soit effectué?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 24)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de vêtements</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>A quelle fréquence souhaitez-vous que ce job soit effectué?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 25)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h3>Nombre de fuites d’eau</h3>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Citadine</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->small}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Berline</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->medium}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>SUV</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->large}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 26)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Sélectionner la surface</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->surface}} m</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>A quelle fréquence souhaitez-vous que ce job soit effectué?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 27)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de fenêtre</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>A quelle fréquence souhaitez-vous que ce job soit effectué?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 29)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Fille ou garçon</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        @if($jobrequest->child_question)
                                        @foreach(json_decode($jobrequest->child_question) as $key => $item)
                                        <span>{{$item}} ,</span>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Date de naissance</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>
                                            @if($jobrequest->child_dob)
                                             @foreach(json_decode($jobrequest->child_dob) as $key => $item)
                                                <span>{{$item}} ,</span>
                                            @endforeach
                                            @endif
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de enfant</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>A quelle fréquence souhaitez-vous que ce job soit effectué?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 30 || $jobrequest->subcategory->id == 31 || $jobrequest->subcategory->id == 32)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Type de garde</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de chien</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 33)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Type de nettoyage</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Besoins complémentaires</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 34)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Sélectionner la durée du cours</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 35)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Type d’installation</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 46 || $jobrequest->subcategory->id == 47 || $jobrequest->subcategory->id == 48 || $jobrequest->subcategory->id == 49 || $jobrequest->subcategory->id == 50 || $jobrequest->subcategory->id == 51 || $jobrequest->subcategory->id == 52 || $jobrequest->subcategory->id == 53 || $jobrequest->subcategory->id == 54 || $jobrequest->subcategory->id == 55 || $jobrequest->subcategory->id == 56 || $jobrequest->subcategory->id == 57 || $jobrequest->subcategory->id == 58 || $jobrequest->subcategory->id == 59 || $jobrequest->subcategory->id == 60)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Quel est le niveau d’enseignement demandé pour le cours?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Quel format de cours souhaitez-vous?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question2}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>A quelle fréquence souhaitez-vous que ce job soit effectué?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 61)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Retouche des photos?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 62)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre d’invités</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Mode de restauration</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il fournir la vaisselle?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit fournir les ustensiles?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question2}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il vider les poubelles?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question3}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 63)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre d’invités</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il fournir la vaisselle?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit fournir les ustensiles?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il vider les poubelles?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question2}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 64)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre d’invités</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Mode de restauration</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il vider les poubelles?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 65)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit-il fournir la table de mixage?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Le jobber doit fournir la sono?</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 69)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Nombre de flyers</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->count}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Type de distribution</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 70)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Type d’entretien</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 67)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Numéro</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->surface}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Type de distribution
                                    </h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 71)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Type de réparation</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($jobrequest->subcategory->id == 72)
                        <div class="title">
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Type d’élément</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question}} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item__auther emBlock__border">
                                <div class="item_person">
                                    <h2>Matériel Type de réparation</h2>
                                </div>
                                <div class="sideRight">
                                    <div class="time">
                                        <span>{{$jobrequest->question1}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            @endif
        </div>
        <div class="embody__content">
            <h1 class="head_art">Description du poste</h1>
            <p>
               {{$jobrequest->detail_description}}
            </p>
        </div>
    </section>

{{--    comments --}}
    <section>
        <div class="em__pkLink emBlock__border bg-white border-t-0">
            <ul class="nav__list mb-0">
                <li>
                    <a style="padding: 7px 20px" href="{{route('job.comments', ['id' => $jobrequest->id])}}" class="item-link">
                        <div class="group">
                            <div class="icon bg-primary" style="height: 25px; width: 25px">
                                <svg id="Iconly_Curved_Activity" data-name="Iconly/Curved/Activity" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                                    <g id="Activity" transform="translate(1.939 1.86)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M0,3.95,2.369.871l2.7,2.122L7.391,0" transform="translate(3.537 5.949)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_2" data-name="Stroke 2" d="M1.522,0A1.522,1.522,0,1,1,0,1.522,1.521,1.521,0,0,1,1.522,0Z" transform="translate(12.109 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                        <path id="Stroke_4" data-name="Stroke 4" d="M14.492,4.921a16.474,16.474,0,0,1,.154,2.4c0,5.493-1.83,7.323-7.323,7.323S0,12.816,0,7.323,1.831,0,7.323,0A16.57,16.57,0,0,1,9.684.148" transform="translate(0 0.557)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </div>
                            <span class="path__name">Voir les commentaires ({{$jobrequest->comments->count()}})</span>
                        </div>
                        <div class="group">
                            <span class="short__name"></span>
                            <i class="tio-chevron_right -arrwo"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    @if(Auth::user()->id == $jobrequest->applicant_id)

        <section class="margin-b-20 emPage__CateJobs withOut_colorful padding-l-20 padding-r-20">
        <h1 class="head_art">Offres ({{$jobrequest->proposals->count()}})</h1>
            @foreach($jobrequest->proposals as $proposal)
            <a href="{{route('applicant.proposal.detail', ['id' => $proposal->id])}}" class="emCategorie_itemJobs _list bg-blue">
                <img src="{{asset($proposal->jobber->image)}}"  loading="lazy"  style="height: 40px; border-radius: 50px" alt="">
                <div class="txt">
                    <h2>{{$proposal->jobber->firstName}} {{$proposal->jobber->lastName}}</h2>
                    <p style="margin-bottom: 10px">{{Str::limit($proposal->description, 40)}}</p>
                    <h2>Prix de l'offre: {{$proposal->price}} €</h2>
                </div>
            </a>
            @endforeach
        </section>

        <section class="components_page padding-b-30">
            @if($jobrequest->status==1)
            <div class="bg-white padding-20 d-flex emBlock__border">
                <a href="{{route('applicant.jobrequest.status', ['id' => $jobrequest->id])}}" class="btn justify-content-center bg-danger rounded-10 btn__default full-width">
                    <span class="color-white">Annuler</span>
                </a>
            </div>
            @else
                <div class="bg-white padding-20 d-flex emBlock__border">
                    <a href="" data-toggle="modal" data-target="#check"  class="btn justify-content-center bg-success rounded-10 btn__default full-width">
                        <span class="color-white">Republier</span>
                    </a>
                </div>
            @endif





        </section>
    @else
        <section class="components_page">
            <div class="padding-l-20 swiperCards__wallet padding-b-10">
                <div class="emBK__cards">
                    <h1 class="head_art">Aperçu du Job</h1>
                    <div class="owl-carousel owl-theme owlCards">
                        @if($jobrequest->image1)
                        <div class="item" style="height: 170px">
                            <div class="ele__card">
                                <div class="bg_imgCard">
                                    <img id="myImg" class="cover_img" style="height: 150px"  loading="lazy"  src="{{asset($jobrequest->image1)}}" alt="">
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($jobrequest->image2)
                        <div class="item" style="height: 170px">
                            <div class="ele__card">
                                <div class="bg_imgCard">
                                    <img id="myImg2" class="cover_img" style="height: 150px"  loading="lazy"  src="{{asset($jobrequest->image2)}}" alt="">
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($jobrequest->image3)
                        <div class="item" style="height: 170px">
                            <div class="ele__card">
                                <div class="bg_imgCard">
                                    <img  id="myImg3" class="cover_img"  loading="lazy"  style="height: 150px" src="{{asset($jobrequest->image3)}}" alt="">
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class="components_page padding-b-30">
{{--            <div class="bg-white padding-20 d-flex emBlock__border">--}}
{{--                <button type="button" data-toggle="modal"--}}
{{--                   data-target="#propsal" class="btn justify-content-center bg-primary rounded-10 btn__default full-width">--}}
{{--                    <span class="color-white">Envoyer la proposition</span>--}}
{{--                </button>--}}
{{--            </div>--}}
                    <div class="bg-white padding-20 d-flex emBlock__border">
                        <div class="row">
                            <div class="col-6">
                                <h2>{{$jobrequest->estimate_budget}} €</h2>
                            </div>
                            <div class="col-6">
                                <button  data-toggle="modal"
                                         style="margin-left: 70px;" data-target="#propsal" class="btn justify-content-center bg-primary rounded-10 btn__default">
                                    <span class="color-white">Postuler</span>
                                </button>
                            </div>
                        </div>



{{--                        <a  href="{{route('applicant.jobrequest.ignor',['id'=>$jobrequest->id])}}" class="btn justify-content-center bg-red rounded-10 btn__default ml-3">--}}
{{--                            <span class="color-white">Ignorer</span>--}}
{{--                        </a>--}}
                    </div>

        </section>
    @endif

    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade show" id="propsal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Ajuster votre tarif horaire</h1>
                    </div><br>

                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                <div class="itemProduct_sm">
                    <div class="itemCountr_manual1 horizontal itemButtons -lg border-0 min-w-145">
                        <a href="#" data-dir="down" class="btn btn_counter1 rounded-circle co_down border">
                            <i class="tio-remove"></i>
                        </a>
                        <input type="text" name="duration" class="form-control input_no color-secondary durationplus" value="{{$jobrequest->hours}}">
                        <a href="#" data-dir="up" class="btn btn_counter1 rounded-circle co_up bg-secondary">
                            <i class="tio-add color-white"></i>
                        </a>
                    </div>
                </div>
                </div>
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="row">
                        <div class="col-8">
                            <h5>Duree initiale </h5>
                        </div>

                        <div class="col-8">
                           <p>Des heures supplementaires pourront etre ajoutees.</p>
                        </div>
                        <div class="col-4">
                            <p style="text-align: right"><strong class="percentage">{{$jobrequest->duration}}h</strong></p>
                        </div>
                        <div class="col-8">
                            <h6>Remuneration totale </h6>
                        </div>
                        <div class="col-4">
                            <p style="text-align: right"><strong class="perhours">{{$jobrequest->duration * $jobrequest->hours}}€</strong></p>
                        </div>
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <p style="text-align: right"><strong class="total">{{$jobrequest->duration}}h * <b class="budget2">{{$jobrequest->hours}}</b>€</strong></p>
                        </div>
                        <div class="col-8">
                            <p><b>Prix de la prestation demandée </b></p>
                        </div>
                        <div class="col-4">
                            <p style="text-align: right"><strong class="percentage">{{$jobrequest->subcategory->price}}€</strong></p>
                        </div>
                        <div class="col-8">
                            <h6>Total </h6>
                        </div>
                        <div class="col-4">

                            <p style="text-align: right"><strong class="estimatebudget">{{$jobrequest->estimate_budget}}€</strong></p>
                        </div>
                        <div class="col-8">
                            <h6>Payer la taxe 10 % </h6>
                        </div>
                        <div class="col-4">
                            <p style="text-align: right"><strong class="tax">{{($jobrequest->estimate_budget/100)*10}}€</strong></p>
                        </div>
                        <div class="col-8">
                            <h5>Sous-total général </h5>
                        </div>
                        <div class="col-4">
                            <p style="text-align: right"><strong class="estimatebudget2">{{$jobrequest->estimate_budget + ($jobrequest->estimate_budget/100)*10}}€</strong></p>
                        </div>
                    </div>
                </div>
                <form action="{{route('proposal.submit')}}" class="formsubmit" method="POST">
                    @csrf
                    <div class="modal-body env-pb">

                        <input type="hidden" name="id" value="{{$jobrequest->id}}">
                        <input type="hidden" name="price" class="estimatebudget2" value="{{$jobrequest->estimate_budget}}">
                        <input type="hidden" name="hours" class="hours" value="{{$jobrequest->hours}}">
                        <input type="hidden" name="total_hours" class="totalperhours" value="{{$jobrequest->duration}}*{{$jobrequest->hours}}">
                        <input type="hidden" name="duration" class="" value="{{$jobrequest->duration}}">
{{--                        <input type="hidden" name="service_price" class="" value="{{$jobrequest->subcategory->price}}">--}}
                        <input type="hidden" name="tax" class="tax1" value="{{($jobrequest->estimate_budget/100)*10}}">


                    </div>
                    <div class="modal-footer">
                        <?php
                        $user = Auth::user();
                        $offer= \App\User::where('id','=',$user->id)->first();
                        ?>

                            @if(Auth::user()->hasSubscription())
                            <button type="submit" class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                                Poster
                            </button>
                            @elseif($offer->offers != 0)
                                <button type="submit" class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                                    Poster
                                </button>
                            @else
                            <a href="{{route('app.subscription')}}" class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">Abonnez-vous pour voir</a>
                           @endif

                    </div>
                    <div class="modal-footer">
                        <p> En signant, vous vous engagez a etre disponible le <b>Samedi {{$jobrequest->service_date->format('d-m-y')}} {{$jobrequest->start_time}}</b></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade show" id="check" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                    <div class="itemProduct_sm">
                        <h1 class="size-18 weight-600 color-secondary m-0">Republier</h1>
                    </div><br>

                    <div class="absolute right-0 padding-r-20">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear"></i>
                        </button>
                    </div>
                </div>
                <form action="{{route('applicant.jobrequest.repost')}}" class="formsubmit" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header border-0 padding-l-20 padding-r-20 justify-content-center">
                        <div class="itemProduct_sm">
                            <div class="itemCountr_manual1 horizontal itemButtons -lg border-0 min-w-145">

                                <input type="date" name="service_date" value="" required>
                                <input type="hidden" name="id" value="{{$jobrequest->id}}"  >
                            </div>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="submit"
                                class="btn w-100 bg-primary m-0 color-white h-52 d-flex align-items-center rounded-10 justify-content-center">
                            Soumettre
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@section('script')

    <script>
        setInterval(function(){
            var durationplus = $(".durationplus").val();

            var rateperhour = {{$jobrequest->duration}}
                {{--+ {{$jobrequest->subcategory->price}}--}}
            var budget = (parseFloat(durationplus) * parseFloat(rateperhour))  ;
            var budget3 = (parseFloat(durationplus) * parseFloat(rateperhour))  + (((parseFloat(durationplus) * parseFloat(rateperhour)) )/100)*10;
            var tax = (((parseFloat(durationplus) * parseFloat(rateperhour)) )/100)*10;
            var budget1 = (parseFloat(durationplus) * parseFloat(rateperhour)) ;
            var budget2 = (parseFloat(durationplus));
            $(".estimatebudget").html(budget + "€");
            $(".tax").html(tax.toFixed(2) + "€");
            $(".tax1").val(tax.toFixed(2));
            $(".perhours").html(budget1 + "€");
            $(".totalperhours").val(budget1);
            $(".budget2").html(budget2);
            $(".hours").val(budget2);
            $(".estimatebudget2").val(budget3);
            $(".estimatebudget2").html(budget3 + "€");


        }, 200);
    </script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <script>


        var mymap = L.map('map', { gestureHandling: true,  dragging: false, tap: true }).setView([{{$user->latitude}}, {{$user->longitude}}], 10);

        mymap.locate({setView: true, maxZoom: 16});
        function locateUser() {
            mymap.locate({setView : true,  maxZoom: 16})
        }
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 200,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        function onLocationError(e) {
            alert(e.message);
        }
        mymap.on('locationerror', onLocationError);

        function onLocationFound(e) {
            var radius = e.accuracy;

            // L.marker(e.latlng).addTo(mymap)
            //     .bindPopup("Vous êtes à l'intérieur " + radius + " mètres de ce point");

            // L.circle(e.latlng, radius).addTo(mymap);
        }

        mymap.on('locationfound', onLocationFound);

        /* var latlng = L.latLng(33.650911, 73.013316);
         var newMarker = new L.marker(latlng).addTo(mymap).on('click', function(e) {
             console.log(e.latlng);
         });*/

        var locations = [

            ["{{$jobrequest->title}}", {{$jobrequest->lat}},{{$jobrequest->long}}, {{$jobrequest->id}}],

        ];
        console.log(locations);

        for (var i = 0; i < locations.length; i++) {
            var link = $('<a href="{{url('applicant/jobrequests/detail/')}}/'+locations[i][3]+'" class="speciallink">'+locations[i][0]+'</a>')[0];
            marker = new L.marker([locations[i][1], locations[i][2]], {
                draggable: true,
                icon: L.icon({
                    iconUrl: '/logo.png',
                    iconSize: [34, 34],
                    iconAnchor: [22, 22],

                })
            })
                .bindPopup(link)
                .addTo(mymap);
        }

    </script>
@endsection
