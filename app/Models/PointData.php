<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PointData extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'point_datas';
    protected $primarykey = 'id';
    protected $fillable =[
        'id',
        'violation'
    ];

}
