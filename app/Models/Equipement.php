<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    //
    protected $fillable = [
        'num_serie',
        'libelle',
        'marque',
        'prix_achat',
        'prix_vente',
        'intervention_Id'
    ];

    public function Intervention()
    {
        return $this->belongsTo(Intervention::class, 'intervention_Id', 'id');
    }
}
