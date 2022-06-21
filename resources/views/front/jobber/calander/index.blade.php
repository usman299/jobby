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
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },

                buttonText: {
                    today: "today",
                    year: 'year',
                    month: 'month',
                    week: 'week',
                    day: 'day',
                    list: 'list',
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
                        title: "{{$job->applicant->name}}",
                        start: "{{$job->created_at->format('Y-m-d')}}",
                        @if($job->status == 0)
                        backgroundColor: "red",
                        @elseif($job->status == 1)
                        backgroundColor: "blue",
                        @elseif($job->status == 2)
                        backgroundColor: "green",
                        @endif
                        borderColor: 'black',
                        url: "{{url('applicant/contract/details/')}}/"+{{$job->id}}

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

<div class="container">
    <div id='calendar1'></div>
    <div id="popup"></div>

</div>



@endsection
