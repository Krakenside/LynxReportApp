<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    public function Client()
    {
        return $this->hasOne(Rapport::class);
    }
    public function TypeIntervention()
    {
        return $this->hasMany(TypeIntervention::class);
    }
    public function Technicien(){
        return $this->hasOne(Rapport::class);
    }
}
