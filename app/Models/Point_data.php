<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Point_data extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'point_datas';
    protected $primarykey = 'point_id';
    protected $fillable =['violation'];

}