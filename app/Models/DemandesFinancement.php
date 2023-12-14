<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandesFinancement extends Model {
    use HasFactory;

    protected $primaryKey = 'codeDemandeF';

    protected $fillable = [
        "codeDemandeF",
        "dateDepotDemandeF",
        "etatDemandeF",
        "montantDemandeF",
        "codeContrat",
        "numEtudiant"
    ];

    public function contrat() {
        return $this->belongsTo(Contrat::class);
    }

    public function etudiant() {
        return $this->belongsTo(Contrat::class);
    }
}
