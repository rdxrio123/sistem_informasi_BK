<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassData extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'class_datas';
    protected $primarykey = 'id';
    protected $fillable =
    [
        'id',
        'school_class_name',
        'school_class_major',
    ];

}
