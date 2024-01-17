<?php
// app/Models/Etudiant.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nom', 'Prenom', 'NumeroTelephone', 'Specialite',
        'DateNaissance', 'AdresseEmail', 'MotDePasse'
    ];
    public function pfes()
    {
        return $this->belongsToMany(PFE::class, 'pfe_etudiants', 'EtudiantID', 'PFEID');
    }
}

