<?php

// app/Models/PFE.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PFE extends Model
{
    use HasFactory;

    protected $primaryKey = 'PFEID';

    protected $fillable = ['Titre', 'Description', 'DateD', 'DateF', 'EncadrantID', 'SocieteID'];

    public function encadrant()
    {
        return $this->belongsTo(Enseignant::class, 'EncadrantID');
    }

    public function societe()
    {
        return $this->belongsTo(Societe::class, 'SocieteID');
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'pfe_etudiants', 'PFEID', 'EtudiantID');
    }
}

