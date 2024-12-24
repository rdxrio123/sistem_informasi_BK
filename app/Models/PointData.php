<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PointData extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'point_datas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'violation',
        'point_number',
    ];

    public function caseStudy()
    {
        return $this->hasMany(CaseStudy::class);
    }
}
