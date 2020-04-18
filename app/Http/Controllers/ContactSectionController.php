<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ContactUser;
use App\ContactAdmin;
use App\ContactSection;

class ContactSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactSections = ContactSection::all();
        $contactUsers = ContactUser::all();
        $contactAdmins = ContactAdmin::all();
        return view('admin.contacts.index', compact('contactSections', 'contactUsers', 'contactAdmins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.contactSection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactSection = new ContactSection();
        $contactSection->title = request('title');
        $contactSection->description = request('description');
        $contactSection->save();
        return redirect()->route('contactSection.index');
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
        $contactSection = ContactSection::find($id);
        return view('admin.contacts.contactSection.edit', compact('contactSection'));
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
        $contactSection = ContactSection::find($id);
        $contactSection->title = request('title');
        $contactSection->description = request('description');
        $contactSection->save();
        return redirect()->route('contactSection.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactSection = ContactSection::find($id);
        Storage::delete($contactSection);
        $contactSection->delete();
        return redirect()->back();
    }
}
