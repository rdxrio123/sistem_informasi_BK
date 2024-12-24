<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'full_name',
        'nis',
        'class_id',
        'parent_id',
        'date_of_birth',
        'address',
        'phone_number'
    ];

    public function class()
    {
        return $this->belongsTo(ClassData::class);
    }

    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }

    public function casestudy()
    {
        return $this->hasMany(CaseStudy::class);
    }
    public function achievement()
    {
        return $this->hasMany(Achievement::class);
    }
}
