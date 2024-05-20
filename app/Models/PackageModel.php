<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model
{
    use HasFactory;

    protected $table = 'package';
    protected $guarded = [];

    public function truck_driver(){
        return $this->belongsTo(TruckModel::class,'truck_driver_id');
    }
}
