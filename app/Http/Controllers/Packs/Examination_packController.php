<?php

namespace App\Http\Controllers\Packs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pack_validity;
use App\Models\Examination_pack;
use App\Models\Examination;
use App\Models\User;

class Examination_packController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $vPacks = Pack_validity::all();
        $ePacks = Examination_pack::all();
        $exams = Examination::all();

        return view('users.contentm.packs', [
            'users' => $users,
            'vPacks' => $vPacks,
            'ePacks' => $ePacks,
            'exams' => $exams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exams = Examination::all();

        return view('users.contentm.add_pack', [
            'exams' => $exams
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'exam'=>'required',
            'type'=>'required',
            'price'=>'required',
            'carac' => 'required',
            'detail' => 'required'
        ]);

        $post=new Examination_pack;
        $post->type=$request->type;
        $post->price=$request->price;
        $post->exam_id=$request->exam;
        $post->features=$request->carac;
        $post->details=$request->detail;
        $post->save();

        return redirect('user/emp/cm/packs/create')->with('success', 'Data has been added');
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
        $ePack = Examination_pack::find($id);
        $exams = Examination::all();

        return view('users.contentm.update_pack', [
            'ePack' => $ePack,
            'exams' => $exams
        ]);
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
        $request->validate([
            'exam'=>'required',
            'type'=>'required',
            'price'=>'required',
            'carac' => 'required',
            'detail' => 'required'
        ]);

        $post=Examination_pack::find($id);
        $post->type=$request->type;
        $post->price=$request->price;
        $post->exam_id=$request->exam;
        $post->features=$request->carac;
        $post->details=$request->detail;
        $post->save();

        return redirect('user/emp/cm/packs/' . $id . '/edit')->with('success', 'Data has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Examination_pack::where('id',$id)->delete();
        return redirect('user/emp/cm/packs/');
    }
}
