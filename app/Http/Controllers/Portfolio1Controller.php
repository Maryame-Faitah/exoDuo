<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Portfolio1;
use App\Portfolio;

class Portfolio1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        $portfolios1 = Portfolio1::all();
        return view('admin.portfolio.index',compact('portfolios','portfolios1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.portfolio1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio1 = new Portfolio1();

        $portfolio1->section_titre = request('section_titre');
        $portfolio1->description = request('description');

        $portfolio1->save();

        return redirect()->route('portfolio.index');
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
        $portfolio1 = Portfolio1::find($id);

        return view('admin.portfolio.portfolio1.edit',compact('portfolio1'));
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
        $portfolio1 = Portfolio1::find($id);

        $portfolio1->section_titre = request('section_titre');
        $portfolio1->description = request('description');

        $portfolio1->save();

        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio1 = Portfolio1::find($id);

        Storage::delete($portfolio1);

        $portfolio1->delete();

        return redirect()->back();
    }
}
