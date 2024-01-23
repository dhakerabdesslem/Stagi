<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PFE_ETUDIANT;
use App\Models\PFE;
use App\Models\Etudiant;

class PfeEtudiantController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $pfeEtudiants = PFE_ETUDIANT::with(['pfe', 'etudiant'])->get();
        return view('pfe_etudiant.index', compact('pfeEtudiants'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $pfes = Pfe::all();
        $etudiants = Etudiant::all();

        return view('pfe_etudiant.create', compact('pfes', 'etudiants'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'PFEID' => 'required',
            'EtudiantID' => 'required',
            // Add validation for other fields if needed
        ]);

        PFE_ETUDIANT::create($request->all());

        return redirect()->route('pfe_etudiant.index')->with('success', 'Record created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $pfeEtudiant = PFE_ETUDIANT::find($id);
        return view('pfe_etudiant.show', compact('pfeEtudiant'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        // Find the pfe_etudiant record by its ID
        $pfeEtudiant = PFE_ETUDIANT::findOrFail($id);

        // Fetch all pfes and etudiants to populate the dropdowns
        $pfes = Pfe::all();
        $etudiants = Etudiant::all();

        // Return the edit view with the pfe_etudiant data and related data
        return view('pfe_etudiant.edit', compact('pfeEtudiant', 'pfes', 'etudiants'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'PFEID' => 'required',
            'EtudiantID' => 'required',
        ]);

        // Find the pfe_etudiant record by its ID
        $pfeEtudiant = PFE_ETUDIANT::findOrFail($id);

        // Update the pfe_etudiant record with the new data
        $pfeEtudiant->update([
            'PFEID' => $request->input('PFEID'),
            'EtudiantID' => $request->input('EtudiantID'),
            // Add other fields as needed
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('pfe_etudiant.index')->with('success', 'PFE Etudiant updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        PFE_ETUDIANT::find($id)->delete();

        return redirect()->route('pfe_etudiant.index')->with('success', 'Record deleted successfully.');
    }
}
