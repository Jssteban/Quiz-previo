<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckModel extends Model
{
    use HasFactory;

    protected $table = 'truck';
    protected $guarded = [];

    public function truck_driver(){
        return $this->belongsToMany(TruckModel::class,'truck_driver_id');
    }
}
