<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    //
    protected $fillable = [
        'Title',
        'Description',
        'statut',
        'date_debut',
        'date_fin',
        'incident_id',
        'user_id',


    ];
    public function Signalement()
    {
        return $this->belongsTo(Declencheur::class, 'incident_id', 'id');
    }
    public function Technicien()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
