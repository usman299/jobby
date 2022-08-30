@extends('layouts.front')


    <link href="{{asset('calender/lib/main.css')}}" rel='stylesheet' />
    <script src="{{asset('calender/lib/main.js')}}"></script>
    <script src="{{asset('calender/lib/locales-all.js')}}"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var initialLocaleCode = 'fr';
            var localeSelectorEl = document.getElementById('locale-selector');
            var calendarEl = document.getElementById('calendar1');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {

                    left: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },

                buttonText: {
                    today: "Aujourd'hui",
                    year: 'Année',
                    month: 'Mois',
                    week: 'Semaine',
                    day: 'Jour',
                    list: 'Mon planning',
                },
                initialDate: "{{\Carbon\Carbon::now()}}",
                locale: initialLocaleCode,
                buttonIcons: true, // show the prev/next text
                weekNumbers: true,
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                dayMaxEvents: true, // allow "more" link when too many events
                events: [
                        @foreach($contract as $job)
                    {
                        title: "{{$job->title}}",
                        start: "{{$job->created_at->format('Y-m-d')}}",
                        {{--title:"white",--}}
                        {{--@if($job->status == 0)--}}
                        {{--backgroundColor: "red",--}}
                        {{--@elseif($job->status == 1)--}}
                        {{--backgroundColor: "blue",--}}
                        {{--@elseif($job->status == 2)--}}
                        {{--backgroundColor: "green",--}}
                        {{--@endif--}}
                        borderColor: 'black',
                        url: "{{url('app/event/view/')}}/"+{{$job->id}}

                    },
                    @endforeach
                ]
            });

            calendar.render();

            // build the locale selector's options
            calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
                var optionEl = document.createElement('option');
                optionEl.value = localeCode;
                optionEl.selected = localeCode == initialLocaleCode;
                optionEl.innerText = localeCode;
                localeSelectorEl.appendChild(optionEl);
            });

            // when the selected option changes, dynamically change the calendar option
            localeSelectorEl.addEventListener('change', function() {
                if (this.value) {
                    calendar.setOption('locale', this.value);
                }
            });

        });
        calendar.setOption('locale', 'fr');

    </script>
    <style>


        #top {
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            font-size: 12px;
        }

        #calendar {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 10px;
        }
        .container{
            margin-top: 60px;
        }

    </style>
@section('content')
    <div class="form-group" style="margin-top: 30px;">
        <a href="" data-toggle="modal"
           data-target="#addnew" style=" height: 40px!important;" class="btn justify-content-center bg-primary rounded-10 btn__default full-width">
                                <span class="color-white">
                            <i class="tio-add"></i>Ajouter un Événement
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
                            <button type="button" style="border-radius: 6px;" class="btn btn-primary btn-sm " data-dismiss="modal" onclick="counter()" aria-label="Close"><i class="tio-clear"></i>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="padding-t-30">
                            <div class="em__pkLink bg-white border-t-0" id="addmorecolor">

                            <form method="post" action="{{route('app.event.store')}}">
                                @csrf

                                <div class="roww">
                                    <div >
                                        <h4 >Titre</h4>
                                    </div>
                                    <div class="form-group">
                                        <div class="bg-white ">
                                            <div class="input_group">
                                                <input  name="title"  type="text" placeholder="Titre" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                    <div >
                                        <h4 >Le prix</h4>
                                    </div>
                                    <div class="form-group">
                                        <div class="bg-white ">
                                            <div class="input_group">
                                                <input  name="price"   type="number" placeholder="Le prix" class="form-control">
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <h4>Date de naissance</h4>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group" style="text-align: left!important;">
                                            <label>Date de fin </label>

                                            <div class="input_group">
                                                <input type="datetime-local" min="{{Carbon\Carbon::now()->format('Y-m-d')."T".Carbon\Carbon::now()->format('H:i')}}" name="e_time"  class="form-control"  required="">

                                            </div>
                                        </div>
                                    </div>
                                    <div >
                                        <h4 >Description</h4>
                                    </div>
                                    <div class="form-group">
                                        <div class="bg-white ">
                                            <div class="input_group">
                                                <textarea name="description" placeholder="Description" class="form-control" id="" cols="30" rows="5"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group" style="text-align: left!important;">

                                            <div class="input_group">
                                                <input  style="color: white"  type="submit" class="btn justify-content-center bg-primary rounded-10 btn__default full-width">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<div class="container">
    <div id='calendar1'></div>
    <div id="popup"></div>

</div>



@endsection
