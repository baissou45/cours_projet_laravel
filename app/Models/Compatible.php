<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compatible extends Model {
    use HasFactory;

    public $timestamps = false; 

    protected $fillable = [
        "codeCours",
        "codeCours_1"
    ];
}
