<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Testimonial2;
use App\Testimonial1;

class Testimonial2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial1::all();
        $testimonials2 = Testimonial2::all();
        return view('admin.testimonials.index', compact('testimonials', 'testimonials2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.testimonials2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial2 = new Testimonial2();
        $testimonial2->img_path = request('image')->store('image');
        $testimonial2->name = request('name');
        $testimonial2->job = request('job');
        $testimonial2->description = request('description');
        $testimonial2->save();
        return redirect()->route('testimonials2.index');
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
        $testimonial2 = Testimonial2::find($id);
        return view('admin.testimonials.testimonials2.edit', compact('testimonial2'));
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
        $testimonial2 = Testimonial2::find($id);
        if(request('image') !== null){
            Storage::delete($testimonial2->img_path);
            $testimonial2->img_path = request('image')->store('image');
        }
        $testimonial2->name = request('name');
        $testimonial2->job = request('job');
        $testimonial2->description = request('description');
        $testimonial2->save();
        return redirect()->route('testimonials2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial2 = Testimonial2::find($id);
        Storage::delete($testimonial2);
        $testimonial2->delete();
        return redirect()->back();
    }
}
