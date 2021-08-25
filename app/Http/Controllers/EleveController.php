<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;

class EleveController extends Controller
{
    public function index() {
        $eleve = Eleve::all();
        return view('pages.eleves', compact('eleve'));
    }

    public function store(Request $request) {
        $table = new Eleve;

        $table->name = $request->name;
        $table->firstName = $request->firstName;
        $table->etat = $request->etat;
        $table->age = $request->age;
        $table->save();

        return redirect('/eleve');
    }

    public function destroy($id) {
        $eleve = Eleve::find($id);
        $eleve->delete();

        return redirect()->back();
    }

    public function show($id) {
        $eleve = Eleve::find($id);
        return view('crud.showeleve', compact('eleve'));
    }

    public function edit($id) {
        $eleve = Eleve::find($id);
        return view('crud.updateeleve', compact('eleve'));
    }

    public function update($id, Request $request) {
        $eleve = Eleve::find($id);

        $eleve->name = $request->name;
        $eleve->age = $request->age;
        $eleve->save();

        return redirect('/eleve');
    }
}
