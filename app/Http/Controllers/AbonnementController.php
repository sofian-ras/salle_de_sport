<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function index()
    {
        $abonnements = Abonnement::all(); // Récupère tous les abonnements
        return view('index', compact('abonnements')); // Passe les abonnements à la vue
    }
}
