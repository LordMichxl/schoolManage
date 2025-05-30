<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class etudiantController extends Controller
{
   public function index(){
     $etudiants = Etudiant::orderBy('nom','asc')-> paginate(10);

        return view('etudiants.index',[
            'etudiants' => $etudiants,
        ]);
    }
    public function create(){
        return view('etudiants.create');
    }
    public function store(Request $request){
         $request->validate([
            'prenom' =>'required|max:255',
            'nom' =>'required|max:255',
            'date_naissance' =>'required',
        ]);
        try {
            Etudiant::create([
                'prenom' => $request->input('prenom'),
                'nom' => $request->input('nom'),
                'date_naissance' => $request->input('date_naissance'),
            ]);
        return redirect()->route('etudiants.index')
                        ->with ('success','Etudiant ajouté avec succès');
        }catch(\throwable $th){
            dd($th);
        }
    }
    public function edit($id)
    {
        $etudiant = Etudiant::Find($id);
        return view('etudiants.edit', compact('etudiant'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'prenom' =>'required|max:255',
            'nom' =>'required|max:255',
            'date_naissance' =>'required',
        ]);

        try {
            $etudiant = Etudiant::Find($id);
            $etudiant->update([
                 'prenom' => $request->input('prenom'),
                'nom' => $request->input('nom'),
                'date_naissance' => $request->input('date_naissance'),
            ]);

            return redirect()->route('etudiants.index')
                            ->with('success', 'Etudiant modifié avec succès');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function destroy($id){
    try {
        $etudiant = Etudiant::Find($id);
        $etudiant->delete();

        return redirect()->route('etudiants.index')
                         ->with('success', 'Etudiant supprimé avec succès');
    } catch (\Throwable $th) {
        dd($th);
    }
}

}
