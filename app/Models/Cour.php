<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model {
    use HasFactory;

    protected $primaryKey = 'codeCours';

    protected $fillable = [
        "codeCours",
        "LibelleCours",
        "nbECTS",
        "annee",
        "codeDiplome"
    ];

    public function diplome() {
        return $this->belongsTo(Diplome::class, 'codeDiplome');
    }

    public function compatibilites() {
        return $this->belongsToMany(Cour::class, "compatibilites");
    }

    /**
     * The demandeMobilites that belong to the Cour
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function demandeMobilites() {
        return $this->belongsToMany(DemandesMobilite::class, "concerners");
    }
}
