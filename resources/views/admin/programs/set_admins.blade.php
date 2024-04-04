@extends('admin.layout')
@section('section')
    <div class="w-100">
        <form method="post">
            <div class="card bg-light">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col-sm-4 col-lg-3 text-secondary text-capitalize">@lang('text.word_chancellor')</div>
                        <div class="col-sm-8 col-lg-9"><input type="text" class="form-control" name="chancellor" id="" value="{{ $admins->chancellor??null }}"></div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-4 col-lg-3 text-secondary text-capitalize">@lang('text.pro_chancellor')</div>
                        <div class="col-sm-8 col-lg-9"><input type="text" class="form-control" name="pro_chancellor" id="" value="{{ $admins->pro_chancellor??null }}"></div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-4 col-lg-3 text-secondary text-capitalize">@lang('text.vice_chancellor')</div>
                        <div class="col-sm-8 col-lg-9"><input type="text" class="form-control" name="vice_chancellor" id="" value="{{ $admins->vice_chancellor??null }}"></div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-4 col-lg-3 text-secondary text-capitalize">@lang('text.DVC_academic_affairs_and_research')</div>
                        <div class="col-sm-8 col-lg-9"><input type="text" class="form-control" name="dvc_academic" id="" value="{{ $admins->dvc_academic??null }}"></div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-4 col-lg-3 text-secondary text-capitalize">@lang('text.DVC_administration_and_finanace')</div>
                        <div class="col-sm-8 col-lg-9"><input type="text" class="form-control" name="dvc_admin" id="" value="{{ $admins->dvc_admin??null }}"></div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-4 col-lg-3 text-secondary text-capitalize">@lang('text.DVC_cooperation_and_innovation')</div>
                        <div class="col-sm-8 col-lg-9"><input type="text" class="form-control" name="dvc_coop" id="" value="{{ $admins->dvc_coop??null }}"></div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-4 col-lg-3 text-secondary text-capitalize">@lang('text.word_registrar')</div>
                        <div class="col-sm-8 col-lg-9"><input type="text" class="form-control" name="registrar" id="" value="{{ $admins->registrar??null }}"></div>
                    </div>
                    <div class="d-flex justify-content-end py-2">
                        <button type="submit" class="btn btn-primary btn-xs rounded">@lang('text.word_update')</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection