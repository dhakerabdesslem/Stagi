<?php

// app/Http/Controllers/PFEController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PFE;

class PFEController extends Controller
{
    public function index()
    {
        $pfes = PFE::all();
        return view('pfes.index', compact('pfes'));
    }

    public function create()
    {
        return view('pfes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Titre' => 'required',
            'Description' => 'required',
            'DateD' => 'required|date',
            'DateF' => 'required|date',
            'EncadrantID' => 'required|exists:enseignants,id',
            'SocieteID' => 'required|exists:societes,id',
        ]);

        PFE::create($request->all());
        return redirect()->route('pfes.index');
    }

    public function show(PFE $pfe)
    {
        $etudiants = $pfe->etudiants;
        return view('pfes.show', compact('pfe', 'etudiants'));
    }

    public function edit(PFE $pfe)
    {
        return view('pfes.edit', compact('pfe'));
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

        $pfe->update($request->all());
        return redirect()->route('pfes.index');
    }

    public function destroy(PFE $pfe)
    {
        $pfe->delete();
        return redirect()->route('pfes.index');
    }
}

