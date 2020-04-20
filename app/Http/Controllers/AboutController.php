<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();

        return view('admin.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About();

        $about->section_titre = request('titre');
        $about->description = request('description');
        $about->img_path = request('image')->store('image');
        $about->sous_titre = request('titre2');
        $about->texte = request('texte');

        $about->save();

        return redirect()->route('about.index');


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
        $about = About::find($id);

        return view('admin.about.edit',compact('about'));
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
        $about = About::find($id);

        if (request('image') !== null) {
            Storage::delete($about->img_path);
            $about->img_path = request('image')->store('image');
        }
        $about->description = request('description');
        $about->section_titre = request('titre');
        $about->texte = request('texte');
        $about->sous_titre = request('titre2');

        $about->save();

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);

        Storage::delete($about);

        $about->delete();

        return redirect()->back();
    }
}
