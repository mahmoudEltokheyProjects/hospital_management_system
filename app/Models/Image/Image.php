<?php

namespace App\Models\Image;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    /*  =============== imageable() ===============
        get the parent imageable model (Doctor , Patient , ...)
    */
    public function imageable()
    {
        return $this->morphTo();
    }
}
