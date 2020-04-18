<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ContactUser;
use App\ContactAdmin;
use App\Subscribe;
use App\Service1;
use App\Service2;
use App\Testimonial1;
use App\Testimonial2;
use App\ContactSection;

class ContactUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactUsers = ContactUser::all();
        $contactAdmins = ContactAdmin::all();
        $subscribes = Subscribe::all();
        $services = Service1::all();
        $services2 = Service2::all();
        $testimonials = Testimonial1::all();
        $testimonials2 = Testimonial2::all();
        $contactSections = ContactSection::all();

        return view('index', compact('subscribes', 'services', 'services2', 'testimonials', 'testimonials2','contactUsers', 'contactAdmins', 'contactSections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactUser = new ContactUser();
        $contactUser->name = request('name');
        $contactUser->email = request('email');
        $contactUser->subject = request('subject');
        $contactUser->message = request('message');
        $contactUser->save();
        return redirect()->route('contactUser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactUser = ContactUser::findOrFail($id);
        $contactUsers = ContactUser::all();
        return view('admin.contacts.contactUsers.show', compact('contactUser', 'contactUsers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactUser = ContactUser::find($id);
        Storage::delete($contactUser);
        $contactUser->delete();
        return redirect()->route('contactAdmin.index');
    }
}
