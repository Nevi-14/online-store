<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\appointment_note;
class AppointmentController extends Controller
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
        
        $validator = $request->validate([
            'assigned_to' => '',
            'property_tracker_id' => '',
            'timezone' => '',
            'start_date' => '',
            'time' => '',
            'type' => '',
            'subject' => '',
            'notes' => ''          
             ]);
           

        /** Auth User */
        $user = Auth::user();
        $user_id = $user->id;
        
        $appointment = appointment::create([
            'created_by'=> $user_id,
            'updated_by'=> $user_id,
            'assigned_to'=>$request->assigned_to,
            'property_tracker_id' => $request->property_tracker_id,
            'timezone' => $request->timezone,
            'start_date' => $request->start_date,
            'time' => $request->time,
            'type' => $request->type,
            'subject' => $request->subject,
            'notes' => $request->notes
        ]);


        $notification = array(
            'message' => 'El elemento se guardo con exito.',
            'alert-type' => 'success'
        );


        return back()->with($notification);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, appointment $appointment, Validator $validator)
    {
        $validator = Validator::make($request->all(),[
            /** Tracker */
            'subject' => '',
            'assigned_to' => '',
            'type' => '',
            'timezone' => '',
            'start_date' => '',
            'time' => '',
            'notes' => '',
            'close_notes' => ''
        ]);  
        
        /** Auth User */
        $user = Auth::user();
        $user_id = $user->id;




      $type = $request->type;
      switch($type){

        case 'appointment':

            if($request->appointment_follow_up){
                        
                $appointment_note =   appointment_note ::create([
                    'appointment_id'=>$appointment->id,
                    'created_by'=> $user_id,
                    'subject'=> $request->subject,
                    'date'=>$request->date,
                    'time' => $request->time
                ]);
            }
            $appointment_update =   $appointment->update([  
                'subject' => $request->subject,
                'assigned_to' => $request->assigned_to,
                'type' => $request->type,
                'timezone' => $request->timezone,
                'start_date' => $request->start_date,
                'time' => $request->time,           
                'notes' => $request->notes,
                'close_notes' => $request->close_notes
            ]);
    
            $notification = array(
                'message' => ' Appointment updated successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        break;

        case 'follow-up':
            $appointment_update =   $appointment->update([  
                'subject' => $request->subject,
                'timezone' => $request->timezone,
                'start_date' => $request->start_date,
                'time' => $request->time,           
                'notes' => $request->notes,
                'close_notes' => $request->close_notes
            ]);
    
            $notification = array(
                'message' => ' Follow up updated successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);

    
            break;

        case 'reminder':
            $appointment_update =   $appointment->update([  
                'subject' => $request->subject,
                'timezone' => $request->timezone,
                'start_date' => $request->start_date,
                'time' => $request->time,           
                'notes' => $request->notes,
                'close_notes' => $request->close_notes
            ]);
    
            $notification = array(
                'message' => ' Reminder updated successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);

                break;

        default:

        $notification = array(
            'message' => 'Invalid option please contact your administrador!.',
            'alert-type' => 'error'
        );
        return back()->with($notification);
          
      }

     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment $appointment)
    {
        //
    }
}
