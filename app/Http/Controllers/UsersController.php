<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Examination_pack;
use App\Models\Examination;
use App\Models\Pack_validity;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('users/dashboard');
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
        // $cat = Users::all();
        $data = User::find($id);
        return view('users.account', [
            // 'category' => $cat,
            'data' => $data
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
            'name'=>'required',
            'email'=>'required',
            'organization'=>'required',
            'tel'=>'required',
            'ville'=>'required',
            'adresse'=>'required',
            'pays'=>'required',
            'langue'=>'required',
            'monnaie'=>'required',
        ]);

        // Post image
        if($request->hasFile('post_image')){
            $image=$request->file('post_image');
            $reFullImage = 'fi'.time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/userend/img/avatars');
            $image->move($dest, $reFullImage);
        } else {
            $reFullImage = $request->post_image;
        }

        $post=User::find($id);
        // $post->user_id=$request->id;
        $post->name=$request->name;
        $post->email=$request->email;
        $post->organisation=$request->organization;
        $post->tel=$request->tel;
        $post->ville=$request->ville;
        $post->pays=$request->pays;
        $post->adresse=$request->adresse;
        $post->photo=$reFullImage;
        $post->langue_id=$request->langue;
        $post->monnaie_id=$request->monnaie;
        $save = $post->save();

        if($save){
            return redirect('user/settings/'. $id . '/edit')->with('success', 'Votre compte à été mise à jour');
        } else {
            return redirect('user/settings/'. $id . '/edit')->with('error', "Une erreur s'est produite Remplissez Tous les champs");
        }

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

    function dashboard()
    {
        $id = auth()->user()->id;
        $vPacks = Pack_validity::where('user_id',$id)->get();
        $exam_pack = Examination_pack::all();
        $exams = Examination::all();
        return view('users.dashboard', [
            'vPacks' => $vPacks,
            'ePacks' => $exam_pack,
            'exams' => $exams,
        ]);
    }

    function maintenance()
    {
        return view('users/maintenance');
    }

    function use_points(){
        return view('users/use_points');
    }

    function my_points(){
        return view('users/points');
    }
    function users(){
        // $data = User::all();
        // Order by recent post
        $data = User::orderBy('id', 'desc')->get();
        return view('backend.users.index', [
            'data' => $data
        ]);
        // return view('backend/users/index');
    }
}
