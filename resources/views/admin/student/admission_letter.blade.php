@extends('admin.printable2')
@section('section')
    <div class="py-2">
        <span class="text-sm text-secondary text-capitalize">@lang('text.authorization_no'): {{ $auth_no??'----' }}</span>
        <hr class="border-bottom border-4 my-0 border-dark">
        <div class="row m-0">
            <div class="col-sm-3 col-lg-3 border-right border-4 my-0 border-dark">
                <div class="row container-fluid">
                    <div class="my-2 py-2 col-sm-12 col-md-12 text-capitalize">
                        <b>@lang('text.word_chancellor')</b><br>
                        {{ $chancellor??'' }}
                    </div>
                    <div class="my-2 py-2 col-sm-12 col-md-12 text-capitalize">
                        <b>@lang('text.pro_chancellor')</b><br>
                        {{ $p_chancellor??'' }}
                    </div>
                    <div class="my-2 py-2 col-sm-12 col-md-12 text-capitalize">
                        <b>@lang('text.vice_chancellor')</b><br>
                        {{ $v_chancellor??'' }}
                    </div>
                    <div class="my-2 py-2 col-sm-12 col-md-12 text-capitalize">
                        <b>@lang('text.DVC_academic_affairs_and_research')</b><br>
                        {{ $dvc1??'' }}
                    </div>
                    <div class="my-2 py-2 col-sm-12 col-md-12 text-capitalize">
                        <b>@lang('text.DVC_administration_and_finanace')</b><br>
                        {{ $dvc2??'' }}
                    </div>
                    <div class="my-2 py-2 col-sm-12 col-md-12 text-capitalize">
                        <b>@lang('text.DVC_cooperation_and_innovation')</b><br>
                        {{ $dvc3??'' }}
                    </div>
                    <div class="my-2 py-2 col-sm-12 col-md-12 text-capitalize">
                        <b>@lang('text.word_registrar')</b><br>
                        {{ $registrar??'' }}
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-lg-9">
                <div class="d-flex my-3 py-2 justify-content-between">
                    <b>
                        <span class="text-capitalize">@lang('text.your_ref')</span>: _______________________ <br><br>
                        <span class="text-capitalize">@lang('text.our_ref')</span>:  <span style="">BUIB/AL/{{ $_program->prefix??'' }}/{{ $matric_sn??'' }}</span>
                    </b>
                    <b>
                        <span class="text-capitalize">@lang('text.word_date')</span>: <span style="text-decoration: underline;">{{ "  ".now()->format('d/m/Y')."  " }}</span>
                    </b>
                </div>
                <div class="my-3 py-2 text-capitalize">
                    <span>@lang('text.dear_titles') : <b>{{ $name??'' }}</b></span><br>
                    <span>@lang('text.matriculation_number') : <b>{{ $matric??'' }}</b></span>
                </div>
                <div class="my-3 py-2 text-uppercase">
                    <b>@lang('text.offer_of_admission')</b>
                </div>
                <div class="my-3 py-2">
                    <span>@lang('text.admission_letter_text_block1', ['degree'=>$degree])</span>
                </div>
                <div class="my-3 py-2">
                    <span>@lang('text.the_tution_fee_amount_should_be_paid_at'):</span><br>
                    <ul style="list-style-type: disc; margin-left:2rem; padding-left:2rem;">
                        <li><span class="text-capitalize">@lang('text.bank_name'):</span> <b class="text-uppercase">{{ $bank_name??'' }}</b></li>
                        <li><span class="text-capitalize">@lang('text.account_name'):</span> <b class="text-uppercase">{{ $bank_account_name??'' }}</b></li>
                        <li><span class="text-capitalize">@lang('text.account_number'):</span> <b class="text-uppercase">{{ $bank_account_number??'' }}</b></li>
                    </ul>
                </div>
                <div class="my-3 py-2">
                    <span>@lang('text.at_registration_you_will_be_expected_to_do_the_following'):</span><br>
                    <ul style="list-style-type: disc; margin-left:2rem; padding-left:2rem;">
                        <li>@lang('text.present_receipts_of_payment_of_registration_fees')</li>
                        <li>@lang('text.present_originals_of_certificates')</li>
                        <li>@lang('text.present_fee_receipts')</li>
                    </ul>
                </div>
                <div class="my-3 py-2">
                    <span>@lang('text.offer_revoked_if'):</span><br>
                    <ul style="list-style-type: disc; margin-left:2rem; padding-left:2rem;">
                        <li>@lang('text.you_cannot_produce_docs_on_time')</li>
                        <li>@lang('text.you_are_unable_to_satisfy_necessary_requirements')</li>
                    </ul>
                </div>
                <div class="my-3 py-2">
                    <span>@lang('text.registration_commences_after_admission')</span>
                </div>
                <div class="my-3 py-2">
                    <b>@lang('text.start_of_lectures'): {{ $start_of_lectures??'' }}</b>
                </div>
                <div class="my-3 py-2">
                    <b>N.B:</b><br>
                    <ul style="list-style-type: disc; margin-left:2rem; padding-left:4rem;">
                        <li>@lang('text.admission_letter_NB1')</li>
                        <li>@lang('text.only_registered_students_will_be_allowed_in_class')</li>
                        <li>@lang('text.fee_paid_is_non_refundable')</li>
                    </ul>
                </div>
                <div class="my-3 py-2">
                    <b class="text-uppercase" style="text-decoration:underline; ">@lang('text.word_uniforms')</b><br>
                    <ul style="list-style-type: disc; margin-left:2rem; padding-left:4rem;">
                        <li>@lang('text.see_school_for_design')</li>
                    </ul>
                </div>
                <div class="my-3 py-2">
                    <b class="text-uppercase" style="text-decoration:underline; ">@lang('text.word_shoe')</b><br>
                    <ul style="list-style-type: disc; margin-left:2rem; padding-left:4rem;">
                        <li>@lang('text.shoe_specification1')</li>
                    </ul>
                </div>
                <div class="my-3 py-2">
                    <b class="text-uppercase" style="text-decoration:underline; ">@lang('text.school_needs')</b><br>
                    <ul style="list-style-type: disc; margin-left:2rem; padding-left:4rem;">
                        <li>@lang('text.two_ream_of_papers_to_submit')</li>
                    </ul>
                </div>
                <div class="my-3 py-2">
                    <b class="text-uppercase" style="text-decoration:underline; ">@lang('text.sport_out_fit')</b><br>
                    <ul style="list-style-type: disc; margin-left:2rem; padding-left:4rem;">
                        <li>@lang('text.white_tshirts')</li>
                        <li>@lang('text.tennis_shoe')</li>
                        <li>@lang('text.blue_shorts')</li>
                    </ul>
                </div>
                <div class="my-3 py-2">
                    <b class="text-uppercase" style="text-decoration:underline; ">@lang('text.practical_equipment')</b><br>
                    <ul style="list-style-type: disc; margin-left:2rem; padding-left:4rem;">
                        <li>@lang('text.bp_therm')</li>
                        <li>@lang('text.surgical_sss')</li>
                    </ul>
                </div>
                <div class="my-3 py-2">
                    <b class="text-uppercase" style="text-decoration:underline; ">@lang('text.book_list')</b><br>
                    <ul style="list-style-type: disc; margin-left:2rem; padding-left:4rem;">
                        <li>@lang('text.to_be_obtained_from_the_department')</li>
                    </ul>
                </div>
                <div class="my-3 py-2">
                    <span>@lang('text.admission_letter_summary_welcome_phrase')</span>
                </div>
                <div class="my-3 py-2">
                    <span class="text-capitalize">@lang('text.yours_sincerely')</span>,
                </div>
                <div class="my-3 py-2">
                    <div style="display:flex; justify-content:space-between">
                        <div class="text-center">
                            ___________________________ <br>
                            <b class="my-1 py-1 d-block">{{ $registrar??'' }}</b> <br>
                            <b class="text-capitalize">@lang('text.word_registrar')</b>
                        </div>
                        <div class="">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/signature.png') }}" alt="" srcset="" style="height:16rem; width:20rem; position:absolute; bottom:-60%; left: -45%;">
                                <img src="{{ asset('assets/images/stamp.png') }}" alt="" srcset="" style="height:12rem; width:15rem;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection