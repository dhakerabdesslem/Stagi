<?php

// app/Http/Controllers/PFEController.php

namespace App\Http\Controllers;
use App\Models\Enseignant;
use App\Models\Societe;
use Illuminate\Http\Request;
use App\Models\PFE;

class PFEController extends Controller
{
    public function index()
    {
        $pfes = PFE::all();

        $params = [
            'pfes' => $pfes
        ];
        
        return view('pfes.index', $params);
    }



    public function create()
    {
        $enseignants = Enseignant::all();
        $societes = Societe::all();
    
        return view('pfes.create', compact('enseignants', 'societes'));
    }
    


    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'enseignant_id' => 'required|exists:enseignants,id',
            'societe_id' => 'required|exists:societes,id',
            // Add other validation rules as needed
        ]);

        // Create a new Pfe record
        $pfe = Pfe::create([
            'Titre' => $request->input('titre'),
            'Description' => $request->input('description'),
            'DateD' => $request->input('date_debut'),
            'DateF' => $request->input('date_fin'),
            'EnseignantID' => $request->input('enseignant_id'),
            'SocieteID' => $request->input('societe_id'),
            // Add other fields as needed
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('pfes.index')->with('success', 'Projet de Fin d\'Études ajouté avec succès');
    }



    public function show(PFE $pfe)
    {
        $etudiants = $pfe->etudiants;
        return view('pfes.show', compact('pfe', 'etudiants'));
    }


public function edit($id)
{
    $pfe = Pfe::findOrFail($id);
    $enseignants = Enseignant::all();
    $societes = Societe::all();

    return view('pfes.edit', compact('pfe', 'enseignants', 'societes'));
}


    

    public function update(Request $request, PFE $pfe)
    {
        $request->validate([
            'Titre' => 'required',
            'Description' => 'required',
            'DateD' => 'required|date',
            'DateF' => 'required|date',
            'EncadrantID' => 'required|exists:enseignants,id',
            'SocieteID' => 'required|exists:societes,id',
        ]);
    
        // Mettez à jour les champs du modèle PFE avec les données du formulaire
        $pfe->update([
            'Titre' => $request->input('Titre'),
            'Description' => $request->input('Description'),
            'DateD' => $request->input('DateD'),
            'DateF' => $request->input('DateF'),
            'EncadrantID' => $request->input('EncadrantID'),
            'SocieteID' => $request->input('SocieteID'),
        ]);
    
        // Si vous avez des relations avec enseignants et societes, vous pouvez les mettre à jour ainsi
        $pfe->encadrant()->associate(Enseignant::find($request->input('EncadrantID')));
        $pfe->societe()->associate(Societe::find($request->input('SocieteID')));
    
        $pfe->save();
    
        return redirect()->route('pfes.index');
    }
    

    public function destroy(PFE $pfe)
    {
        $pfe->delete();
        return redirect()->route('pfes.index');
    }
}

