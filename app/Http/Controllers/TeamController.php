<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Team;
use App\Team1;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        $teams1 = Team1::all();
        return view('admin.team.index',compact('teams','teams1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team();

        $team->img_path = request('img_path')->store('img_path');
        $team->img_titre = request('img_titre');
        $team->img_description = request('img_description');
        $team->url1 = request('url1');
        $team->url2 = request('url2');
        $team->url3 = request('url3');
        $team->url4 = request('url4');

        $team->save();

        return redirect()->route('team.index');

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
        $team = Team::find($id);

        return view('admin.team.edit',compact('team'));
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
        $team = Team::find($id);

        if(request('img_path') != null){
            Storage::delete($team->img_path);
            $team->img_path = request('img_path')->store('img_path');
        }
        $team->img_description = request('img_description');
        $team->img_titre = request('img_titre');
        $team->url2 = request('url2');
        $team->url1 = request('url1');
        $team->url3 = request('url3');
        $team->url4 = request('url4');

        $team->save();

        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);

        Storage::delete($team);

        $team->delete();

        return redirect()->back();
    }
}
