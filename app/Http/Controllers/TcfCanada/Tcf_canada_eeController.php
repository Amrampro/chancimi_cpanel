<?php

namespace App\Http\Controllers\TcfCanada;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tcf_canada_ee;
use App\Models\Tcf_canada_exam;
use App\Models\Tcf_canada_ee_answer;

class Tcf_canada_eeController extends Controller
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
        //
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
        $tcfc_ces = Tcf_canada_ee::where('tcf_canadas_id', $tcfc_id)->get();
        $number_questions = $tcfc_ces->count(); // Ici je compte le nombre de mes questions présentes dans cette section de la bd
        // die("The check is: " . $tcfc_ces . "La taille est: " . $number_questions);
        // die("Simple value is: " . $tcfc_ces[1]);
        $score = 0; // A la base il a zero points
        $coef = 1; // Ici c'est le coefficient qui est mit à la base à 1
        // $score_epreuve = 0; // Ici nous recupérons le score de tout l'epreuve
     
        for ($i = 0; $i < $number_questions; $i++) {
            $eq = $i + 1; // Ici on augmente à 1 car dans le questionnaire, les questions commencent à 1 et non 0
            $val = 'q' . $eq; // Je recupère la valeur de mes questions sachant que sa commence de "q1" à ...
            $tcfc_ee_i_id = "tcfc_ee_id" . $eq; // Je recupère l'id de mes questions sachant que sa commence de "tcfc_ee_id1" à ...
            // die("f");
            $q_actual = $request->$val;
            $tcfc_ee_id_final = $request->$tcfc_ee_i_id;

            // J'enregistre mes reponses dans la base de données
            $store_ans = Tcf_canada_ee_answer::create([
                'tcf_canada_ees_id' => $tcfc_ee_id_final,
                'tcf_canada_exams_id' => $exam_id,
                'answer' => $q_actual
            ]);

            if ($store_ans == true) {
                $score = "1";
            }

            // Affichage du corrigé
            // echo "Votre réponse à la question " . $val . " est: <br>" . $q_actual . "<br><br><br>";
        }

        $update_mark = Tcf_canada_exam::where('id', $exam_id)->update([
            'pts_ee' => $score,
        ]);

        // $exam_id;
        // echo "Score total: " . $score . "/" . $score_epreuve;
    }
}
