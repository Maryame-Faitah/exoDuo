<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ContactAdmin;
use App\ContactUser;
use App\ContactSection;

class ContactAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactAdmins = ContactAdmin::all();
        $contactUsers = ContactUser::all();
        $contactSections = ContactSection::all();
        return view('admin.contacts.index', compact('contactAdmins', 'contactUsers', 'contactSections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactAdmin = new ContactAdmin();
        $contactAdmin->iconAdress = request('iconAdress');
        $contactAdmin->adress = request('adress');
        $contactAdmin->iconEmail = request('iconEmail');
        $contactAdmin->email = request('email');
        $contactAdmin->iconPhone = request('iconPhone');
        $contactAdmin->phone = request('phone');
        $contactAdmin->save();
        return redirect()->route('contactAdmin.index');
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
        $contactAdmin = ContactAdmin::find($id);
        return view('admin.contacts.edit', compact('contactAdmin'));
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
        $contactAdmin = ContactAdmin::find($id);
        $contactAdmin->iconAdress = request('iconAdress');
        $contactAdmin->adress = request('adress');
        $contactAdmin->iconEmail = request('iconEmail');
        $contactAdmin->email = request('email');
        $contactAdmin->iconPhone = request('iconPhone');
        $contactAdmin->phone = request('phone');
        $contactAdmin->save();
        return redirect()->route('contactAdmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactAdmin = ContactAdmin::find($id);
        Storage::delete($contactAdmin);
        $contactAdmin->delete();
        return redirect()->back();
    }
}
