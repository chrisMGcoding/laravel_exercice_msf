<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeformation;

class TypeformationController extends Controller
{
    public function index() {
        $typeformation = Typeformation::all();
        return view('pages.typeformation', compact('typeformation'));
    }
}
