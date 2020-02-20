<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventsController extends Controller
{
    


    public function ManageEvents()
    {
    	
    	$events = Events::all();

    	 $data = [
           
            'events' => $events
        ];

        return view('ManageEvents', $data);





    }


    public function UpdateEventForm($id)
    {
    	$events =  Events::find($id);

    	$data = [
           
            'events' => $events
        ];

        return view('UpdateEventForm', $data);

    }



    public function UpdateEvent($id, Request $request)
    {
    	

    		$request->validate([
			        
			        'EventName' => 'required',
			        'StakeHolders' => 'required',
			        'Description' => 'required',
			        'Resolutions' => 'required',
			        'Resolution_Status' => 'required',
			        
			        
			    ]);



    		$Events = Events::find($id);

			     $Events->EventName = $request->input('EventName');
			     $Events->StakeHolders = $request->input('StakeHolders');
			     $Events->Description = $request->input('Description');
			     $Events->Resolutions = $request->input('Resolutions');
			     $Events->Resolution_Status = $request->input('Resolution_Status');
			     $Events->save();

			     $data =  "Swal.fire('Successful', 'The Event has been updated successfully, You can now manage project events from this interface', 'success')";

        			 return redirect()->route('ManageEvents')->with('Event_update', $data);
			   

			    




    }



    public function DeleteEvent($id)
    {
    	$Events = Events::find($id);

    	$Events->delete();


    	$data =  "Swal.fire('Successful', 'The Event has been deleted successfully, You can now manage project events from this interface', 'success')";

        			 return redirect()->route('ManageEvents')->with('Event_delete', $data);
			   


    }


    public function UpdateEventStatus($id, Request $request)
    {
    	
    	$Events = Events::find($id);
    	 $Events->Resolution_Status = $request->input('Resolution_Status');
    	  $Events->save();


    	  $data =  "Swal.fire('Successful', 'The Event Resolution status  has been updated successfully, You can now manage project events from this interface', 'success')";

    	  return redirect()->route('ManageEvents')->with('Event_update_status', $data);
			   
    	   

    }




public function CompletedEvents()
        {
         
            $events = Events::where('Resolution_Status', '=', 'Completed')->get();


            $data = [
           
            'events' => $events
        ];


            return view('CompletedEvents', $data);



        }



        public function DelayedEvents()
        {
         
            $events = Events::where('Resolution_Status', '=', 'Delayed')->get();


            $data = [
           
            'events' => $events
        ];


            return view('DelayedEvents', $data);



        }




        public function PendingEvents()
        {
         
            $events = Events::where('Resolution_Status', '=', 'Pending')->get();


            $data = [
           
            'events' => $events
        ];


            return view('PendingEvents', $data);



        }





        public function TerminatedEvents()
        {
         
            $events = Events::where('Resolution_Status', '=', 'Terminated')->get();


            $data = [
           
            'events' => $events
        ];


            return view('TerminatedEvents', $data);



        }


        
        public function OngoingEvents()
        {
         
            $events = Events::where('Resolution_Status', '=', 'Ongoing')->get();


            $data = [
           
            'events' => $events
        ];


            return view('OngoingEvents', $data);



        }





}
