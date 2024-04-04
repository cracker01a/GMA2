<?php

namespace App\Http\Controllers;
use App\Models\WorkYear;  
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;



class WorkYearController extends Controller
{   
    public function status(WorkYear $workYear)
{
    // Désactiver toutes les années de travail actives dans la base de données
    DB::update('update work_years set active = 0 where active = 1');

    // Activer l'année de travail spécifique
    DB::update("update work_years set active = 1 where id = {$workYear->id}");

    // Rediriger vers la page '/Année-de-gestion'
    return redirect('/Année-de-gestion');
}

    
    public function WorkYear()
    {
        $workYearList = WorkYear::paginate(15);
        return view('dashboard.Anneedegestion', compact('workYearList'));
    }

    public function WorkYea()
    {
        return view('dashboard.ajoutanné');
    }

    
    public function submitForm(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'annee' => 'required|unique:work_years,work_year', // Champ obligatoire, unique dans la table work_years sur la colonne work_year
        ], [
            'annee.required' => 'Le champ année est obligatoire.', // Message d'erreur personnalisé pour le champ obligatoire
            'annee.unique' => 'Cette année existe déjà.', // Message d'erreur personnalisé pour le champ unique
        ]);
    
        $currentYear = Carbon::now()->format('Y');
    
        $WorkYear = new WorkYear();
        $WorkYear->work_year = $validatedData['annee']; // Assurez-vous que c'est 'work_year' et non 'annee'
        $WorkYear->current_year = $currentYear;
        $WorkYear->save();
    
        // Rediriger avec un message de succès
        return redirect('/Année-de-gestion')->with('success', 'Soumission réussie !');
    }
    
}

