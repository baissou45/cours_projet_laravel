<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universite extends Model {
    use HasFactory;

    protected $primaryKey = 'codeU';

    protected $fillable = [
        "codeU",
        "nomU",
        "villeU",
        "paysU",
        "paysU"
    ];

    public function diplomes() {
        return $this->hasMany(Diplome::class);
    }
}
