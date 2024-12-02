<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaseStudy extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'case_studies';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'point_id',
        'student_id'
    ];
}
