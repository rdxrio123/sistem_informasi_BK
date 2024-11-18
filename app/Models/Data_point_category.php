<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data_point_category extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'data_point_categories';
    protected $primarykey = 'category_id';
    protected $fillable =[
        
        'category_of_violatin',
        'category_score_min',
        'category_score_max'



];

}
