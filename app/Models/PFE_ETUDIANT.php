<?php
// app/Models/PFE_ETUDIANT.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PFE_ETUDIANT extends Model
{
    protected $table = 'pfe_etudiants';

    use HasFactory;

    protected $fillable = ['PFEID', 'EtudiantID'];

    public $timestamps = true;


public function pfe()
{
    return $this->belongsTo(Pfe::class, 'PFEID');
}

public function etudiant()
{
    return $this->belongsTo(Etudiant::class, 'EtudiantID');
}

}
