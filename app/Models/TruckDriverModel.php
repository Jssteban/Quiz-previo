<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckDriverModel extends Model
{
    use HasFactory;
    protected $table = 'truck_driver';
    protected $guarded = [];

    public function truck(){
        return $this->belongsToMany(TruckModel::class,'truck_driver_id');
    }
    public function package(){
        return $this->hasMany(PackageModel::class,'truck_driver_id');
    }
}
