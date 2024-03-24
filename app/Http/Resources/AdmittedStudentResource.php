<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class AdmittedStudentResource{


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request){
        return [
            'name'=>$this->name??null, 
            'email'=>$this->email??null, 
            'phone'=>$this->phone??null,
            'residence'=>$this->residence??null, 
            'gender'=>$this->gender??null,
            'matric'=>$this->matric??null, 
            'dob'=>$this->dob??null, 
            'pob'=>$this->pob??null,
            'campus_id'=>$this->campus_id??null, 
            'admission_batch_id'=>$this->year_id??null,
            'fee_payer_name'=>$this->fee_payer_name??null, 
            'program_first_choice'=>$this->program_first_choice??null, 
            'region'=>$this->_region->name??null,
            'fee_payer_tel'=>$this->fee_payer_tel??null, 
            'division'=>$this->_division->name??null
        ];
    }
    
}