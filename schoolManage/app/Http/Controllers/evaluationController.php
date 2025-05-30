<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class evaluationController extends Controller
{
    public function index(){
     $evaluations = Evaluation::orderBy('titre','asc')-> paginate(10);

        return view('evaluations.index',[
            'evaluations' => $evaluations,
        ]);
    }
    public function create(){
        return view('evaluations.create');
    }
    public function store(Request $request){
         $request->validate([
            'titre' =>'required|max:255',
            'date' =>'required',
            'type'=> 'required',

        ]);
        try {
            Evaluation::create([
                'titre' => $request->input('titre'),
                'date' => $request->input('date'),
                'type' => $request->input('type'),
                
            ]);
        return redirect()->route('evaluations.index')
                        ->with ('success','Evaluation ajoutée avec succès');
        }catch(\throwable $th){
            dd($th);
        }
    }
    public function edit($id)
    {
        $evaluation = Evaluation::Find($id);
        return view('evaluations.edit', compact('evaluation'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'titre' =>'required|max:255',
            'date' =>'required',
            'type'=> 'required',

        ]);

        try {
            $evaluation = Evaluation::Find($id);
            $evaluation->update([
                'titre' => $request->input('titre'),
                'date' => $request->input('date'),
                'type' => $request->input('type'),

            ]);

            return redirect()->route('evaluations.index')
                            ->with('success', 'Evaluation modifiée avec succès');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function destroy($id){
    try {
        $evaluation = Evaluation::Find($id);
        $evaluation->delete();

        return redirect()->route('evaluations.index')
                         ->with('success', 'Evaluation supprimée avec succès');
    } catch (\Throwable $th) {
        dd($th);
    }
}
}
