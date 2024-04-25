@extends('student.printable')
@section('section')
    <table class="py-1 container"  style="font-size: large; table-layout: auto;">
        <tbody>
            <tr>
                <th colspan="2" class="border-top border-bottom heading font-weight-semibold my-1 py-3 px-3 text-uppercase text-secondary border-secondary">1. @lang('text.personal_details_bilang')</th>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.word_gender_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $application->gender??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.word_surname_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $surname??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.word_name_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $gname??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.date_of_birth_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $application->dob??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.place_of_birth_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $application->pob??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.region_of_origin'):</td>
                <td class="text-uppercase text-secondary">{{ $application->_region->region??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.word_division_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $application->_division->name??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.word_nationality_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $application->nationality??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.marital_status'):</td>
                <td class="text-uppercase text-secondary">{{ $application->marital_status??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.name_of_spouse'):</td>
                <td class="text-uppercase text-secondary">{{ $application->name_of_spouse??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.word_religion'):</td>
                <td class="text-uppercase text-secondary">{{ $application->religion??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.word_denomination'):</td>
                <td class="text-uppercase text-secondary">{{ $application->denomination??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.phone_number_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $application->phone??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.word_email_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $application->email??'' }}</td>
            </tr>
            <tr>
                <th colspan="2" class="border-top border-bottom heading font-weight-semibold py-3 px-3 my-1 text-uppercase text-secondary border-secondary">2. @lang('text.additional_personal_details')</th>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.father_name'):</td>
                <td class="text-uppercase text-secondary">{{ $application->father_name??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.mother_name'):</td>
                <td class="text-uppercase text-secondary">{{ $application->mother_name??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.guardian_address'):</td>
                <td class="text-uppercase text-secondary">{{ $application->guardian_address??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.guardian_occupation'):</td>
                <td class="text-uppercase text-secondary">{{ $application->parent_occupation??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.parents_phone_number'):</td>
                <td class="text-uppercase text-secondary">{{ $application->parent_phone??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.emergency_tel_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $application->emergency_tel??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.student_mailing_address_if_different'):</td>
                <td class="text-uppercase text-secondary">{{ $application->student_mailing_address??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.extra_curricula_activities_eg_sports_hobbies'):</td>
                <td class="text-uppercase text-secondary">{{ $application->extra_curricula_activities??'' }}</td>
            </tr>
            <tr>
                <th colspan="2" class="border-top border-bottom heading font-weight-semibold py-3 px-3 my-1 text-uppercase text-secondary border-secondary">3. @lang('text.course_envisaged_bilang')</th>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.first_choice_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $program1->name??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.second_choice_bilang'):</td>
                <td class="text-uppercase text-secondary">{{ $program2->name??'' }}</td>
            </tr>
            <tr class="my-2 border-bottom border-light">
                <td class="text-capitalize text-black">@lang('text.word_level'):</td>
                <td class="text-uppercase text-secondary">{{ $application->level??'' }}</td>
            </tr>
            <tr>
                <th colspan="2" class="border-top border-bottom heading font-weight-semibold py-3 px-3 my-1 text-capitalize text-secondary border-secondary">3. @lang('text.application_form_docs_heading'):</th>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="container-fluid">
                        <label class="text-black"> <span> &raquo;</span> @lang('text.application_form_doc1')</label>
                    </div>
                    <div class="container-fluid">
                        <label class="text-black"> <span> &raquo;</span> @lang('text.application_form_doc2')</label>
                    </div>
                    <div class="container-fluid">
                        <label class="text-black"> <span> &raquo;</span> @lang('text.application_form_doc3')</label>
                    </div>
                    <div class="container-fluid">
                        <label class="text-black"> <span> &raquo;</span> @lang('text.application_form_doc4')</label>
                    </div>
                    <div class="container-fluid">
                        <label class="text-black"> <span> &raquo;</span> @lang('text.application_form_doc5')</label>
                    </div>
                    <div class="container-fluid">
                        <label class="text-black"> <span> &raquo;</span> @lang('text.application_form_doc6', ['application_fee'=>$degree->amount??'5000', 'registration_fee'=>$fee->registration??'15000'])</label>
                    </div>
                    <div class="container-fluid">
                        <label class="text-black"> <span> &raquo;</span> @lang('text.application_form_doc7')</label>
                    </div>
                    <div class="container-fluid">
                        <label class="text-uppercase text-black" style="font-weight: bold"> @lang('text.application_form_docs_hint')</label>
                    </div>
                    <div class="container-fluid my-4">
                        <label class="text-black"> <span style="font-weight: bold">NB</span>: @lang('text.fitness_note')</label>
                    </div>
                    <div class="container-fluid">
                        <label class="text-black"> @lang('text.affirm_correctness', ['name'=>$application->name??''])</label>
                    </div>
                </td>
            </tr>
            <tr class="my-5 py-2">
                <th>
                    <div class="text-center text-capitalize">
                        <span>____________________________</span><br> @lang('text.word_signature')
                    </div>
                </th>
                <th><label class="text-black"> {{ now()->format('d-m-Y') }} </label></th>
            </tr>
        </tbody>

    </table>
@endsection