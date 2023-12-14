<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model {
    use HasFactory;

    protected $primaryKey = 'codeProgramme';

    protected $fillable = [
        "codeProgramme",
        "nomProgramme",
        "dureeEchange",
        "codeDiplome",
        "codeDiplome_1"
    ];

    public function diplome_1() {
        return $this->belongsTo(Diplome::class, 'codeDiplome');
    }

    public function diplome_2() {
        return $this->belongsTo(Diplome::class, 'codeDiplome_1');
    }
}
