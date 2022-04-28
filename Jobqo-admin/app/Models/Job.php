<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // fungsi untuk membentuk kardinalitas tiap tabel
    public function Categories(){
        return $this->belongsTo(Job_categories::class,'job_category_id');
    }
    public function Positions(){
        return $this->belongsTo(Job_positions::class,'job_position_id');
    }
    public function AsalJob(){
        return $this->belongsTo(Company::class,'company_id');
    }
}