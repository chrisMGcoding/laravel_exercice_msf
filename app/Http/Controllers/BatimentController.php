<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batiment;

class BatimentController extends Controller
{
    public function index() {
        $batiment = Batiment::all();
        return view('pages.batiment', compact('batiment'));
    }

    public function store(Request $request) {
        $table = new Batiment;

        $table->name = $request->name;
        $table->description = $request->description;
        $table->save();

        return redirect('/batiment');
    }

    public function destroy($id) {
        $batiment = Batiment::find($id);
        $batiment->delete();

        return redirect()->back();
    }

    public function show($id) {
        $batiment = Batiment::find($id);
        return view('crud.showbatiment', compact('batiment'));
    }

    public function edit($id) {
        $batiment = Batiment::find($id);
        return view('crud.updatebatiment', compact('batiment'));
    }

    public function update($id, Request $request) {
        $batiment = Batiment::find($id);

        $batiment->name = $request->name;
        $batiment->description = $request->description;
        $batiment->save();

        return redirect('/batiment');
    }
}
