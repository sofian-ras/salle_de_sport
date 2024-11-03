<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function index()
    {
        // Récupère tous les cours disponibles
        $cours = Cours::all();

        // Renvoie la vue home avec les cours
        return view('home', compact('courses'));
}
}