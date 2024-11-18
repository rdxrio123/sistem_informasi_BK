<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Case_study extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'case_studies';
    protected $primarykey = 'case_study_id';
    protected $fillable =[
    'point_id',
    'student_id'
];

}
