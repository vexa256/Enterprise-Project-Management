<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventResolutions;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Events;

class ProjectEventResolutionController extends Controller
{
    

			public function ResolutionsUnderEvent($id)
			{
				



       $Events = Events::find($id);

      $data_id = $Events->EventID;

      $EventResolutions =  EventResolutions::where('EventID', '=', $data_id)->get(); 

      $data = [


        'event' => $Events,
        'Resolutions'   => $EventResolutions

      ];

      return view('ProjectEventResolutions.ResolutionsUnderEvent', $data);









			}




    public function CreateProjectEventResolutionForm($id)
    {
    	





    	//$EventResolutions = new EventResolutions;


		$Events = Events::find($id);


			$data = [


				'Resolution' => $Events

			];



			return view('ProjectEventResolutions.CreateProjectEventResolutionForm', $data);



    }
		

		public function CreateProjectEventResolution(Request $request)
		{
			



					$request->validate([
			        
			        'ProjectID' => 'required',
			        'EventID' => 'required',
			        'ResolutionTitle' => 'required',
			        'ResolutionDescription' => 'required',
			        'Status' => 'required',
			        'ImplementationStatus' => 'required',
			        'ProjectName' => 'required',
			        'EventName' => 'required'
			    ]);


				$EventResolutions = new EventResolutions;

				 $EventResolutions->ProjectID = $request->input('ProjectID');
				 $EventResolutions->InitiativeID = $request->input('InitiativeID');
				 $EventResolutions->ProjectName = $request->input('ProjectName');
				 $EventResolutions->EventName = $request->input('EventName');
				 $EventResolutions->EventID = $request->input('EventID');
				 $EventResolutions->ResolutionTitle = $request->input('ResolutionTitle');
				 $EventResolutions->ResolutionDescription = $request->input('ResolutionDescription');
				 $EventResolutions->Status = $request->input('Status');
				 $EventResolutions->ImplementationStatus = $request->input('ImplementationStatus');

				      $hasher =  $request->input('ResolutionTitle');
			          $hasher2 =  Carbon::now();
			          $hasher3 = $hasher2->toDateTimeString();
			          $finalHash= $hasher3.'nswc'.$hasher;
			          $EventResolutions->ResolutionID = Hash::make($finalHash);
			          $EventResolutions->save();


			           $data =  "Swal.fire('Successful', 'The Event Resolution has been created successfully, You can now manage Event Resolutions from this interface', 'success')";

        			 return redirect()->route('ManageProjectsEventsResolutions')->with('AttachProject_notify', $data);
					  


		}



		public function ManageProjectsEventsResolutions()
		{
			

			$EventResolutions  = EventResolutions::all();

			$data = [

				'Resolutions' => $EventResolutions



			];



			return view('ProjectEventResolutions.ManageResolutions', $data);






		}

		public function UpdateProjectEventResolutionStatus($id, Request $request)
		{
			


			$EventResolutions  = EventResolutions::find($id);

			$EventResolutions->Status = $request->input('Status');

			$EventResolutions->ImplementationStatus = $request->input('ImplementationStatus');
			$EventResolutions->save();


			  $data =  "Swal.fire('Successful', 'The Event Resolution has been updated successfully, You can now manage Event Resolutions from this interface', 'success')";

        			 return redirect()->route('ManageProjectsEventsResolutions')->with('AttachProject_notify', $data);



		}




			public function UpdateProjectEventResolutionForm($id)
			{
				

					$EventResolutions  = EventResolutions::find($id);


					$data = [

						'Resolution' => $EventResolutions



					];


					return view('ProjectEventResolutions.UpdateResolutionForm', $data);


			}






			public function UpdateProjectEventResolutionWhole($id,Request $request )
			{
				



				 $EventResolutions  = EventResolutions::find($id);
				 $EventResolutions->ResolutionTitle = $request->input('ResolutionTitle');
				 $EventResolutions->ResolutionDescription = $request->input('ResolutionDescription');
				 $EventResolutions->Status = $request->input('Status');
				 $EventResolutions->ImplementationStatus = $request->input('ImplementationStatus');
				 $EventResolutions->Save();


			  $data =  "Swal.fire('Successful', 'The Event Resolution has been updated successfully, You can now manage Event Resolutions from this interface', 'success')";

        			 return redirect()->route('ManageProjectsEventsResolutions')->with('AttachProject_notify', $data);




			}



			public function DeleteProjectEventResolution($id)
			{
				

					 $EventResolutions  = EventResolutions::find($id);
					 $EventResolutions->delete();


					   $data =  "Swal.fire('Successful', 'The Event Resolution has been deleted successfully, You can now manage Event Resolutions from this interface', 'success')";

        			 return redirect()->route('ManageProjectsEventsResolutions')->with('AttachProject_notify', $data);

			}




}
