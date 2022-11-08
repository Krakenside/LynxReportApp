<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeMaintenance extends Model
{
    use HasFactory;
    protected $fillable = ["libelle_maint"];

    public function Maintenance()
    {
        return $this->HasMaWny(TypeMaintenance::class);
    }
}
