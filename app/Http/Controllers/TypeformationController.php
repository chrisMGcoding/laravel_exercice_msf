<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeformation;

class TypeformationController extends Controller
{
    public function index() {
        $typeformation = Typeformation::all();
        return view('pages.typeformations', compact('typeformation'));
    }

    public function store(Request $request) {
        $table = new Typeformation;

        $table->name = $request->name;
        $table->save();

        return redirect()->back();
    }

    public function destroy($id) {
        $typeformation = Typeformation::find($id);
        $typeformation->delete();

        return redirect()->back();
    }

    public function show($id) {
        $typeformation = Typeformation::find($id);
        return view('crud.showtypeformation', compact('typeformation'));
    }

    public function edit($id) {
        $typeformation = Typeformation::find($id);
        return view('crud.updatetypeformation', compact('typeformation'));
    }

    public function update($id, Request $request) {
        $typeformation = Typeformation::find($id);

        $typeformation->name = $request->name;
        $typeformation->save();

        return redirect('/typeformations');
    }
}
