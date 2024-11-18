<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes; 
    protected $table = 'students';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'full_name',
        'nis',
        'class_id',
        'parent_id',
        'date_of_birth',
        'address',
        'phone_number',
    ];

    
}
