@extends('student.printable')
@section('section')
    <div class="py-1">
        <table class="border border-light" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th colspan="4" class="text-capitalize text-center header font-weight-bold py-2 border-bottom border-dark">{{ __('text.inst_tapplication_form', ['degree'=>$degree->deg_name]) }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="4" class="text-uppercase text-center heading py-2 border-top border-bottom border-secondary"><b>@lang('text.personal_information')</b></th>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.word_name'):</span>
                            <span style="flex:auto; color:black;">{{ $application->name??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.word_gender'):</span>
                            <span style="flex:auto; color:black;">{{ $application->gender??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.date_of_birth'):</span>
                            <span style="flex:auto; color:black;">{{ $application->dob??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.place_of_birth'):</span>
                            <span style="flex:auto; color:black;">{{ $application->pob??null }}</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.word_nationality'):</span>
                            <span style="flex:auto; color:black;">{{ $application->nationality??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.region_of_origin'):</span>
                            <span style="flex:auto; color:black;">{{ $application->_region->region??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.word_division'):</span>
                            <span style="flex:auto; color:black;">{{ $application->_division->name??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.word_address'):</span>
                            <span style="flex:auto; color:black;">{{ $application->residence??null }}</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.phone_number'):</span>
                            <span style="flex:auto; color:black;">{{ $application->phone??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.word_email'):</span>
                            <span style="flex:auto; color:black;">{{ $application->email??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.word_division'):</span>
                            <span style="flex:auto; color:black;">{{ $application->_division->name??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.special_needs'):</span>
                            <span style="flex:auto; color:black;">{{ $application->special_needs??null }}</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-uppercase text-center heading py-2 border-top border-bottom border-secondary"><b>@lang('text.additional_personal_details')</b></th>
                </tr>
                <tr>
                    <td class="border p-2" colspan="2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.emergency_name_bilang'):</span>
                            <span style="flex:auto; color:black;">{{ $program1->emergency_name??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.emergency_address_bilang'):</span>
                            <span style="flex:auto; color:black;">{{ $program2->emergency_address??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.emergency_tel_bilang'):</span>
                            <span style="flex:auto; color:black;">{{ $application->emergency_tel??null }}</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-uppercase text-center heading py-2 border-top border-bottom border-secondary"><b>@lang('text.degree_slash_diploma_study_choice')</b></th>
                </tr>
                <tr>
                    <td class="border p-2" colspan="2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.program_first_choice'):</span>
                            <span style="flex:auto; color:black;">{{ $program1->name??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.program_second_choice'):</span>
                            <span style="flex:auto; color:black;">{{ $program2->name??null }}</span>
                        </div>
                    </td>
                    <td class="border p-2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.word_level'):</span>
                            <span style="flex:auto; color:black;">{{ $application->level??null }}</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-uppercase text-center heading py-2 border-top border-bottom border-secondary"><b>@lang('text.education_qualification')</b></th>
                </tr>
                <tr>
                    <th colspan="4" class="text-uppercase text-center heading py-2 border-top border-bottom border-secondary text-secondary"><b>@lang('text.ordinary_level_results')</b></th>
                </tr>
                <tr class="text-capitalize">
                    <th class="border" colspan="2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.center_no'):</span>
                            <span style="flex:auto; color:black;">{{ $application->ol_center_number??null }}</span>
                        </div>
                    </th>
                    <th class="border">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.candidate_no'):</span>
                            <span style="flex:auto; color:black;">{{ $application->ol_candidate_number??null }}</span>
                        </div>
                    </th>
                    <th class="border">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.word_year'):</span>
                            <span style="flex:auto; color:black;">{{ $application->ol_year??null }}</span>
                        </div>
                    </th>
                </tr>
                <tr class="text-capitalize">
                    <th class="border" colspan="3">@lang('text.word_school')</th>
                    <th class="border">@lang('text.word_year')</th>
                </tr>
                @foreach (json_decode($application->ol_results)??[] as $key=>$result)
                    <tr>
                        <td class="border p-2" colspan="3">{{ $result->subject }}</td>
                        <td class="border p-2">{{ $result->grade }}</td>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="4" class="text-uppercase text-center heading py-2 border-top border-bottom border-secondary text-secondary"><b>@lang('text.advanced_level_results')</b></th>
                </tr>
                <tr class="text-capitalize">
                    <th class="border" colspan="2">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.center_no'):</span>
                            <span style="flex:auto; color:black;">{{ $application->al_center_number??null }}</span>
                        </div>
                    </th>
                    <th class="border">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.candidate_no'):</span>
                            <span style="flex:auto; color:black;">{{ $application->al_candidate_number??null }}</span>
                        </div>
                    </th>
                    <th class="border">
                        <div style="display: flex;">
                            <span style="flex:auto; color:gray; text-transform:capitalize">@lang('text.word_year'):</span>
                            <span style="flex:auto; color:black;">{{ $application->al_year??null }}</span>
                        </div>
                    </th>
                </tr>
                <tr class="text-capitalize">
                    <th class="border" colspan="3">@lang('text.word_school')</th>
                    <th class="border">@lang('text.word_year')</th>
                </tr>
                @foreach (json_decode($application->al_results)??[] as $key=>$result)
                    <tr>
                        <td class="border p-2" colspan="3">{{ $result->subject }}</td>
                        <td class="border p-2">{{ $result->grade }}</td>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="4" class="text-capitalize text-center heading py-2 border-top border-bottom border-secondary"><b>@lang('text.previous_higher_education_training')</b></th>
                </tr>
                <tr class="text-capitalize">
                    <th class="border">@lang('text.word_school')</th>
                    <th class="border">@lang('text.word_year')</th>
                    <th class="border">@lang('text.word_course')</th>
                    <th class="border">@lang('text.word_certificate')</th>
                </tr>
                @foreach (json_decode($application->previous_training)??[] as $key=>$training)
                    <tr>
                        <td class="border p-2">{{ $training->school }}</td>
                        <td class="border p-2">{{ $training->year }}</td>
                        <td class="border p-2">{{ $training->course }}</td>
                        <td class="border p-2">{{ $training->certificate }}</td>
                    </tr>
                @endforeach
                
                
            </tbody>
        </table>

        
        
        <div class="py-2 mx-5">
            {{-- <h4 class="text-dark my-4 text-uppercase" style="font-weight: 700;">{{ __('text.admission_information') }}</h4> --}}
            <div class=" py-2 text-dark" style="font-size: 1.5rem;">
                <div class="row"><b class="text-primary d-block py-2 col-sm-12 text-uppercase">{{ $campus->name??null }}</b></div>
                @foreach ($application->campus_banks()->get() as $bank)
                    <div class="d-flex flex-wrap justify-content-between border-bottom"><span class="flex-1 w-50">FACULTY:</span> <b class="col-sm-12 col-md-8 text-uppercase">{{ $bank->faculty??null }}</b>.</div>
                    <div class="d-flex flex-wrap justify-content-between border-bottom"><span class="flex-1 w-50">BANK:</span> <b class="col-sm-12 col-md-8 text-uppercase">{{ $bank->bank_name??null }}</b>.</div>
                    <div class="d-flex flex-wrap justify-content-between border-bottom"><span class="flex-1 w-50">ACCOUNT NAME/ NOM DE COMPTE:</span> <b class="col-sm-12 col-md-8 text-uppercase">{{ $bank->account_name??null }}</b></div>
                    <div class="d-flex flex-wrap justify-content-between border-bottom"><span class="flex-1 w-50">ACCOUNT NO/ DE COMPTE:</span> <b class="col-sm-12 col-md-8 text-uppercase">{{ $bank->account_number??null }}</b></div>
                    <hr>
                @endforeach

                <div class="border-bottom py-2">
                    <p class=" py-1">Request a receipt for every amount paid at the bank and present it in school alongside a photocopy for cross
                    checking. <b>Yourapplication shan only be processed upon payment of the Application fee</b>. Toujours demander
                    un reçu pour chaque montant paye a la banque et le presenter a l'ecoomat de l'institute avec deux (02) photocopies
                    pour verification. <b>Votre demande ne sera traitée qu'apres paiement (a la banque) des frais de dossier
                    Admission Criteria /Criteres</b></p>
                    <p class=" py-1">We admit science students With <b>2-25 points</b> in any of the departments of the St Louis of Medical Studies and the
                    Institute of Engineering and Technology. study. Art students are usually admitted With <b>4-25 points</b> and can onlv
                    study Nursing or Midwifery.</p>
                    <p class=" py-1">We shall exceptionally admit arts students With <b>2 points</b> especially earned in the social sciences like <b>Economics</b>
                    and <b>Geography</b>. This admission is <b>conditional and they must prove their worth</b> and stay along With the rest of
                    the class otherwise they will be discontinued at the end of the year.</p>
                    <p class=" py-1"><b>Les candidats avec un BACC scientifique peuvent être admis dans toutes les filières de l'Institut Médicales
                    et de Technologie. Nous admettons ceux qui ont le BACC GI, G3 et A, uniquement dans les programmes
                    suivants ; Soins Infirmier, Sage-Femme ou Agriculture. Cette admission est conditionnelle et ces candidats
                    devront prouver leur valeur en avançant avec le reste de la promotion sinon a la fin de l'année ils seront
                    conseiller de se retirer.</b></p>
                </div>
            </div>
        </div>        
    </div>
@endsection