<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandesMobilite extends Model {
    use HasFactory;

    protected $primaryKey = 'codeDemandeM';
    protected $table = 'demandesMobilites';

    protected $fillable = [
        "codeDemandeM",
        "dateDepotDemandeM",
        "etatDemandeM",
        "numEtudiant",
        "codeProgramme"
    ];

    public function programme() {
        return $this->belongsTo(Programme::class);
    }

    public function etudiant() {
        return $this->belongsTo(User::class);
    }

    public function contrats() {
        return $this->hasMany(Contrat::class);
    }

    public function cours() {
        return $this->belongsToMany(Cour::class, "concerners");
    }
}
