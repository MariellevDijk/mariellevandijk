<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';

    public function getTypesAttribute($value)
    {
        return json_decode($value);
    }
}
