<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model {
    use HasFactory;

    protected $primaryKey = 'codeContrat';

    protected $fillable = [
        "codeContrat",
        "dureeContrat",
        "etatContrat",
        "codeDemandeM"
    ];

    public function demandeMobilite() {
        return $this->belongsTo(DemandesMobilite::class);
    }

    public function demandeFinancements() {
        return $this->hasMany(DemandesFinancement::class);
    }
}
