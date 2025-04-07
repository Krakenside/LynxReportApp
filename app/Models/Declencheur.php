<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Declencheur extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'dateHeure',
        'type',
        'interlocuteur',
        'numInter',
        'site_id',
        'systeme_concerné',
        'etat_syst',
        'client_id'
    ];
    public  function Site()
    {
        return $this->belongsTo(Site::class, 'site_id', 'id');
    }

    public function Client(){

        return $this->belongsTo(Client::class,'client_id');
    }
}
