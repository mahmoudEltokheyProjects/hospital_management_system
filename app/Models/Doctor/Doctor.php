<?php

namespace App\Models\Doctor;

use App\Models\Image\Image;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;
    use Translatable;

    public $table="doctors";
    public $fillable = ['email','email_verified_at','phone','price','password'];
    public $translatedAttributes = ['name','appointments'];

    // ======================== Relationships ========================
        /* ++++++++++++++++++ image() ++++++++++++++++++
            - parameter 1 : "Model Name" of 'images table'
            - parameter 2 : "relationship function name" in "Image model"
            - one to one relationship : polymorphic
            - make table for images
        */
        public function image()
        {
            return $this->morphOne(Image::class,'imageable');
        }
}
