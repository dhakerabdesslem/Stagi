<?php
// app/Http/Controllers/EnseignantController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;

class EnseignantController extends Controller
{
    public function index()
    {
        $enseignants = Enseignant::all();

        $params = [
            'enseignants' => $enseignants
        ];
        
        return view('enseignant.index', $params);
    }

    public function create()
    {
        return view('enseignant.create');
    }

    public function store(Request $request)
    {
        // Validation des champs
        $validatedData = $request->validate([
            'Titre' => 'required',
            'Description' => 'required',
            'DateD' => 'required|date',
            'DateF' => 'required|date|after_or_equal:DateD',
            'EnseignantID' => 'required|exists:enseignants,id',
            'SocieteID' => 'required|exists:societes,id',
        ]);
    
        // Création d'un nouvel objet Pfe avec les données validées du formulaire
        $pfe = new Pfe($validatedData);
    
        // Enregistrement de l'objet Pfe dans la base de données
        $pfe->save();
    
        // Redirection vers une page de confirmation ou autre
        return redirect()->route('pfes.index')->with('success', 'Le PFE a été créé avec succès.');
    }
    


    public function show($id)
    {
        $enseignant = Enseignant::find($id);
    
        if (!$enseignant) {
            // Gérer le cas où l'enseignant n'est pas trouvé
            return view('enseignant.show')->with('enseignant', false);
        }
    
        return view('enseignant.show', compact('enseignant'));
    }

    public function edit(Enseignant $enseignant)
    {
        return view('enseignant.edit', compact('enseignant'));
    }
    
    public function update(Request $request, Enseignant $enseignant)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            // Ajoutez d'autres règles de validation en fonction de vos besoins
        ]);
    
        $enseignant->update([
            'Nom' => $request->input('Nom'),
            'Prenom' => $request->input('Prenom'),
            // Ajoutez d'autres champs en fonction de votre modèle Enseignant
        ]);
    
        return redirect()->route('enseignants')->with('success', 'Enseignant mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $enseignant = Enseignant::find($id);
    
        if (!$enseignant) {
            // Gérer le cas où l'enseignant n'est pas trouvé
            return redirect()->route('enseignants')->with('error', 'Enseignant non trouvé.');
        }
    
        $enseignant->delete();
    
        return redirect()->route('enseignants')->with('success', 'Enseignant supprimé avec succès.');
    }
}
