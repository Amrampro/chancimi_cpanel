<?php

namespace App\Http\Controllers\TcfCanada;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Examination_pack;
use App\Models\Examination;
use App\Models\Pack_validity;
use App\Models\Tcf_canada;

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
        $exam_pack = Examination_pack::all();
        $exams = Examination::all();
        return view('users/tcf_canada/index', [
            'vpack' => $vpack,
            'ePacks' => $exam_pack,
            'exams' => $exams,
            'tcfcs' => $tcfcs
        ]);
    }

    public function tcf_session($session){
        $tcfc = Tcf_canada::where('id', $session)->get();
        return("Entered in file");
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
