<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Examination_pack;
use App\Models\Examination;

class ExaminationController extends Controller
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

    public function chose_pack($id)
    {
        $packs = Examination_pack::where('exam_id',$id)->get();
        $exam = Examination::find($id);
        return view('parts/tcf/chose_pack',[
            "packs" => $packs,
            "exam" => $exam,
        ]);
    }

    public function pack_details($slug, $id, $exam_id)
    {
        $exam = Examination::find($exam_id);
        $pack = Examination_pack::find($id);
        return view('parts/tcf/chose_pack_details',[
            "pack" => $pack,
            "exam" => $exam,
        ]);
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
