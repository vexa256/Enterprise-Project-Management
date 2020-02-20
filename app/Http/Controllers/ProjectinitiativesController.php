<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Initiatives;
use App\Projects;

class ProjectinitiativesController extends Controller
{
    



		public function ProjectInitiatives($id)
		{
			$Initiatives = Initiatives::find($id);

			$InitiativeID = $Initiatives->InitiativeID;

			$Projects = Projects::where('InitiativeID', '=', $InitiativeID)->get();


			$data = [
           
            'projects' => $Projects,
            'initiative' => $Initiatives
        ];


            return view('ProjectInitiatives', $data);
		}




}
