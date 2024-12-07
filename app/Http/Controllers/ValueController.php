<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValueController extends Controller
{
    // Affichage du formulaire et des valeurs dans la session
    public function showForm()
    {
        // Récupérer les valeurs de la session ou un tableau vide s'il n'y en a pas
        $values = session()->get('values', []);

        return view('form', compact('values'));
    }

    // Traitement de la soumission du formulaire
    public function submit(Request $request)
    {
        // Validation de l'input
        $request->validate([
            'value' => 'required|string|max:255',
        ]);

        // Récupérer les valeurs existantes de la session
        $values = session()->get('values', []);

        // Ajouter la nouvelle valeur soumise au tableau
        $values[] = $request->input('value');

        // Sauvegarder les valeurs mises à jour dans la session
        session()->put('values', $values);

        // Rediriger vers le formulaire avec les valeurs mises à jour
        return redirect()->route('form');
    }
}

