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
            <form id="regForm" class="loginformsubmit" method="POST" action="{{route('jobrequest.submit', ['id' => $childcatgory->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="em_titleSign" style="margin-bottom: 0px;">
                    <h2>{{$childcatgory->title}}</h2>
                    <p>Informations sur le besoin</p>
                </div>
                @if($childcatgory->id == 1)
                <div class="tab">
                    <div class="em_titleSign" style="margin-top: 0px">
                        <p>Nombre et type de meubles</p>
                    </div>
                    <div class="em__body">
                        <div class="form-group allign-left">
                            <div class="input_group">
                                <div class="row">
                                    <div class="col-6">
                                       <h4>Petit(s)</h4>
                                        <p>Chaise / Tabouret / Bans / Luminaire / Fauteuil</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-link hoverNone" style="text-align: right">
                                            <div class="group">
                                                <div class="itemCountr_manual horizontal itemButtons -sm border-0 min-w-110">
                                                    <a href="#" data-dir="down" class="btn btn_counter rounded-10 co_down border">
                                                        <i class="tio-remove"></i>
                                                    </a>
                                                    <input type="text" name="small" class="form-control input_no color-secondary" value="1">
                                                    <a href="#" data-dir="up" class="btn btn_counter rounded-10 co_up bg-primary">
                                                        <i class="tio-add color-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input_group">
                                <div class="row">
                                    <div class="col-6">
                                        <h4>Moyen(s)</h4>
                                        <p>Table / Table de chevet / Étagère / Rangement jusqu'à 4 tiroirs</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-link hoverNone" style="text-align: right">
                                            <div class="group">
                                                <div class="itemCountr_manual horizontal itemButtons -sm border-0 min-w-110">
                                                    <a href="#" data-dir="down" class="btn btn_counter rounded-10 co_down border">
                                                        <i class="tio-remove"></i>
                                                    </a>
                                                    <input type="text" name="medium" class="form-control input_no color-secondary" value="1">
                                                    <a href="#" data-dir="up" class="btn btn_counter rounded-10 co_up bg-primary">
                                                        <i class="tio-add color-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input_group">
                                <div class="row">
                                    <div class="col-6">
                                        <h4>Grand(s)</h4>
                                        <p>Armoire / Lit/ Canapé / Rangement 5 à 8 tiroirs</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-link hoverNone" style="text-align: right">
                                            <div class="group">
                                                <div class="itemCountr_manual horizontal itemButtons -sm border-0 min-w-110">
                                                    <a href="#" data-dir="down" class="btn btn_counter rounded-10 co_down border">
                                                        <i class="tio-remove"></i>
                                                    </a>
                                                    <input type="text" name="large" class="form-control input_no color-secondary" value="1">
                                                    <a href="#" data-dir="up" class="btn btn_counter rounded-10 co_up bg-primary">
                                                        <i class="tio-add color-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input_group">
                                <div class="row">
                                    <div class="col-6">
                                        <h4>Très grand(s)</h4>
                                        <p>Dressing / Rangement + de 8 tiroirs</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-link hoverNone" style="text-align: right">
                                            <div class="group">
                                                <div class="itemCountr_manual horizontal itemButtons -sm border-0 min-w-110">
                                                    <a href="#" data-dir="down" class="btn btn_counter rounded-10 co_down border">
                                                        <i class="tio-remove"></i>
                                                    </a>
                                                    <input type="text" name="verylarge" class="form-control input_no color-secondary" value="1">
                                                    <a href="#" data-dir="up" class="btn btn_counter rounded-10 co_up bg-primary">
                                                        <i class="tio-add color-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4>Débarrasser les cartons</h4>
                            </div>
                            <div class="form-group">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="OUI" name="question" class="custom-control-input diploma_yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="Non" name="question" class="custom-control-input diploma_no">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif($childcatgory->id == 2)
                <div class="tab">
                    <div class="em_titleSign" style="margin-top: 0px">
                        <p>Informations sur le besoin</p>
                        <p>Nombre de meubles à démonter</p>
                    </div>
                    <div class="em__body">
                        <div class="form-group allign-left">
                            <div class="input_group">
                                <div class="row">
                                    <div class="col-6">
                                       <h4>Petit(s)</h4>
                                        <p>Chaise Tabouret / Banc / Luminaire Fauteuil</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-link hoverNone" style="text-align: right">
                                            <div class="group">
                                                <div class="itemCountr_manual horizontal itemButtons -sm border-0 min-w-110">
                                                    <a href="#" data-dir="down" class="btn btn_counter rounded-10 co_down border">
                                                        <i class="tio-remove"></i>
                                                    </a>
                                                    <input type="text" name="small" class="form-control input_no color-secondary" value="1">
                                                    <a href="#" data-dir="up" class="btn btn_counter rounded-10 co_up bg-primary">
                                                        <i class="tio-add color-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input_group">
                                <div class="row">
                                    <div class="col-6">
                                        <h4>Moyen(s)</h4>
                                        <p>Table / Table de chevet /
                                            Étagère / Rangement jusqu'à 4 tiroirs</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-link hoverNone" style="text-align: right">
                                            <div class="group">
                                                <div class="itemCountr_manual horizontal itemButtons -sm border-0 min-w-110">
                                                    <a href="#" data-dir="down" class="btn btn_counter rounded-10 co_down border">
                                                        <i class="tio-remove"></i>
                                                    </a>
                                                    <input type="text" name="medium" class="form-control input_no color-secondary" value="1">
                                                    <a href="#" data-dir="up" class="btn btn_counter rounded-10 co_up bg-primary">
                                                        <i class="tio-add color-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input_group">
                                <div class="row">
                                    <div class="col-6">
                                        <h4>Grand(s)</h4>
                                        <p>Armoire / Lit/ Canapé / Rangement 5 à 8 tiroirs</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-link hoverNone" style="text-align: right">
                                            <div class="group">
                                                <div class="itemCountr_manual horizontal itemButtons -sm border-0 min-w-110">
                                                    <a href="#" data-dir="down" class="btn btn_counter rounded-10 co_down border">
                                                        <i class="tio-remove"></i>
                                                    </a>
                                                    <input type="text" name="large" class="form-control input_no color-secondary" value="1">
                                                    <a href="#" data-dir="up" class="btn btn_counter rounded-10 co_up bg-primary">
                                                        <i class="tio-add color-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input_group">
                                <div class="row">
                                    <div class="col-6">
                                        <h4>Très grand(s)</h4>
                                        <p>Dressing / Rangement + de 8 tiroirs</p>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-link hoverNone" style="text-align: right">
                                            <div class="group">
                                                <div class="itemCountr_manual horizontal itemButtons -sm border-0 min-w-110">
                                                    <a href="#" data-dir="down" class="btn btn_counter rounded-10 co_down border">
                                                        <i class="tio-remove"></i>
                                                    </a>
                                                    <input type="text" name="verylarge" class="form-control input_no color-secondary" value="1">
                                                    <a href="#" data-dir="up" class="btn btn_counter rounded-10 co_up bg-primary">
                                                        <i class="tio-add color-white"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4>Le jobber doit-il évacuer les déchets hors de votre domicile ?</h4>
                            </div>
                            <div class="form-group">
                                <div class="input_group">
                                    <div class="bg-white ">
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="yes" value="OUI" name="question" class="custom-control-input diploma_yes">
                                            <label class="custom-control-label padding-l-10" for="yes">
                                                OUI</label>
                                        </div>
                                        <div class="custom-control custom-radio margin-b-10">
                                            <input type="radio" id="no" value="Non" name="question" class="custom-control-input diploma_no">
                                            <label class="custom-control-label padding-l-10" for="no">
                                                Non
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif($childcatgory->id == 3)
                <div class="tab">
                    <div class="em__body">
                        <div class="form-group allign-left">
                            <div class="input_group">
                                <div class="row">
                                    <div class="col-12">
                                       <h4>Tringles a rideaux a fixer</h4>
                                    </div>
                                    <div class="col-12">
                                        <div class="item-link hoverNone" style="text-align: right">
                                            <div class="group">
                                                <input type="range" name="surface" class="form-control" value="24" min="1" max="15" oninput="this.nextElementSibling.value = this.value">
                                                <output>15</output>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif($childcatgory->id == 4)
                <div class="tab">
                    <div class="em_titleSign" style="margin-top: 0px">
                        <p>Nombre detageres a fixer</p>
                    </div>
                    <div class="form-group allign-left padding-20">
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
                @elseif($childcatgory->id == 5 || $childcatgory->id == 6 || $childcatgory->id == 7 || $childcatgory->id == 8)
                <div class="tab">
                    <div class="em_titleSign" style="margin-top: 0px">
                        <p>
                            @if($childcatgory->id == 5)
                                Nombre de TV à fixer
                            @elseif($childcatgory->id == 6)
                                Nombre de pare-douche
                            @elseif($childcatgory->id == 7)
                                Nombre de tableau
                            @elseif($childcatgory->id == 8)
                                Nombre de miroir
                            @endif
                        </p>
                    </div>
                        <div class="form-group allign-left padding-20">
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
                @elseif($childcatgory->id == 9)
                <div class="tab">
                        <div class="form-group allign-left padding-20">
                            <p>Nombre de meubles </p>
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
                            <br>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Type de meubles </label>
                                <div class="input_group">
                                    <input type="text" id="file" placeholder="Type de meubles" name="input" class="form-control">
                                </div>
                            </div>
                        </div>
                </div>
                @elseif($childcatgory->id == 10)
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
                @elseif($childcatgory->id == 11)
                <div class="tab">
                        <div class="form-group allign-left padding-20">
                            <p>Nombre de mètre linéaire</p>
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
                            <br>
                            <div class="form-group" style="text-align: left!important;">
                                <label>Type de clôture  </label>
                                <div class="input_group">
                                    <input type="text" id="file" placeholder="bois, aluminium, pvc…" name="input" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($childcatgory->id == 12)
                <div class="tab">
                        <div class="form-group allign-left padding-20">
                            <p>Nombre de hotte</p>
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
                @elseif($childcatgory->id == 13)
                <div class="tab">
                    <div class="padding-20">
                        <div class="form-group allign-left">
                            <div class="form-group allign-left">
                                <label>De quel service avez vous besoin? </label>
                                <div class="input_group">
                                    <input type="text" id="file" placeholder="Service Nom" name="input" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group allign-left">
                            <label>Description </label>
                            <div class="input_group">
                                <textarea name="description" placeholder="Description" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                @elseif($childcatgory->id == 14)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <p>Nombre de prises électriques</p>
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
                @elseif($childcatgory->id == 15)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <p>Nombre d’ampoule</p>
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
                @elseif($childcatgory->id == 16)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <p>Nombre de luminaire</p>
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
                @elseif($childcatgory->id == 17)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <p>Nombre de cameras / box / équipement </p>
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
                @elseif($childcatgory->id == 18)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <p>Nombre de climatiseurs </p>
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
                @elseif($childcatgory->id == 19 || $childcatgory->id == 23)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <p>Nombre de pièces </p>
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
                </div>
                 @elseif($childcatgory->id == 20)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Sélectionner la surface </h4>
                        <div class="group">
                            <input type="range" name="surface" class="form-control" value="24" min="1" max="15" oninput="this.nextElementSibling.value = this.value">
                            <output>15</output>m
                        </div>
                        <hr>
                        <div>
                            <h4>Besoin de poser des plinthes?</h4>
                        </div>
                        <div class="form-group">
                            <div class="input_group">
                                <div class="bg-white ">
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="yes" value="OUI" name="question" class="custom-control-input diploma_yes">
                                        <label class="custom-control-label padding-l-10" for="yes">
                                            OUI</label>
                                    </div>
                                    <div class="custom-control custom-radio margin-b-10">
                                        <input type="radio" id="no" value="Non" name="question" class="custom-control-input diploma_no">
                                        <label class="custom-control-label padding-l-10" for="no">
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif($childcatgory->id == 21 || $childcatgory->id == 22 || $childcatgory->id == 24)
                <div class="tab">
                    <div class="form-group allign-left padding-20">
                        <h4>Sélectionner la surface </h4>
                        <div class="group">
                            <input type="range" class="form-control" name="surface" value="24" min="1" max="15" oninput="this.nextElementSibling.value = this.value">
                            <output>15</output>m
                        </div>
                    </div>
                </div>
                @elseif($childcatgory->id == 25)
                <div class="tab">
                        <div class="form-group allign-left padding-20">
                            <p>Nombre de fuites d’eau</p>
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
                 @elseif($childcatgory->id == 26)
                <div class="tab">
                        <div class="form-group allign-left padding-20">
                            <p>Nombre de chasse d’eau</p>
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
                @elseif($childcatgory->id == 27)
                <div class="tab">
                        <div class="form-group allign-left padding-20">
                            <p>Nombre de robinet</p>
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
                @elseif($childcatgory->id == 28)
                <div class="tab">
                        <div class="form-group allign-left padding-20">
                            <p>Nombre d’évier</p>
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
                 @elseif($childcatgory->id == 29)
                <div class="tab">
                        <div class="form-group allign-left padding-20">
                            <p>Nombre de machine : Lave-linge / Lave vaisselle</p>
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
                 @elseif($childcatgory->id == 30)
                <div class="tab">
                        <div class="form-group allign-left padding-20">
                            <p>Nombre de chasse d’eau</p>
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
                 @elseif($childcatgory->id == 31)
                <div class="tab">
                        <div class="form-group allign-left padding-20">
                            <p>Nombre de bonde</p>
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
                @endif
                @include('include.tabs')
                <div class="question_step" style="text-align:center;margin-top:40px; display: none">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

                <div class="buttons__footer text-center">
                    <div class="bg-white d-flex">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)"  class="btn bg-green rounded-10 btn__default mr-3">
                            <span class="color-white">Retourner</span>
                        </button>
                        <button type="button" id="nextBtn" style="color: white" onclick="nextPrev(1)" class="btn bg-blue rounded-10 btn__default">
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
@endsection
