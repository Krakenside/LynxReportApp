<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    //
    protected $fillable = [
        'titre',
        'contenu',
        'id_intervention'
    ];
    public function Intervention()
    {
        return $this->belongsTo(Intervention::class, 'id_intervention', 'id');
    }
}
