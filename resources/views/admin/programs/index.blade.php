@extends('admin.layout')
@section('section')
    <div class="w-100">
        <div id="accordion" class="panel-group">
            <table class="border">
                <thead><tr class="text-capitalize border-bottom">
                    <th class="border-left border-right">{{ __('text.sn') }}</th>
                    <th class="border-left border-right">{{ __('text.word_program') }}</th>
                    <th class="border-left border-right"></th>
                </tr></thead>
                <tbody>
                    @php($k = 1)
                    @foreach ($programs??[] as $program)
                    <tr class="border-bottom">  
                        <td class="border-left border-right">{{ $k++ }}</td>
                        <td class="border-left border-right">{{ $program->name }}</td>
                        <td class="border-left border-right">
                            <a href="{{ route('admin.programs.set_admins', $program->id) }}" class="btn btn-sm rounded btn-primary">@lang('text.word_administrators')</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection