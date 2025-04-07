<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $fillable = ['libelle','sit_geo','nomResp','contactResp','client_id'];
    public function Client(){
        return $this->belongsTo(Client::class,'client_id');
    }

}
