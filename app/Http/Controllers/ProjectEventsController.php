<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projects;
use App\Events;

class ProjectEventsController extends Controller
{



	public function EventsUnderProjects($id)
	{
		
		
       $Projects = Projects::find($id);

      $data_id = $Projects->ProjectID;

      $Events =  Events::where('ProjectsID', '=', $data_id)->get(); 

      $data = [


        'Projects' => $Projects,
        'events'   => $Events

      ];

      return view('events.EventsUnderProjects', $data);




	}



		public function ProjectEvents($id)
		{
			

			$projects = Projects::find($id);

			$ProjectsID = $projects->ProjectID;

			$events = Events::where('ProjectsID', '=', $ProjectsID)->get();

		$data = [
           
            'events' => $events,
            'project' => $projects
        ];


            return view('ProjectEvents', $data);


		}
    
}
