@extends('layouts.front')
@section('content')
    <section class="emPage__activities _classic padding-t-60">
        @foreach($notfication as $row)

        <div class="item__activiClassic bg-white margin-t-10 border-b">

            <div class="media">
                <div class="icon bg-green">
                    <svg id="Iconly_Curved_Password" data-name="Iconly/Curved/Password"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <g id="Password" transform="translate(2.75 2.75)">
                            <path id="Stroke_1" data-name="Stroke 1"
                                  d="M3.7,1.852A1.852,1.852,0,1,1,1.852,0h0A1.851,1.851,0,0,1,3.7,1.852Z"
                                  transform="translate(4.235 7.398)" fill="none" stroke="#000"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Stroke_3" data-name="Stroke 3" d="M0,0H6.318V1.852"
                                  transform="translate(7.942 9.25)" fill="none" stroke="#000"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Stroke_5" data-name="Stroke 5" d="M.5,1.852V0"
                                  transform="translate(10.932 9.25)" fill="none" stroke="#000"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  stroke-width="1.5" />
                            <path id="Stroke_7" data-name="Stroke 7"
                                  d="M0,9.25C0,2.313,2.313,0,9.25,0S18.5,2.313,18.5,9.25,16.187,18.5,9.25,18.5,0,16.187,0,9.25Z"
                                  fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-miterlimit="10" stroke-width="1.5" />
                        </g>
                    </svg>

                </div>
                <div class="media-body">

                    <div class="txt">

                        <h2>{{$row->activity}}</h2>
                        <p>{{$row->message}}</p>
                        <span>{{ date_format($row->created_at,'d M ')}}</span>

                    </div>

                </div>

            </div>
            <a href="{{route('applicant.jobrequest.detail', ['id' => $row->generate_id])}}">
           <div class="sideRight">
                <span class="attention"></span>
             <i class="tio-chevron_right"></i>
            </div>
            </a>
        </div>

        @endforeach


    </section>
    @endsection
