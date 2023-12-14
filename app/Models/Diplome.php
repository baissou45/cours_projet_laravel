<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model {
    use HasFactory;

    protected $primaryKey = 'codeDiplome';
    public $timestamps = false;

    protected $fillable = [
        "codeDiplome",
        "nomDiplome",
        "niveauDiplome",
        "codeU"
    ];


    public function universite() {
        return $this->belongsTo(Universite::class, 'codeU', 'codeU');
    }

    public function cours() {
        return $this->hasMany(Cour::class);
    }

    public function etudiants() {
        return $this->hasMany(Cour::class);
    }
}
