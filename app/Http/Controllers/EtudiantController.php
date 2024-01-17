<?php
// app/Http/Controllers/EtudiantController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    public function etudiant()
    {
        $etudiant = Etudiant::find(1);
        return view('informations', [ 'etudiant' => $etudiant ]);
    }

    public function create()
    {
        return view('etudiants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'NumeroTelephone' => 'nullable|numeric',
            'Specialite' => 'nullable|string',
            'DateNaissance' => 'nullable|date',
            'DateDebut' => 'nullable|date',
            'DateFin' => 'nullable|date',
            'AdresseEmail' => 'nullable|email',
            'MotDePasse' => 'nullable|string',
        ]);

        Etudiant::create($request->all());
        return redirect()->route('etudiants.index');
    }

    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show', compact('etudiant'));
    }

    public function edit(Etudiant $etudiant)
    {
        return view('etudiants.edit', compact('etudiant'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'NumeroTelephone' => 'nullable|numeric',
            'Specialite' => 'nullable|string',
            'DateNaissance' => 'nullable|date',
            'AdresseEmail' => 'nullable|email',
            'MotDePasse' => 'nullable|string',
        ]);

        $etudiant->update($request->all());
        return redirect()->route('etudiants.index');
    }

    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiants.index');
    }
}
