<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    //
    protected $fillable = [
        'intitule',
        'description',
        'statut',
        'date_action',
        'dateH_deb',
        'dateH_fin',
        'type_action',
        'id_signalement',
        'id_TechExec'
    ];
    public function Signalement()
    {
        return $this->belongsTo(Declencheur::class, 'id_signalement', 'id');
    }
    public function Technicien()
    {
        return $this->belongsTo(User::class, 'id_TechExec', 'id');
    }
}
