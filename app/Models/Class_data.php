<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Class_data extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'class_datas';
    protected $primarykey = 'school_class_id';
    protected $fillable =
    [
        'school_class_name',
        'school_class_major',
    ];

}
