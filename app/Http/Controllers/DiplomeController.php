<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use App\Models\Universite;
use Illuminate\Http\Request;

class DiplomeController extends Controller {

    function index() {
        $diplomes = Diplome::all();
        return view('diplomes.index', compact('diplomes'));
    }

    public function create() {
        $universites = Universite::all();
        $diplome = null;
        return view('diplomes.create', compact('universites', 'diplome'));
    }


    public function store(Request $request) {
        $this->validate($request, [
            "nomDiplome" => 'required',
            "niveauDiplome" => 'required',
            "codeU" => 'required',
        ]);

        Diplome::create($request->all());
        return redirect()->route('diplomes.index')->with('success', "Diplôme ajouter avec succès");
    }


    public function show(string $id) {
        //
    }

    public function edit(Diplome $diplome) {
        $universites = Universite::all();
        return view('diplomes.edit', compact('universites', 'diplome'));
    }

    public function update(Request $request, Diplome $diplome) {
        $this->validate($request, [
            "nomDiplome" => 'required',
            "niveauDiplome" => 'required',
            "codeU" => 'required',
        ]);

        $diplome->update($request->all());
        return redirect()->route('diplomes.index')->with('success', "Diplôme mise à jours avec succès");
    }

    public function destroy(Diplome $diplome) {
        $diplome->delete();
        return redirect()->route('diplomes.index')->with('error', "Diplôme supprimer avec succès");
    }
}
