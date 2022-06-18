<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // fungsi untuk membentuk kardinalitas tiap tabel
    public function Data_user(){
        return $this->belongsTo(User::class,'users_id');
    }
    public function Data_job(){
        return $this->belongsTo(Job::class,'jobs_id');
    }
    public function Data_comp(){
        return $this->belongsTo(Company::class,'companies_id');
    }
}
