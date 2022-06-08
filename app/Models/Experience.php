<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experience';

    public function getStackAttribute($value): Array
    {
        return json_decode($value, true);
    }

    public function getTypesAttribute($value): Array
    {
        return json_decode($value, true);
    }
}
