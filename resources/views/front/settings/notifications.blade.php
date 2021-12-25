@extends('layouts.front')
@section('content')
    <section class="emPage__activities _classic padding-t-60">
        @foreach($notfications as $row)

        @if($row->activity == "Demande d'emploi")
        <a style="text-decoration: none" href="{{route('applicant.jobrequest.detail', ['id' => $row->generate_id])}}">
            <div class="item__activiClassic bg-white margin-t-10 border-b">
                <div class="media">
                    <div class="icon bg-yellow">
                        <i class="ri-radar-fill"></i>
                    </div>
                    <div class="media-body">
                        <div class="txt">
                            <h2>{{$row->activity}}</h2>
                            <p>{{$row->message}}</p>
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($row->created_at);
                            ?>
                            <span>{{$date->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
                <div class="sideRight">
                    @if($row->status == "0")
                    <span class="attention"></span>
                    @endif
                    <i class="tio-chevron_right"></i>
                </div>
            </div>
        </a>
        @elseif($row->activity == "Nouvelle proposition")
        <a style="text-decoration: none" href="{{route('applicant.proposal.detail', ['id' => $row->generate_id])}}">
            <div class="item__activiClassic bg-white margin-t-10 border-b">
                <div class="media">
                    <div class="icon bg-blue">
                        <i class="ri-book-2-fill"></i>
                    </div>
                    <div class="media-body">
                        <div class="txt">
                            <h2>{{$row->activity}}</h2>
                            <p>{{$row->message}}</p>
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($row->created_at);
                            ?>
                            <span>{{$date->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
                <div class="sideRight">
                    @if($row->status == "0")
                        <span class="attention"></span>
                    @endif
                    <i class="tio-chevron_right"></i>
                </div>
            </div>
        </a>
        @elseif($row->activity == "Accepter la proposition")
        <a style="text-decoration: none" href="{{route('applicant.proposal.detail', ['id' => $row->generate_id])}}">
            <div class="item__activiClassic bg-white margin-t-10 border-b">
                <div class="media">
                    <div class="icon bg-green">
                        <i class="ri-file-edit-line"></i>
                    </div>
                    <div class="media-body">
                        <div class="txt">
                            <h2>{{$row->activity}}</h2>
                            <p>{{$row->message}}</p>
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($row->created_at);
                            ?>
                            <span>{{$date->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
                <div class="sideRight">
                    @if($row->status == "0")
                        <span class="attention"></span>
                    @endif
                    <i class="tio-chevron_right"></i>
                </div>
            </div>
        </a>
        @elseif($row->activity == "Rejet de la proposition")
        <a style="text-decoration: none" href="{{route('applicant.proposal.detail', ['id' => $row->generate_id])}}">
            <div class="item__activiClassic bg-white margin-t-10 border-b">
                <div class="media">
                    <div class="icon bg-red">
                        <i class="ri-close-fill"></i>
                    </div>
                    <div class="media-body">
                        <div class="txt">
                            <h2>{{$row->activity}}</h2>
                            <p>{{$row->message}}</p>
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($row->created_at);
                            ?>
                            <span>{{$date->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
                <div class="sideRight">
                    @if($row->status == "0")
                        <span class="attention"></span>
                    @endif
                    <i class="tio-chevron_right"></i>
                </div>
            </div>
        </a>
        @elseif($row->activity == "Début du contrat")
        <a style="text-decoration: none" href="{{route('jobber.contract.details', ['id' => $row->generate_id])}}">
            <div class="item__activiClassic bg-white margin-t-10 border-b">
                <div class="media">
                    <div class="icon bg-purple">
                        <i class="ri-hand-coin-fill"></i>
                    </div>
                    <div class="media-body">
                        <div class="txt">
                            <h2>{{$row->activity}}</h2>
                            <p>{{$row->message}}</p>
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($row->created_at);
                            ?>
                            <span>{{$date->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
                <div class="sideRight">
                    @if($row->status == "0")
                        <span class="attention"></span>
                    @endif
                    <i class="tio-chevron_right"></i>
                </div>
            </div>
        </a>
        @elseif($row->activity == "Travail terminé")
        <a style="text-decoration: none" href="{{route('applicant.contract.details', ['id' => $row->generate_id])}}">
            <div class="item__activiClassic bg-white margin-t-10 border-b">
                <div class="media">
                    <div class="icon bg-green">
                        <i class="ri-check-double-line"></i>
                    </div>
                    <div class="media-body">
                        <div class="txt">
                            <h2>{{$row->activity}}</h2>
                            <p>{{$row->message}}</p>
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($row->created_at);
                            ?>
                            <span>{{$date->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
                <div class="sideRight">
                    @if($row->status == "0")
                        <span class="attention"></span>
                    @endif
                    <i class="tio-chevron_right"></i>
                </div>
            </div>
        </a>
        @elseif($row->activity == "Contrat accepté")
        <a style="text-decoration: none" href="{{route('jobber.contract.details', ['id' => $row->generate_id])}}">
            <div class="item__activiClassic bg-white margin-t-10 border-b">
                <div class="media">
                    <div class="icon bg-green">
                        <i class="ri-check-double-line"></i>
                    </div>
                    <div class="media-body">
                        <div class="txt">
                            <h2>{{$row->activity}}</h2>
                            <p>{{$row->message}}</p>
                            <?php
                            \Carbon\Carbon::setLocale('fr');
                            $date = \Carbon\Carbon::parse($row->created_at);
                            ?>
                            <span>{{$date->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
                <div class="sideRight">
                    @if($row->status == "0")
                        <span class="attention"></span>
                    @endif
                    <i class="tio-chevron_right"></i>
                </div>
            </div>
        </a>
        @endif

        @endforeach
            <br>
            <br>
            <br>
    </section>
    @endsection
