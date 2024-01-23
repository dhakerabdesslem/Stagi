<?php

namespace App\Http\Controllers;
use App\Models\Societe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocieteController extends Controller
{
    public function index()
    {
        $societes = Societe::all();
        return view('societes.index', compact('societes'));
    }

    public function create()
    {
        return view('societes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Lib' => 'required',
            'Adresse' => 'required',
            'Tel' => 'required',
        ]);

        Societe::create($request->all());
        return redirect()->route('societes.index');
    }

    public function show(Societe $societe)
    {
        return view('societes.show', compact('societe'));
    }

    public function edit(Societe $societe)
    {
        return view('societes.edit', compact('societe'));
    }

    public function update(Request $request, Societe $societe)
    {
        $request->validate([
            'Lib' => 'required',
            'Adresse' => 'required',
            'Tel' => 'required',
        ]);

        $societe->update($request->all());
        return redirect()->route('societes.index');
    }

    public function destroy(Societe $societe)
    {
        $societe->delete();
        return redirect()->route('societes.index');
    }
}
