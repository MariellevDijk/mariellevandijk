<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experience';

    public function getStackAttribute($value)
    {
        return json_decode($value);
    }

    public function getTypesAttribute($value)
    {
        return json_decode($value);
    }
}
