<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievement extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'achievements';
    protected $primarykey = 'achievement_id';
    protected $fillable =[
        'student_id',
        'achievement_name',
        'achievement_date',
        'achievement_level',
        'achievement_category',
        'achievement_status'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
