@extends('admin.printable2')
@section('style')
    <style>
        #admission_letter{
            background-image: url("{{ asset('assets/images/avatars/logo.png') }}");
            background-color: rgb(255, 255, 255);
            background-blend-mode: multiply;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: scroll;
            filter: blur(10px);
        }

        #admission_letter > div {
            background-color: rgba(255, 255, 255, 0.9);
            width: inherit;
            height: inherit;
        }
    </style>
@endsection
@section('section')
    <div id="admission_letter">
        <div class="py-2 container-fluid">
            <h3 class="text-uppercase text-center"><b>{{ $title }}</b></h3>
            <hr class="border-bottom border-4 my-0">
            <div style="font-size: normal;">
                
                <div class="my-3 py-2 text-capitalize">
                    <span>@lang('text.word_date') : {{ $application->admitted?->format('M dS Y')??null }}</span><br><br>
                    <span>@lang('text.word_to')</span><br>
                    <span>{{ $name }}</span><br>
                    <span>{{ $phone }}</span><br><br>
                    <span>@lang('text.word_from'),</span><br>
                    <span>President</span><br>
                    <span>DAJA University</span><br>
                    <span>DAJA Higher Institute (DHI)</span><br>
                    <span>Buea, SWR, Cameroon</span><br><br>
                </div>
                <div class="my-1 py-2">
                    <span class="d-block">Dear  <b>{{ $name }}</b>,</span><br>
                    <span class="d-block"><u><b>Congratulations!</b></u> It gives us pleasure to inform you that your application for admission into the <i>{{ $degree }}</i>  program has been approved. We have found your application to be satisfactory and promising.</span><br>
                    <span class="d-block">Classes will begin at DAJA University in October, and a specific start date of classes will be announced in the days and weeks ahead. Also, the University will have an orientation for all the students, and the
                        dates and a detailed agenda will be sent to everyone. Attendance at the orientation will be mandatory. Several essential details will be disclosed to the students during this orientation.</span><br>
                    <span class="d-block">We welcome you into our university family as you join a global learning community that lays down a foundation for positive social change.</span><br>
                    <span class="d-block">We look forward to welcoming you to the DAJA University community</span><br>
                    <span class="d-block">Sincerely,</span>
                    <span class="d-block">Dr. Julius Atemafac <br> President</span><br>
                </div>

                {{-- <div class="my-4 py-3 text-capitalize text-center text-info">
                    <i>Mt. Carmel Street; Former Hotel Carlos,<br> Mile 18 Buea SWR Cameroon <br> Tel: +237672495853/687672289 <br> WhatsApp: +237672495853, Fax: 866-207-0983</i>
                </div> --}}
            </div>
        </div>
    </div>
@endsection