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
        
        return view('enseignant', $params);
    }

    public function create()
    {
        return view('enseignants.create');
    }

    public function store(Request $request)
    {
        Enseignant::create($request->all());
        return redirect()->route('enseignants.index');
    }

    public function show(Enseignant $enseignant)
    {
        return view('enseignants.show', compact('enseignant'));
    }

    public function edit(Enseignant $enseignant)
    {
        return view('enseignants.edit', compact('enseignant'));
    }

    public function update(Request $request, Enseignant $enseignant)
    {
        $enseignant->update($request->all());
        return redirect()->route('enseignants.index');
    }

    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();
        return redirect()->route('enseignants.index');
    }
}
