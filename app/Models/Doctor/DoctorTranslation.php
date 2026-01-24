<?php

namespace App\Models\Doctor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorTranslation extends Model
{
    use HasFactory;

    public $fillable = ['name','appointments'];
    public $table="doctor_translations";
    public $timestamps = false;

}
