<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaseStudy extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'case_studies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'point_number',
        'student_id',
    ];

    public function datapoint()
    {
        return $this->belongsTo(PointData::class, 'point_number', 'id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
