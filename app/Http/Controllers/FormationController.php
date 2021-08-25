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
}
