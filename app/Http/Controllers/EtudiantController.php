<?php
// app/Http/Controllers/EtudiantController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Hash;

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
        // Validate the form data
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'NumeroTelephone' => 'required',
            'Specialite' => 'required',
            'DateNaissance' => 'required|date',
            'AdresseEmail' => 'required|email',
            'MotDePasse' => 'required|min:8', // Add password validation rules as needed
            // Add other validation rules as needed
        ]);

        // Create a new etudiant record
        $etudiant = Etudiant::create([
            'Nom' => $request->input('Nom'),
            'Prenom' => $request->input('Prenom'),
            'NumeroTelephone' => $request->input('NumeroTelephone'),
            'Specialite' => $request->input('Specialite'),
            'DateNaissance' => $request->input('DateNaissance'),
            'AdresseEmail' => $request->input('AdresseEmail'),
            'MotDePasse' => Hash::make($request->input('MotDePasse')), // Hash the password
            // Add other fields as needed
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('etudiant.index')->with('success', 'Etudiant created successfully');
    }

    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show', compact('etudiant'));
    }

    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiants.edit', compact('etudiant'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'NumeroTelephone' => 'required',
            'Specialite' => 'required',
            'DateNaissance' => 'required|date',
            'AdresseEmail' => 'required|email',
            // Add other validation rules as needed
        ]);

        // Find the etudiant record by its ID
        $etudiant = Etudiant::findOrFail($id);

        // Update the etudiant record with the new data
        $etudiant->update([
            'Nom' => $request->input('Nom'),
            'Prenom' => $request->input('Prenom'),
            'NumeroTelephone' => $request->input('NumeroTelephone'),
            'Specialite' => $request->input('Specialite'),
            'DateNaissance' => $request->input('DateNaissance'),
            'AdresseEmail' => $request->input('AdresseEmail'),
            // Add other fields as needed
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('etudiant.index')->with('success', 'Etudiant updated successfully');
    }


    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiants.index');
    }
}
