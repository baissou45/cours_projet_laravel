<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model {
    use HasFactory;
    protected $primaryKey = 'numEtudiant';


    protected $fillable = [
        "numEtudiant",
        "nomEtudiant",
        "prenomEtudiant",
        "mailEtudiant",
        "annee",
        "codeDiplome"
    ];

    public function diplome() {
        return $this->belongsTo(Diplome::class, "codeDiplome");
    }

    public function demandeMobilites() {
        return $this->hasMany(DemandesMobilite::class, "numEtudiant");
    }

    public function demandeFinancemebts() {
        return $this->hasMany(DemandesMobilite::class);
    }

}
