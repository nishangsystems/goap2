@extends('admin.printable2')
@section('section')
    <div class="py-2 container-fluid">
        <h3 class="text-uppercase"><b>{{ $title }}</b></h3>
        <hr class="border-bottom border-4 my-0 border-dark">
        <div style="font-size: large;">
            
            <div class="my-3 py-2 text-capitalize">
                <span>{!!  __('text.dear_titles') !!} : <b>{{ $name??'' }}</b></span><br>
            </div>
            <div class="my-3 py-2">
                <span>{!! __('text.admission_letter_text_block1', ['degree'=>$degree??'DEG', 'department'=>$fee['department']??'DEP', 'matric'=>$matric ,'start_of_lectures'=>$start_of_lectures, 'school_email'=>$school_email]) !!}</span>
            </div>
            
            
            <div class="my-4 py-3 text-capitalize">
                <span>@lang('text.word_sincerely')</span>
            </div>
            <div class="my-4 py-3 text-capitalize">
                <span>@lang('text.word_registrar')</span>
            </div>
        </div>
    </div>
@endsection