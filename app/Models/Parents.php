<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parents extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'parents';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'parent_full_name',
        'address',
        'job',
        'phone_number',
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
