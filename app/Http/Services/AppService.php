<?php
namespace App\Http\Services;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Http;
use App\Http\Services\ApiService;
use App\Models\ApplicationForm;
use App\Models\Config;
use App\Models\ProgramAdmin;
use Barryvdh\DomPDF\Facade\Pdf;

class AppService{

    protected $api_service;
    public function __construct(ApiService $apiServce) {
        $this->api_service = $apiServce;
    }

    public function admission_letter($appl_id)
    {
        # code...
        $appl = ApplicationForm::find($appl_id);
        if($appl != null){
            $programs = collect(json_decode($this->api_service->programs())->data);
            $campus = collect(json_decode($this->api_service->campuses())->data)->where('id', $appl->campus_id)->first()??null;
            $program = $programs->where('id', $appl->program_first_choice)->first()??null;
            $department = $programs->where('id', $program->parent_id)->first()??null;
            $degree = collect(json_decode($this->api_service->degrees())->data)->where('id', $appl->degree_id)->first()??null;
            $config = Config::where('year_id', Helpers::instance()->getCurrentAccademicYear())->first();
            
            // get program admins
            $admins = ProgramAdmin::first();
            if ($admins == null) {
                # code...
                session()->flash('error', 'Administrators not yet set for this program');
                return back()->withInput();
            }
            
            // get program fee settings
            $fees = $this->api_service->class_portal_fee_structure($appl->program_first_choice, $appl->level)['data'];
            // dd($fees);
            // if($fees == null){
            //     session()->flash('error', 'Fees not set for this program. Contact school system for fee settings');
            //     return back()->withInput();
            // }

            // dd($fees);

            $data['platform_links'] = [];
           
            $data['year'] = substr($appl->year->name, -4);
            // dd($data);
            $data['title'] = "ADMISSION LETTER";
            $data['name'] = $appl->name;
            $data['matric'] =  $appl->matric;
            $data['start_of_lectures'] = $config->start_of_lectures;
            $data['school_email'] = $appl->email??'';
            $data['help_email'] =  $config->help_email;
            $data['campus'] = $campus->name??null;
            $data['degree'] = ($program->deg_name??null) == null ? ($program->name??"") : $program->deg_name;
            $data['program'] = str_replace($data['degree'], ' ', $program->name??"");
            $data['_program'] = $program;
            $data['matric_sn'] = substr($appl->matric, -3);
            $data['department'] = $department->name??'-------';
            $data['fee'] = $fees[0]??$fees;
            // dd($program);
            if($data['degree'] ==  null){
                session()->flash('error', 'Program Degree Name not set');
                return back()->withInput();
            }
    
            // return view('admin.student.admission_letter', $data);
            $pdf = Pdf::loadView('admin.student.admission_letter', $data);
            return $pdf->download($appl->matric.'_ADMISSION_LETTER.pdf');            
        }
    }

    public function application_form($application_id)
    {
        # code...
        $application = ApplicationForm::find($application_id);
        $data['surname'] = strtok($application->name, ' ');
        $data['gname'] = substr($application->name, strlen($data['surname']));
        // dd($data);
        $data['campuses'] = json_decode($this->api_service->campuses())->data;
        $data['application'] = ApplicationForm::find($application_id);
        $data['degree'] = collect(json_decode($this->api_service->degrees())->data??[])->where('id', $data['application']->degree_id)->first();
        $data['campus'] = collect($data['campuses'])->where('id', $data['application']->campus_id)->first();
        $data['certs'] = json_decode($this->api_service->certificates())->data;
        
        $data['cert'] = collect($data['certs'])->where('id', $data['application']->entry_qualification)->first();
        $data['program1'] = json_decode($this->api_service->programs($data['application']->program_first_choice))->data;
        $data['program2'] = json_decode($this->api_service->programs($data['application']->program_second_choice))->data;
        
        $fees = $this->api_service->class_portal_fee_structure($application->program_first_choice, $application->level)['data'];
        // if($fees == null){
        //     session()->flash('error', 'Fees not set for this program. Contact school system for fee settings');
        //     return back()->withInput();
        // }
        $data['fee'] = $fees[0]??$fees;
        // dd($data['fee']);

        // $title = $application->degree??''.' APPLICATION FOR '.$application->campus->name??' --- '.' CAMPUS';
        $title = __('text.inst_tapplication_form', ['degree'=>$data['degree']->deg_name]);
        $data['title'] = $title;

        // if(in_array(null, array_values($data))){ return redirect(route('student.application.start', [0, $application_id]))->with('message', "Make sure your form is correctly filled and try again.");}
        // return view('student.online.form_dawnloadable', $data);
        $pdf = PDF::loadView('student.online.form_dawnloadable', $data);
        $filename = $title.' - '.$application->name.'.pdf';
        return $pdf->download($filename);
    }
}