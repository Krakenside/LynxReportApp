<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    public function Client()
    {
        return $this->belongsTo(Client::class);
    }
    public function TypeIntervention()
    {
        return $this->hasMany(TypeIntervention::class);
    }
    public function Technicien()
    {
        return $this->belongsTo(Technicien::class);
    }

    public function Maintenance()
    {
        return $this->hasMany(Maintenance::class);
    }
}
