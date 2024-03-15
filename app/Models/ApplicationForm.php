<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $fillable = [
        'student_id', 'year_id', 'gender', 'name', 'dob', 'pob', 'residence', 'phone', 'email',
        'program_first_choice', 'program_second_choice', 'special_needs', 'ol_results', 'al_results', 
        'matric', 'candidate_declaration', 'parent_declaration', 'campus_id', 'degree_id', 'transaction_id', 'admitted',
        'emergency_name', 'emergency_address', 'emergency_tel', 'previous_training', 'level'
    ];

    public function student()
    {
        # code...
        return $this->belongsTo(Students::class, 'student_id');
    }

    public function transaction()
    {
        # code...
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

    public function year()
    {
        # code...
        return $this->belongsTo(Batch::class, 'year_id');
    }

    public function _region()
    {
        # code...
        return $this->belongsTo(Region::class, 'region');
    }

    public function _division()
    {
        # code...
        return $this->belongsTo(Division::class, 'division');
    }

    public function campus_banks()
    {
        return CampusBank::where('campus_id', $this->campus_id);
    }

}
