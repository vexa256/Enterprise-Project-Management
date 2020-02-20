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


class MiniReportsController extends Controller
{



		public function front_z($value='')
		{
			$Initiatives = Initiatives::all();
       
       




                 $projects = Projects::all();

                $data = [
           
                'projects' => $projects,
                'Initiatives' => $Initiatives



                 ];
     


        return view('front.index', $data);
		}


			public function MiniReports()
			{
				

				$data = [


					'Resolutions' => EventResolutions::all(),
					'Events' => Events::all(),
					'InitiativeEvents' => InitiativeEvents::all(),
					'InitiativeResolutions' => InitiativeResolutions::all(),
					'Initiatives' => Initiatives::all(),
					'JPC' => JPC::all(),
					'JPCResolutions' => JPCResolutions::all(),
					'PowerResolutions' => PowerResolution::all(),
					'PowerStructure' => PowerStructure::all(),
					'Projects' => Projects::all(),
					'cdmi45' => 'true'

				];


					return view('reports.MiniReports', $data);

			}


	
    
}
