<?php

namespace App\Http\Controllers\TcfCanada;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tcf_canada_ce;
use App\Models\Tcf_canada_exam;
use App\Models\Tcf_canada;

class Tcf_canada_ceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('users.contentm.tcfcanada.tcfc_ce_add');
    }

    public function custom_create($id)
    {
        $tcfc = Tcf_canada::find($id);
        return view('users.contentm.tcfcanada.tcfc_ce_add', [
            'tcfc' => $tcfc
        ]);
    }

    public function custom_store(Request $request, $id)
    {
        $tcfc = Tcf_canada::find($id);
        for ($i = 1; $i <= 3; $i++) {
            // Question numner
            $nbr = 'q' . $i;
            $nbrq = $request->$nbr;
            // Question
            $ques = 'question' . $i;
            $quest = $request->$ques;
            // Answer
            $ans = 'answer' . $i;
            $answ = $request->$ans;

            $request->validate([
                $nbr => 'required',
                $ques => 'required',
                $ans => 'required',
            ]);

            $upload = Tcf_canada_ce::create([
                'tcf_canadas_id' => $id,
                'question_number' => $nbrq,
                'question' => $quest,
                'answer' => $answ
            ]);

            echo $nbrq . '->' . $quest . '->' . $answ . '<br>';
        }
        Continue
        return redirect()->route('user/emp/cm/' . $id . '/tcfcanada');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Cette fonction corrige la Comprehenssion écrite(CE) de TFC Canada
    public function submit_test(Request $request, $tcfc_id, $exam_id)
    {
        // die("the id is: " .$tcfc_id);
        $tcfc_ces = Tcf_canada_ce::where('tcf_canadas_id', $tcfc_id)->get();
        $number_questions = $tcfc_ces->count(); // Ici je compte le nombre de mes questions présentes dans cette section de la bd
        // die("The check is: " . $tcfc_ces . "La taille est: " . $number_questions);
        // die("Simple value is: " . $tcfc_ces[1]);
        $score = 0; // A la base il a zero points
        $coef = 1; // Ici c'est le coefficient qui est mit à la base à 1
        $score_epreuve = 0; // Ici nous recupérons le score de tout l'epreuve
        for ($i = 0; $i < $number_questions; $i++) {
            $eq = $i + 1; // Ici on augmente à 1 car dans le questionnaire, les questions commencent à 1 et non 0
            $val = 'q' . $eq; // Je recupère la valeur de mes questions sachant que sa commence de "q1" à ...
            $answer = $tcfc_ces[$i]->answer; // Ici c'est la reponse correct qui vient de la base de données
            // die("f");
            $q_actual = $request->$val;
            // On teste et on corrige la reponse en ajoutant les points a chaque fois
            if ($eq <= 4) {
                $coef = 3;
            } else if ($eq > 4 && $eq <= 10) {
                $coef = 9;
            } else if ($eq > 10 && $eq <= 19) {
                $coef = 15;
            } else if ($eq > 19 && $eq <= 29) {
                $coef = 21;
            } else if ($eq > 29 && $eq <= 35) {
                $coef = 26;
            } else if ($eq > 35 && $eq <= 39) {
                $coef = 33;
            }
            $score_epreuve = $score_epreuve + $coef;
            if ($q_actual == $answer) {
                $score = $score + $coef;
            }
            // Affichage du corrigé
            echo "La réponse à la question " . $val . " est: " . $q_actual . " VS correct: " . $answer . "<br>";
        }
        $update_mark = Tcf_canada_exam::where('id', $exam_id)->update([
            'pts_ce' => $score,
        ]);
        $exam_id;
        echo "Score total: " . $score . "/" . $score_epreuve;
    }
}
