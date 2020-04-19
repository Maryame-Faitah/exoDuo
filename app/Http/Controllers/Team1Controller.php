<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Team1;
use App\Team;

class Team1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams1 = Team1::all();
        $teams = Team::all();
        return view('admin.team.index',compact('teams','teams1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.team1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team1 = new Team1();

        $team1->section_titre = request('section_titre');
        $team1->description = request('description');

        $team1->save();

        return redirect()->route('team1.index');
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
        $team1 = Team1::find($id);
        $teams = Team::all();

        return view('admin.team.team1.edit',compact('team1', 'teams'));
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
        $team1 = Team1::find($id);

        $team1->section_titre = request('section_titre');
        $team1->description = request('description');

        $team1->save();

        return redirect()->route('team1.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team1 = Team1::find($id);

        Storage::delete($team1);

        $team1->delete();

        return redirect()->back();
    }
}
