<?php

namespace App\Models;

use App\Models\Maintenance as ModelsMaintenance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    // protected
    public function TypeMaintenance()
    {
        return $this->belongsTo(ModelsMaintenance::class);
    }

    public function Rapports()
    {
        return $this->hasMany(Rapport::class);
    }
}
