<?php

namespace App\Http\Controllers\TcfCanada;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Examination_pack;
use App\Models\Examination;
use App\Models\Pack_validity;
use App\Models\Tcf_canada;
use App\Models\Tcf_canada_ce;
use App\Models\Tcf_canada_exam;
use App\Models\Tcf_canada_co;
use App\Models\Tcf_canada_ee;

class TcfCanadaController extends Controller
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

    public function user_index()
    {
        // tcfc for tcf canada
        $id = auth()->user()->id;
        $tcfcs = Tcf_canada::orderBy('id', 'desc')->get();
        $vpack = Pack_validity::where('user_id', $id)->orderBy('id', 'desc')->first();

        if ($vpack == null) {
            die("Vous n'avez aucun pack Valide !");
        }
        $exam_pack = Examination_pack::find($vpack->examination_pack_id);
        $examination = Examination::find($exam_pack->exam_id);
        // TCF CANADA DOIT AVOIR L'ID "1" DANS LA TABLE "examinations"

        // Je teste si l'ID du pack est == 1 (FORCEMENT l'ID 1 c'est TCF Canada)
        if ($exam_pack->exam_id != 1) {
            die("Vous n'avez aucun pack TCF Canada Valide !");
        }

        return view('users/tcf_canada/index', [
            'vpack' => $vpack,
            'tcfcs' => $tcfcs,
            'examination' => $examination,
            'exam_pack' => $exam_pack
        ]);
    }

    public function tcf_session($session)
    {
        // $tcfc = Tcf_canada::where('id', $session)->first();
        $tcfc = Tcf_canada::find($session);
        // dd($tcfc);
        return view('users/tcf_canada/single', [
            'tcfc' => $tcfc,
        ]);
    }

    public function write($session)
    {

        $matricule = 'MAT' . substr(uniqid(), -8);

        $id = auth()->user()->id;
        $tcfc = Tcf_canada::find($session);

        // Je teste si il est présent dans la table des examens
        $exam = Tcf_canada_exam::where([
            ['user_id', $id]
        ])->orderBy('id', 'desc')->first();
        // Je teste si il est présent dans la table des examens
        if ($exam == null) {
            // Il n'est pas présent alors j'engage un nouveau examen
            // die("Déclanchement d'un nouveau examen");
            $create = Tcf_canada_exam::create([
                'user_id' => $id,
                'tcf_canada_id' => $session,
                'pts_ce' => 0,
                'pts_co' => 0,
                'pts_ee' => 0,
                'pts_eo' => 0,
                'matricule' => $matricule,
                'state' => 0
            ]);
            // redirect to this route by
            self::write($session);
            // or
            // return redirect('user/tcfc/'.$session.'/write');
        } else {
            // Il est présent
            // Je teste si il a un examen en cours
            if ($exam->state == 0) {
                // Oui il a un examen en cours. Alors je le redirige vers l'examen approprié
                // die("Oui il a un examen en cours. Alors je le redirige vers l'examen approprié");
                // Je teste si il a déjà fais les 4 examens par ordre en testant si il a eu "0" comme note

                // 1) CE
                if ($exam->pts_ce <= 0) {
                    // Je redirige vers l'examen de CE (Comprehention Ecrite)
                    // die("Redirection vers l'xamen du CE");
                    $tcfc_id = $exam->tcf_canada_id;
                    $exam_id = $exam->id;
                    $getExams = Tcf_canada_ce::where(['tcf_canadas_id' => $exam->tcf_canada_id])->get();
                    return view("users.tcf_canada.exam_ce", [
                        'getExams' => $getExams,
                        'tcfc_id' => $tcfc_id,
                        'exam_id' => $exam_id
                    ]);
                    # code...
                } else {
                    // 2) CO
                    if ($exam->pts_co <= 0) {
                        // Je redirige vers l'examen de CO (Comprehention Orale)
                        // die("Redirection vers l'xamen du CO");
                        $tcfc_id = $exam->tcf_canada_id;
                        $exam_id = $exam->id;
                        $getExams = Tcf_canada_co::where(['tcf_canadas_id' => $exam->tcf_canada_id])->get();
                        return view("users.tcf_canada.exam_co", [
                            'getExams' => $getExams,
                            'tcfc_id' => $tcfc_id,
                            'exam_id' => $exam_id
                        ]);
                        # code...
                    } else {
                        // 3) EE
                        if ($exam->pts_ee <= 0) {
                            // Je redirige vers l'examen de EE (Expression Ecrite)
                            // die("Redirection vers l'examen du EE");
                            $tcfc_id = $exam->tcf_canada_id;
                            $exam_id = $exam->id;
                            $getExams = Tcf_canada_ee::where(['tcf_canadas_id' => $exam->tcf_canada_id])->get();
                            return view("users.tcf_canada.exam_ee", [
                                'getExams' => $getExams,
                                'tcfc_id' => $tcfc_id,
                                'exam_id' => $exam_id
                            ]);
                            # code...
                        } else if ($exam->pts_ee == 1) {
                            die("Redirection vers l'attente pour que les professeurs corrigeant le EE");
                            # code...
                        } else {
                            // 4) EO
                            if ($exam->pts_eo <= 0) {
                                die("Redirection vers l'examen du EO (Prenez un rdv pour aller au centre composer l'EO)");
                                # code...
                            }
                        }
                    }
                }
            } else {
                // Non il n'a pas d'examen en cours. Je teste si il a déjà 4 examens. Si oui Je bloque, sinon j'engage un nouveau examen
                die("Non il n'a pas d'examen en cours. Je teste si il a déjà 4 examens. Si oui Je bloque, sinon j'engage un nouveau examen");
            }
        }
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
}
