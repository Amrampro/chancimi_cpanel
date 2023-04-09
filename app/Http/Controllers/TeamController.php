<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Team::all();
        return view("backend.team.index", [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.team.add");
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
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'bio' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $reImage = time() . '.' . $image->getClientOriginalExtension();
            $dest = public_path('/frontend/assets/img/team');
            $image->move($dest, $reImage);
        } else {
            $reImage = 'na';
        }

        $team = new Team;
        $team->nom = $request->name;
        $team->email = $request->email;
        $team->role = $request->role;
        $team->photo = $reImage;
        $team->bio = $request->bio;
        $save = $team->save();
        if ($save)
            return redirect('admin/team/create')->with('success', 'Data has been added');
        else
            return redirect('admin/team/create')->with('error', 'Data has been added');
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
        $data = Team::find($id);
        return view('backend.team.update', ['data' => $data]);
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
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'bio' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $reImage = time() . '.' . $image->getClientOriginalExtension();
            $dest = public_path('/frontend/assets/img/team');
            $image->move($dest, $reImage);
        } else {
            $reImage = $request->photo;
        }

        $team = Team::find($id);
        $team->nom = $request->name;
        $team->email = $request->email;
        $team->role = $request->role;
        $team->photo = $reImage;
        $team->bio = $request->bio;
        $save = $team->save();
        if ($save)
            return redirect('admin/team/' . $id . '/edit')->with('success', 'Data has been added');
        else
            return redirect('admin/team/' . $id . '/edit')->with('error', 'Data has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::where('id',$id)->delete();
        return redirect('admin/team');
    }
}
