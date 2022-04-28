<?php

namespace App\Models;

use App\Models\Company_types;
use App\Models\Company_sectors;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $guarded = ['id'];



    // fungsi untuk membentuk kardinalitas tiap tabel
    public function Sectors(){
        return $this->belongsTo(Company_sectors::class,'company_sector_id');
    }
    public function Types(){
        return $this->belongsTo(Company_types::class,'company_type_id');
    }
}
