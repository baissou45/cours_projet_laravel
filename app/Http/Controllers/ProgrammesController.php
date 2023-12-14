<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use App\Models\Programme;
use Illuminate\Http\Request;

class ProgrammesController extends Controller {

    public function index() {
        $programmes = Programme::all();
        return view('programmes.index', compact('programmes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $diplomes = Diplome::all();
        $programme = null;
        return view('programmes.create', compact('diplomes', 'programme'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $this->validate($request, [
            "nomProgramme" => 'required',
            "dureeEchange" => 'required',
            "codeDiplome" => 'required',
            "codeDiplome_1" => 'required'
        ]);

        Programme::create($request->all());
        return redirect()->route('programmes.index')->with('success', "Programme ajouter avec succès");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(Programme $programme) {
        $diplomes = Diplome::all();
        return view('programmes.edit', compact('diplomes', 'programme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Programme $programme) {
        $this->validate($request, [
            "nomProgramme" => 'required',
            "dureeEchange" => 'required',
            "codeDiplome" => 'required',
            "codeDiplome_1" => 'required'
        ]);

        $programme->update($request->all());
        return redirect()->route('programmes.index')->with('success', "Programme mis a jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programme $programme) {
        $programme->delete();
        return redirect()->route('diplomes.index')->with('error', "Programme supprimer avec succès");
    }
}
