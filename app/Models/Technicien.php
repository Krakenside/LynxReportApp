<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Technicien extends Model
{
    use HasFactory;
    public function Rapports(){
        return $this->HasMany(Rapport::class);
    }
}
