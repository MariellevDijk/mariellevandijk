<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';

    public function getTypesAttribute($value): Array
    {
        return json_decode($value, true);
    }
}
