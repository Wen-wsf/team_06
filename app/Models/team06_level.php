<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team06_level extends Model
{
    use HasFactory;

    public function typhoons()
    {
        return $this->hasMany('App\Models\team06_typhoon', 'powerLV', 'id');
    }
    public function delete()
    {
        $this->typhoons()->delete();
        return parent::delete();
    }

}
