<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventResolutions;
use App\Events;
use App\InitiativeEvents;
use App\InitiativeResolutions;
use App\Initiatives;
use App\JPC;
use App\JPCResolutions;
use App\PowerResolution;
use App\PowerStructure;
use App\Projects;

class StatsController extends Controller
{
   
		public function Stats($value='')
		{
			$Completedprojects = Projects::where('ProjectStatus', '=', 'Completed')->count();
			$Delayedprojects = Projects::where('ProjectStatus', '=', 'Delayed')->count();
			$Ongoingprojects = Projects::where('ProjectStatus', '=', 'Ongoing')->count();
			$Pendingprojects = Projects::where('ProjectStatus', '=', 'Pending')->count();
			$Terminatedprojects = Projects::where('ProjectStatus', '=', 'Terminated')->count();

			 $CompletedEvents = Events::where('Resolution_Status', '=', 'Completed')->count();
			 $DelayedEvents = Events::where('Resolution_Status', '=', 'Delayed')->count();
			 $TerminatedEvents = Events::where('Resolution_Status', '=', 'Terminated')->count();
			 $OngoingEvents = Events::where('Resolution_Status', '=', 'Ongoing')->count();
			 $PendingEvents = Events::where('Resolution_Status', '=', 'Pending')->count();


			 $Totalprojects = Projects::all()->count();
			 $Totalevents = Events::all()->count();
			 $Totalinitiatives = Initiatives::all()->count();


			 $data = [
			 'PowerResolutionC' => PowerResolution::where('ResolutionStatus', '=', 'Completed')->count(),
			 'PowerResolutionT' => PowerResolution::where('ResolutionStatus', '=', 'Terminated')->count(),
			 'PowerResolutionD' => PowerResolution::where('ResolutionStatus', '=', 'Delayed')->count(),
			 'PowerResolutionO' => PowerResolution::where('ResolutionStatus', '=', 'Ongoing')->count(),
			 'PowerResolutionP' => PowerResolution::where('ResolutionStatus', '=', 'Pending')->count(),

			 'StatusC' =>  JPCResolutions::where('Status', '=', 'Completed')->count(),
			 'StatusT' =>  JPCResolutions::where('Status', '=', 'Terminated')->count(),
			 'StatusD' =>  JPCResolutions::where('Status', '=', 'Delayed')->count(),
			 'StatusO' =>  JPCResolutions::where('Status', '=', 'Ongoing')->count(),
			 'StatusP' =>  JPCResolutions::where('Status', '=', 'Pending')->count(),

			 'EventResolutionsC' => EventResolutions::where('Status', '=', 'Completed')->count(),
			 'EventResolutionsT' => EventResolutions::where('Status', '=', 'Terminated')->count(),
			 'EventResolutionsD' => EventResolutions::where('Status', '=', 'Delayed')->count(),
			 'EventResolutionsO' => EventResolutions::where('Status', '=', 'Ongoing')->count(),
			 'EventResolutionsP' => EventResolutions::where('Status', '=', 'Pending')->count(),
			
            'Totalprojects' => $Totalprojects,
            'Totalevents' => $Totalevents,
            'Totalinitiatives' => $Totalinitiatives,
            'PowerStructure' => PowerStructure::all()->count(),
            'JPC' => JPC::all()->count()
            


        ];

			  return view('projects.stats', $data);
		}

}
