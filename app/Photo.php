<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file'];

    protected $photo_base_dir = '/images/';

    protected $default_photo = '150.png';

    public function getFileAttribute($photo)
    {
        return $this->photo_base_dir . $photo;
    }
}
