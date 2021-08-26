<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function index() {
        $formation = Formation::all();
        return view('pages.formations', compact('formation'));
    }

    public function store(Request $request) {
        $table = new Formation;

        $table->name = $request->name;
        $table->description = $request->description;
        $table->save();

        return redirect()->back();
    }

    public function destroy($id) {
        $formation = Formation::find($id);
        $formation->delete();

        return redirect()->back();
    }

    public function show($id) {
        $formation = Formation::find($id);
        return view('crud.showformation', compact('formation'));
    }

    public function edit($id) {
        $formation = Formation::find($id);
        return view('crud.updateformation', compact('formation'));
    }

    public function update($id, Request $request) {
        $formation = Formation::find($id);

        $formation->name = $request->name;
        $formation->description = $request->description;
        $formation->save();

        return redirect('/formations');
    }
}
