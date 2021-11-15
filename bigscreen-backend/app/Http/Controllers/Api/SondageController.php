<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sondage;

class SondageController extends Controller
{
    // renvoie toutes les reponses
    public function index()
    {
        return Sondage::all();
    }

    // envoie les datas du sondages
    public function new(Request $request)
    {
        $sondage = New Sondage([
            'q1' => $request->input('q1'),
            'q2' => $request->input('q2'),
            'q3' => $request->input('q3'),
            'q4' => $request->input('q4'),
            'q5' => $request->input('q5'),
            'q6' => $request->input('q6'),
            'q7' => $request->input('q7'),
            'q8' => $request->input('q8'),
            'q9' => $request->input('q9'),
            'q10' => $request->input('q10'),
            'q11' => $request->input('q11'),
            'q12' => $request->input('q12'),
            'q13' => $request->input('q13'),
            'q14' => $request->input('q14'),
            'q15' => $request->input('q15'),
            'q16' => $request->input('q16'),
            'q17' => $request->input('q17'),
            'q18' => $request->input('q18'),
            'q19' => $request->input('q19'),
            'q20' => $request->input('q20'),   
        ]);
        $sondage->save();

        return response()->json([
            'done' => true,
            'sondage' => $sondage
        ]);
    }

    //renvoie un sondage
    public function show($id)
    {
        return Sondage::findOrFail($id);
    }
}
