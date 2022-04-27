<?php

namespace App\Http\Controllers;

use App\Models\appointment_note;
use Illuminate\Http\Request;

class AppointmentNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\appointment_note  $appointment_note
     * @return \Illuminate\Http\Response
     */
    public function show(appointment_note $appointment_note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\appointment_note  $appointment_note
     * @return \Illuminate\Http\Response
     */
    public function edit(appointment_note $appointment_note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\appointment_note  $appointment_note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, appointment_note $appointment_note)
    {
         
        $validator = $request->validate([
            /** Tracker */

            'subject' => 'required',
            'date' => 'required',
            'time' => 'required',
            'notes' => 'required'

        ]);

//dd($request->all());
        $appointment_note->update([
                
            'subject' => $request->subject,
            'date' => $request->date,
            'time' => $request->time,
            'notes' => $request->notes
        ]);
//dd(  $appointment_note);
$notification = array(
    'message' => 'Follow up updated successfully!',
    'alert-type' => 'success'
);
return back()->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\appointment_note  $appointment_note
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment_note $appointment_note)
    {
        //
    }
}
