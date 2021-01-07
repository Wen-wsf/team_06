<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team06_typhoon extends Model
{
    use HasFactory;

    public function scopeAllData($query)
    {
        $query->join('team06_levels','team06_typhoons.powerLV','=','team06_levels.id')
            ->orderBy('team06_typhoons.id')
            ->select(
                'team06_typhoons.year',
                'team06_typhoons.id',
                'team06_typhoons.name',
                'team06_typhoons.powerLV',
                'team06_typhoons.arrived',
                'team06_levels.description',
                'team06_levels.id',
                'team06_typhoons.level',
                'team06_typhoons.created_at',
                'team06_typhoons.updated_at');
    }
    public function scopeSenior($query)
    {
        $query->join('team06_levels','team06_typhoons.powerLV','=','team06_levels.id')
            ->where('year', '<', 2020)
            ->orderBy('year')
            ->select(
                'team06_typhoons.year',
                'team06_typhoons.id',
                'team06_typhoons.name',
                'team06_typhoons.powerLV',
                'team06_typhoons.arrived',
                'team06_levels.description',
                'team06_levels.id',
                'team06_typhoons.level',
                'team06_typhoons.created_at',
                'team06_typhoons.updated_at');
    }
    public function scopepowerLV($query,$request)
    {
        $query->where('year', '=', $request->year)
            ->orderBy('year')
            ->select(
                'team06_typhoons.year',
                'team06_typhoons.id',
                'team06_typhoons.name',
                'team06_typhoons.powerLV',
                'team06_typhoons.arrived',
                'team06_typhoons.level',
                'team06_typhoons.created_at',
                'team06_typhoons.updated_at');
    }
    public function scopeAllYears($query)
    {
        $query->select('year')->groupBy('year');
    }

    public function strength()
    {
        return $this->belongsTo('App\Models\team06_level', 'powerLV', 'id');
    }
}
